@extends('app')

@section('content')



<form method="post" action="{{ route('user.pay') }}" class="max-w-[700px] my-7 md:mt-[20vh] mx-auto md:p-3 rounded md:border">
    
    <h1 class="text-center text-xl my-3 text-green-600 font-bold">NEW PAYMENT</h1>
    
    @if($errors->any())
    <div class="bg-red-600 text-white p-3 rounded">
        <ul class="list-inside list-disc">
                @foreach($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach 
        </ul>
    </div>
    @endif

    @csrf
    <input type="hidden" name="user_id" value="{{ Session::get('user')->id }}">
    <div>
        <label for="year" class="w-full block md:font-semibold md:text-lg">Year</label>
        <select name="year" required class="mt-1 w-full py-2 px-3 rounded border">
            <option>2024</option>
            <option>2025</option>
        </select>
    </div>
    <div>
        <label for="month" class="w-full block md:font-semibold md:text-lg">Month</label>
        <select name="month" required class="mt-1 w-full py-2 px-3 rounded border">
            <option value="">Choose month</option>
            <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>December</option>
        </select>
    </div>
    <div>
        <label for="amount" class="w-full block md:font-semibold md:text-lg">Amount Paid</label>
        <input type="number" min="100" name="amount" id="amount" placeholder="e.g. 4500" class="mt-1 w-full py-2 px-3 rounded border">
    </div>
    <div>
        <label for="trans_code" class="w-full block md:font-semibold md:text-lg">M-Pesa Code</label>
        <input type="text" name="trans_code" id="trans_code" placeholder="e.g. SXMGAGAG" class="mt-1 w-full py-2 px-3 rounded border">
    </div>

    <div>
        <button type="submit" class="w-full py-2 bg-green-600 text-white rounded mt-3 font-semibold hover:opacity-70 hover:bg-green-800">Pay Now <i class="fas fa-arrow-right"></i></button>
    </div>

    <a href="{{ URL::to('/dashboard') }}" class="text-blue-500 text-center w-full hover:underline">Home</a>
</form>

@endsection