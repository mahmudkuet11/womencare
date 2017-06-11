<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','official')?></p>
	<?php
		return;
	}
?>


<?php if ( have_comments() ) : ?>
	
    <div class="user-comments mbs">
        <div class="clearfix">
            <h3 class="col-title"> <?php comments_number(__('No Comment','official'), __('1 Comment','official'), __('% Comments','official'));?></h3>
            <span class="liner"></span>
        </div>
                        
         
        <div class="navigation">
            <div class="prv"><?php previous_comments_link() ?></div>
            <div class="nxt"><?php next_comments_link() ?></div>
        </div>

    
        <ul class="comment-list clearfix">
            <?php wp_list_comments(array('avatar_size' => 80)); ?>
        </ul>
	
    </div><!-- user comments -->
    
 <?php else : // this is displayed if there are no comments so far ?>

		

<?php endif; ?>


<?php if ( comments_open() ) : ?>

<div class="clearfix mbs">
    <div class="clearfix">
        <h3 class="col-title"><?php _e('LEAVE A REPLY','official')?></h3>
        <span class="liner"></span>
    </div>


                    
<?php
	
		//Custom Fields
		$fields =  array(
			
			'author' => '<div class="grid_4 alpha mb"><input class="inputer" id="author" name="author" value="' . esc_attr($comment_author) . '" type="text" placeholder="'. __('Your Name *','official') .'" required /></div>',
			
			'email' => '<div class="grid_4 mb"><input class="inputer" type="email" name="email" id="email" value="' . esc_attr($comment_author_email) . '" placeholder="'. __('Your Email *','official') .'" /></div>',  
			
			'url' => '<div class="grid_4 omega mb"><input class="inputer" type="text" name="url" id="url" value="' . esc_attr($comment_author_url) . '" placeholder="'. __('Website','official') .'" /></div>',
		);

		
		//Comment Form Args
        $comments_args = array(
			'fields' => $fields,
			'comment_notes_before' => '<p class="comment-notes">'. __('Your email address will not be published. Required fields are marked','official').' <span class="required">*</span></p>',
			'comment_field' => '<textarea class="inputer" id="comment" name="comment" rows="8" placeholder="'. __('Your Message *','official') .'" required></textarea>',
			'label_submit' => __('Submit comment','official'),
			'title_reply' => '',
			'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( '<a href="%1$s" aria-label="Logged in as %2$s. Edit your profile.">Logged in as %2$s</a>. <a href="%3$s">Log out?</a>','official'), get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( get_the_ID() ) ) ) ) . '</p>'     

		);
		
		// Show Comment Form
		comment_form($comments_args); 
	?>
	
    </div><!-- form -->
    
<?php else: ?>

	<p class="nocomments"><?php _e('Comments are closed.','official') ?></p>

<?php endif; // if you delete this the sky will fall on your head ?>