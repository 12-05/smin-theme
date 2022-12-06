<?php get_header();?>
<section class="smin-portfolio smin-unternehmen">
    <img class="titelbild" src="<?php the_field('titelbild');?>" alt="Bild" />
    <div class="content">
        <div class="profile">
            <img src="<?php the_field('logo');?>" alt="thumbnail" class="thumbnail">
        </div>
         <div class="toolbar">
                <?php 
                $link = get_field('homepage');
                if($link) { ?>
                    <a class="link" target="<?php echo $link['target'];?>" href="<?php echo $link['url'];?>"><?php echo $link['title'];?></a>
                <?php } ?>
                <strong class="service-head">Angebot</strong>
                <ul>
                <?php 
                    $leistungen = get_field('keywords');
                    if($leistungen):foreach($leistungen as $leistung):
                    echo '<li>'.$leistung['text'].'</li>';
                    endforeach;endif;?>
                </ul>
        </div>
        <div class="text">
            <h1><?php the_title();?></h1>
            <div class="beschreibung">
                <?php the_field('beschreibung');?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>