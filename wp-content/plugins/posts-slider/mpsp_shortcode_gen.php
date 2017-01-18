<?php

/*
* Posts Slider Plugin Shortcode Generator.
* Creates shortcode by exracting post-ID.
*/

function string_limit_words_mpsp($string,$word_limit,$id){

  $words = explode(' ', $string, (1 + get_post_meta($id,'mpsp_posts_Desc_limit',true)));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
  
}

add_shortcode( 'mpsp_posts_slider', 'mpsp_shortcode_generate' );
function mpsp_shortcode_generate($atts, $content){
   ob_start();
  
	  extract( shortcode_atts( array(

			'id' => null,

		), $atts ) );



   include 'mpsp_slider_generator.php';


   return ob_get_clean();

	

}




 ?>