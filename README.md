# Laravel Contact

## Intro

This package is a fork of [Laravel-Contact-Form](https://github.com/FbF/Laravel-Contact-Form) by [FbF](https://github.com/FbF) made compatible with Laravel 5.

## Features

* Partial for a contact form, that you can include in your own views
* Form fields are configurable e.g. name, email and message
* Controller action to handle the submission of the forms
* Translation approach for customising labels, buttons, feedback messages and validation errors
* Enquiry is emailed to a single configurable email address
* Twitter bootstrap compatible markup and class names for the form

## Installation

Add the following to you composer.json file

```js
composer require draperstudio/laravel-contact:1.0.*@dev
```

Run

    $ composer update

Add the following to app/config/app.php

    'DraperStudio\Contact\ContactServiceProvider'

Publish the config, then edit it accordingly

    $ php artisan config:publish draperstudiolaravel-contact

Ensure the settings in app/config/mail.php are correct

## Configuration

The URI of contact page

    'uri' => 'contact',

The view of the contact page (you can set this to be a view in your app, which has much more contact on it for example, then include the partial for the form, e.g. `@include('contact::form')`)

    'view' => 'contact::contact',

The fields and rules for your form

    'fields' => [
        'title' => [
            'type' => 'select',
            'choices' => [
                ''      => 'Please select',
                'Mr'    => 'Mr',
                'Mrs'   => 'Mrs',
                'Miss'  => 'Miss',
                'Ms'    => 'Ms',
                'Dr'    => 'Dr',
                'Other' => 'Other',
            ],
        ],
        'first_name' => [
            'type' => 'text',
        ],
        'last_name' => [
            'type' => 'text',
        ],
        'email' => [
            'type' => 'text',
        ],
        'enquiry' => [
            'type' => 'textarea',
        ],
    ],

    'rules' => [
        'title'      => 'required',
        'first_name' => 'required',
        'last_name'  => 'required',
        'email'      => 'required|email',
        'enquiry'    => 'required',
    ],

The mail configuration options speak for themselves...

    'mail' => [
        'views' => [
            'contact::emails.html.enquiry',
            'contact::emails.text.enquiry',
        ],
        'to' => [
            'name'  => 'Customer Services Manager',
            'email' => 'customer.services@company.com',
        ],
        'subject' => 'Website Enquiry',
    ],

## Usage

Customise the options in the config file and then add the following to the view file that you specified in the config to render the contact form inside it.

    @include('contact::form')
