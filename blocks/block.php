<section class="block block-block <?php echo the_field('alignment');?> <?php echo the_field('hintergrund');?>">
    <div class="img"><img src="<?php the_field('bild');?>" alt="Bild" /></div>
    <div class="content">
        <h2><?php the_field('headline');?></h2>
        <div class="text"><?php the_field('text');?></div>
        <?php 
        $link = get_field('link');
        if($link) {?>
        <a class="button" target="<?php echo $link['target'];?>" href="<?php echo $link['url'];?>"><?php echo $link['title'];?></a>
        <?php } ?>
    </div>

        </section>