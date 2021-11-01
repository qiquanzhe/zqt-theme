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
    var map = new BMap.Map("map-container"); 
var point = new BMap.Point(116.983614,36.655468); 
map.centerAndZoom(point, 15);  
map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
var marker1 = new BMap.Marker(new BMap.Point(116.404, 39.925));
map.addOverlay(marker1);
window.setTimeout(function(){  
    map.panTo(new BMap.Point(116.983614,36.655468));    
}, 2000);
</script>
<?php
get_footer();
?>