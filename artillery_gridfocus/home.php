	<?php get_header(); ?>
<div id="mid" class="fix">
	<div id="mainCol" class="fix">
	<?php query_posts('posts_per_page=10'); ?>
	<?php if (have_posts()) : ?>
	<?php $counter = 0; ?>
	<?php while (have_posts()) : the_post(); ?>
	<?php if(in_category(55)): continue; endif; ?>
		<div class="post <?php if($counter == 0){ echo 'first'; } ?>" id="post-<?php the_ID(); ?>">
			<div class="postMeta"><span class="date"><?php if($counter == 0){ the_time('j.m.'); } else{ the_time('j.m'); } ?></span><?php if($counter != 0){ ?><span class="comments"><?php comments_popup_link('0', '1', '%'); ?></span><?php }; ?></div>
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h2>
			<div class="entry">
				<p><?php the_excerpt(); ?></p>
			</div>
		</div>
		<?php $counter++; ?>
		<?php endwhile; ?>
		<?php else : ?>
		<div class="post">
			<div class="postMeta"><span class="date">Keine Resultate</span></div>
		<h2>Kein passendes Resultat gefunden</h2>
			<div class="entry">
			<p>You seem to have found a mis-linked page or search query with no associated results. Please trying your search again. If you feel that you should be staring at something a little more concrete, feel free to email the author of this site or browse the archives.</p>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<?php include (TEMPLATEPATH . '/elements/second.php'); ?>
	<?php include (TEMPLATEPATH . '/elements/third.php'); ?>
</div>
<?php get_footer(); ?>