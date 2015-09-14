<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package subvulpa Theme
 */

?>

<footer>	
	<!-- class split used for barb -->
	<div class="split"></div>

	<ul id="footerList">			
			<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/footer/facebook.png" alt="facebook link" /></a></li>
			<li><a href="https://twitter.com/LukeVulpa"></a><img src="<?php bloginfo('template_directory'); ?>/footer/socialMedia/twitter.png" alt="twitter link" /></a></li>
			<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/footer/linkedin.png" alt="LinkedIn link" /></a></li>		
	</ul>
	
	<ul id="footerList2">
			<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/footer/socialMedia/blankListImage.png" alt="blank List Item" /></a></li>
			<li><a href="http://lukie-d.deviantart.com/http://lukie-d.deviantart.com/"></a><img src="<?php bloginfo('template_directory'); ?>/footer/deviantart.png" alt="deviantart link" /></a></li>
			<li><a href="https://github.com/Luke-Vulpa"><img src="<?php bloginfo('template_directory'); ?>/images/footer/github.png" alt="link" /></a></li>		
	</ul>		

	
	<ul id="footerList3">
	
		
		<li><img src="../images/socialMedia/blankListImage.png" alt="blank List Item" /></li>			
		<li><img src="../images/socialMedia/blankListImage.png" alt="blank List Item" /></li>
		<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/footer/pic.png" alt="link" /></a></li>
	</ul>

		<p class="tagLine">&ldquo;Undergrad software engineer, Technologies enthusiast, Mostly bonkers, Lover of cats!&rdquo;</p>
		
		<p class="copyright">&copy; 2015 Subvulpa.net</p>
</footer>
	
</div>

</div>

<?php wp_footer(); ?>

</body>
</html>
