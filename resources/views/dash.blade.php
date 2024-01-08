@extends('app')

@section('content')

<h1 class="text-green-600 md:text-2xl font-bold">Dashboard. </h1>

<div>
   <div class="mt-3 grid md:grid-cols-2 gap-2">

    <div class="p-3 border rounded shadow-md">

        <div class="grid grid-cols-2">
            
            <div class="*:py-1">
                <div>Full Name:</div>
                <div>Phone:</div>
                <div>Gender:</div>
                <div>Room:</div> 
            </div>

            <div class="*:py-1">
                <div class="font-semibold">{{ Session::get('user')->name }}</div>
                <div class="font-semibold">{{ Session::get('user')->phone }}</div>
                <div class="font-semibold">{{ Session::get('user')->gender }}</div>
                <div class="font-semibold">{{ Session::get('user')->room }}</div> 
            </div>

        </div>
    
        <a href="#" class="rounded hover:opacity-80 block mt-2 w-full items-center py-2 text-center text-white bg-green-600">
            Full Details <i class="fas fa-arrow-right"></i>
        </a>

        <a href="{{ URL::to('/pay') }}" class="rounded hover:opacity-80 block mt-2 w-full items-center py-2 text-center text-white bg-green-600">
            Make Payment <i class="fas fa-arrow-right"></i>
        </a>

        <a href="{{ route('user.logout') }}" class="rounded hover:opacity-80 block mt-2 w-full items-center py-2 text-center text-white bg-red-600">
            Logout <i class="fas fa-arrow-right-from-bracket"></i>
        </a>

        
    </div>

    </div> 
</div>



<h1 class="text-green-600 md:text-2xl font-bold mt-6">Recent Payments</h1>

@if(count($payments) > 0)

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Code
                </th>
                <th scope="col" class="px-6 py-3">
                    Amount
                </th>
                <th scope="col" class="px-6 py-3">
                    Time
                </th>
                <th scope="col" class="px-6 py-3">
                    Approved
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach($payments as $payment)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $payment->trans_code }}
                </th>
                <td class="px-6 py-4">
                    {{ $payment->amount }}
                </td>
                <td class="px-6 py-4">
                    {{ $payment->created_at }}
                </td>
                <td class="px-6 py-4">
                    {{ $payment->verified }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@else

No payments yet

@endif

@endsection