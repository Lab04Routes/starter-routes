<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Welcome
 *
 * @author Daniel Zhang
 */

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Last quote page for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		// build the last authors, to pass on to our view
                $record = $this->quotes->last();
                $this->data = array_merge($this->data, $record);

		$this->render();
	}

}