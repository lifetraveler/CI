<?php
/**
 * Created by PhpStorm.
 * User: zhn
 * Date: 2015/11/10
 * Time: 8:54
 */
class Testshowcalendar extends CI_Controller{

    public function index()
    {
        date_default_timezone_set("Asia/Shanghai");

        $prefs = array(
            'show_next_prev'=>true,
            'next_prev_url'   => 'http://127.0.0.1:8081/CodeIgniter/skymap/testshowcalendar/',

        );
        echo $this->uri->segment(1);
        echo $this->uri->segment(2);
        echo $this->uri->segment(3);
        echo $this->uri->segment(4);
        echo $this->uri->segment(5);
        echo $this->uri->segment(6);
        echo $this->uri->segment(7);
        $this->load->library('calendar', $prefs);
        echo $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4));
//        $this->output->enable_profiler(TRUE);


        /*
        $prefs['template'] = '

    {table_open}<table border="0" cellpadding="0" cellspacing="0">{/table_open}

    {heading_row_start}<tr>{/heading_row_start}

    {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
    {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
    {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

    {heading_row_end}</tr>{/heading_row_end}

    {week_row_start}<tr>{/week_row_start}
    {week_day_cell}<td>{week_day}</td>{/week_day_cell}
    {week_row_end}</tr>{/week_row_end}

    {cal_row_start}<tr>{/cal_row_start}
    {cal_cell_start}<td>{/cal_cell_start}
    {cal_cell_start_today}<td>{/cal_cell_start_today}
    {cal_cell_start_other}<td class="other-month">{/cal_cell_start_other}

    {cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
    {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

    {cal_cell_no_content}{day}{/cal_cell_no_content}
    {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

    {cal_cell_blank}&nbsp;{/cal_cell_blank}

    {cal_cell_other}{day}{/cal_cel_other}

    {cal_cell_end}</td>{/cal_cell_end}
    {cal_cell_end_today}</td>{/cal_cell_end_today}
    {cal_cell_end_other}</td>{/cal_cell_end_other}
    {cal_row_end}</tr>{/cal_row_end}

    {table_close}</table>{/table_close}
';

        $this->load->library('calendar', $prefs);

        echo $this->calendar->generate();
        */
    }

    public function index2()
    {

        date_default_timezone_set("Asia/Shanghai");
        $prefs['template'] = array(
            'table_open' => '<table class="calendar">',
            'cal_cell_start' => '<td class="day">',
            'cal_cell_start_today' => '<td class="today">'
        );

        $this->load->library('calendar', $prefs);

        echo $this->calendar->generate();

    }
    public function sendmail()
    {

        $this->load->library('email');


        $config['smtp_host'] = 'smtp.qq.com';
        $config['smtp_user'] = '548880923@qq.com';
        $config['smtp_pass'] = 'fendou1988';
        $config['charset'] = 'utf-8';
        $config['protocol'] = 'smtp';
        $config['smtp_crypto']='SSL';
        $config['smtp_port'] = '465';

        $this->email->initialize($config);

        $this->email->from('your@example.com', 'Your Name');
        $this->email->to('548880923@qq.com');
//        $this->email->cc('another@another-example.com');
//        $this->email->bcc('them@their-example.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send(false);
        $this->output->enable_profiler(TRUE);
    }

}