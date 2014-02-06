<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class map extends CI_Controller {
	
	public function getAllMapBranches(){
		$coords[] = array('lat' => '14.574084', 'lang' => '-958.952268', 'branch_desc' => "boni to dre!!");
		$coords[] = array('lat' => '14.541299', 'lang' => '121.019661', 'branch_desc' => "Alpha land!!");
		// $coords[1]['lat'] = '14.541299';
		// $coords[1]['lang'] = '121.019661';
		// $coords[1]['branch_desc'] = 'Alpha land!!';
		
		// print_r($coords);
		
		
		echo (json_encode($coords));
	}
}
