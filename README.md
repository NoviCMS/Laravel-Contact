# Laravel Contact

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## Install

Via Composer

``` bash
$ composer require draperstudio/laravel-contact
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

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email hello@draperstudio.tech instead of using the issue tracker.

## Credits

- [DraperStudio][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/DraperStudio/laravel-contact.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/DraperStudio/Laravel-Contact/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/DraperStudio/laravel-contact.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/DraperStudio/laravel-contact.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/DraperStudio/laravel-contact.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/DraperStudio/laravel-contact
[link-travis]: https://travis-ci.org/DraperStudio/Laravel-Contact
[link-scrutinizer]: https://scrutinizer-ci.com/g/DraperStudio/laravel-contact/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/DraperStudio/laravel-contact
[link-downloads]: https://packagist.org/packages/DraperStudio/laravel-contact
[link-author]: https://github.com/DraperStudio
[link-contributors]: ../../contributors
