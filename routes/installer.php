<?php

use Illuminate\Support\Facades\Route;
use Nzoko\Ninit\Http\Livewire\Installer;

Route::get('/install', Installer::class)->name('installer.index');

Route::get('/install/assets/installer.css', function () {
    $published = public_path('installer/installer.css');
    $path = is_file($published)
        ? $published
        : dirname(__DIR__).'/resources/css/installer.css';

    return response()->file($path, [
        'Content-Type' => 'text/css; charset=UTF-8',
        'Cache-Control' => 'public, max-age=86400',
    ]);
})->name('installer.assets.css');

Route::get('/install/progress', function () {
    $progressFile = storage_path('framework/installer-progress.json');
    if (file_exists($progressFile)) {
        return response()->json(json_decode(file_get_contents($progressFile), true));
    }
    return response()->json(['messages' => [], 'timestamp' => 0]);
})->name('installer.progress');
