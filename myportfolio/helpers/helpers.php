<?php


define('as_portfolio_prifix', 'as_port_');


$theme_option = get_template_directory() .'/theme_options/cs-framework.php';

if (file_exists($theme_option)) {
	require_once $theme_option;
}


function as_portfolio_format_comment($comment, $args, $depth){

	if ($depth > 1) {
		echo '<ul class="comments-reply">';
	}
	$com_class = get_comment_class();
	$com_class[0] = 'as_comment';
	?>

    <li class="<?php echo implode(' ', $com_class); ?>" id="comment-<?php comment_ID() ?>">
        <!-- Comment Starts -->
        <div class="comment">
        	<?php if ( $args['avatar_size'] != 0 ) {
        		?>
		            <img class="comment-avatar pull-left" alt="<?php echo $comment->comment_author; ?>" src="<?php echo get_avatar_url( $comment->comment_author_email, array(
			                'size'           => 100,
			        ) ); ?>">
		                
	       	 	<?php
            }  ?>
            <div class="comment-body">
                <div class="meta-data">
                    <span class="comment-author"><?php echo $comment->comment_author; ?></span>
                    <span class="comment-date pull-right second-font"><?php echo get_comment_time( 'F j, Y' ); ?></span>
                </div>
                <div class="comment-content">
                <p class="second-font"><?php echo $comment->comment_content; ?></p></div>
                <div>
                	<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div>  
            </div>
        </div>
    <?php if ($comment->comment_approved == '0') : ?>
      <p><?php _e('Your comment is awaiting moderation.') ?></p>
    <?php endif; ?>

     </li>

	<?php
	if ($depth > 1) {
		echo '</ul>';
	}

}
