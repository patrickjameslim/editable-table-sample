<?php

class TestController extends BaseController{

	public function test(){
		$results = Excel::load('location.csv',function($reader){
			
		})->get()->toArray();
		
		foreach($results as $result){
			echo $result['id'] . '<br>';
		}
	}
}