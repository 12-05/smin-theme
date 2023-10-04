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
                        <svg class="add" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
  <path id="icons8-add" d="M24,2A22,22,0,1,0,46,24,22,22,0,0,0,24,2Zm8.8,24.2H26.2v6.6H21.8V26.2H15.2V21.8h6.6V15.2h4.4v6.6h6.6Z" transform="translate(-2 -2)" fill="<?php echo get_field('farbe', 'option');?>"/>
</svg>

                    </figure>
                    <h3><?php echo $member['name'];?></h3>
                    <div class="description"><?php echo $member['beschreibung'];?></div>
                </a>
        <?php endforeach;endif;?>
        </div>
    </div>
    <?php 
        $members = get_field('members');
        if($members):
        ?>
    <div class="sec-team-grid wrapped">
        <?php foreach($members as $member):?>
            <div class="member">
                <figure><img src="<?php echo $member['image'];?>" alt="<?php echo $member['name'];?>" /></figure>
                <div class="info">
                    <div class="name"><?php echo $member['name'];?></div>
                        <div class="sub">
                        <div class="role"><?php echo $member['role'];?></div>
                        <div class="company"><?php echo $member['company'];?></div>
                </div>
                </div>

            </div>
            <? endforeach;?>

        </div>
        <div class="wrapped" style="margin-top:2rem">Und viele mehr ...</div>

<?php endif;?>
    </div>


</section>