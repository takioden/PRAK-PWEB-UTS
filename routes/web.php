<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;
use Illuminate\Pagination\LengthAwarePaginator;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get("/contact", function () {
    return view('contact');
})->name('contact');

Route::get('/mahasiswa', function () {
    $faker = Faker::create();
    
    $data = [];
    for ($i = 0; $i < 50; $i++) {
        $data[] = [
            'nama' => $faker->name,
            'nomor_telepon' => $faker->phoneNumber,
        ];
    }

    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $perPage = 10; 
    $currentItems = array_slice($data, ($currentPage - 1) * $perPage, $perPage);
    $paginator = new LengthAwarePaginator($currentItems, count($data), $perPage, $currentPage, [
        'path' => LengthAwarePaginator::resolveCurrentPath(),
    ]);

    return view('data.mahasiswa', ['mahasiswa' => $paginator]);
})->name('mahasiswa');

Route::get('/dosen', function () {
    $faker = Faker::create();
    
    $data = [];
    for ($i = 0; $i < 50; $i++) {
        $data[] = [
            'nama' => $faker->name,
            'nomor_telepon' => $faker->phoneNumber,
        ];
    }

    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $perPage = 10; 
    $currentItems = array_slice($data, ($currentPage - 1) * $perPage, $perPage);
    $paginator = new LengthAwarePaginator($currentItems, count($data), $perPage, $currentPage, [
        'path' => LengthAwarePaginator::resolveCurrentPath(),
    ]);

    return view('data.dosen', ['dosen' => $paginator]);
})->name('dosen');

Route::get('/karyawan', function () {
    $faker = Faker::create();
    
    $data = [];
    for ($i = 0; $i < 50; $i++) {
        $data[] = [
            'nama' => $faker->name,
            'nomor_telepon' => $faker->phoneNumber,
        ];
    }

    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $perPage = 10; 
    $currentItems = array_slice($data, ($currentPage - 1) * $perPage, $perPage);
    $paginator = new LengthAwarePaginator($currentItems, count($data), $perPage, $currentPage, [
        'path' => LengthAwarePaginator::resolveCurrentPath(),
    ]);

    return view('data.karyawan', ['karyawan' => $paginator]);
})->name('karyawan');