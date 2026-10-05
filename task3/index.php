<?php

class Emitter
{
    private $handlers;

    /**
     * Creates an instance of the Emitter class.
     * @memberof Emitter
     */
    public function __construct()
    {
        $this->handlers = [];
    }

    /**
     * Binds a handler to an event
     *
     * @param string event - the event
     * @param Handler handler - the handler
     */
    public function on($event, $handler)
    {
        $this->handlers[] = [
            'event' => $event,
            'handler' => $handler,
        ];
    }

    /**
     * Emits an event -- calls all handlers bound to the event and
     *                   passes them the data argument
     *
     * @param string event
     * @param mixed data
     */
    public function emit($event, $data)
    {
        foreach ($this->handlers as $handler) {
            if ($handler['event'] == $event) {
                call_user_func($handler['handler'], $data);
            }
        }
    }
}
