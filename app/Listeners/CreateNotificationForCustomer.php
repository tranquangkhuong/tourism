<?php

namespace App\Listeners;

use App\Events\CustomerNotification;
use App\Models\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateNotificationForCustomer implements ShouldQueue
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
     * @param  CustomerNotification  $event
     * @return void
     */
    public function handle(CustomerNotification $event)
    {
        // tao ban ghi trong bang notifications (user_id, content, created_at)
        Notification::create($event);
    }
}
