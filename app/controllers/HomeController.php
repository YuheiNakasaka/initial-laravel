<?php

class HomeController extends My_Controller {
    
    public function __construct($anvil)
    {
        $this->anvil = $anvil;
    }
    
    public function showWelcome()
    {
        $data = array();
        var_dump($this->anvil->drop());
        $this->_display('hello', $data);
    }
}