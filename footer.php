    </main>
    <footer class="footer" role="footer">
        <div>
            <h3>Kontaktdaten</h3>
            <?php the_field('kontaktdaten', 'option');?>
        </div>
         <div>
            <h3>News</h3>
            <div class="news-grid">
            <?php   $posts = get_posts(array('posts_per_page' => 2, 'post_type' => 'post'));
                    if($posts):foreach($posts as $post):
                    $thumb = get_the_post_thumbnail_url($post->ID, 'large');
                    ?>
                    <a href="<?php echo get_permalink($post->ID);?>" class="post">
                        <?php if($thumb) {?><figure><div class="thumb" style="background-image:url(<?php echo $thumb;?>)"></div>
                        <img class="view" src="<?php echo SMINURL.'/assets/img/add.svg';?>" alt="View" />
                        </figure><?php }?>
                        <h3><?php echo $post->post_title;?></h3>
                        <span class="date"><?php echo get_the_date('d. M Y', $post->ID);?></span>
                    </a>
                    <?php endforeach;endif;?>
                    </div>
        </div>
        <div>
            <h3>Schnellnavigation</h3>
             <?php wp_nav_menu(array(
                        'theme_location' => 'footer_menu',
                        'menu_id' => 'footer_menu'
             ));?>
             <h3 style="margin-top:3rem;">Sponsoring</h3>
             <div class="sponsoring">
                <?php echo get_field('sponsoring', 'option');?>
            </div>
        </div>
    </footer>
        <?php wp_footer();?>

    </body>
</html>