<?php 
// Template Name: Blank Page
get_header('blank'); 
?>


		<div class="page-content">
           <div class="row clearfix">
           
           
  					<?php 
					
					if ( have_posts() ) : the_post(); 
                    
                  		the_content(); 
                        
                    endif;
					wp_reset_query(); 
					
					?>

            </div><!-- end row -->    
		</div><!-- end page-content -->
        
        
        
    </div><!-- end layout -->
	</div><!-- end frame -->
    
        
	<?php wp_footer(); ?>


</body>
</html>