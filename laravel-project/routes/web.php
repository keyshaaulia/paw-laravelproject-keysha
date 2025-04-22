<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Menu;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');
    if ($username === 'keysha' && $password === '123') {
        session(['logged_in' => true]);
        return redirect('/menu');
    } else {
        return back()->with('error', 'Username atau password salah!');
    }
});

Route::get('/logout', function () {
    session()->forget('logged_in');
    return redirect('/login');
});

Route::get('/menu', function () {
    if (!session('logged_in')) {
        return redirect('/login');
    }

    if (Menu::count() === 0) {
        Menu::create([
            'menu' => 'Nasi Goreng',
            'harga' => 15000,
            'jumlah' => 10
        ]);

        Menu::create([
            'menu' => 'Mie Ayam',
            'harga' => 12000,
            'jumlah' => 8
        ]);
    }

    $data = Menu::all();
    return view('menu.index', compact('data'));
});
