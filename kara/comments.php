<?php

if (have_comments()) :

?>
<section class="comments">
  <h4><?php printf(_n('1 Comment', '%1$s Comments', get_comments_number() ), number_format_i18n( get_comments_number() ), '&#8220;' . get_the_title() . '&#8221;' ); ?></h4>
  <ol class="commentlist">
    <?php wp_list_comments();?>
  </ol>

  <div class="navigation">
    <div class="alignleft"><?php previous_comments_link(); ?></div>
    <div class="alignright"><?php next_comments_link(); ?></div>
  </div><?php

else :

?>
  <h4><?php _e('0 Comments'); ?></h4><?php

endif;

if (comments_open()) :

?>
  <h4><?php comment_form_title( __('Leave a Comment'), __('Leave a Reply to %s' ) ); ?></h4>
  <small><?php cancel_comment_reply_link() ?></small><?php

  if(get_option('comment_registration') && !is_user_logged_in()) :

?>
  <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url( get_permalink() )); ?></p><?php

  else :

?>
  <form action="<?php bloginfo('url'); ?>/wp-comments-post.php" method="post" id="comment-form"><?php

    if(is_user_logged_in()) :

?>
    <p><?php printf(__('Logged in as <a href="%1$s">%2$s</a>.'), get_edit_user_link(), $user_identity); ?> <a href="<?= wp_logout_url(get_permalink()); ?>" title="<?php esc_attr_e('Log out of this account'); ?>"><?php _e('Log out &raquo;'); ?></a></p><?php

    else :

?>
    <p><label><?php _e('Name'); if ($req) _e('*'); ?><br>
      <input type="text" name="author" id="comment-name" value="<?= esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "required"; ?>></label></p>
    <p><label><?php _e('Email'); if ($req) _e('*'); ?><br>
      <input type="email" name="email" id="comment-email" value="<?= esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "required"; ?>></label></p>
    <p><label><?php _e('Website'); ?><br>
      <input type="text" name="url" id="comment-url" value="<?= esc_attr($comment_author_url); ?>" size="22" tabindex="3"></label></p><?php

    endif;

?>
    <textarea name="comment" id="comment-text" tabindex="4"></textarea>
    <p><input name="submit" type="submit" id="comment-submit" tabindex="5" value="<?php esc_attr_e('Submit Comment'); ?>"><?php comment_id_fields(); ?></p>
    <?php do_action('comment_form', $post->ID); ?>
  </form><?php

  endif;

?>
</section><?php

endif;

?>
