<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * First quote page for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		// build the first authors, to pass on to our view
                $record = $this->quotes->first();
                $this->data = array_merge($this->data, $record);

		$this->render();
	}

}
