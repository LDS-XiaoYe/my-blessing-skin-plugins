<?php

use Asnxthaony\PurgeCloudflareCdn\PurgeCDN;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
    $events->listen(App\Events\PlayerProfileUpdated::class, function ($event) {
        PurgeCDN::dispatch($event->player);
    });
};
