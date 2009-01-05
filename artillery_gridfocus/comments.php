<div id="comments_wrapper">
	<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				<p class="nocomments">Dieser Beitrag ist passwortgeschützt.<p>
				
				<?php
				return;
            }
        }
		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
	?>
<!-- You can start editing here. -->
	<?php if ($comments) : ?>
	<div id="comments" class="section">
		<p><?php comments_number('Keine Kommentare', 'Ein Kommentar', '% Kommentare' );?>, <a href="#respond" title="Schreibe einen Kommentar">Schreibe einen Kommentar</a> oder <a href="<?php trackback_url(true); ?>" rel="trackback">Pingback</a></p>
	</div> 
	<ol class="commentslist">
	<?php foreach ($comments as $comment) : ?>
	<?php if (get_comment_type() == "comment"){ ?>
	<li class="<?php if ($comment->comment_author_email == "your@email.com") echo 'author'; else if ($comment->comment_author_email == "another@email.com") echo 'author'; else echo $oddcomment; ?> item" id="comment-<?php comment_ID() ?>">
		<div class="fix">
		<div class="author_meta">
			<p class="author_meta"><span class="user"><?php comment_author_link() ?></span> <span class="comment_edit"><?php edit_comment_link('Edit','(',')'); ?></span></p>
		</div>
		<div class="comment_text">
			<?php if ($comment->comment_approved == '0') : ?>
			<em>Dein Kommentar muss erst freigeschaltet werden.</em>
			<?php endif; ?>
			<?php comment_text() ?>
		</div>
		<p class="post_meta"><a href="#comment-<?php comment_ID() ?>" title="Comment Permalink"><?php comment_date('M jS, Y') ?></a></p>
		</div>
	</li>	
	<?php /* Changes every other comment to a different class */ if ('alt' == $oddcomment) $oddcomment = ''; else $oddcomment = 'alt'; ?>
	<?php } ?>
	<?php endforeach; /* end for each comment */ ?>
	</ol>
	<ol class="pingslist">
	<?php foreach ($comments as $comment) : ?>
	<?php if (get_comment_type() != "comment"){ ?>
		<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
		<div class="author_meta"><?php comment_author_link() ?> - <?php comment_date('M jS, Y') ?></div>
		</li>
	<?php /* Changes every other comment to a different class */ if ('alt' == $oddcomment) $oddcomment = ''; else $oddcomment = 'alt'; ?>
	<?php } ?>
	<?php endforeach; /* end for each comment */ ?>
	</ol>
	
 	<?php else : // this is displayed if there are no comments so far ?>
	<div id="comments" class="section">
		<p><?php comments_number('Keine Kommentare bis jetzt, schreibe doch einen', 'Ein Kommentar bis jetzt, schreibe doch einen', '% Kommentare bis jetzt, schreibe doch einen' );?>, <a href="#respond" title="Schreibe einen Kommentar">Kommentar</a> oder <a href="<?php trackback_url(true); ?>" rel="trackback">Pingback</a></p>
		</div>
  	<?php if ('open' == $post->comment_status) : ?> 
	 <?php else : // comments are closed ?>
	<div id="comments_closed">
		<p class="nocomments">Kommentare sind geschlossen.</p>
	</div>
	<?php endif; ?>
	<?php endif; ?>
	<?php if ('open' == $post->comment_status) : ?>
		<h3 id="respond">Antworte auf <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">&laquo;<?php the_title(); ?>&raquo;</a></h3>
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p>Du musst <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">eingeloggt</a> sein um einen Kommentar schreiben zu können.</p>
	<?php else : ?>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	<?php if ( $user_ID ) : ?>
		<p>Eingeloggt als <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out">Ausloggen &raquo;</a></p>
	<?php else : ?>
		<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
			<label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label></p>
			<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
				<label for="email"><small>Mail <?php if ($req) echo "(required)"; ?></small></label></p>
				<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
					<label for="url"><small>Website</small></label></p>
	<?php endif; ?>
		<p><textarea name="comment" id="comment" cols="60" rows="10" tabindex="4"><?php if (function_exists('quoter_comment_server')) { quoter_comment_server(); } ?></textarea></p>
		<p><input name="submit" type="image" src="<?php bloginfo('template_directory'); ?>/img/btn_submit.gif" alt="Submit" id="submit" tabindex="5" value="Submit" />
		<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
	<?php do_action('comment_form', $post->ID); ?>
		</form>
	<?php endif; // If registration required and not logged in ?>
	<?php endif; // if you delete this the sky will fall on your head ?>
</div><!-- end comments_wrapper -->