<?php

namespace App\Http\Controllers;

use App\Events\CreateBackup;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Artisan;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function backup()  {
        $cmd = "cd " . base_path() . " && php artisan backup:run";
        exec($cmd, $output , $result);
        if ($result === 0) {
            CreateBackup::dispatch($output);
        }
        return redirect()->back();
    }
}
