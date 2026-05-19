<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Chamando as rotas que estão na págna web, David j.disneyde@gmail.com
foreach (File::allFiles(__DIR__ . '/web') as $route_file) {
    require $route_file->getPathname();
}

require __DIR__ . '/auth.php';
