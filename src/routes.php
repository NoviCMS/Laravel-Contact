<?php


get(config('contact.uri'), [
    'as' => 'ds.contact.form',
    'uses' => 'DraperStudio\Contact\Controllers\ContactController@form',
]);

post(config('contact.uri'), [
    'as' => 'ds.contact.handle',
    'uses' => 'DraperStudio\Contact\Controllers\ContactController@send',
]);
