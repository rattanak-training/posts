<?php

namespace Rattanak\Posts;

use Rattanak\Posts\Commands\PostsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PostsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('posts')
            ->hasConfigFile()
            ->hasViews()
            ->hasRoute('web')
            ->hasMigration('create_posts_table')
            ->hasCommand(PostsCommand::class);
    }
}
