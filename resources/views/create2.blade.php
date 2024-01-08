@extends('app')

@section('content')



<form method="post" action="{{ route('user.other') }}" class="max-w-[700px] my-7 mx-auto md:p-3 rounded md:border">
    
    <h1 class="text-center text-xl my-3 text-green-600 font-bold">OTHER DETAILS</h1>

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
        <label for="county" class="w-full block md:font-semibold md:text-lg">Home County</label>
        <select name="county" required class="mt-1 w-full py-2 px-3 rounded border">
            <option value="">Choose county</option>
            <option>Nandi</option>
            <option>Kisumu</option>
            <option>Nakuru</option>
            <option>Uasin-Gishu</option>
            <option>Nairobi</option>
            <option>Elkeiyo-Marakwet</option>
        </select>
    </div>
    <div>
        <label for="constituency" class="w-full block md:font-semibold md:text-lg">Constituency</label>
        <select name="constituency" required class="mt-1 w-full py-2 px-3 rounded border">
            <option value="">Choose constituency</option>
            <option>Emgwen</option>
            <option>Aldai</option>
            <option>Mosop</option>
            <option>Chesumei</option>
            <option>Tindiret</option>
        </select>
    </div>
    <div>
        <label for="ward" class="w-full block md:font-semibold md:text-lg">Ward</label>
        <select name="ward" required class="mt-1 w-full py-2 px-3 rounded border">
            <option value="">Choose ward</option>
            <option>Kilibwoni</option>
            <option>Lelmokwo-Ngechek</option>
            <option>Kapsabet</option>
            <option>Kilibwoni</option>
            <option>Chepkumia</option> 
        </select>
    </div>
    <div>
        <label for="village" class="w-full block md:font-semibold md:text-lg">Village/Estate Name</label>
        <input type="text" name="village" id="village" required placeholder="e.g. Kiplolok Village" class="mt-1 w-full py-2 px-3 rounded border">
    </div>
    <div>
        <label for="kin_name" class="w-full block md:font-semibold md:text-lg">Next of Kin</label>
        <input type="text" name="kin_name" id="kin_name" required placeholder="e.g. Jane Doe" class="mt-1 w-full py-2 px-3 rounded border">
    </div>
    <div>
        <label for="next-phone" class="w-full block md:font-semibold md:text-lg">Next of Kin Phone</label>
        <input type="number" min="1000000" name="kin_phone" id="kin_phone" placeholder="e.g. 0724XXX564" class="mt-1 w-full py-2 px-3 rounded border">
    </div>
    
    <div>
        <button type="submit" class="w-full py-2 bg-green-600 text-white rounded mt-3 font-semibold hover:opacity-70 hover:bg-green-800">Continue <i class="fas fa-arrow-right"></i></button>
    </div>
 
</form>

@endsection