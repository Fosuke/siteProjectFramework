<?php

namespace Apis\PoolSupplyWorld;
	
use Config;
use GuzzleHttp\Client;	

class PoolSupplyWorldAPI{

	protected $client;
	protected $base_url;
	protected $headers;

	public function __construct(Client $client){
		$this->client = $client;
		$this->base_url = Config::get('PoolSupplyWorld.base_url');
		$this->headers = Config::get('PoolSupplyWorld.headers');
		
	}

	public function search($product){

		$response = $this->client->get($this->base_url,['headers'=>$this->headers,'query'=>['productid'=>$product]]);
		return json_decode($response->getBody(), true);
	}

	public function index(){
		$response = $this->client->get($this->base_url,['headers'=>$this->headers]);
		return json_decode($response->getBody(), true);
	}
}
