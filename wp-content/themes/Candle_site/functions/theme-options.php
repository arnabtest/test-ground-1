<?php
add_action('init','weaversweb_ftn_options');
if(!function_exists('weaversweb_ftn_options')){
	function weaversweb_ftn_options(){
		// If using image radio buttons,define a directory path
		$imagepath = get_stylesheet_directory_uri().'/images/'; 
		$options = array(
		/* ---------------------------------------------------------------------------- */
		/* Header Setting */
		/* ---------------------------------------------------------------------------- */
		array("name" => "Header Section",
			  "type" => "heading"),
		array("name" => "Choose Candle Site Header Logo",
			  "desc" => "Optimal size: 311px width by 84px height.",
			  "id"   => "candle_header_logo",
			  "std"  => "",
			  "type" => "upload"),
		/* ---------------------------------------------------------------------------- */
		/* Social media  Setting */
		/* ---------------------------------------------------------------------------- */
		array("name" => "Social Media Section",
			  "type" => "heading"),
		array("name" => "Footer Facebook Link",
			  "desc" => "Footer Facebook Link",
			  "id"   => "footer_facebok_link",
			  "std"  => "",
			  "type" => "textarea"),
		array("name" => "Footer Twitter Link",
			  "desc" => "Footer Twitter Link",
			  "id"   => "footer_twitter_link",
			  "std"  => "",
			  "type" => "textarea"),
		array("name" => "Footer Instragram Link",
			  "desc" => "Footer Instragram Link",
			  "id"   => "footer_instragram_link",
			  "std"  => "",
			  "type" => "textarea"),
		/* ---------------------------------------------------------------------------- */
		/* Footer Setting */
		/* ---------------------------------------------------------------------------- */
		array("name" => "Footer Section",
			  "type" => "heading"),
		
		array("name" => "Choose Footer Logo",
			  "desc" => "Choose Footer Logo",
			  "id"   => "candle_footer_logo",
			  "std"  => "",
			  "type" => "upload"),
		array("name" => "Footer Logo Short Text",
			  "desc" => "Footer Logo Short Text",
			  "id"   => "footer_logo_short_text",
			  "std"  => "",
			  "type" => "text"),	 
		array("name" => "Footer Social icon heading Text",
			  "desc" => "Footer Social icon heading Text",
			  "id"   => "footer_social_icon_text_text",
			  "std"  => "",
			  "type" => "text"),	  
	    array("name" => "Footer Facebook Icon image",
			  "desc" => "Footer Facebook Icon image",
			  "id"   => "footer_facebook_icon",
			  "std"  => "",
			  "type" => "upload"),   
		array("name" => "Footer Twitter Icon image",
			  "desc" => "Footer Twitter Icon image",
			  "id"   => "footer_twitter_icon",
			  "std"  => "",
			  "type" => "upload"), 
	    array("name" => "Footer Instragram  Icon image",
			  "desc" => "Footer Instragram  Icon image",
			  "id"   => "footer_instragram_icon",
			  "std"  => "",
			  "type" => "upload"),
		array("name" => "Footer First Menu Heading",
			  "desc" => "Footer First Menu Heading",
			  "id"   => "footer_first_menu_heading",
			  "std"  => "",
			  "type" => "text"), 
		array("name" => "Footer Contact Information  Heading",
			  "desc" => "Footer Contact Information  Heading",
			  "id"   => "footer_contact_information_heading",
			  "std"  => "",
			  "type" => "text"),
		array("name" => "Footer Location Short Text",
			  "desc" => "Footer Location Short Text",
			  "id"   => "footer_location_short_text",
			  "std"  => "",
			  "type" => "text"),	
		array("name" => "Footer Phone Number",
			  "desc" => "Footer Phone Number",
			  "id"   => "footer_Phone_Number",
			  "std"  => "",
			  "type" => "text"),  
	    array("name" => "Footer Email Address",
			  "desc" => "Footer Email Address",
			  "id"   => "footer_email_address",
			  "std"  => "",
			  "type" => "text"),
		array("name" => "Footer Newsletter  Heading",
			  "desc" => "Footer Newsletter  Heading",
			  "id"   => "footer_newsletter_heading",
			  "std"  => "",
			  "type" => "text"),
		array("name" => "Bottom Copyright",
			  "desc" => "Enter Copyright Text Content",
			  "id"   => "candle_footer_copyright",
			  "std"  => "",
			  "type" => "text"),
				
			);		
		weaversweb_ftn_update_option('of_template',$options);
		}
	}
?>