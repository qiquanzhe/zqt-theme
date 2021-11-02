<?php

/**
 * 
 * Template Name: [联系我们]模板页
 */
get_header(); ?>
<div class="box">
    <div class="banner">
        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/banner-contact.png" alt="banner">
    </div>
    <div class="container">
        <div class="cat-title my-md-3">
            <div>
                联系我们
            </div>
        </div>
        <div class="box row">
            <div class="contact-infos my-md-5 col-md-5">
                <div><i class="bi bi-telephone-fill text-primary"></i>手机:13335155205(邵经理)</div>
                <div><i class="bi bi-chat-quote-fill text-primary"></i>微信:13335155205(邵经理)</div>
                <div><i class="bi bi-building text-primary"></i>地址: 槐荫区经十路22799号和谐广场2号楼2105室</div>
                <div><i class="bi bi-mailbox2 text-primary"></i>邮箱: zqtlzc@163.com</div>
                <div><i class="bi bi-telegram text-primary"></i>QQ: 915537404</div>
                <div><i class="bi bi-chat-quote text-primary"></i>微信公众号: 正企通Lite</div>
            </div>
            <div class="map my-md-4 col-md-5 offset-md-1">
                <div class="map-container" id="map-container"></div>
            </div>
        </div>
    </div>
</div>
<script>
    var map = new AMap.Map('map-container', {
        zoom: 17, //级别
        center: [116.977103, 36.649312], //中心点坐标
        viewMode: '3D' //使用3D视图
    });
    var marker = new AMap.Marker({
        position: [116.977103, 36.649312] //位置
    })
    marker.setTitle('正企通（山东）企业发展集团有限公司')
    marker.setLabel({
        offset: new AMap.Pixel(10, 10), //设置文本标注偏移量
        content: "<div class='map-info'>正企通（山东）企业发展集团有限公司</div>", //设置文本标注内容
        direction: 'top' //设置文本标注方位
    });
    map.add(marker); //添加到地图
</script>
<?php
get_footer();
?>