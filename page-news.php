<?php include 'header.php'; ?>

<section id="page-hero">
    <h2>News</h2>
</section>

<section id="main-container">

    <div id="news-archive-inner">

        <?php $news = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'DESC'
        ));

        while($news->have_posts()){
            $news->the_post(); ?>
            <a href="<?php echo get_the_permalink(); ?>" class="news-article">
                <div class="article-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
                <div class="article-inner">
                    <h3><?php echo get_the_title(); ?></h3>
                    <h4><?php echo get_the_date("d.m.Y"); ?></h4>
                </div>
            </a>
        <?php } ?>

    </div>

</section>

<?php include 'footer.php'; ?>