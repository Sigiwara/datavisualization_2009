<div id="footer">
	<ul class="nav fix">
		<li><a href="<?php echo get_settings('home'); ?>/" title="Return to the the frontpage">Home</a></li>
		<li><a href="/wp-login.php" title="Admin Interface">Login</a></li>
		<li class="top"><a href="#wrapper" title="Return to the top">Top</a></li>
	</ul>
	<p>&copy; <?php print date("Y"); ?> by <a href="http://portfolio.artillery.ch/?cat=22" rel="me" title="Portfolio of Benjamin Wiederkehr">Benjamin Wiederkehr</a> & <a href="http://significant.ch" title="Portfolio of Christian Siegrist">Christian Siegrst</a>.
		<a href="<?php echo get_bloginfo('home'); ?>" title="<?php echo get_bloginfo('name'); ?>"><?php echo get_bloginfo('name'); ?></a> runs smoothly with <a href="http://wordpress.org" title="Offizielle Wordpress Website">Wordpress</a><?php echo "&nbsp;".get_bloginfo('version'); ?>
 on a <a href="http://www.hoststar.ch" title="HostStar">HostStar</a> server.<br/>
	Design by <a href="http://portfolio.artillery.ch/?cat=22" rel="me" title="Portfolio of Benjamin Wiederkehr">Benjamin</a> based on the excellent <a href="http://5thirtyone.com/grid-focus" title="Grid Focus">Grid Focus</a> theme.</p>
</div>
</div>
<!-- ——————————————————————————————————————————————————————————————————— Analytics -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-6935190-1");
pageTracker._trackPageview();
} catch(err) {}</script>
	<?php wp_footer(); ?>
</body>
</html>