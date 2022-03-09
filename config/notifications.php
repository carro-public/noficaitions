<?php

return [
    'sandbox' => env('NOTIFICATION_SANDBOX_ENABLE', false),
    
    'line' => [
        'default' => [
            'token' => env('LINE_ACCESS_TOKEN'),
            'secret' => env('LINE_CHANNEL_SECRET')
        ],
        'senders' => [

        ]
    ],

    'twilio' => [
        'default' => [
            'account_sid' => env('TWILIO_ACCOUNT_SID'),
            'auth_token' => env('TWILIO_AUTH_TOKEN'),
            'from' => env('TWILIO_FROM'),
        ],
        'senders' => [

        ]
    ],
    
    'telerivet' => [
        'default' => [
            'api_key' => env('TELERIVET_API_KEY', ''),
            'project_id' => env('TELERIVET_PROJECT_ID', ''),
            'number' => env('TELERIVET_NUMBER', ''),
        ],
        'senders' => [
            
        ]
    ]
];
