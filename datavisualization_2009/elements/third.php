<div id="tertCol">
	<div class="middle_links">
		<h3>Subscribe</h3>
		<p>Get free updates from <?php bloginfo('name'); ?> via <abbr title="Really Simple Syndication">RSS</abbr> (<a href="http://www.wikipedia.org/wiki/RSS" title="What is RSS?" class="qm">?</a>) or Twitter (<a href="http://twitter.com/about#about" title="What is Twitter?" class="qm">?</a>).</p>
		<ul class="feed">
			<li><a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe to our articles RSS feed">Articles RSS</a></li>
			<!-- <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="Subscribe to our comments RSS feed">Comments RSS</a></li> -->
			<li class="twitter_icon"><a href="http://www.twitter.com/datavis" title="Follow us on twitter">Follow us on Twitter</a></li>
		</ul>
	</div>
	<div class="middle_links">
		<h3>Our Project</h3>
		<p>Visit the documentation (german) of our most recent project.</p>
		<a href="http://candeo.datavisualization.ch" title="documentation of candeo project"><img src="http://www.datavisualization.ch/wp-content/themes/datavisualization_2009/img/candeo_button.png" alt="Candeo project" name="candeo project" width="214" height="50"></a>
	</div>
	<?php if(!is_home()){ ?>
		<div id="browse_tabs">
			<ul class="tabs fix">
				<li><a class="chronograph" href="#chronograph"><span>Date</span></a></li>
				<li><a class="authors" href="#authors"><span>Author</span></a></li>
				<li><a class="taxonomy" href="#taxonomy"><span>Tag</span></a></li>
			</ul>
		<div id="chronograph" class="middle_links">
			<ul>
				<?php wp_get_archives('type=monthly&format=html&show_post_count=1'); ?>
			</ul>
		</div>
		<div id="authors" class="middle_links">
			<ul>
				<?php wp_list_authors('show_fullname=1&optioncount=1&hide_empty=1'); ?>
			</ul>
		</div>
		<div id="taxonomy" class="middle_links">
				<?php wp_tag_cloud('smallest=1&largest=1&unit=em&number=20&format=list&orderby=count&order=DESC&showcount=1'); ?>
		</div>
		</div><!-- #browse_tabs -->
	<?php } ?>
	<?php if(is_home()){ ?>
		<div class="middle_links">
			<h3>From our dashboard</h3>
		<?php
		include (TEMPLATEPATH . '/elements/dashboard_widget.php');
		?>
		</div>
	<?php } ?>
</div><!-- close #tertCol -->