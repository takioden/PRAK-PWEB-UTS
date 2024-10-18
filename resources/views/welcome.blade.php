@extends('partial.template')
@section('title', 'landingpage')

@section('content')
<div class="bg-cover bg-no-repeat h-screen transition-transform duration-500 hover:scale-105" style="background-image: url('https://img.freepik.com/free-photo/casual-man-using-gadgets-street_23-2147747804.jpg?t=st=1729134247~exp=1729137847~hmac=c75d163c2089aff1dd0e9b68bdb1263da9f80e089ebbe5c5018d4d1945183939&w=1060'); background-position: center;">
    <div class="flex flex-col items-center justify-center h-full">
        <h1 class="text-black text-4xl font-bold mb-4 animate-scale">Welcome to Our Website</h1>
        <div class="mt-6 space-x-4">
            <a href="{{ route('register') }}" class="font-bold bg-black text-white py-2 px-6 rounded transition-all duration-500 hover:bg-white hover:text-black">Register</a>
            <a href="{{ route('login') }}" class="font-bold bg-white text-black py-2 px-6 rounded transition-all duration-500 hover:bg-black hover:text-white">Login</a>
        </div>
    </div>
</div>


@endsection