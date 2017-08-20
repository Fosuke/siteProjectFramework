<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ProductsUpdaterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ProductsUpdater';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update product data from API';

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
        foreach(\PoolSupplyWorld::index() as $product){
            $this->call('ProductUpdater',['product_id'=>$product]);
        }
    }
}
