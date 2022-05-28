<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Multi-Lingua Library Function
| By: I. Kennedy Yinusa
| https://about.me/iyinusa
*/

if (!function_exists('_ph')) {
	function _ph($phrase = '') {
		$CI	=&	get_instance();
		$CI->load->library('session');
		$CI->load->model('Crud');
		
		// check if language is in session
		$current_lang = $CI->session->userdata('current_language');
		if(!$current_lang) {
			$current_lang = 'english';
			$CI->session->set_userdata('current_language', $current_lang);	// register default language
		}
		
		// now check if phrase exit
		$check_phrase = $CI->Crud->read_field('phrase', $phrase, 'language', $current_lang);
		if($check_phrase !== '') {
			$result = $check_phrase;
		} else {
			// register the phrase	
			//===get nicename and convert to seo friendly====
			$nicename = strtolower($phrase);
			$nicename = preg_replace("/[^a-z0-9_\s-]/", "", $nicename);
			$nicename = preg_replace("/[\s-]+/", " ", $nicename);
			$nicename = preg_replace("/[\s_]/", "_", $nicename);
			//================================================
			// create readable language phrase
			$lang_phrase = ucwords(str_replace("_", " ", $nicename));
			
			// now register in database, if not exit
			$CI->Crud->create('language', array('phrase' => $nicename, $current_lang => $lang_phrase));
			$result = $lang_phrase;
		}
		
		return $result;
	}
}

if (!function_exists('_translate')) { // use Google Translator
	function _translate($text = '', $src = '', $target = '') {
		$result = '';
		
		if($text && $src && $target) {
			$apiKey = 'AIzaSyBVr7w0HzbOhjlVanMaWNQD1iB57Eo9_w4';
			$url = 'https://www.googleapis.com/language/translate/v2?key=' . $apiKey . '&q=' . rawurlencode($text) . '&source='. $src.'&target='.$target;
		
			$handle = curl_init($url);
			curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($handle);                 
			$responseDecoded = json_decode($response, true);
			$responseCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
			curl_close($handle);
			
			if($responseCode == 200) {
				$result = $responseDecoded['data']['translations'][0]['translatedText'];
			}
		}
		
		return $result;
	}
}

if (!function_exists('_langCode')) { // get short code for language
	function _langCode($text = '') {
		$result = '';
		
		if($text) {
			$text = strtolower($text);
			
			$language = file_get_contents(base_url('assets/js/language.js'));
			$language = json_decode($language);
			$ct = 1;
			foreach($language->data->languages as $lang) {
				$langName = $lang->name;
				$langCode = $lang->language;
				
				if($text == strtolower($langName)) {
					$result = $langCode;
					break; // stop the loop, one code is retrieved 
				}
				$ct += 1;
			}
		}
		
		return $result;
	}
}
