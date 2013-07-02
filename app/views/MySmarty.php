<?php
class MySmarty extends Smarty{

    function __construct()
    {
        parent::__construct();
        $this->caching    = 1;
    
        $this->setCacheDir('../storage/views/cache/');
        $this->setCompileDir('../storage/views/compile/');

        $this->setTemplateDir(dirname(realpath(__FILE__)));
    }
}
?>