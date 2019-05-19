<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FormProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \Form::component('bsText','components.forms.text',['name','value'=> null,'attributes'=>[]]);
        \Form::component('bsTextArea','components.forms.textArea',['name','value'=> null,'attributes'=>[]]);
        \Form::component('bsSubmit','components.forms.submit',['value'=> 'Submit','attributes'=>[]]);
    }
}
