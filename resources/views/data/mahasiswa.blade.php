@extends('partial.template')

@section('title', 'student')

@section('content')
<div class="bg-cover bg-no-repeat h-screen flex flex-col justify-center items-center" style="background-image: url('https://img.freepik.com/free-photo/group-friends-holding-speech-bubbles_23-2148402490.jpg?t=st=1729238978~exp=1729242578~hmac=82dfbb7254a5bb3f06916ef7a8228af9a923d9cdf9b128d16771b723174f4f4d&w=1060'); background-position: center;">
    <div class="bg-white bg-opacity-40 rounded-lg shadow-lg p-8 w-11/12 md:w-3/4 lg:w-1/2">
        <p class="text-center text-black mb-6 text-5xl font-bold">Data Mahasiswa</p>
        
        <table class="min-w-full border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border-b p-2">Nama</th>
                    <th class="border-b p-2">Nomor Telepon</th>
                    <th class="border-b p-2">Panggil</th> <!-- New Column for Actions -->
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mhs)
                <tr class="hover:bg-gray-100">
                    <td class="text-center border-b p-2">{{ $mhs['nama'] }}</td>
                    <td class="text-center border-b p-2">{{ $mhs['nomor_telepon'] }}</td>
                    <td class="text-center border-b p-2">
                        <a href="#" class="text-blue-500 hover:text-blue-700 mr-4">
                            <i class="fas fa-video"></i>
                        </a>
                        <a href="#" class="text-green-500 hover:text-green-700">
                            <i class="fas fa-phone"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $mahasiswa->links('pagination::tailwind') }}
        </div>
        <div class="mt-4 text-center">
            <a href="{{ route('contact') }}"class="bg-red-600 text-white py-2 px-5 rounded-lg transition-transform transform hover:scale-105 duration-300 hover:bg-white hover:text-red-600">
                Back
            </a>
        </div>
    </div>
</div>
@endsection
