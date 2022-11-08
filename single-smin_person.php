<?php get_header();?>
    <section class="smin-person">
        <div class="info">
            <figure>
                <img src="<?php the_field('bild');?>" alt="Profilbild" />
            </figure>
            <div>
                <strong>E-Mail:</strong> <?php the_field('e-mail');?><br />
                <strong>Telefon:</strong> <?php the_field('telefon');?>
            </div>
        </div>
        <div class="main">
            <h1><?php the_title();?></h1>
            <div class="content">
                <?php the_field('text');?>
            </div>
            <ul>
                <?php 
                    $stationen = get_field('stationen');?>
                    <?php if($stationen):foreach($stationen as $station):?>
                        <li><strong><?php echo $station['jahr'];?></strong><?php echo $station['text'];?></li>
                    <?php endforeach;endif;?>
            </ul>
        </div>
    </section>
<?php get_footer();?>