<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EspYoutube implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $temperature, $humidity;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($temperature, $humidity)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('message');
    }

    public function broadcastAs()
    {
        return 'my-event';
    }
}
