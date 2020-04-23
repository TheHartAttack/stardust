<?php include 'header.php'; ?>

<section id="page-hero">
    <h2>News</h2>
</section>

<section id="main-container">

    <?php the_post(); ?>

    <div class="news-head">
        <h3><?php echo get_the_title(); ?></h3>
        <h4><?php echo get_the_date("d.m.Y"); ?></h4>
    </div>
        
    <div id="news-wrapper">
    
        <div class="news-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>

        <div class="news-body">
        
            <?php the_content();?>
            
        </div>
    
    </div>

    <div class="news-foot">
        <a class="button sml-btn" href="<?php echo site_url('/news'); ?>">View all news</a>
        <a class="button sml-btn" href="<?php echo site_url('/tickets'); ?>">Buy tickets</a>
    </div>

</section>

<?php include 'footer.php'; ?>