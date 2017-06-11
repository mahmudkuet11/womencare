<?php 
// Template For Search
get_header(); 

global $thdglkr_blog_style,$thdglkr_blog_thumb_class,$thdglkr_blog_img,$thdglkr_blog_iframe_class;
$thdglkr_blog_style = 'small';
$thdglkr_blog_thumb_class = 'thumb-small fll';
$thdglkr_blog_img = 'blog1';
$thdglkr_blog_iframe_class = 'iframe-thumb fll';


?>


	<div class="breadcrumb-place">
            <div class="row clearfix">
                <h1 class="page-title"><?php _e('Search','official'); ?></h1>
                
                <div class="breadcrumbIn">
                	<span> <?php _e('You are here:','official'); ?> </span>
                    <ul>
                    	<li>
                            <a href="<?php echo home_url(); ?>" ><i class="icon-home"></i></a>
                        </li>
                        /
                        <li>
                        
                            <?php
                    
                                if (is_tag()){
                                
                                _e('Tag search for: ','official');
                                 echo single_tag_title('',FALSE);
                                
                                } elseif (is_search()){
                                    
                                    _e('Search for: ','official');
                                    echo get_search_query();
                                    
                                } elseif (is_category()){
                                    
                                    _e('Category: ','official'); echo single_cat_title('', false);
                                } elseif (is_day()){
                                    
                                    _e('Archive for: ','official'); echo get_the_time('d'); echo ' / ' . get_the_time('F');  echo ' / ' . get_the_time('Y');
                                    
                                } elseif (is_month()){
                                    
                                    _e('Archive for: ','official'); echo get_the_time('F'); echo ' / ' . get_the_time('Y');
                                    
                                } elseif (is_year()){
                                    
                                    _e('Archive for: ','official'); echo get_the_time('Y');
                                    
                                } elseif (is_author()){
                                    global $author;
                                    $userdata = get_userdata($author);
                                    _e('Articles posted by: ','official'); echo $userdata->display_name;
                                }
                      
                            ?>
                            
                        </li>
                           
                                
                            
                    </ul>
        		</div><!-- breadcrumb -->
        
            </div><!-- row -->
        </div><!-- breadcrumb -->

		<div class="page-content">
			<div class="row clearfix">
            
            	
                <?php if (_option('blog_sidebar','right')=='left'): ?>
                <!-- start sidebar -->
				<div class="grid_4 alpha sidebar">
                    
                        <?php 
						
							if ( ! dynamic_sidebar ( 'sidebar-blog' ) ){
								thdglkr_emptysidebar('Blog');
								}        				
						?>	
     
               
				</div><!-- grid 4 Sidebar -->
				<?php endif; ?>
                
                
				<div class="grid_8 posts">
					

					
                    <?php

			
					// begin the loop
					if ( have_posts() ) : while ( have_posts() ) : the_post();

					?>
			
						<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

								<div class="search-icons">
									<?php if($post->post_type == 'post') :?>
                                        <i class="icon-file-alt"></i>
                                    <?php elseif($post->post_type == 'page'):?>
                                        <i class="icon-file-text"></i>
                                    <?php elseif($post->post_type == 'portfolio'):?>
                                        <i class="icon-briefcase"></i>
                                    <?php endif; ?>
    							</div>
                                
 
                            <div class="content-two-third search-result">
                            <div class="meta-box">
                            
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                
                                <?php if($post->post_type == 'post') :?>
                                    <div class="meta-more">
                                        <span><i class="icon-user"></i> <?php the_author_posts_link(); ?></span>
                                        <span><i class="icon-time"></i><a href="<?php echo get_month_link(get_the_time('Y'), get_the_time('m')); ?>"><?php the_time(_option("date_format","jS M Y")); ?></a></span>
                                        <span><i class="icon-comments"></i> <?php comments_popup_link(__('No Comment','official'), __('1 Comment','official'), __('% Comments','official')); ?></span>
                                    </div><!-- meta date -->
                                <?php elseif($post->post_type == 'page'):?>
                                    <div class="meta-more">
                                        <span><i class="icon-search"></i><?php _e('in Pages','official'); ?></span>
                                    </div><!-- meta date -->
                                <?php elseif($post->post_type == 'portfolio'):?>
                                    <div class="meta-more">
                                        <span><i class="icon-search"></i> <?php _e('in Portfolio','official'); ?></span>
                                    </div><!-- meta date -->
                                <?php endif; ?>
                                
                            </div>
                            
                            <?php if (get_post_format()!='quote'): ?>
                            
                              
                                    <?php the_excerpt(); ?>
                            
                                 <?php if (_option('blog_more_button')==1):?>
                                    <a href="<?php the_permalink(); ?>" class="tbutton tbutton1 small"><span><?php echo _option('blog_button'); ?></span></a>
                                <?php endif; ?>
                            
                            
                            <?php endif; ?>
                            
                            </div>

                        </div><!-- post -->
                        
                
                    <?php endwhile; ?>
                    
                
                    <!-- PAGINATION -->
					<?php pagination($pages = '', $range = 4); ?>
                    <p class="hide"><?php posts_nav_link(); ?></p>
                    <!-- END PAGINATION -->
                    
                    
                
                    <?php else : ?>
                
                        <h3><?php _e('Not Found', 'official') ?></h3>
                
                    <?php endif; ?>

	

				</div><!-- grid 8 posts -->
				
                
                
                <?php if (_option('blog_sidebar','right')=='right'): ?>
                <!-- start sidebar -->
				<div class="grid_4 sidebar omega">
                    
                        <?php 
						
							if ( ! dynamic_sidebar ( 'sidebar-blog' ) ){
								thdglkr_emptysidebar('Blog');
								}        				
						?>	
     
               
				</div><!-- grid 4 Sidebar -->
				<?php endif; ?>
                 
                 
                 
			</div><!-- row -->


		</div><!-- end page content -->
        
        
  <?php get_footer(); ?>