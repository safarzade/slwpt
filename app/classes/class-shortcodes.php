<?php

class ShortCodes{

	public static function member_content_handler($atts,$content='') {
		$options = Options_Panel::load();
		if(isset($options['member_content_active']) && intval($options['member_content_active']) == 0){
			return $content;
		}
		$args = shortcode_atts(array(
			'a' => 1,
			'b' => 'subscriber'
		),$atts);
		//do_shortcode();

	if(!empty($content)){
		if(is_user_logged_in()){
			return $content;
		}
		return '<div class="member_only_contents"><p>این محتوا برای کاربران عضو شده در سایت در دسترس می باشد.</p></div>';
	}
	}
}