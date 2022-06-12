<!-- the query -->
<?php
    $args = array(
		'post_type' => 'plan-boxes'
    );
	$the_query = new WP_Query( $args );
?>

<div id="plan-boxes">
    <?php if ( $the_query->have_posts() ) : ?>
        <div class="boxes-container">
            <!-- the loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="boxes-container__plan-box">
                    <a href="#" class="plan-box__inside">
                        <img src="<?php the_field('plan_picture'); ?>" alt="" class="plan-box__imgage">
                        <h3><?php the_title(); ?></h3>
                        <?php the_field('plan_text'); ?>
                        <p class="plan-box__price"><?php the_field('plan_price'); ?></p>
                        <button class="plan-box__button">Select</button>
                    </a>
                </div>
            <?php endwhile; ?>
            <!-- end of the loop -->
        </div>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?> 
</div>