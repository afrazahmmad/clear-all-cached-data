<?php

namespace AfrazAhmad\ClearAllCachedData;

use Illuminate\Console\Command;

class ClearAllCachedData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all cached data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('cache:clear');
        $this->call('view:clear');
        $this->call('route:clear');
        $this->call('clear-compiled');
        $this->call('config:clear');
    }
}
