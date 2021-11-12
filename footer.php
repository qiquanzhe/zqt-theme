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
		<div class="links col-md-8 col-12 m-auto row py-md-5 py-2">
			<div class="gov-link col-md-3 col-6">
				<h5>政府链接</h5>
				<ul class="link list-unstyled text-center my-md-4 my-2">
					<li><a href="https://www.miit.gov.cn/">工业和信息化部</a></li>
					<li><a href="http://www.chinatorch.gov.cn/">科技部火炬中心</a></li>
					<li><a href="http://gxt.shandong.gov.cn/">山东省工业和信息化厅</a></li>
					<li><a href="http://kjt.shandong.gov.cn/">山东省科学技术厅</a></li>
					<li><a href="http://jnjxw.jinan.gov.cn/">济南市工业和信息化局</a></li>
					<li><a href="http://jnsti.jinan.gov.cn/">济南市科学技术局</a></li>
				</ul>
			</div>
			<div class="fri-link col-md-3 col-6">
				<h5>友情链接</h5>
				<ul class="link list-unstyled text-center my-md-4 my-2">
					<li><a href="http://www.51cqc.com" target="_blank">宁夏ISO质量体系认证</a></li>
					<li><a href="http://www.nxzlcw.com" target="_blank">银川商标注册</a></li>
					<li><a href="https://www.mustip.com" target="_blank">知识产权申请</a></li>
				</ul>
			</div>
			<div class="site-name col-md-6 col-12">
				<div class="link-title text-center">
					<h5>网站地图 | 
						<a href="<?php bloginfo('url'); ?>/about">关于我们</a> </h5>
				</div>
				<div class="text-center my-md-4 my-2">
					<div class="address">济南市槐荫区经十路22799号和谐广场2号楼2105室</div>
					<div class="address">济南市章丘区双山街道绣水如意达尔文区G座1355室</div>
					<div class="address">济南市莱芜区花园北路六十九号济南市诚信建设促进会三楼</div>
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
		Copyright ©正企通（山东）产业发展集团有限公司
		</div>
		<div><a href="http://beian.miit.gov.cn/">备案号：鲁ICP备19054652号-1</a></div>
		<div>Proudly powered by <a href="<?php bloginfo('url'); ?>">正企通</a></div>
		
	</div><!-- .powered-by -->
</footer><!-- #colophon -->

</div><!-- #page -->

<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.bundle.min.js"></script>

<?php wp_footer(); ?>

</body>

</html>
