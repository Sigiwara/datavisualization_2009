<div id="midCol">
	<?php if(is_home()){ ?>
		<div class="middle_links">
			<h3>From our projects (german)</h3>
		<?php include (TEMPLATEPATH . '/elements/news.php'); ?>
		</div>
	<?php } ?>
	<?php if(!is_home()){ ?>
	<?php if(is_category()){ ?>
	<div class="middle_links intro">
		<h3><?php single_cat_title() ?></h3>
		<?php echo category_description() ?>
	</div>
	<?php }} ?>
</div>