	<?php get_header(); ?>
<div id="mid" class="fix wide">
	<div id="mainCol" class="fix"><a name="main"></a>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="postMeta"><span class="date">Paged<?php edit_post_link(' (Edit)', '', ''); ?></span></div>
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h2>
			<div class="entry">
				<p><?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?></p>
			</div>
		</div>
		<?php endwhile; else: ?>
		<div class="post">
			<div class="postMeta"><span class="date">We're sorry!</span></div>
		<h2>No matching result</h2>
			<div class="entry">
			<p>You seem to have found a mis-linked page or search query with no associated results. Please trying your search again. If you feel that you should be staring at something a little more concrete, feel free to email the author of this site or browse the archives.</p>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<?php include (TEMPLATEPATH . '/elements/third.php'); ?>
</div>
<?php get_footer(); ?>