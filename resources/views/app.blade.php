<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Starters Rentals</title>
    <link rel="stylesheet" href="{{ URL::to('fontawesome-free-6.4.2/css/all.min.css') }}">
    @vite('resources/css/app.css')
</head>
<body> 
        
    <div class="px-3 fixed w-full top-0 py-2 items-center flex justify-between min-h-10 bg-black text-white">
        <h2 class="font-bold md:text-2xl flex items-center">
            <i class="fa fa-home-alt mr-1"></i>
            Royal Starters
        </h2>
        @if(Session::get('user'))
        <a href="#" class="flex items-center">
            <i class="fas fa-user-shield mr-1"></i>
            <span class="hidden md:inline">{{ Session::get('user')->name }}</span>
        </a>
        @endif
    </div>
        
        
    <div class="mt-10 p-3">
        
        @yield('content')
        
    </div>

    
</body>
</html>