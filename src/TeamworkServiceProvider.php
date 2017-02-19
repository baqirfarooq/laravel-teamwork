<?php namespace Baqirfarooq\Teamwork;

use GuzzleHttp\Client as Guzzle;
use Illuminate\Support\ServiceProvider;

class TeamworkServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['baqirfarooq.teamwork'] = $this->app->share(function($app)
        {
            $client = new \Baqirfarooq\Teamwork\Client(new Guzzle,
                $app['config']->get('services.teamwork.key'),
                $app['config']->get('services.teamwork.url')
            );

            return new \Baqirfarooq\Teamwork\Factory($client);
        });

        $this->app->bind('Baqirfarooq\Teamwork\Factory', 'baqirfarooq.teamwork');
    }

}