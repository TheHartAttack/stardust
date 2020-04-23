<?php include 'header.php'; ?>

<section id="page-hero">
    <h2>History</h2>
</section>

<section id="main-container">

    <div id="history-inner">

        <?php $history = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'history',
            'orderby' => 'title',
            'order' => 'ASC'
        ));

        while($history->have_posts()){
            $history->the_post(); ?>
            <a href="#" class="history-article">
                <div class="article-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
                <div class="article-inner">
                    <h3><?php echo get_the_title(); ?></h3>
                </div>
            </a>
        <?php } ?>

    </div>

</section>

<div id="poster">
    <img src="" alt="">
    <div class="poster-close">✖</div>
</div>

<?php include 'footer.php'; ?>