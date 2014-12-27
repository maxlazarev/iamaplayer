<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 22.12.14
 * Time: 21:55
 */

class SHAHashServiceProvider extends Illuminate\Support\ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app['hash'] = $this->app->share(function () {
            return new SHAHasher();
        });

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return array('hash');
    }

}