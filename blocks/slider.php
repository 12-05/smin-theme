<?php $slides = get_field('slides');?>
<div class="block block-slider">
    <?php if($slides):foreach($slides as $slide):?>
    <div class="slide" >
        <div class="inner" >
            <div class="bg" style="background-image:url(<?php echo $slide['bild'];?>)"></div>
            <div class="orange-bg"></div>
            <div class="content">    
                <div class="headline"><?php echo $slide['headline'];?></div>
                <div class="subline"><?php echo $slide['subline'];?></div>
            </div>
        </div>
    </div>
    <?php endforeach;endif;?>
</div>