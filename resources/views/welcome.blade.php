@extends('app')

@section('content')



<form method="post" action="{{ route('user.login') }}" class="max-w-[700px] my-7 md:mt-[20vh] mx-auto md:p-3 rounded md:border">
    
    <h1 class="text-center text-xl my-3 text-green-600 font-bold">LOGIN</h1>
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
    <div>
        <label for="idno" class="w-full block md:font-semibold md:text-lg">ID Number</label>
        <input type="number" min="1000000" name="idno" id="idno" placeholder="e.g. 3432XXX" class="mt-1 w-full py-2 px-3 rounded border">
    </div>
    <div>
        <label for="password" class="w-full block md:font-semibold md:text-lg">Password</label>
        <input type="password" name="password" id="password" placeholder="***********" class="mt-1 w-full py-2 px-3 rounded border">
    </div>

    <div>
        <button type="submit" class="w-full py-2 bg-green-600 text-white rounded mt-3 font-semibold hover:opacity-70 hover:bg-green-800">Login</button>
    </div>

    <div class="mt-3">
        <p>Don't have account yet? <a href="{{ URL::to('/create') }}" class="text-blue-500 hover:underline">Create easy</a></p>
        <p class="mt-1">Forgot password? <a href="#" class="text-blue-500 hover:underline">Reset now</a></p>
    </div>
</form>

@endsection