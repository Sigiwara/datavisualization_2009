<div id="footer">
	<ul class="nav fix">
		<li><a href="<?php echo get_settings('home'); ?>/" title="Return to the the frontpage">Home</a></li>
		<li><a href="<?php echo get_settings('home'); ?>/?page_id=2" title="About us">About</a></li>
		<li><a href="<?php echo get_settings('home'); ?>/?page_id=3" title="Contact us">Contact</a></li>
		<li><a href="/wp-login.php" title="Admin Interface">Login</a></li>
		<li class="top"><a href="#wrapper" title="Return to the top">Top</a></li>
	</ul>
	<p>&copy; <?php print date("Y"); ?> bei <a href="http://portfolio.artillery.ch/?cat=22" rel="me" title="Portfolio von Benjamin Wiederkehr">Benjamin Wiederkehr</a> & <a href="http://significant.ch" title="Portfolio von Christian Siegrist">Christian Siegrst</a>.
		<a href="<?php echo get_bloginfo('home'); ?>" title="<?php echo get_bloginfo('name'); ?>"><?php echo get_bloginfo('name'); ?></a> läuft mit <a href="http://wordpress.org" title="Offizielle Wordpress Website">Wordpress</a><?php echo "&nbsp;".get_bloginfo('version'); ?>
 auf einem <a href="http://www.novacompany.ch" title="NovaCompany">NovaCompany</a> Server.<br/>
	Designt von <a href="http://portfolio.artillery.ch/?cat=22" rel="me" title="Portfolio von Benjamin Wiederkehr">Benjamin</a> basierend auf dem <a href="http://5thirtyone.com/grid-focus" title="Grid Focus">Grid Focus</a> Theme.</p>
</div>
</div>
<!-- ——————————————————————————————————————————————————————————————————— Analytics -->
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
<script type="text/javascript">
_uacct = "UA-3202544-6";
urchinTracker();
</script>
	<?php wp_footer(); ?>
</body>
</html>