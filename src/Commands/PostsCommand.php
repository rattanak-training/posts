<?php

namespace Rattanak\Posts\Commands;

use Illuminate\Console\Command;

class PostsCommand extends Command
{
    public $signature = 'rattanak:posts';

    public $description = 'My post package';

    public function handle()
    {
        $this->comment('All done');
    }
}
