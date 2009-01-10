<ul class="db">
	<?php
	$events = lifestream_get_events(array('number_of_results' => 5));
	foreach ($events as $result){
		$timestamp = $result->get_date();
		if ($today == date('m d Y', $timestamp)) $this_day = 'Today';
		else if ($yesterday == date('m d Y', $timestamp)) $this_day = 'Yesterday';
		else $this_day = ucfirst(htmlentities(date($day_format, $timestamp)));
		list($label, $items) = $result->feed->get_render_output($result);
		?>
		<li class="lifestream_feedid_<?php echo $result->feed->get_constant('ID'); ?> lifestream_feed_<?php echo $result->feed->get_constant('ID'); ?>">
		<img src="<?php echo $result->feed->get_icon_url(); ?>" alt="<?php echo $result->feed->get_constant('ID'); ?> (feed #<?php echo $result->feed->id; ?>)" />
		<abbr title="<?php echo date("c", $timestamp); ?>"><?php echo date('d.m. h:i a', $timestamp); ?></abbr><br/>
		<?php echo $result->render(array('hide_label' => true)); ?>
		</li>
	<?php }; ?>
</ul>
<span class="read_more"><a href="<?php echo get_bloginfo('home'); ?>/dashboard" title="Read more on our dashboard">read more</a></span>