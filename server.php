<?php
namespace __ROOT__;

return [
  'name'    => 'Cylon App',
  'app-key' => '6d4293a877c489a64f1ebf36fdd59148',

  /*
    |--------------------------------------------------------------------------
    | Default Mailer
    |--------------------------------------------------------------------------
    |
    | This option controls the default mailer that is used to send any email
    | messages sent by your application. Alternative mailers may be setup
    | and used as needed; however, this mailer will be used by default.
    |
  */
  'default' => 'smtp',
  'smtp' => [
    'transport' => 'smtp',
    'host' => '',
    'port' => 587,
    'encryption' => 'tls',
    'username' => '',
    'password' => '',
    'timeout' => null,
    'auth_mode' => null,
  ],
];