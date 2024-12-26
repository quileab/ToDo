<?php
use Livewire\Volt\Volt;

Volt::route('/login', 'login')->name('login');
    
Route::get('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
});
// admin only routes
Route::middleware('auth')->group(function () {
  Volt::route('/', 'dashboard');
  Volt::route('/users', 'users.index');
});