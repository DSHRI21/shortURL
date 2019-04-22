<?php 
class User extends MY_Controller {
	
	public function index(){
		$this->load->helper('form');
		$this->load->view('user/index');
	}

	public function short_url(){
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('url', 'url', 'required|trim' );
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

		if($this->form_validation->run()){
			$url = $this->input->post('url');
			
			$this->load->model('urlshortner');
			$shortenUrl = $this->urlshortner->get_short_url($url);
			if( $shortenUrl ){
				$this->load->view('user/index',['oUrl'=>$url,'sUrl'=>$shortenUrl]);
			}else{
				$this->load->view('user/index',['error'=>'Something went wrong.']);
			}

		}else{
			$this->load->view('user/index',['error'=>'Something went wrong.']);
		}
	}
}