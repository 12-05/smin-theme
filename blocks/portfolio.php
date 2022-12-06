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
                    <a class="immobilie" style="background-image:url(<?php echo wp_get_attachment_image_src(get_field('thumbnail', $immobilie->ID), 'medium')[0];?>)" href="<?php echo get_permalink($immobilie->ID);?>">
                        
                    </a>
                    <?php endforeach;endif;?>
            </div>
        </div>
         <div class="topic">
            <h3>Unternehmensbeteiligungen</h3>
           <div class="grid">
                <?php $unternehmen = get_field('unternehmen');
                    if($unternehmen):foreach($unternehmen as $company):?>
                    <a class="unternehmen" style="background-image:url(<?php echo wp_get_attachment_image_src(get_field('logo', $company->ID), 'medium')[0];?>)" href="<?php echo get_permalink($company->ID);?>">
                        
                    </a>
                    <?php endforeach;endif;?>
            </div>
        </div>
    </div>
</section>