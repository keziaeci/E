<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Artisan;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function backup()  {
        // shell_exec('D:\eci\laragon\bin\mysql\mysql-8.0.30-winx64\bin -h localhost -u root -p > D:\xampp\htdocs\LARAVEL\E-Perpus\database\migrations');
        // shell_exec('php artisan backup:run');
        // Artisan::call('backup:run --only-files --disable-notifications');
        // dd(Artisan::output());
        $cmd = "cd " . base_path() . " && php artisan backup:run";
        exec($cmd);
        // D:\eci\laragon\bin\mysql\mysql-8.0.30-winx64\bin
        // shell_exec('D:\xampp\htdocs\LARAVEL\E-Perpus\database\migrations\* -h localhost -u root -p e_perpus > C:\Users\ASUS\Downloads\main.sql');
        // info('Successfully backup database');
        // exec('php artisan backup:run --disable-notifications');

        return redirect()->back();
    }
}
