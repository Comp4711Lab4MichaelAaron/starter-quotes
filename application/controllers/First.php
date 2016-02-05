<?php

/**
 * controller/First.php
 *
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
    
    function gimmie($choice) {
        $this->data['pagebody'] = 'justone';
        $record = $this->quotes->get($choice);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}
