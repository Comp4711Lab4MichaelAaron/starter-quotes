<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of First
 *
 * @author Aaron
 */
class First extends Application {
    
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->data['pagebody'] = 'justone';
        $record = $this->quotes->first();
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
    
    function zzz() {
        $this->load->model('quotes');
        $this->data['pagebody'] = 'justone';
        $record = $this->quotes->first();
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}
