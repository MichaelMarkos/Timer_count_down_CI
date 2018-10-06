<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Timer extends CI_Controller {

      public function index()
      {

      }

    public function view_timer_count_down()
  	{
// if you want to get time from database
  			//$data['exams'] =  $this->Exams_model->view_one_exam($exam_id);
  		//	$duration ="";
  			//$duration = $data['exams']->time;
// to set time in seeion ..... to start time in all exam
      //  $this->session->set_userdata('time_of_exam',$duration);
        //$this->load->view("templates/header");
  			$this->load->view("start_time");
      //  $this->load->view("templates/footer");
  	}


    public function End_timer()
{

$this->session->unset_userdata('count_timer_down');

echo 'End Timer ';
redirect('timer/view_timer_count_down');
}




}
