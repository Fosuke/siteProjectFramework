<?php

namespace Apis\PoolSupplyWorld;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class PoolSupplyWorldServiceProvider extends ServiceProvider{

	public function register(){
		$this->app->bind('poolsupplyworld',function(){
			$client = new Client();
			return new PoolSupplyWorldAPI($client);
		});
	}
}
