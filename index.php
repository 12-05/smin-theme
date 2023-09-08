<?php 
    get_header();?>
    <div class="post-archive-grid wrapped">
        <h1>News</h1>
        <?php  get_template_part('loop');?>
    </div>
    <div class="pagination" style='text-align:center;margin-bottom:32px;margin-top:-96px;'>
        <?php echo paginate_links(); ?>
    </div>
    <?php get_footer();