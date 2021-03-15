<?php

return [
    'patron_uploads' => [
        'driver' => 'local',
        'root' => storage_path('app/patron_uploads'),
        'url' => env('APP_URL') . '/patron_uploads',
        'visibility' => 'public',
    ]
];
