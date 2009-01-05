	<?php get_header(); ?>
<div id="mid" class="fix">
	<div id="mainCol" class="fix"><a name="main"></a>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="postMeta fix"><span class="date"><?php the_time('M j, Y') ?><?php edit_post_link(' (Edit)', '', ''); ?></span></div>
			<h2>404 Boulevard</h2>
			<div class="entry">
				<p>Oops. Something obviously isn't right if you're reading this. The URL you entered or followed no longer seems to exist, has been removed, or has been replaced. If you feel that this an error that needs to be addressed, feel free to contact the administrator of this website.</p>
			</div>
		</div>
		<?php comments_template(); ?>
		<?php endwhile; else: ?>
		<?php endif; ?>
	</div>
	<?php include (TEMPLATEPATH . '/elements/second.php'); ?>
	<?php include (TEMPLATEPATH . '/elements/third.php'); ?>
</div>
<?php get_footer(); ?>