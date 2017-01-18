<?php
class Blog extends CI_Controller {

    public function index()
    {
        echo 'Hello World!';
    }
    public function zhn($a="I am",$b="superman"){
        echo "$a ---->>>>>>> $b";
    }

    public function _remap($method,$par=array()){
        if ($method === 'index')
        {
            $this->$method();
        }
        elseif (method_exists($this, $method))
        {
            return call_user_func_array(array($this, $method), $par);
        }
        else{
            show_404();
        }
    }
}