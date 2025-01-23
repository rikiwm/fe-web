<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class NotificationPoll extends Component
{
    public $title = 'Notifications';
    public $notificationcount;
    public  $notificationcItems;
    protected $listeners = ['notificationReceived' => '$refresh'];

    public function mount($title = 'Notifications')
    {
        $this->title = $title;
        $this->loadNotifications();
    }

    /**
     * Loads the number of unread notifications and the last five notifications.
     *
     * This method is called when the component is mounted and whenever the
     * 'notificationReceived' event is fired.
     */
    public function loadNotifications()
    {
        // $user = User::query();
        $this->notificationcount = auth()->user()->unreadNotifications()->count();
        $this->notificationcItems = auth()->user()->unreadNotifications()->latest()->take(5)->get(); // take five
    }

    /**
     * Marks all unread notifications as read.
     *
     * This method updates the 'read_at' timestamp for all unread notifications
     * and then reloads the notification count and items.
     */

    public function markAllAsRead()
    {
        auth()->user()->unreadNotifications()->update(['read_at' => now()]);
        $this->loadNotifications();
    }

    public function render()
    {
        return view('livewire.notification-poll',[
            'notificationcount' => $this->notificationcount,
            'notificationcItems' => $this->notificationcItems
        ]);
    }
}
