<?php
/**
 * Created by PhpStorm.
 * User: zhn
 * Date: 2015/11/7
 * Time: 14:44
 */
class News extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'News archive';

        $this->load->view('templetes/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templetes/footer');
    }
/*
    public function view($slug = NULL)
    {
        $data['news_item'] = $this->news_model->get_news($slug);
    }
  */
    public function view($slug = NULL)
    {
       // echo 123;
        $data['news_item'] = $this->news_model->get_news($slug);

        if (empty($data['news_item']))
        {
            show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templetes/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templetes/footer');
    }

    public function create(){

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title']='Create a new item';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templetes/header', $data);
            $this->load->view('news/create');
            $this->load->view('templetes/footer');

        }
        else
        {
            $this->news_model->set_news();
            $this->load->view('news/success');
        }


    }
}