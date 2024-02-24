<?php

namespace App\Http\Controllers;

use App\Events\CreateBackup;
use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Routing\Controller as BaseController;
use Spatie\Backup\BackupDestination\BackupCollection;
use Spatie\Backup\BackupDestination\BackupDestination;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function backup()  {
        $cmd = "cd " . base_path() . " && php artisan backup:run";
        exec($cmd, $output , $result);
        if ($result === 0) {
            CreateBackup::dispatch($output);
            //  $b = "cd " . base_path() . " && php artisan backup:list";
            // exec($b,$output, $result);
            
            // $b =  BackupCollection::createFromFiles()->newest();
            // $anu = new Filesystem();
            // $b =  new BackupDestination($anu , 'Laravel' , 'backup');
            // dd($b);
            // $filesystemManager = new FilesystemManager(app());

            // Get the filesystem instance for the local disk
            // $filesystem = $filesystemManager->disk('backup');
        
            // Get all backups from the filesystem
            // $backups = BackupCollection::createFromFiles($filesystem->allFiles('backups'));
            // $filesystem = new Filesystem($localDisk->getDriver());

            // // Get all backups from the filesystem
            // $backups = BackupCollection::createFromFiles($filesystem->allFiles('backups'));
        }
        return redirect()->back();
    }
}
