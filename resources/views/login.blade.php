@extends('partial.template')
@section('title', 'login')

@section('content')
<div class="bg-cover bg-no-repeat h-screen transition-transform duration-500 hover:scale-105" style="background-image: url('https://img.freepik.com/free-photo/casual-man-using-gadgets-street_23-2147747804.jpg?t=st=1729134247~exp=1729137847~hmac=c75d163c2089aff1dd0e9b68bdb1263da9f80e089ebbe5c5018d4d1945183939&w=1060'); background-position: center;">
    <div class="flex flex-col items-center justify-center h-full">
        <h1 class="text-black text-4xl font-bold mb-4">Login to Your Account</h1>
        <form action="{{ route('contact') }}" method="GET" class="bg-white bg-opacity-80 rounded p-8 shadow-lg w-96">
            <div class="mb-4">
                <label for="name" class="block text-sm font-bold mb-2">Name:</label>
                <input type="text" id="name" name="name" class="border border-gray-300 rounded w-full p-2" required>
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-sm font-bold mb-2">Phone Number:</label>
                <input type="text" id="phone" name="phone" class="border border-gray-300 rounded w-full p-2" required>
            </div>
            <div class="flex justify-center mt-6">
                <button type="submit" class="font-bold bg-black text-white py-2 px-6 rounded transition-all duration-500 hover:bg-white hover:text-black">Login</button>
            </div>
        </form>
        <div class="mt-6">
            <p class="text-black">Not have an account? <a href="{{ route('register') }}" class="text-blue-500 underline">Register here</a></p>
        </div>
    </div>
</div>


@endsection