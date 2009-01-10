	<?php get_header(); ?>
<div id="mid" class="fix wide">
	<div id="mainCol" class="fix"><a name="main"></a>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="postMeta fix"><span class="date"><?php the_time('M j, Y') ?><?php edit_post_link(' (Edit)', '', ''); ?></span></div>
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h2>
			<div class="entry">
				<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
				<?php echo "<div class='add_this'><script type=\"text/javascript\">var addthis_pub = \"wiederkehr\";</script><a href=\"http://www.addthis.com/bookmark.php\" onmouseover=\"return addthis_open(this, '', '".urlencode(get_permalink())."', '".urlencode(get_the_title($id))."')\" onmouseout=\"addthis_close()\" onclick=\"return addthis_sendto()\"><img src=\"http://s7.addthis.com/static/btn/lg-share-en.gif\" width=\"125\" height=\"16\" border=\"0\" alt=\"Bookmark and Share\" /></a><script type=\"text/javascript\" src=\"http://s7.addthis.com/js/152/addthis_widget.js\"></script></div>"; ?>
			</div>
			<?php $postTags = get_the_tags(); ?>
			<?php $postCats = get_the_category(); ?>
		</div>
		<?php comments_template(); ?>
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
	<?php include (TEMPLATEPATH . '/elements/single_third.php'); ?>
</div>
<?php get_footer(); ?>