<?php
/**
 * Default Footer
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
        <footer>
        	<div class="fb-comments" data-href="http://example.com/comments" data-colorscheme="The color scheme used in the plugin" data-numposts="20" data-width="The pixel width of the plugin"></div>
            <div class="container">
                <p>&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?></p>
                <?php
				if (function_exists('dynamic_sidebar')) {
					dynamic_sidebar("footer-content");
				}
 ?>
            </div><!-- /container -->
        </footer>
        <?php wp_footer(); ?>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
			( function(b, o, i, l, e, r) {
					b.GoogleAnalyticsObject = l;
					b[l] || (b[l] = function() {
						(b[l].q = b[l].q || []).push(arguments)
					});
					b[l].l = +new Date;
					e = o.createElement(i);
					r = o.getElementsByTagName(i)[0];
					e.src = '//www.google-analytics.com/analytics.js';
					r.parentNode.insertBefore(e, r)
				}(window, document, 'script', 'ga'));
			ga('create', 'UA-XXXXX-X');
			ga('send', 'pageview');
		</script>
		<div id="fb-root"></div>
		<script>
			( function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id))
						return;
					js = d.createElement(s);
					js.id = id;
					js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=435320383216975";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk')); 
		</script>
    </body>
</html>