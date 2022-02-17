# Dynosend API Client

PHP client for Dynosend api

This is just an example, for more methods please check the [API Documentation](https://developers.dynosend.com/)



The API client can be installed via [Composer](https://github.com/composer/composer).

Run this command:

```
composer require rolocost/dynosendphp
```

## Basic Usage

You can include the Composer autoloader in your application:

```php
<?php
require_once 'vendor/autoload.php';

// Application code...
?>
```
Or use a backslash to load the library when needed.

Configure your access credentials when creating a client:

```php
<?php

$client = new \DynosendSDK\Client('API_TOKEN');
// API token can be found in your account's API settings

?>
```


### Examples

#### Audiences (contact lists)

```php
<?php
// Create audience
try {
    $client->audience()->create([
        'name' => 'Audience 1',
        'from_email' => 'support@abccorp.com',
        'from_name' => 'Customer Support',
        'default_subject' => 'An Awesome Subject',
        'contact[state]' => 'CA',
        'contact[company]' => 'ABC Corp',
        'contact[address_1]' => '81 Willow Rd',
        'contact[address_2]' => '',
        'contact[city]' => 'Salinas',
        'contact[zip]' => '93905',
        'contact[phone]' => '+18003334444',
        'contact[country_id]' => '231',
        'contact[email]' => 'contact@abccorp.com',
        'contact[url]' => 'https://abccorp.com/',
        'subscribe_confirmation' => 0,
        'send_welcome_email' => 1,
        'unsubscribe_notification' => 1,
    ]); 
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    // Handle the error
}

// Get audience
try {
    $client->audience()->find('5fc9e55410e10'); 
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    // Handle the error
}

// Create custom field
try {
    $client->audience()->addCustomField('5fc9e55410e10', [
        'type' => 'text',
        'label' => 'Plan name',
        'tag' => 'PLAN',
        'default_value' => 'Free trial'
    ]);
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    // Handle the error   
}

```

#### Contacts

```php
<?php
// Get all contacts in a given audience
try {
    $client->contact()->all([
        'list_uid' => '5fc9e55410e10',
        'per_page' => 20,
        'page' => 1
    ]); 
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    // Handle the error
}

// Create a contact
try {
    $client->contact()->create([
        'EMAIL' => 'john@example.com',
        'list_uid' => '5fc9e55410e10',
        'tag' => 'tag, another tag';
        'OTHER_FIELD' => ...
    ]); 
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    // Handle the error
}

// Update contact's data fields
try{
    $client->contact()->update('john@example.com',[
        'EMAIL' => 'john@example.com',
        'list_uid' => '5fc9e55410e10',
        'tag' => 'new tags',
        'OTHER_FIELDS' => ...
    ]); 
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    // Handle the error
}

// Tag contact
try{
    $client->contact()->addtag([
        'email' => 'john@example.com',
        'list_uid' => '5fc9e55410e10',
        'tag' => 'your added tags'
    ]); 
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    // Handle the error
}
```

#### Events
```php
<?php
// Send an event
try {
    $client->contact()->sendevent([
        'event_name' => 'account_created',
        'email' => 'john@example.com',
        'list_uid' => '5fc9e55410e10'
    ]); 
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    // Handle the error
}
```



#### PageView

```php
<?php
// Add page view
try {
    $result = $client->page->view(
        [
            'id' => 1,
            'url' => 'http://example.com/login',
            'data' => [
                'referrer' => 'http://example.com'
            ]
        ]
    );
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    // Handle the error
}
```

#### Check the [API Documentation](https://developers.dynosend.com/) for more methods

