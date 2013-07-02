<?php
class TestController extends My_Controller
{
    //initialize
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getIndex()
    {
        //viewに渡す変数
        $data = array();
        $data['color'] = array("赤","桃","紫","黄","青","緑");
        $data['color'] = $data['color'][rand(0,5)];
        $data['alphabet'] = range('a', 'z');
        $data['alphabet'] = strtoupper($data['alphabet'][rand(0,25)]);
        $data['girls'] = array("れに","かなこ","しおり","あやか","ももか");
        $data['love'] = $data['girls'][rand(0,4)];
        
        return $this->_display('smartytest/index',$data);
    }
}
?>
