<?php

namespace App\Listeners;

use App\Events\CreateBackup;
use Illuminate\Contracts\Queue\ShouldQueue; 

class SendSessionNotification implements ShouldQueue
{
    // use InteractsWithQueue;
    
    /**
     * The name of the queue the job should be sent to.
     *
     * @var string|null
     */
    public $queue = 'listeners';
    
    /**
     * The time (seconds) before the job should be processed.
     *
     * @var int
     */
    public $delay = 60;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CreateBackup $event): void
    {
        foreach ($event as $key => $value) {
            info($value);
        }
        session()->flash('backupSuccess', 'Database berhasil di backup!');
    }
}
