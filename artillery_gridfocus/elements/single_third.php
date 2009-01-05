<div id="tertCol">
	<div class="middle_links intro">
		<h3>Information</h3>
		<dl>
			<dt>Author</dt><dd><?php the_author_posts_link(); ?> (<?php the_author_posts(); ?>)</dd>
			<?php if($postTags){ ?>
			<dt>Tags</dt>
			<?php
			foreach($postTags as $tag){
				echo('<dd><a href="'.get_bloginfo('url').'/tag/'.$tag->name.'" title="'.$tag->name.'">'.$tag->name.'</a></dd>');
			};};?>
			<?php if($postCats){ ?>
			<dt>Category</dt>
			<?php
			foreach($postCats as $cat){
				echo('<dd><a href="'.get_bloginfo('url').'/category/'.$cat->name.'" title="'.$cat->name.'">'.$cat->name.'</a></dd>');
			};};?>
		</dl>
	</div>
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
</div><!-- close #tertCol -->