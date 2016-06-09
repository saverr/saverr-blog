<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 * @package _mbbasetheme
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
		<p class="copyright"><small>&copy; <?php echo date("Y");
				echo " ";
				bloginfo('name'); ?></small></p>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
