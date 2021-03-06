<?php

function mpsp_slider_settings($post){
    // $post is already set, and contains an object: the WordPress post
    global $post;
 //////////////////////////////////////////////////////////////////////////
                                                                        //  
                               //START                                 //
                                                                      //  
                                                                     //
    ///////  MAIN SETTINGS var assign BOX Starts HERE!!! /////////////

    //$example = get_post_meta($post->ID,'example',true);

    $mpsp_posts_bg_color = get_post_meta($post->ID,'mpsp_posts_bg_color',true);
    $mpsp_posts_heading_color = get_post_meta($post->ID,'mpsp_posts_heading_color',true);
    $mpsp_posts_description_color = get_post_meta($post->ID,'mpsp_posts_description_color',true);
    $mpsp_slide_speed = get_post_meta($post->ID,'mpsp_slide_speed',true);
    $mpsp_slide_transistion = get_post_meta($post->ID,'mpsp_slide_transistion',true);
    $mpsp_slide_single = get_post_meta($post->ID,'mpsp_slide_single',true);
    $mpsp_slide_autoplay = get_post_meta($post->ID,'mpsp_slide_autoplay',true);
    $mpsp_slide_pagination = get_post_meta($post->ID,'mpsp_slide_pagination',true);
    $mpsp_slide_pagination_numbers = get_post_meta($post->ID,'mpsp_slide_pagination_numbers',true);
    $mpsp_slide_main_head_bar = get_post_meta($post->ID,'mpsp_slide_main_head_bar',true);
    $mpsp_slide_main_heading = get_post_meta($post->ID,'mpsp_slide_main_heading',true);
    $mpsp_slide_navigation = get_post_meta($post->ID,'mpsp_slide_navigation',true);
    $mpsp_slide_nav_button_position = get_post_meta($post->ID,'mpsp_slide_nav_button_position',true);
    $mpsp_slide_nav_button_color = get_post_meta($post->ID,'mpsp_slide_nav_button_color',true);
    $mpsp_slide_custom_width = get_post_meta($post->ID,'mpsp_slide_custom_width',true);
    $mpsp_slider_id = get_post_meta($post->ID,'mpsp_slider_id',true);

    $mpsp_postid = $post->ID;



    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );


    ?>
   
  <style type="text/css">
    #mpsp_span{
      border: 1px solid grey;
      padding: 2px;
      font-size: 11px;
      margin-left: 5px;
    }

  </style>
	<div class='formLayout'> 
    <div id="mpsp_slider_settings">
    <input type='hidden' name='mpsp_slider_id' value='<?php echo $mpsp_postid; ?>'>

      <br>
      <br>
      <label for="mpsp_posts_bg_color">Background Color :</label>
      <input type="text" class='mpsp-color-picker' name="mpsp_posts_bg_color" value="<?php echo $mpsp_posts_bg_color; ?>">
    <p class='field_desc'> Set Background color of slider ( Set Clear for transparent)</p>
      <br>
      <label for="mpsp_posts_heading_color">Slider Heading Color :</label>
      <input type="text" class='mpsp-color-picker' name="mpsp_posts_heading_color" value="<?php echo $mpsp_posts_heading_color; ?>">
      <p class='field_desc'> Set color of headings ( Set Clear for transparent)</p>
      <br>

    <label for="mpsp_posts_description_color">Description Color :</label>
      <input type="text" class='mpsp-color-picker' name="mpsp_posts_description_color" value="<?php echo $mpsp_posts_description_color; ?>">
      <p class='field_desc'> Set color of text ( Set Clear for transparent)</p>
      <br>

      <label for="mpsp_slide_speed">Slide Speed :</label>
      <input type="number" name="mpsp_slide_speed" value="<?php echo $mpsp_slide_speed; ?>" placeholder="200" required>
      <br>
      <p class='field_desc'>This will be the speed of slides delay when auto slide enabled (In milliseconds)</p>
      <br>

   <p> <label for="mpsp_slide_transistion">Select Transition :</label>
    <select name="mpsp_slide_transistion">
      <option  value="false"

      <?php selected( 'false', $mpsp_slide_transistion); ?> >none</option>
      <option disabled value="'fade'"

      <?php  selected( "'fade'",$mpsp_slide_transistion ); ?> >fade</option>
      <option disabled >backSlide</option>
      <option disabled >goDown</option>
      <option disabled >fadeUp</option>
      </select><span id='mpsp_span'><a href='http://web-settler.com/posts-slider/' target='_blank'> This feature is only available in premium version.</span></a></p>
      <p class='field_desc'>Select transition for your slider (Slides movement animation style)</p>

      <br>
      <p><label for="mpsp_slide_single"> Carousel :</label>
      <select name="mpsp_slide_single">
        <option disabled>Enable </option>
        <option disabled selected value="true" 
                <?php selected( 'true', $mpsp_slide_single ); ?>

    >Disable</option>

      </select>
      <span id='mpsp_span'><a href='http://web-settler.com/posts-slider/' target='_blank'> This feature is only available in premium version.</span></a></p>
      <p class='field_desc'>When carousel is enabled more that one post is displayed in single slide.</p>
      <br>
      <label for="mpsp_slide_autoplay">Auto Play :</label>
      <select name="mpsp_slide_autoplay">
        <option  value="true"
<?php selected( "true", $mpsp_slide_autoplay ); ?>


        >Enable</option>
        <option selected  value="false"
<?php selected( "false", $mpsp_slide_autoplay ); ?>


        >Disable</option>

      </select>
      <p class='field_desc'>When auto play is enabled slides move automatically.</p>
      <br>


      <label for="mpsp_slide_pagination"> Pagination :</label>
      <select name="mpsp_slide_pagination">
        <option value="true"
<?php selected( "true", $mpsp_slide_pagination ); ?>


        >Enable</option>
        <option value="false"
<?php selected( "false",$mpsp_slide_pagination ); ?>


        >Disable</option>

      </select>
       <p class='field_desc'>Pagination is bullets to navigate through different slides.</p>
      <br>
      <label for="mpsp_slide_pagination_numbers">Pagination Numbers :</label>
      <select name="mpsp_slide_pagination_numbers">
        <option value="true"
<?php selected( "true", $mpsp_slide_pagination_numbers ); ?>


        >Enable</option>
        <option value="false"
<?php selected( "false",$mpsp_slide_pagination_numbers ); ?>


        >Disable</option>

      </select>
      <p class='field_desc'>Display numbers inside pagination bullets.</p>
      
      <br>
      <br>
      <label for="mpsp_slide_main_head_bar">Slider Title Bar :</label>
      <select name="mpsp_slide_main_head_bar">
        <option value=""
<?php selected( "", $mpsp_slide_main_head_bar ); ?>

        >Enable</option>
        <option value="none"
<?php selected( "none", $mpsp_slide_main_head_bar ); ?>


        >Disable</option>

      </select>
      <p class='field_desc'>Add title bar on your slider to give it a look of widget.</p>
      <br>
      <label for="mpsp_slide_main_heading">Slider Title Bar Text  :</label>
      <input type="text" name="mpsp_slide_main_heading" value="<?php echo $mpsp_slide_main_heading; ?>"style="width:130px;">
      <br>
      <p class='field_desc'>Text to display in slider title bar.</p>

      <br>
      <label for="mpsp_slide_navigation">Navigation Buttons</label>
      <select name="mpsp_slide_navigation">
        <option value="true" <?php selected( 'true', $mpsp_slide_navigation ); ?>>Enable</option>
        <option value="false" <?php selected( 'false', $mpsp_slide_navigation ); ?>>Disable</option>
      </select>
      <p class='field_desc'>Navigation buttons to navigate through slides (Previous/Next)</p>
      <br>
           <p> <label for="mpsp_slide_nav_button_position">Navigation Buttons Position :</label>
      <select  name="mpsp_slide_nav_button_position">
        <option disabled  value=""
<?php selected( "", $mpsp_slide_nav_button_position ); ?>

        >Default</option>
        <option disabled >Right</option>
        <option disabled >Left</option>

      </select><span id='mpsp_span'><a href='http://web-settler.com/posts-slider/' target='_blank'> This feature is only available in premium version.</span></a></p>
      <p class='field_desc'>Place navigation buttons at left/right/center of your slider.</p>
      <br>
      <label for="mpsp_slide_custom_width">Custom Slider Width :</label>
      <input type="text" placeholder="Leave blank for responsive slider" name="mpsp_slide_custom_width" value="<?php echo $mpsp_slide_custom_width; ?>" style="width:190px;">
      <br>
      <p class='field_desc'>Set fixed width for your slider (Leave this field empty for responsive slider)</p>
      <br>
     
    
    </div>
</div>


<style type="text/css">
  .field_desc{
      color:#636363;
      font-style: italic;
      font-size: 14px;
      margin-left: 260px;
    }
</style>


<?php 
}





 ?>