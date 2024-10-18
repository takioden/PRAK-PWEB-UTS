@extends('partial.template')

@section('title', 'homepage')

@section('content')
<div class="bg-cover bg-no-repeat h-screen flex flex-col justify-center items-center" style="background-image: url('https://img.freepik.com/free-photo/side-view-young-woman-using-smartphone-against-white-backdrop_23-2147841202.jpg?t=st=1729236571~exp=1729240171~hmac=fa8d17a3b8720920b642b7d5946dc3243abfa703e8505a5db9fee5bfbeed16e6&w=1060'); background-position: center;">
    <p class="text-center text-black mb-10 text-5xl font-bold">Hello Mate...</p>
    <div class="bg-white bg-opacity-50 p-8 rounded-lg shadow-lg text-center max-w-md">
        <h1 class="text-4xl font-bold text-black mb-6">Choose Your Choice</h1>
        <div class="flex flex-col space-y-4">
            <a href="{{ route('mahasiswa') }}" class="font-bold bg-black text-white py-3 px-6 rounded-lg transition-transform transform hover:scale-105 duration-300 hover:bg-white hover:text-black">
                View Student Data
            </a>
            <a href="{{ route('dosen') }}" class="font-bold bg-black text-white py-3 px-6 rounded-lg transition-transform transform hover:scale-105 duration-300 hover:bg-white hover:text-black">
                View Lecturer Data
            </a>
            <a href="{{ route('karyawan') }}" class="font-bold bg-black text-white py-3 px-6 rounded-lg transition-transform transform hover:scale-105 duration-300 hover:bg-white hover:text-black">
                View Staff Data
            </a>
            <a href="{{ route('home') }}"class="font-bold bg-red-600 text-white py-3 px-6 rounded-lg transition-transform transform hover:scale-105 duration-300 hover:bg-white hover:text-red-600">
                Logout
            </a>
        </div>
    </div>
</div>

@endsection