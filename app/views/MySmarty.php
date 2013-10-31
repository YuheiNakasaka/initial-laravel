<?php
class MySmarty extends Smarty{

    function __construct()
    {
        parent::__construct();
        $this->caching    = true;
        $this->force_compile = true; 
        $this->setCacheDir('../storage/views/cache/');
        $this->setCompileDir('../storage/views/compile/');

        $this->setTemplateDir(dirname(realpath(__FILE__)));
    }
}
?>
