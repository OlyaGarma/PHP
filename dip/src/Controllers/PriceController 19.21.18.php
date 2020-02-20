<?php

namespace Olgagarma\Diplom\Controllers;

use Olgagarma\Diplom\Core\Controller;

class PriceController extends Controller
{
	
	public function index()
	{
		$title = 'Прайс';
		$content = 'price/price.php'; 
		$data =[
			'title'=> $title,
			 
		];
		return parent::generateResponse($content,$data);
	}

}