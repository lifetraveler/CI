<?php
/**
 * Created by PhpStorm.
 * User: zhn
 * Date: 2015/11/13
 * Time: 19:39
 */
class Pagination extends CI_controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('page_model');

    }

    public function index($table="")
    {
        $rows=$this->page_model->get_rowscount("ALL",$table);
        return $rows;

//        return "$table 表的总行数是:".$this->page_model->get_rowscount("ALL",$table)."</br>";
//        var_dump($this->page_model->get_data($table)) ;
    }

    // @todo 分页
    public function page($table="StockTable",$rowlimit=20,$startrow=0)
    {
        $rows=$this->index($table);
        $data['title']="总行数是:$rows";
        $data['item']=$this->page_model->get_data($table,$rowlimit,$startrow,$rows);
        $data['pagination']=$this->p($table,$rowlimit,$rows);
        $this->load->view('skymap/page/header',$data);
        $this->load->view('skymap/page/table',$data);
        $this->load->view('skymap/page/footer',$data);
    }

    // @todo 分页控制器
    public function p($table,$limitrow=20,$allrows=200)
    {
        $this->load->library('pagination');
        $config['base_url'] = 'http://127.0.0.1:8081/CodeIgniter/skymap/pagination/page/'.$table.'/'.$limitrow.'/';
        $config['total_rows'] = $allrows;
        $config['per_page'] = $limitrow;
        $config['uri_segment'] = 6;
        $config['prev_link'] = '&lt;';
        $config['next_link'] = '&gt;';
        $config['num_links'] = 5;
        $config['first_link'] = 'First';
        $config['full_tag_open'] = '<div class="page">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        return $this->pagination->create_links();


    }

}