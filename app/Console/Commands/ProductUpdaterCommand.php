<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\{Products,ProductImages};

class ProductUpdaterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ProductUpdater {product_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update a single product from API';

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
        $product_id = $this->argument('product_id');
        $product = Products::where('external_id',$product_id)->first()?:new Products;
        $input = \PoolSupplyWorld::search($product_id);
        $input['external_id'] = $input['id'];
        unset($input['id']);
        $images = $input['images'];
        unset($input['images']);
        $product->fill($input);
        $product->save();

        $product_images = ProductImages::where('products_id',$product->id);
        $product_images->delete();

        foreach ($images as $image) {
            $product_image = new ProductImages;
            $product_image->url = $image;
            $product_image->products_id = $product->id;
            $product_image->save();
        }
        
    }
}
