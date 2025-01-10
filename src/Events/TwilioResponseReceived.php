<?php

namespace NotificationChannels\Twilio\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TwilioResponseReceived
{
    use Dispatchable, SerializesModels;

    /**
     * Constructor.
     * Takes in the response from twilio and type of request
     *
     * @param string $type
     * @param mixed $response
     */
    public function __construct(
        public string $type,
        public mixed $response
    ) {}
}
