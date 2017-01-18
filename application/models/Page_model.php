<?php
/**
 * Created by PhpStorm.
 * User: zhn
 * Date: 2015/11/13
 * Time: 20:04
 */
class Page_model extends CI_Model{

    public function __construct()
    {
        $config['hostname'] = 'localhost';
        $config['username'] = 'root';
        $config['password'] = '123';
        $config['database'] = 'zhn_liveshop';
        $config['dbdriver'] = 'mysqli';
        $config['dbprefix'] = '';
        $config['pconnect'] = FALSE;
        $config['db_debug'] = TRUE;
        $config['cache_on'] = FALSE;
        $config['cachedir'] = '';
        $config['char_set'] = 'utf8';
        $config['dbcollat'] = 'utf8_general_ci';
        $this->load->database($config);
    }

    public function get_rowscount($flag="ALL",$tablename="StockTable")
    {
        if($flag=="ALL"){
            return $this->db->count_all($tablename);
        }elseif($flag<$this->db->count_all($tablename))
        {
            return $flag;
        }
        else{
            return $this->db->count_all($tablename);
        }

    }

    public function get_data($table='StockTable',$limit=20,$startrow=0,$slug =FALSE){

        if($slug===FALSE){

            $query=$this->db->get($table,$limit,$startrow);
            return $query->result_array();
        }
        $query=$this->db->get($table,$limit,$startrow);
        return $query->result_array();
    }
    public function set_news()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        return $this->db->insert('news', $data);
    }

}