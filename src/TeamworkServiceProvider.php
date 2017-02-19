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
        $app = $this->app;

        $app->singleton('baqirfarooq.teamwork', function() use ($app) {
            $client = new Client(new Guzzle,
                config('services.teamwork.key'),
                config('services.teamwork.url')
            );
            return new Factory($client);

        });

        $app->bind('Baqirfarooq\Teamwork\Factory', 'baqirfarooq.teamwork');
    }

}
