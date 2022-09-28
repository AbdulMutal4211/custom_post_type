<?php
function pro_func(){ ?>

<div class="container">
    <div class="row">
        <?php
            $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination
            $the_query = new WP_Query( array(
                'post_type' => 'product',
                'paged' => $paged,
                'orderby' =>'ID',
                'order' =>'asc',    
                'category_name' => 'testing',
                'tax_query' => array(
					array(
						'taxonomy' => 'product_cat',
						'field'    => 'slug',
						'terms'    => 'pent',
					),
				),
                'posts_per_page' => 1000)
            ); 
             
            while ( $the_query->have_posts() ) : $the_query->the_post();   

            global $product;

//             echo"<pre>";
//             print_r($product);                      
//             echo"</pre>";

            $attachment_ids = $product->get_gallery_image_ids();/////THIS IS PRODUCT GALLERY VARIABLE

        ?>
            <div class="row customProduct wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp animated wpb_start_animation">    
                <div class="col span_4 pro_img">
                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="Image Title">
                    <?php
                        /////THIS IS PRODUCT GALLERY LOOP
                        foreach( $attachment_ids as $attachment_id ) {?>
                            <img src="<?php echo $image_link = wp_get_attachment_url( $attachment_id ); ?>" class="hover-gallery-image">
                    <?php
                        } 
                        /////THIS IS PRODUCT GALLERY LOOP
                    ?>
                </div>
                <div class="col span_8 col_last content_box">
                    <h4 class="pro_title"><?php echo get_the_title(); ?></h4>
                    <p class="pro_para p0"><?php echo wp_trim_words(get_the_content(),30,'...') ; ?></p>
                    <!-- <p class="pro_para p0"><?php //echo $product->get_short_description() ; ?></p> -->
                    <?php 
                        if (!empty($product)) {?>
                            <p class="pro_rpice p0"><?php echo get_woocommerce_currency_symbol().': '. $product->get_price(); ?></p>
                    <?php                            
                        }
                    ?>
                    <a href="<?= get_permalink() ?>" class="theme_btn">Explore More</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<?php }

add_shortcode('custom_product','pro_func');
//[custom_product]
?>