<?php get_header();?>

<div class="page-banner__row">
    <div class="page-banner">
        <div>Paradigmaváltás</div>
        <div>az olvasástanításban</div>
    </div>
    <div class="event-summaries">
        <?php
        $homepageEvents = new WP_Query(array(
            'posts_per_page' => 2,
            'post_type' => 'event',
        ));

        while ($homepageEvents->have_posts()) {
            $homepageEvents->the_post();
        ?>
            <div class="event-summary">
                <a class="event-summary__date t-center" href="<?php the_permalink();?>">
                <span class="event-summary__month">
                
                <?php
                    $eventDate = new DateTime(get_field('event_date'));
                    echo $eventDate->format('M');
                ?> 
                
                </span>
                <span class="event-summary__day"><?php echo $eventDate->format('d'); ?></span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny">
                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                    </h5>
                    <p>
                        <?php if (has_excerpt()) {
                                echo get_the_excerpt();
                            } else {
                                echo wp_trim_words(get_the_content(), 18);
                            }
                        ?>
                        <a href="<?php the_permalink();?>">Read more</a>
                    </p>
                </div>
            </div>
        <?php
        }
        
        wp_reset_postdata();
        ?>
    </div>
</div>

<?php get_footer();?>