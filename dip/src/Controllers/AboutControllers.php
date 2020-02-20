<?php

namespace Olgagarma\Diplom\Controllers;

use Olgagarma\Diplom\Core\Controller;

class AboutController extends Controller
{
	
	public function about()
	{
		$title = ' О проекте';
		$content = 'about/about.php'; 
		$data =[
			'title'=> $title,
			 
		];
		return parent::generateResponse($content,$data);
	}

}