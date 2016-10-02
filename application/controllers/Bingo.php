<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bingo extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		$this->data += $this->quotes->get(5);

		$this->render();
	}
}
