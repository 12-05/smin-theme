<?php get_header();?>
<div class="wrapped">
    <img class="thumbnail" src="<?php echo get_the_post_thumbnail_url(get_the_id(),'large');?>" alt="<?php the_title();?>" />
    <div class="date"><?php echo get_the_date('d.m.Y');?></div>
    <h1><?php the_title();?></h1>
    <?php the_content();?>
</div>
<?php get_footer();?>