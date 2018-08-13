
<?php
if ( post_password_required() ) {
    return;
}
?>
<h3 class="comments-heading uppercase">
<?php
    $comments_number = get_comments_number();
    if ( '0' === $comments_number ) {
        /* translators: %s: post title */
        echo 'NO Comment';
    } else if ( '1' === $comments_number ) {
        /* translators: %s: post title */
        echo '1 Comment';
    } else {
        echo $comments_number.' Comments';
    }
?>
</h3>
<ul class="comments-list">
    <?php wp_list_comments('type=comment&callback=as_portfolio_format_comment'); ?>
</ul>
<div class="comments-form" id="respond">

    <h3 class="comments-heading uppercase add-comment">Add a comment</h3>
<?php 

$args = array(
    'comment_field' => '<div class="input-field second-font">
                            <i class="fa fa-comments prefix"></i>
                            <textarea id="comment" name="comment" class="materialize-textarea" required></textarea>
                            <label for="comment">Your comment</label>
                        </div>',
    'class_submit' => 'btn font-weight-500',
    'title_reply_before' => '<span class="as_portfolio_title_reply">',
    'title_reply_after' => '</span>',
    'logged_in_as' => '<span class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</span>',
  'fields' => apply_filters( 'comment_form_default_fields', array(

    'author' =>
      '<div class="input-field second-font">
            <i class="fa fa-user prefix"></i>
            <input id="author" name="author" type="text" class="validate" required>
            <label class="font-weight-400" for="author">' . __( 'Name', 'as' ) . '</label>
        </div>',

    'email' =>'<div class="input-field second-font">
            <i class="fa fa-envelope prefix"></i>
            <input value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" id="email" type="email" name="email" class="validate" required>
            <label for="email">Your Email</label>
        </div>',   
    )

));

comment_form($args);
?>

</div>