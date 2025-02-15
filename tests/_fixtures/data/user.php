<?php

$time = time();

return [
    'user' => [
        'id' => 1,
        'username' => 'user',
        'email' => 'user@example.com',
        'password_hash' => '$2y$13$qY.ImaYBppt66qez6B31QO92jc5DYVRzo5NxM1ivItkW74WsSG6Ui',
        'auth_key' => '39HU0m5lpjWtqstFVGFjj6lFb7UZDeRq',
        'auth_tf_key' => '',
        'auth_tf_enabled' => false,
        'created_at' => $time,
        'updated_at' => $time,
        'confirmed_at' => $time,
        'gdpr_consent' => false,
    ],
    'unconfirmed' => [
        'id' => 2,
        'username' => 'joe',
        'email' => 'joe@example.com',
        'password_hash' => '$2y$13$CIH1LSMPzU9xDCywt3QO8uovAu2axp8hwuXVa72oI.1G/USsGyMBS',
        'auth_key' => 'mhh1A6KfqQLmHP-MiWN0WB0M90Q2u5OE',
        'auth_tf_key' => '',
        'auth_tf_enabled' => false,
        'created_at' => $time,
        'updated_at' => $time,
    ],
    'unconfirmed_with_expired_token' => [
        'id' => 3,
        'username' => 'john',
        'email' => 'john@example.com',
        'password_hash' => '$2y$13$qY.ImaYBppt66qez6B31QO92jc5DYVRzo5NxM1ivItkW74WsSG6Ui',
        'auth_key' => 'h6OS9csJbZEOW59ZILmJxU6bCiqVno9A',
        'auth_tf_key' => '',
        'auth_tf_enabled' => false,
        'created_at' => $time - 86401,
        'updated_at' => $time - 86401,
    ],
    'blocked' => [
        'id' => 4,
        'username' => 'steven',
        'email' => 'steven@example.com',
        'password_hash' => '$2y$13$qY.ImaYBppt66qez6B31QO92jc5DYVRzo5NxM1ivItkW74WsSG6Ui',
        'auth_key' => 'TnXTrtLdj-YJBlG2A6jFHJreKgbsLYCa',
        'auth_tf_key' => '',
        'auth_tf_enabled' => false,
        'created_at' => $time,
        'updated_at' => $time,
        'blocked_at' => $time,
        'confirmed_at' => $time,
    ],
    'user_with_expired_recovery_token' => [
        'id' => 5,
        'username' => 'andrew',
        'email' => 'andrew@example.com',
        'password_hash' => '$2y$13$qY.ImaYBppt66qez6B31QO92jc5DYVRzo5NxM1ivItkW74WsSG6Ui',
        'auth_key' => 'qxYa315rqRgCOjYGk82GFHMEAV3T82AX',
        'created_at' => $time - 21601,
        'updated_at' => $time - 21601,
        'confirmed_at' => $time - 21601,
    ],
    'user_with_recovery_token' => [
        'id' => 6,
        'username' => 'alex',
        'email' => 'alex@example.com',
        'password_hash' => '$2y$13$qY.ImaYBppt66qez6B31QO92jc5DYVRzo5NxM1ivItkW74WsSG6Ui',
        'auth_key' => 'zQh1A65We0AmHPOMiWN0WB0M90Q24ziU',
        'auth_tf_key' => '',
        'auth_tf_enabled' => false,
        'created_at' => $time,
        'updated_at' => $time,
        'confirmed_at' => $time,
    ],
    'user_with_2fa_enabled' => [
        'id' => 7,
        'username' => 'user2fa',
        'email' => 'user2faenabled@example.com',
        'password_hash' => '$2y$13$qY.ImaYBppt66qez6B31QO92jc5DYVRzo5NxM1ivItkW74WsSG6Ui',
        'auth_key' => '39HU0m5lpjWtqstFVGFjj6lFb7UZDeRq',
        'auth_tf_key' => '',
        'auth_tf_enabled' => true,
        'created_at' => $time,
        'updated_at' => $time,
        'confirmed_at' => $time,
        'gdpr_consent' => false,
    ],
];
