<div id="midCol">
	<?php if(is_home()){ ?>
		<div class="middle_links">
			<h3>Cutting Edge</h3>
		<?php include (TEMPLATEPATH . '/elements/news.php'); ?>
		</div>
	<?php } ?>
	<?php if(!is_home()){ ?>
	<?php if(is_category()){ ?>
	<div class="middle_links intro">
		<h3><?php single_cat_title() ?></h3>
		<?php echo category_description() ?>
	</div>
	<?php } ?>
	<div id="browse_tabs">
		<ul class="tabs fix">
			<li><a class="taxonomy" href="#taxonomy"><span>Tag</span></a></li>
			<li><a class="chronograph" href="#chronograph"><span>Date</span></a></li>
			<li><a class="authors" href="#authors"><span>Author</span></a></li>
		</ul>
	<div id="taxonomy" class="middle_links">
			<?php wp_tag_cloud('smallest=1&largest=1&unit=em&number=10&format=list&orderby=count&order=DESC&showcount=1'); ?>
	</div>
	<div id="chronograph" class="middle_links">
		<ul>
			<?php wp_get_archives('type=monthly&format=html&show_post_count=1'); ?>
		</ul>
	</div>
	<div id="authors" class="middle_links">
		<ul>
			<?php wp_list_authors('show_fullname=1&optioncount=1&hide_empty=0'); ?>
		</ul>
	</div>
	</div><!-- #browse_tabs -->
	<?php } ?>
</div>