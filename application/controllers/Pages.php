<?php
/**
 * Created by PhpStorm.
 * User: zhn
 * Date: 2015/11/6
 * Time: 21:25
 */
Class Pages extends CI_Controller{

    public function view($page='home'){
        echo APPPATH.'/views/pages/'.$page.'.php';
        if(! file_exists(APPPATH.'/views/pages/'.$page.'.php')){

            show_404();
        }

        $data['title']=ucfirst($page);

        $this->load->view('templetes/header',$data);
        $this->load->view('/pages/'.$page,$data);
        $this->load->view('templetes/footer',$data);
    }

}