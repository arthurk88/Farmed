<?php

namespace App\Providers;

use Illuminate\Filesystem\FilesystemAdapter;
use Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use Spatie\Dropbox\Client as DropboxClient;
use Spatie\FlysystemDropbox\DropboxAdapter;



class DropboxServiceProvider extends ServiceProvider
{




    public function register()
    {
    }

    public function boot()
    {
        Storage::extend('dropbox', function ($app, $config) {
            $client = new DropboxClient(
                $config['authorization_token'],
            );

            $adapter = new DropboxAdapter($client);

            $driver = new Filesystem($adapter, ['case_sensitive' => false]);
         
            return new FilesystemAdapter($driver, $adapter);
        });
    }
}
