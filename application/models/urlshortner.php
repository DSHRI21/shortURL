<?php 
class Urlshortner extends CI_Model {
	
	public function get_short_url($url){
		$short_url = substr(md5($url.mt_rand()),0,10);

		$data = array(
	        'original_url' => $url,
	        'shorten_url' => $short_url,
	        'created' => date('Y-m-d H:i:s')
		);

		$this->db->insert('urls', $data); 
		if($this->db->affected_rows()){
			return $short_url;
		}
	}
}