<?php

Broadcast::channel('chat.{roomId}', function ($user) {
    return Arr::only($user->toArray() , [
        'id' ,
        'name'
    ]);
});
