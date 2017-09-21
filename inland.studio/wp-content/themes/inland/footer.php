<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inland
 */

?>
	</main>

	<footer class="footer">
		<div class="wrapper wrapper-960">
			<?php if (is_front_page()) { ?>
				<a href="#top" class="anchor">Back to top</a>
			<?php } else { ?>
				<a href="/">Home</a>
			<?php } ?>
			<nav>
				<?php custom_site_navigation(); ?>
				<?php if (is_front_page()) { ?>
					<a href="#contact" class="anchor">Contact</a>
				<?php } else { ?>
					<a href="/#contact">Contact</a>
				<?php } ?>
				<a href="https://medium.com/inland">Blog</a>
			</nav>
		</div>
	</footer>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.min.js"></script>

<script type="text/javascript">
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-99137049-1', 'auto');
	ga('send', 'pageview');
</script>

</body>
</html>
