
<?php echo get_post_meta($id,'mpsp_slide_nav_button_position',true); ?>
<style>
.owl-pagination{
}
.owl-buttons{
  color:#333333;
  margin-bottom: -20px;
}



</style>






<div id="mpsp_wrapper" style= " background-color:#BDC3C7; padding:10px; margin:40px; border-radius:3px; width:<?php echo get_post_meta($id,'mpsp_slide_custom_width',true); ?>;  <?php echo $mpsp_slide_gradient; ?>    ">


    <h2 align="center"style="width:100%;

    background: #ffffff;
background: -moz-linear-gradient(top,  #ffffff 0%, #e5e5e5 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#e5e5e5));
background: -webkit-linear-gradient(top,  #ffffff 0%,#e5e5e5 100%);
background: -o-linear-gradient(top,  #ffffff 0%,#e5e5e5 100%);
background: -ms-linear-gradient(top,  #ffffff 0%,#e5e5e5 100%);
background: linear-gradient(to bottom,  #ffffff 0%,#e5e5e5 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e5e5e5',GradientType=0 );

 height:;    display:<?php echo get_post_meta($id,'mpsp_slide_main_head_bar',true); ?>;  border-radius:3px;">
     <?php echo get_post_meta($id,'mpsp_slide_main_heading',true); ?>
   </h2> 




  
             
              <div id="<?php echo 'mpsp_id'.$id; ?>" class="owl-carousel">
                
          <?php


$mpsp_posts_key = get_post_meta($id,'mpsp_posts_key',true);

              // WP_Query arguments
                  $args = array (
                    'post_type'              => 'post', 
                    'posts_per_page'         => get_post_meta($id,'mpsp_posts_visible',true),
                    'order'                  => get_post_meta($id,'mpsp_posts_order',true),
                    'orderby'                => get_post_meta($id,'mpsp_posts_orderby',true),
                  );

// The Query
                  $the_query = new WP_Query( $args );



          while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <div> 
         <h1 id="mpsp_title" align="center" style="font-size:28px;"><a href="<?php the_permalink() ?>" target="_blank" style= "color:#333333;  text-decoration:none;"><?php the_title(); ?>
         </a></h1>
         
	     
       <div class="mpsp_img" style="display:none;float:left; margin-right:15px;margin:5px;">

        <?php  
       if ( has_post_thumbnail() ) {

               echo get_the_post_thumbnail($post->ID,get_post_meta($id,'mpsp_posts_img_size',true));
              }
                else {
                   
               // echo  wp_get_attachment_image($attachment_id,get_post_meta($id,'mpsp_posts_img_size',true));
                       
              }
          ?>
        
       
        <!-- Post Featured Image --></div>
       <a href="<?php the_permalink() ?>" target="_blank" style="text-decoration:none; color:#333333;"><p id="mpsp_desc" style="margin:5px;">
      <?php
               $excerpt = get_the_excerpt();
               $word_limit = get_post_meta($id,'mpsp_posts_Desc_limit',true);
              echo string_limit_words_mpsp($excerpt,$word_limit,$id);
            ?> <span style='color:red;'> Read more...</span> </p>


          <!-- Linked Post Description  -->
         </a>
 </div>

<?php endwhile;?>


               
            </div>
          </div>

            <script>

            jQuery(document).ready(function() {
 
         jQuery("<?php echo '#mpsp_id'.$id; ?>").owlCarousel({
              autoPlay : <?php echo get_post_meta($id,'mpsp_slide_autoplay',true); ?>,
              stopOnHover : true,
              navigation: <?php echo  get_post_meta($id,'mpsp_slide_navigation',true); ?>,
              paginationSpeed : 1000,
              goToFirstSpeed : 2000,
              singleItem : true,
              autoHeight : true,
              slideSpeed : <?php echo  get_post_meta($id,'mpsp_slide_speed',true); ?>,
              transitionStyle: <?php echo  get_post_meta($id,'mpsp_slide_transistion',true); ?>,
              pagination : <?php echo  get_post_meta($id,'mpsp_slide_pagination',true); ?>,
              paginationNumbers :<?php echo  get_post_meta($id,'mpsp_slide_pagination_numbers',true); ?>,
              navigationText : ["<b><</b>", "<b>></b>"],

        });
       });

        </script>