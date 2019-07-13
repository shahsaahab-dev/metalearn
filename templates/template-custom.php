<?php
/* Template Name: Custom Page Template */
get_header();
?>

<div class="container">
    <div class="row">
        <div class="content">
            <h1>Test Custom Post Meta</h1>
            <?php 
                $custom_try = new WP_QUERY( array(
                    'post_type' => 'custom_post',
                    'posts_per_page' => -1,


                ));

                if($custom_try->have_posts()): while($custom_try->have_posts()): $custom_try->the_post();
            ?>


<!-- Template to Display Posts -->

<!-- End here -->
                    <?php 
                    endwhile; endif;
                    ?>

        </div>
    </div>
</div>


<?php
get_footer();

?>