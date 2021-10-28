<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<footer id="footer" class="site-footer">
	<div class="site-info mx-md-0 row">
		<div class="links col-md-8 col-12 m-auto row py-5">
			<div class="col-md-3 col-6">
				<h5>政府链接</h5>
				<ul class="link list-unstyled text-center my-4">
					<li><a href="#">正企通</a></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<div class="col-md-3 col-6">
				<h5>友情链接</h5>
				<ul class="link list-unstyled text-center my-4">
					<li><a href="#">正企通</a></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<div class="site-name col-md-6 col-12">
				<div class="link-title text-center">
					<h5>网站地图 | 关于我们 </h5>
				</div>
				<div class="text-center my-4">
					<div class="address">地址：济南市槐荫区经十路22799号和谐广场2号楼2105室</div>
					<div class="tel">联系电话：13335155205</div>
				</div>
				<div class="site-logo my-1 row">
					<div class="logo-img text-center">
						<img class="mx-3" src="<?php bloginfo('template_url'); ?>/img/logoda.png" alt="logo：正企通">
						<img class="mx-3" src="<?php bloginfo('template_url'); ?>/img/gzh.png" alt="公众号：正企通Lite">
					</div>
				</div>
			</div><!-- .site-name -->
		</div>
	</div><!-- .site-info -->
	<div class="powered-by text-center">
		<div>
			主体备案号：XXXXXXXXXXXXXXXXXX
		</div>
		<?php
		printf(
			/* translators: %s: WordPress. */
			esc_html__('Proudly powered by %s.', 'zqt'),
			'<a href="' . esc_url(__('http://localhost/wordpress/', 'zqt')) . '">正企通</a>'
		);
		?>
	</div><!-- .powered-by -->
</footer><!-- #colophon -->

</div><!-- #page -->

<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.bundle.min.js"></script>

<?php wp_footer(); ?>

</body>

</html>