<?php

namespace DraperStudio\Contact;

use DraperStudio\ServiceProvider\ServiceProvider as BaseProvider;

class ServiceProvider extends BaseProvider
{
    protected $packageName = 'contact';

    public function boot()
    {
        $this->setup(__DIR__)
             ->publishConfig()
             ->publishViews()
             ->publish([
                __DIR__.'/../resources/lang/en' => base_path('resources/lang/en'),
             ], 'translations')
             ->loadViews()
             ->loadTranslations()
             ->mergeConfig('contact');
    }
}
