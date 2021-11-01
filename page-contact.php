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
        <div class="map-container my-md-4" id="map-container">

        </div>
        <?php the_content(); ?>
    </div>
</div>
<script>
    // var map = new AMap.Map("map-container");
    var map = new AMap.Map('map-container', {
        zoom: 17,//级别
        center: [116.977103,36.649312],//中心点坐标
        viewMode:'3D'//使用3D视图
    });
    var marker = new AMap.Marker({
        position: [116.977103,36.649312] //位置
    })
    marker.setTitle('山东政商信息科技有限公司')
    marker.setLabel({
        offset: new AMap.Pixel(10, 10),  //设置文本标注偏移量
        content: "<div class='map-info'>山东政商信息科技有限公司</div>", //设置文本标注内容
        direction: 'top' //设置文本标注方位
    });
    map.add(marker); //添加到地图
    // var point = new BMap.Point(116.983614,36.655468); 
    // map.centerAndZoom(point, 15);  
    // map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
    // var marker1 = new BMap.Marker(new BMap.Point(116.404, 39.925));
    // map.addOverlay(marker1);
    // window.setTimeout(function(){  
    //     map.panTo(new BMap.Point(116.983614,36.655468));    
    // }, 2000);
</script>
<?php
get_footer();
?>