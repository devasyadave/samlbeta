<?php
namespace MiniOrange\Classes\Actions;

use MiniOrange;
use Illuminate\Auth\Events\Logout;
use MiniOrange\Classes\Actions\AuthFacadeController;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;


class LogoutListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Logout  $event
     * @return void
     */
    public function handle(Logout $event)
    {
        header('Location: mologout');
        exit;
        //include_once __DIR__.'/../../logout.php';
        // Access the order using $event->order...
    }
}