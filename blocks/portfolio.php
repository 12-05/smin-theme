<section class="block block-portfolio">
    <h2><?php the_field('headline');?></h2>
    <div class="text">
        <?php the_field('text');?>
    </div>
    <div class="portfolio">
        <div class="topic">
            <h3>Immobilien</h3>
            <div class="grid">
                <?php $immobilien = get_field('immobilien');
                    if($immobilien):foreach($immobilien as $immobilie):?>
                    <?php $thumbnailURL = wp_get_attachment_image_src(get_field('thumbnail', $immobilie->ID), 'medium')[0];?>
                    <?php if(!$thumbnailURL) continue;?>
                    <a class="immobilie" style="background-image:url(<?php echo $thumbnailURL;?>)" href="<?php echo get_permalink($immobilie->ID);?>">
                    <div class="inner">
                            <?php echo get_the_title($immobilie->ID);?>
                        </div>
                    </a>
                    <?php endforeach;endif;?>
            </div>
        </div>
         <div class="topic">
            <h3>Unternehmensbeteiligungen</h3>
           <div class="grid">
                <?php $unternehmen = get_field('unternehmen');
                    if($unternehmen):foreach($unternehmen as $company):?>
                    <a class="unternehmen" style="background-image:url(<?php echo wp_get_attachment_image_src(get_field('logo', $company->ID), 'full')[0];?>)" href="<?php echo get_permalink($company->ID);?>">
                        <div class="inner">
                            <?php echo get_the_title($company->ID);?>
                        </div>
                    </a>
                    <?php endforeach;endif;?>
            </div>
        </div>
    </div>
</section>