<?php

/**
 * 如果阅读设置中设置为静态页面，选择此文件作为首页模板文件。
 */

get_header() ?>

<div class="box">
	<div class="banner">
		<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/banner-background.png" alt="banner">
		<div class="slogan">
			<!-- <h1 class="display-1">让企业没有难申报的政策！</h1> -->
			<hr size="10px" width="20%" noshade=true />
		</div>
	</div>

	<div class="container my-5">
		<div class="searchbox row" style="display: none;">
			<input class="col-md-6 col-8 offset-md-2 offset-1 border border-info border-3" type="text" name="search-content" id="search" placeholder="请输入搜索内容">
			<input class="col-md-3 col-2 mx-md-4 mx-2 btn btn-info border border-info border-3" type="button" value="搜索">
		</div>

		<div class="divide-title text-center my-md-5 my-4">
			<h2>知政识势，洞察未来</h2>
			<hr size="10px">
		</div>

		<div class="news-title row">
			<div class="news col-md-6 col-12">
				<h3 class="text-primary mx-3 text-center">最新通告</h3>
				<hr>
				<?php
				query_posts('showposts=8&cat=4');
				while (have_posts()) : the_post(); ?>
					<li class="row">
						<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
							<span class="col-md-3 col-3 mx-md-4 mx-2 date-span"><?php the_time('Y-n-d'); ?></span>
							<span class="title-span col-8 col-md-9"><?php the_title(); ?></span>
						</a>
					</li>
				<?php
				endwhile;
				wp_reset_query();
				?>
			</div>
			<div class="brief col-md-6 col-12">
				<h3 class="text-primary mx-3 my-md-0 my-3 text-center">热点动态</h3>
				<hr>
				<?php
				query_posts('showposts=8&cat=10');
				while (have_posts()) : the_post(); ?>
					<li class="row">
						<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
							<span class="col-md-3 col-3 mx-md-4 mx-2 date-span"><?php the_time('Y-n-d'); ?></span>
							<span class="title-span col-8 col-md-9"><?php the_title(); ?></span>
						</a>
					</li>
				<?php
				endwhile;
				wp_reset_query();
				?>
			</div>
		</div>
		<div class="row yewu my-md-5 my-3">
			<img class="col-md-3 col-3" src="<?php bloginfo('template_url') ?>/img/ctp.png" alt="高新技术企业认定" />
			<img class="col-md-3 col-3" src="<?php bloginfo('template_url') ?>/img/ipdaili.png" alt="知识产权代理" />
			<img class="col-md-3 col-3" src="<?php bloginfo('template_url') ?>/img/platform.png" alt="创新平台认证">
			<img class="col-md-3 col-3" src="<?php bloginfo('template_url') ?>/img/qualification.png" alt="企业资质认证">
		</div>

		<div class="divide-title text-center my-5">
			<h2>一站式企业服务的重要性</h2>
			<hr width="15%" size="10px">
		</div>

		<div class="imp row">
			<div class="row col-md-12 col-6">
				<div class="col-md-3 imp-detail">
					<img src="<?php bloginfo('template_url') ?>/img/ipprotect.png" alt="知识产权保护">
				</div>
				<div class="col-md-3 imp-detail text-center pt-3">
					<h3 class="mt-md-5 mt-0">享受政府政策</h3>
					<p>项目申报增强了企业核心竞争力，减少税费，降低企业资金压力，获得国家的认可、政府相关政策及资金扶持，全面提升企业品质。</p>
				</div>
				<div class="col-md-3 imp-detail">
					<img src="<?php bloginfo('template_url') ?>/img/business.png" alt="企业资质认证">
				</div>
				<div class="col-md-3 imp-detail text-center pt-3">
					<h3 class="mt-md-5 mt-0">扩大品牌影响</h3>
					<p>专业平台、产品、服务、人员，大数据广联动，全服务本地化。让您看到品牌资产增值，品牌关联性与忠诚消费者扩张，步入市场知名行列。</p>
				</div>
			</div>
			<div class="row col-md-12 col-6">
				<div class="col-md-3 imp-detail text-center pt-3">
					<h3 class="mt-md-5 mt-0">知识产权保护</h3>
					<p>商标和专利等企业知识产权的申请，保护了品牌的价值不受盗取，享有独占权，其他人不得擅自使用，维护了自有品牌和创新，保护自身合法权益。</p>
				</div>
				<div class="col-md-3 imp-detail">
					<img src="<?php bloginfo('template_url') ?>/img/policy.png" alt="享受政府政策">
				</div>
				<div class="col-md-3 imp-detail text-center pt-3">
					<h3 class="mt-md-5 mt-0">企业资质认证</h3>
					<p>国际贸易的“通行证”，效率提升的“催化剂”。 资深内审，助力企业管理体系的建立；效率外审，让 您快速增强品牌竞争力，抢占市场份额。</p>
				</div>
				<div class="col-md-3 imp-detail">
					<img src="<?php bloginfo('template_url') ?>/img/social.png" alt="扩大品牌影响">
				</div>
			</div>
		</div>
	</div>

	<div class="banner">
		<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/back-3.png" alt="footer-banner">
		<div class="footer-slogan">
			<h1>我们致力于为企业</h1>
			<h1>提供专业并兼具财税特色的一体化科技管理咨询服务</h1>
		</div>
	</div>

</div>

<?php
get_footer();
