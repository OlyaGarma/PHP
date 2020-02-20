<?php

namespace Olgagarma\Diplom\Controllers;

use Olgagarma\Diplom\Core\Controller;

class IndexController extends Controller
{
	
	public function index()
	{
		$title = 'Главная';
		$content = 'main/main.php'; 
		$data =[
			'title'=> $title,
			
		];
		return parent::generateResponse($content,$data);
	}

}