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
                global $post;
                $download_link = get_post_meta(get_post_meta($post->ID,'custom_download',true),'_wp_attached_file',true);
            ?>


                <!-- Template to Display Posts -->
                <h3><?php the_title(); ?></h3>

                <p><?php echo get_post_meta($post->ID,'custom_name',true); ?></p>
                <p><img src="<?php echo esc_url(bloginfo('url')); ?>/wp-content/uploads/<?php echo $download_link; ?>" alt="" width="150px" height="150px"></p>
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