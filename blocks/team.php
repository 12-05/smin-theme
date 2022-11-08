<section class="block block-team">
    <div class="inner">
        <h2><?php the_field('headline');?></h2>
        <div class="team-grid">
            <?php 
            $members = get_field('teammitglieder');
            if($members):foreach($members as $member):?>
                <a href="<?php echo $member['link'];?>" class="member">
                    <figure>
                        <img class="profile" src="<?php echo $member['bild'];?>" alt="<?php echo $member['name'];?>" />
                        <img class="add" src="<?php echo SMINURL.'/assets/img/add-orange.svg';?>" alt="<?php echo $member['name'];?>" />

                    </figure>
                    <h3><?php echo $member['name'];?></h3>
                    <div class="description"><?php echo $member['beschreibung'];?></div>
                </a>
        <?php endforeach;endif;?>
        </div>
    </div>
</section>