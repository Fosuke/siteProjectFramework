<?php

namespace Apis\PoolSupplyWorld;

use Illuminate\Support\Facades\Facade;

class PoolSupplyWorld extends Facade{

	public static function getFacadeAccessor(){
		return 'poolsupplyworld';
	}
}