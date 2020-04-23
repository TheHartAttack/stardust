<?php include 'header.php';?>

<section id="page-hero">
<h2>2020 Lineup</h2>
</section>

<section id="main-container">

    <div class="lineup-poster-list toggle-list">
        <div class="lineup-list-toggle">List</div>
        <div class="lineup-poster-toggle">Poster</div>
    </div>

    <div class="lineup-poster">
        <img src="<?php echo get_theme_file_uri('/img/2020.jpg'); ?>" alt="Stardust Festival 2020 Lineup Poster">
    </div>

    <div class="lineup-list active">

        <h3 class="lineup-stage">Earth Stage</h3>

        <div class="lineup-band-wrapper">

            <?php

                $lineup = new WP_Query(array(
                    'posts_per_page' => -1,
                    'post_type' => 'lineup',
                    'meta_query' => array(
                        'relation'		=> 'AND',
                        'stage_clause' => array(
                            'key'	  	=> 'stage',
                            'value'	  	=> 'Main',
                            'compare' 	=> '=',
                        ),
                        'slot_clause' => array(
                            'key'	  	=> 'slot',
                            'compare'	  	=> 'EXISTS',
                        ),
                        'day_clause' => array(
                            'key'	  	=> 'day',
                            'compare'	  	=> 'EXISTS',
                        ),
                    ),
                    'orderby' => array(
                        'slot_clause' => 'ASC',
                        'day_clause' => 'ASC',
                    )
                ));

                while($lineup->have_posts()){
                    $lineup->the_post(); ?>
                    <a href="<?php echo the_permalink(); ?>" class="lineup-band">
                        <div class="lineup-band-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                        <div class="lineup-band-inner">
                            <h4><?php echo the_title(); ?></h4>
                        </div>
                    </a>
                <?php } ?>

        </div>

        <h3 class="lineup-stage">Venus Stage</h3>
        
        <div class="lineup-band-wrapper">

        <?php

            $lineup = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'lineup',
                'meta_query' => array(
                    'relation'		=> 'AND',
                    'stage_clause' => array(
                        'key'	  	=> 'stage',
                        'value'	  	=> 'Second',
                        'compare' 	=> '=',
                    ),
                    'slot_clause' => array(
                        'key'	  	=> 'slot',
                        'compare'	  	=> 'EXISTS',
                    ),
                    'day_clause' => array(
                        'key'	  	=> 'day',
                        'compare'	  	=> 'EXISTS',
                    ),
                ),
                'orderby' => array(
                    'slot_clause' => 'ASC',
                    'day_clause' => 'ASC',
                )
            ));

            while($lineup->have_posts()){
                $lineup->the_post(); ?>
                <a href="<?php echo the_permalink(); ?>" class="lineup-band">
                    <div class="lineup-band-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                    <div class="lineup-band-inner">
                        <h4><?php echo the_title(); ?></h4>
                    </div>
                </a>
            <?php } ?>

        </div>

        <h3 class="lineup-stage">Mars Stage</h3>
        
        <div class="lineup-band-wrapper">

        <?php

            $lineup = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'lineup',
                'meta_query' => array(
                    'relation'		=> 'AND',
                    'stage_clause' => array(
                        'key'	  	=> 'stage',
                        'value'	  	=> 'Third',
                        'compare' 	=> '=',
                    ),
                    'slot_clause' => array(
                        'key'	  	=> 'slot',
                        'compare'	  	=> 'EXISTS',
                    ),
                    'day_clause' => array(
                        'key'	  	=> 'day',
                        'compare'	  	=> 'EXISTS',
                    ),
                ),
                'orderby' => array(
                    'slot_clause' => 'ASC',
                    'day_clause' => 'ASC',
                )
            ));

            while($lineup->have_posts()){
                $lineup->the_post(); ?>
                <a href="<?php echo the_permalink(); ?>" class="lineup-band">
                    <div class="lineup-band-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                    <div class="lineup-band-inner">
                        <h4><?php echo the_title(); ?></h4>
                    </div>
                </a>
            <?php } ?>

        </div>

        <h3 class="lineup-stage">Mercury Stage</h3>
        
        <div class="lineup-band-wrapper">

        <?php

            $lineup = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'lineup',
                'meta_query' => array(
                    'relation'		=> 'AND',
                    'stage_clause' => array(
                        'key'	  	=> 'stage',
                        'value'	  	=> 'Fourth',
                        'compare' 	=> '=',
                    ),
                    'slot_clause' => array(
                        'key'	  	=> 'slot',
                        'compare'	  	=> 'EXISTS',
                    ),
                    'day_clause' => array(
                        'key'	  	=> 'day',
                        'compare'	  	=> 'EXISTS',
                    ),
                ),
                'orderby' => array(
                    'slot_clause' => 'ASC',
                    'day_clause' => 'ASC',
                )
            ));

            while($lineup->have_posts()){
                $lineup->the_post(); ?>
                <a href="<?php echo the_permalink(); ?>" class="lineup-band">
                    <div class="lineup-band-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                    <div class="lineup-band-inner">
                        <h4><?php echo the_title(); ?></h4>
                    </div>
                </a>
            <?php } ?>

        </div>

    </div>

</section>

<?php include 'footer.php';?>