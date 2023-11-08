<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\setting;
use App\Models\GoogleRecaptcha;
use App\Models\TawkChat;
use App\Models\GoogleAnalytic;
use Illuminate\Support\Facades\View;

use App\Models\shopping_cart;
use App\Models\product;
use App\Models\email_configuration;
use App\Models\Language;
use Auth;
use Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        if (! $this->app->runningInConsole()) {
            $setting = setting::first();
            $languages = Language::where('status','active')->get();
            $googleRecaptcha = GoogleRecaptcha::first();
            $tawk_chat = TawkChat::first();
            $googleAnalytic = GoogleAnalytic::first();
            View::share(compact('setting','googleRecaptcha','tawk_chat','googleAnalytic','languages'));
        }
        $email_configuration = email_configuration::first();

        if($email_configuration){
            $data = [
                'driver' => $email_configuration->mailer,
                'host' => $email_configuration->mail_host,
                'port' => $email_configuration->mail_port,
                'encryption' => $email_configuration->mail_encryption,
                'username' => $email_configuration->smtp_username,
                'password' => $email_configuration->smtp_password
            ];
            Config::set('mail',$data);
        }

    }
}
