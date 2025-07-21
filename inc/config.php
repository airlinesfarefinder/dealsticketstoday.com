<?php


function config($key)
{
    static $configuration = [
        'phone_number' => '(888) 927-5507 ',
        'email_id' => 'info@dealsticketstoday.com',
        'address' => '1280-1288 Rte 9W, New Hamburg, NY 12590, United States',
        'domain_name' => 'dealsticketstoday.com',
    ];

    return isset($configuration[$key]) ? $configuration[$key] : null;
}
