<?php

namespace App\Listeners;

use App\Events\AsignDomen;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CompanyNotification
{
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
    public function handle(AsignDomen $event): void
    {
        //
    }
}
