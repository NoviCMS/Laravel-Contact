<?php

/*
 * This file is part of Laravel Contact.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

Route::get(config('contact.uri'), [
    'as' => 'ds.contact.form',
    'uses' => 'DraperStudio\Contact\Controllers\ContactController@form',
]);

Route::post(config('contact.uri'), [
    'as' => 'ds.contact.handle',
    'uses' => 'DraperStudio\Contact\Controllers\ContactController@send',
]);
