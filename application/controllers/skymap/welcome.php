<?php
/**
 * Created by PhpStorm.
 * User: zhn
 * Date: 2015/11/8
 * Time: 19:04
 */
class Welcome extends CI_Controller{

    public function index(){
        //echo "Welcome to the sky-map!Your personal motion area!";

        $text1="Welcome to the skymap!";
        $text2="Your personal emotion area!";
        $data['headertext1']=$text1;
        $data['headertext2']=$text2;

        $this->load->view("skymap/pub/header",$data);
        for ($i=1;$i<20;$i++){
            $data['text']="$i-->>@where am i?";
            $data['action']="button$i";
            $data['i']=$i;
            $this->load->view("skymap/maintextcard/card",$data);
        }

        $this->load->view("skymap/pub/footer",$data);
        $this->output->enable_profiler(TRUE);
    }
}