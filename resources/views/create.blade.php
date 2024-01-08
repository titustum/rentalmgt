@extends('app')

@section('content')



<form method="post" action="{{ route('user.create') }}" class="max-w-[700px] my-7 mx-auto md:p-3 rounded md:border">
    
    <h1 class="text-center text-xl my-3 text-green-600 font-bold">CREATE ACCOUNT</h1>

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
        <label for="name" class="w-full block md:font-semibold md:text-lg">Full Name</label>
        <input type="text" name="name" id="name" required placeholder="e.g. John Doe" class="mt-1 w-full py-2 px-3 rounded border">
    </div>
    <div>
        <label for="phone" class="w-full block md:font-semibold md:text-lg">Your Phone Number</label>
        <input type="number" min="1000000" name="phone" id="phone" placeholder="e.g. 0716XXX433" class="mt-1 w-full py-2 px-3 rounded border">
    </div>
    <div>
        <label for="idno" class="w-full block md:font-semibold md:text-lg">ID Number</label>
        <input type="number" min="1000000" required name="idno" id="idno" placeholder="e.g. 3432XXX" class="mt-1 w-full py-2 px-3 rounded border">
    </div>
    <div>
        <label for="gender" class="w-full block md:font-semibold md:text-lg">Gender</label>
        <select name="gender" required class="mt-1 w-full py-2 px-3 rounded border">
            <option value="">Choose gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select>
    </div>
    <div>
        <label for="room" class="w-full block md:font-semibold md:text-lg">Room</label>
        <input type="text" required name="room" id="room" placeholder="e.g. 12" class="mt-1 w-full py-2 px-3 rounded border">
    </div>
    <div>
        <label for="password" class="w-full block md:font-semibold md:text-lg">New Password</label>
        <input type="password" name="password" id="password" placeholder="***********" class="mt-1 w-full py-2 px-3 rounded border">
    </div>
    <div class="flex items-center mt-2">
        <input type="checkbox" name="terms" id="terms" class="px-2 shrink-0" required>
        <label for="terms" class="flex-grow ml-2 block md:text-lg">I agree to our <a href="#" class="text-blue-500 hover:underline">terms and conditions</a></label> 
    </div>

    <div>
        <button type="submit" class="w-full py-2 bg-green-600 text-white rounded mt-3 font-semibold hover:opacity-70 hover:bg-green-800">Continue <i class="fas fa-arrow-right"></i></button>
    </div>

    <div class="mt-3">
        <p>Already have account? <a href="{{ URL::to('/') }}" class="text-blue-500 hover:underline">Login</a></p>
    </div>
</form>

@endsection