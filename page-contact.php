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
        <div class="map-container" id="map-container">

        </div>
        <?php the_content(); ?>
    </div>
</div>
<script>
    var map = new BMap.Map("map-container"); 
var point = new BMap.Point(116.983614,36.655468); 
map.centerAndZoom(point, 15);  
window.setTimeout(function(){  
    map.panTo(new BMap.Point(116.409, 39.918));    
}, 2000);
</script>
<?php
get_footer();
?>