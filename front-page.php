<?php include 'header.php' ?>

        <section id="home-hero">

            <?php include 'svg/icon.php';
            include 'svg/stardust-festival-2020.php'; ?>
            <h2>24 - 26 July 2020</h2>
            <h2>Knebworth, UK</h2>
            <a href="<?php echo site_url('/tickets'); ?>" class="button lrg-btn">Tickets on sale now!</a>
            <?php include 'svg/arrow.php'; ?>

        </section>

        <section id="main-container">

            <div id="home-lineup-wrapper">

            <?php
            $headliners = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'lineup',
                'meta_query'	=> array(
                    'relation'		=> 'AND',
                    array(
                        'key'	  	=> 'stage',
                        'value'	  	=> 'Main',
                        'compare' 	=> '='
                    ),
                    array(
                        'key'	  	=> 'slot',
                        'value'	  	=> '1',
                        'compare' 	=> '='
                    )
                )
            ));
            
            foreach ($headliners->posts as $headliner){
                $headlinerDay = get_field('day', $headliner->ID);
                switch ($headlinerDay) {
                    case 'Friday':
                        $fridayHeadliner = $headliner;
                        break;
                    case 'Saturday':
                        $saturdayHeadliner = $headliner;
                        break;
                    case 'Sunday':
                        $sundayHeadliner = $headliner;
                        break;
                }
            };

            ?>

                <a href="<?php if ($fridayHeadliner){echo get_permalink($fridayHeadliner->ID);} else {echo site_url('/lineup');} ?>" class="home-lineup">

                    <div class="home-lineup-image" style="background-image: url('<?php echo get_the_post_thumbnail_url($fridayHeadliner->ID); ?>');"></div>
                    <div class="home-lineup-inner">
                        <h3>Friday Headliner:</h3>
                        <h3>
                        <?php if ($fridayHeadliner){echo $fridayHeadliner->post_title;} else {echo '???';} ?>
                        </h3>
                    </div>

                </a>

                <a href="<?php if ($saturdayHeadliner){echo get_permalink($saturdayHeadliner->ID);} else {echo site_url('/lineup');} ?>" class="home-lineup">

                    <div class="home-lineup-image" style="background-image: url('<?php echo get_the_post_thumbnail_url($saturdayHeadliner->ID); ?>');"></div>
                    <div class="home-lineup-inner">
                        <h3>Saturday Headliner:</h3>
                        <h3><?php if ($saturdayHeadliner){echo $saturdayHeadliner->post_title;} else {echo '???';} ?></h3>
                    </div>
                    
                </a>

                <a href="<?php if ($sundayHeadliner){echo get_permalink($sundayHeadliner->ID);} else {echo site_url('/lineup');} ?>" class="home-lineup">

                    <div class="home-lineup-image" style="background-image: url('<?php echo get_the_post_thumbnail_url($sundayHeadliner->ID); ?>');"></div>  
                    <div class="home-lineup-inner">
                        <h3>Sunday Headliner:</h3>
                        <h3><?php if ($sundayHeadliner){echo $sundayHeadliner->post_title;} else {echo '???';} ?></h3>
                    </div>
                    
                </a>

                <a href="<?php echo site_url('/lineup'); ?>" class="home-lineup">
                    <div class="home-lineup-image"></div>  
                </a>

                <?php wp_reset_postdata(); ?>

            </div>

            <div id="home-banner-wrapper">

                <?php include 'svg/bolt.php'; ?>

                <div class="home-banner-inner">

                    <h2>Stardust Festival returns in 2020!</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat pariatur exercitationem ipsa sunt dolorem expedita dolores? Recusandae deleniti atque officia nemo facere. Velit dolor commodi quaerat porro, nisi quasi ipsam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat pariatur exercitationem ipsa sunt dolorem expedita dolores? Recusandae deleniti atque officia nemo facere. Velit dolor commodi quaerat porro, nisi quasi ipsam.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat pariatur exercitationem ipsa sunt dolorem expedita dolores? Recusandae deleniti atque officia nemo facere. Velit dolor commodi quaerat porro, nisi quasi ipsam.</p>
                    <a href="<?php echo site_url('/tickets'); ?>" class="button lrg-btn">Buy tickets</a>

                </div>

                <?php include 'svg/bolt.php'; ?>

            </div>

            <div id="home-news-wrapper">

                <?php $news = new WP_Query(array(
                    'posts_per_page' => 4,
                    'post_type' => 'post',
                    'orderby' => 'date',
                    'order' => 'DESC'
                ));

                while($news->have_posts()){
                    $news->the_post(); ?>
                    <a href="<?php echo get_the_permalink(); ?>" class="home-news">
                        <div class="home-news-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
                        <div class="home-news-inner">
                            <h3><?php echo get_the_title(); ?></h3>
                            <h4><?php echo get_the_date("d.m.Y"); ?></h4>
                        </div>
                    </a>
                <?php } ?>

            </div>

            <a href="<?php echo site_url('/news'); ?>" class="button sml-btn">See all news</a>

            <div id="home-signature">
                <?php include 'svg/icon.php'; ?>
            </div>

        </section>

        <?php include 'footer.php'; ?>