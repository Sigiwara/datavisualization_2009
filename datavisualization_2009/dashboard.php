	<?php
	/*
		Template Name: Dashboard
	*/
	?>
	<?php get_header(); ?>
<div id="mid" class="fix wide">
	<div id="mainCol" class="fix"><a name="main"></a>
		<h3 class="db_headline">Mentions of Datavisualization in recent conversations (<a href="http://www.artillery.ch" title="What is this dashboard?" class="qm">?</a>)</h3>
		<ul id="dashboard" class="fix">
		<?php
		$events = lifestream_get_events(array('number_of_results' => 50));
		foreach ($events as $result){
			$timestamp = $result->get_date();
			if ($today == date('m d Y', $timestamp)) $this_day = 'Today';
			else if ($yesterday == date('m d Y', $timestamp)) $this_day = 'Yesterday';
			else $this_day = ucfirst(htmlentities(date($day_format, $timestamp)));
			list($label, $items) = $result->feed->get_render_output($result);
			?>
			<li class="lifestream_feedid_<?php echo $result->feed->get_constant('ID'); ?> lifestream_feed_<?php echo $result->feed->get_constant('ID'); ?>">
			<img src="<?php echo $result->feed->get_icon_url(); ?>" title="source of content" alt="<?php echo $result->feed->get_constant('ID'); ?> (feed #<?php echo $result->feed->id; ?>)" />
			<abbr title="<?php echo date("c", $timestamp); ?>"><?php echo date('d.m.y', $timestamp); ?><br/><?php echo date('h:i a', $timestamp); ?></abbr>
			<?php echo $result->render(array('hide_label' => true)); ?>
			</li>
		<?php }; ?>
		</ul>
	</div>
	<?php include (TEMPLATEPATH . '/elements/third.php'); ?>
</div>
<?php get_footer(); ?>