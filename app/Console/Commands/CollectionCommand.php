<?php

namespace App\Console\Commands;

use App\Models\CollectionExample;
use Illuminate\Console\Command;

class CollectionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'collection:exemple';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Laravel Collection Playground';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       dd((new CollectionExample())->example());
    }
}
