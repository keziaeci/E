<?php

namespace App\Http\Controllers;

use App\Events\CreateBackup;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Spatie\Backup\Events\BackupWasSuccessful;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function backup()  {
        $cmd = "cd " . base_path() . " && php artisan backup:run";
        exec($cmd, $output , $result);
        if ($result === 0) {
            CreateBackup::dispatch($output);
        }
        $directory = storage_path('app/public/files/Laravel');
        $zipFiles = File::glob($directory . '/*.zip');

        if (empty($zipFiles)) {
            return response()->json(['error' => 'No zip files found'], 404);
        }

        usort($zipFiles, function ($a, $b) {
            return filemtime($b) - filemtime($a);
        });

        $latestZipFile = $zipFiles[0];

        return response()->stream(
            function () use ($latestZipFile) {
                $file = fopen($latestZipFile, 'r');
                fpassthru($file);
                fclose($file);
            },
            200,
            [
                'Content-Type' => 'application/zip',
                'Content-Disposition' => 'attachment; filename=db.zip',
            ]
        );
    }
}
