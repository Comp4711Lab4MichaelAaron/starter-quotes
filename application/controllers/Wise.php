<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Wise
 *
 * @author a7823
 */
class Wise extends Application {
    //put your code here
    function __construct() 
    {
        parent::__construct();
    }
    
    function bingo() 
    {
	$record = $this->quotes->get(6);	
	$this->data = array_merge($this->data, $record);
        $this->data['pagebody'] = 'justone';	
	$this->render();
    }
}