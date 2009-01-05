	<?php get_header(); ?>
<div id="mid" class="fix wide">
	<div id="mainCol" class="fix"><a name="main"></a>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="postMeta fix"><span class="date"><?php the_time('M j, Y') ?><?php edit_post_link(' (Edit)', '', ''); ?></span></div>
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h2>
			<div class="entry">
				<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
			</div>
			<div class="postMeta">
				<span class="author"><?php the_author_posts_link(); ?> (<?php the_author_posts(); ?>)</span>
			</div>
			<?php $postTags = get_the_tags(); ?>
			<?php $postCats = get_the_category(); ?>
		</div>
		<?php comments_template(); ?>
		<?php endwhile; else: ?>
		<div class="post">
			<h2>No matching results</h2>
			<div class="entry">
				<p>You seem to have found a mis-linked page or search query with no associated results. Please trying your search again. If you feel that you should be staring at something a little more concrete, feel free to email the author of this site or browse the archives.</p>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<?php include (TEMPLATEPATH . '/elements/single_third.php'); ?>
</div>
<?php get_footer(); ?>