<?php include 'header.php'; ?>

<section id="page-hero">
    <h2>2020 Lineup</h2>
</section>

<section id="main-container">

    <?php the_post();
    
        $timeslot;
        $stage = get_field('stage', $headliner->ID);
        $slot = get_field('slot', $headliner->ID);

        if ($stage == 'Main'){
            switch ($slot) {
                case '1':
                    $timeslot = '20:45-22:30';
                    break;
                case '2':
                    $timeslot = '18:45-20:15';
                    break;
                case '3':
                    $timeslot = '17:00-18:15';
                    break;
                case '4':
                    $timeslot = '15:30-16:30';
                    break;
                case '5':
                    $timeslot = '14:10-15:00';
                    break;
                case '6':
                    $timeslot = '13:00-13:40';
                    break;
                case '7':
                    $timeslot = '12:00-12:30';
                    break;
            }
            $stage = 'Earth';
        } elseif ($stage == 'Second'){
            switch ($slot) {
                case '1':
                    $timeslot = '20:45-22:15';
                    break;
                case '2':
                    $timeslot = '19:15-20:15';
                    break;
                case '3':
                    $timeslot = '17:50-18:45';
                    break;
                case '4':
                    $timeslot = '16:30-17:20';
                    break;
                case '5':
                    $timeslot = '15:15-16:00';
                    break;
                case '6':
                    $timeslot = '14:05-14:45';
                    break;
                case '7':
                    $timeslot = '13:00-13:35';
                    break;
                case '8':
                    $timeslot = '12:00-12:30';
                    break;
            }
            $stage = 'Venus';
        } elseif ($stage == 'Third' OR $stage == 'Fourth'){
            switch ($slot) {
                case '1':
                    $timeslot = '21:00-22:00';
                    break;
                case '2':
                    $timeslot = '19:35-20:30';
                    break;
                case '3':
                    $timeslot = '18:15-19:05';
                    break;
                case '4':
                    $timeslot = '17:00-17:45';
                    break;
                case '5':
                    $timeslot = '15:50-16:30';
                    break;
                case '6':
                    $timeslot = '14:45-15:20';
                    break;
                case '7':
                    $timeslot = '13:45-14:15';
                    break;
                case '8':
                    $timeslot = '12:50-13:15';
                    break;
                case '9':
                    $timeslot = '12:00-12:20';
                    break;
            }
            if ($stage == 'Third'){
                $stage = 'Mars';
            } elseif ($stage == 'Fourth'){
                $stage = 'Mercury';
            }
        }

    ?>
        
    <div id="band-wrapper">
    
        <div class="band-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>

        <div class="band-profile">
        
            <h3><?php echo get_the_title(); ?></h3>
            <span id="band-stage"><?php echo get_field('day'); ?> <?php echo $stage; ?> Stage</span>
            <span id="band-time"><?php echo $timeslot; ?></span>
            <?php the_content();?>

            <div class="single-band-buttons">
                <a class="button sml-btn" href="<?php echo site_url('/lineup'); ?>">View full lineup</a>
                <a class="button sml-btn" href="<?php echo site_url('/tickets'); ?>">Buy tickets</a>
            </div>
            
        </div>
    
    </div>

</section>

<?php include 'footer.php'; ?>