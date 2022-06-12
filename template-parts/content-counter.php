<!-- the query -->
<?php
    $args = array(
		'post_type' => 'counter'
    );
	$the_query = new WP_Query( $args );
?>

<div id="counter">
    <?php if ( $the_query->have_posts() ) : ?>
        <div class="counter-container">
            <!-- the loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="counter-box">
                    <div class="box-symbol">
                        <div class="box-symbol__icon box-symbol__icon--users"></div>
                    </div>
                    <div class="box-text">
                        <p class="box-text__value" data-count="<?php the_field('value_users'); ?>">0</p>
                        <p class="box-text__name">Users</p>
                    </div>
                </div>
                <div class="counter-box">
                    <div class="box-symbol">
                        <div class="box-symbol__icon box-symbol__icon--locations"></div>
                    </div>
                    <div class="box-text">
                        <p class="box-text__value" data-count="<?php the_field('value_locations'); ?>">0</p>
                        <p class="box-text__name">Locations</p>
                    </div>
                </div>
                <div class="counter-box">
                    <div class="box-symbol">
                        <div class="box-symbol__icon box-symbol__icon--servers"></div>
                    </div>
                    <div class="box-text">
                        <p class="box-text__value" data-count="<?php the_field('value_servers'); ?>">0</p>
                        <p class="box-text__name">Servers</p>
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- end of the loop -->
        </div>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?> 
</div>