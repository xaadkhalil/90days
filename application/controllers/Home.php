<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('Model_form','m_form');
			$this->load->library('user_agent');
			$this->load->library('cart'); 
			$this->load->library('session'); 
		}
		
		public function index(){

			// if(empty($this->session->userdata('user_id'))):
			// $viewdata['mens']=$this->Dmodel->get_tbl_whr_row('parents',1);
			// $viewdata['womens']=$this->Dmodel->get_tbl_whr_row('parents',2);
			// $viewdata['course_mens']=$this->m_form->get_home_course_men();
			// $viewdata['course_womens']=$this->m_form->get_home_course_women();
			// $this->LoadView('home',$viewdata);
		// else:
			// redirect(base_url().'dashboard');
		// endif;
			$viewdata['mens']=$this->Dmodel->get_tbl_whr_row('parents',1);
			$viewdata['womens']=$this->Dmodel->get_tbl_whr_row('parents',2);
			$viewdata['course_mens']=$this->m_form->get_home_course_men();
			$viewdata['course_womens']=$this->m_form->get_home_course_women();
			$this->LoadView('home',$viewdata);
		
		}
		
	}

