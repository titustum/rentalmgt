<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\OtherDetail;
use App\Models\Payment;

class UserController extends Controller
{
    public function create(Request $request) {
        $validated = $request->validate([ 
            'name'=>'required:min:4', 
            'phone'=>'required|numeric',
            'idno'=>'required|numeric',
            'gender'=>'required',
            'room'=>'required',
            'password'=>'required|min:6'
        ]);
        $user = User::create($validated);
        $request->session()->put('user', $user);
        return redirect('/create2');
    }

    public function otherDetails(Request $request) {
 
        $validated = $request->validate([
            'user_id' => 'required',
            'county'=>'required', 
            'constituency'=>'required',
            'ward'=>'required',
            'village'=>'required',
            'kin_name'=>'required|min:4',
            'kin_phone'=>'required|numeric'
        ]);
        OtherDetail::create($validated);
        return redirect('/pay');
    }

    public function createPay(Request $request) {
 
        $validated = $request->validate([
            'user_id' => 'required',
            'year'=>'required', 
            'month'=>'required',
            'amount'=>'required',
            'trans_code'=>'required|min:8' 
        ]);
        Payment::create($validated);
        return redirect('/dashboard');
    }

    public function login(Request $request) {
        $validated = $request->validate([  
            'idno'=>'required|numeric',
            'password'=>'required|min:6'
        ]);
        $user = User::where($validated)->first();
        if(!$user) return back()->with('error', 'ID No and password does not match!');
        $request->session()->put('user', $user);
        return redirect('/dashboard');
    }

    public function logout(Request $request) {
        $request->session()->forget('user');
        return redirect('/');
    }

    public function dashboard(Request $request) {

        $payments = User::where('users.id', $request->session()->get('user')->id)->join('payments', 'users.id', '=',  'payments.user_id')->get();
        // print_r($user);
        return view('dash', ['payments'=>$payments]);
    }
}
