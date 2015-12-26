

<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">Введите пароль.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = '';
?>

<br />
<?php if ($comments) : ?>

	<h4 id="comments">Discussion. <?php comments_number('no comments', '1 comment:', '% comments:' );?></h4>

    <div class="commentlist alert alert-success">
		<?php wp_list_comments('avatar_size=64'); ?>
	</div>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>
<br />
<div id="respond">
<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>Пожалуйста,  <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">зарегистрируйтесь </a> для комментирования.</p>
<?php else : ?>

<!--тут форма-->
<h4>Оставить комментарий</h4>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="form">

	<?php if ( $user_ID ) : ?>
	
	<p>Hello, <span><a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a></span>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Выйти">Logout</a></p>
	
	<?php else : ?>
	
	<label>Your name*</label>
	<div class="input-prepend subscribe-form">
		<span class="add-on"><i class="icon-user"></i></span><input type="text" name="author" placeholder="Вася">
	</div>
				        
	<label>Your e-mail*</label>
	<div class="input-prepend subscribe-form">
		<span class="add-on"><i class="icon-envelope"></i></span><input type="text" name="email" placeholder="vasya@mail.ru">
	</div>
				        
	<label>Your website</label>
	<div class="input-prepend subscribe-form">
		<span class="add-on"><i class="icon-home"></i></span><input type="text" name="url" placeholder="http://vasya.ru">
	</div>
	
	<?php endif; ?>
	<label>Your message</label> <br>
	
	<textarea id="comment" name="comment"></textarea>
	
	
	
	<?php if( function_exists(checkbot_show) ) { checkbot_show(); } ?>
	<div class="subscribe-form"><input name="submit" type="submit" id="submit" tabindex="5" value="SEND"/>
	<?php comment_id_fields(); ?>
	</div>
	<?php do_action('comment_form', $post->ID); ?>

</form>
<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>