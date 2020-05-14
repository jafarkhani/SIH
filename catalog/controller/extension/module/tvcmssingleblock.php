<?php
class ControllerExtensionModuleTvcmssingleblock extends Controller {
	public function index($setting) {
		if($this->config->get('theme_default_directory') == "opc_electronics_salora_2301"){
			
			if(!empty($setting['status'])){
				$this->load->model('tool/image');
				$languages_id 						= $this->config->get('config_language_id');
				$status 							= $this->status();
				$data['status_link'] 				= $status['link'];
				$data['status_image'] 				= $status['image'];
				$data['status_title'] 				= $status['title'];
				$data['status_shortdescription'] 	= $status['shortdescription'];
				$data['status_description'] 		= $status['description'];
				$data['status_buttoncaption'] 		= $status['buttoncaption'];

				$data['status_main_image'] 			= $status['main_image'];
				$data['status_main_title'] 			= $status['main_title'];
				$data['status_main_sub_title'] 		= $status['main_sub_title'];
				$data['status_main_description'] 	= $status['main_description'];

				if(!empty($data['status_main_image'])){
					$data['main_image']	= $this->model_tool_image->resize($setting['tvcmssingleblock'][$languages_id]['main_image'], $this->config->get('tvcmscustomsetting_tvcmssingleblock_img_width'), $this->config->get('tvcmscustomsetting_tvcmssingleblock_img_height'));
				}
				if(!empty($data['status_main_title'])){
					$data['main_title'] = $setting['tvcmssingleblock'][$languages_id]['main_title'];
				}
				if(!empty($data['status_main_sub_title'])){
					$data['main_short_description'] = $setting['tvcmssingleblock'][$languages_id]['main_short_description'];
				}
				if(!empty($data['status_main_description'])){
					$data['main_description'] = $setting['tvcmssingleblock'][$languages_id]['main_description'];
				}			   

			   
				if(!empty($data['status_link'])){
					$data['tvcmssingleblock_link'] 	= $setting['tvcmssingleblock_link'];
				}
				if(!empty($data['status_image'])){
					$data['image'] 					= $this->model_tool_image->resize($setting['tvcmssingleblock'][$languages_id]['image'], $this->config->get('tvcmscustomsetting_tvcmssingleblock_img_width'), $this->config->get('tvcmscustomsetting_tvcmssingleblock_img_height'));
				}
				if(!empty($data['status_title'])){
					$data['title'] 					= $setting['tvcmssingleblock'][$languages_id]['title'];
				}
				if(!empty($data['status_shortdescription'])){
					$data['short_description'] 		= $setting['tvcmssingleblock'][$languages_id]['short_description'];
				}
				if(!empty($data['status_description'])){
					$data['description'] 			= $setting['tvcmssingleblock'][$languages_id]['description'];
				}
				if(!empty($data['status_buttoncaption'])){
					$data['button_caption'] 		= $setting['tvcmssingleblock'][$languages_id]['button_caption'];
				}

				return $this->load->view('extension/module/tvcmssingleblock', $data);
			}
			
		}
	}
	protected function status(){
		return $this->Tvcmsthemevoltystatus->singleblock();
	}
}
