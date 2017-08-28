<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/home/GitHub/docs-idx-first-draft/user/plugins/email/email.yaml',
    'modified' => 1503945045,
    'data' => [
        'enabled' => true,
        'from' => NULL,
        'from_name' => NULL,
        'to' => NULL,
        'to_name' => NULL,
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
