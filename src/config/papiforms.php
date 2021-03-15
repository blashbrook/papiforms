<?php

return [

    'disks' => [
        'uploads' => [
            'driver' => 'local',
            'root' => storage_path('app/uploads'),
            'url' => env('APP_URL').'/uploads',
            'visibility' => 'public',
        ],
    ],

    'links' => [
        public_path('uploads') => storage_path('app/uploads'),

    ],

];
