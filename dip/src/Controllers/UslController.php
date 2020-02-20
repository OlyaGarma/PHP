<?php

namespace Olgagarma\Diplom\Controllers;

use Olgagarma\Diplom\Core\Controller;

class UslController extends Controller
{
	
	public function index()
	{
		$title = 'Услуги';
		$content = 'usl/usl.php'; 
		$data =[
			'title'=> $title,
			 
		];
		return parent::generateResponse($content,$data);
	}

}