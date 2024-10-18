@extends('partial.template')
@section('title', 'register')

@section('content')
<div class="bg-cover bg-no-repeat h-screen transition-transform duration-500 hover:scale-105" style="background-image: url('https://img.freepik.com/free-photo/casual-man-using-gadgets-street_23-2147747804.jpg?t=st=1729134247~exp=1729137847~hmac=c75d163c2089aff1dd0e9b68bdb1263da9f80e089ebbe5c5018d4d1945183939&w=1060'); background-position: center;">
    <div class="flex flex-col items-center justify-center h-full">
        <h1 class="text-black text-4xl font-bold mb-4">Register</h1>
        
        <form action="{{ route('login') }}" method="GET" class="bg-white bg-opacity-80 rounded p-8 shadow-lg w-96">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-bold mb-2">Name</label>
                <input type="text" name="name" id="name" class="border rounded w-full py-2 px-3 focus:outline-none focus:ring focus:ring-black" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" id="email" class="border rounded w-full py-2 px-3 focus:outline-none focus:ring focus:ring-black" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-bold mb-2">Password</label>
                <input type="password" name="password" id="password" class="border rounded w-full py-2 px-3 focus:outline-none focus:ring focus:ring-black" required>
            </div>
            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-bold mb-2">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="border rounded w-full py-2 px-3 focus:outline-none focus:ring focus:ring-black" required>
            </div>
            <button type="submit" class="font-bold bg-black text-white py-2 px-6 rounded transition-all duration-500 hover:bg-white hover:text-black w-full">Register</button>
        </form>

        <div class="mt-6">
            <p class="text-black">Already have an account? <a href="{{ route('login') }}" class="text-blue-500 underline">Login here</a></p>
        </div>
    </div>
</div>


@endsection