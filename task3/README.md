# Task 3. Implement the `Publish-Subscribe` design pattern.

Create an Emitter class that implements the `Publish-Subscribe` pattern and has
two methods:

  * `on(event, handler)` - binds the `handler` to the `event`
  * `emit(event, data)` - emits the `event`, calls all handlers bound
  to that event (if any) and passes `data` to them as an argument

## For example:

```php

$emitter = new Emitter();

$emitter->on('connect', function($data) {
  echo "We have been connected to, $data";
});

$emitter->on('disconnect', function($data) {
  echo "We disconnected from, $data";
});

$emitter->emit('connect', 'http-server');
// prints to console:
// > We have been connected to http-server
$emitter->emit('connect', 'websocket');
// prints to console:
// > We have been connected to websocket

$emitter->emit('disconnect', 'websocket');
// prints to console:
// > We disconnected from websocket
$emitter->emit('disconnect', 'http-server');
// prints to console:
// > We disconnected from http-server
```
