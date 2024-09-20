<?php
/**
 * The template for displaying the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package abilito
 */

get_header();
?>
<main>
    <section id="landing">
        <div class="bg bg-mycol1 mb-sm-5">
            <div class="m-5 h-100">
                <div class="row padding-landing align-items-center">
                    <div class="col-sm-6 py-5 text-sm-start text-center">
                        <h1 class=""><?php the_title(); ?></h1>
                        <a class="fs-my-big btn my-btn mt-3" href= <?php echo get_permalink(955) ?>>
                            <?php the_field('bottone_1'); ?>
                        </a> 
                    </div>
                    <div class="col-sm-6 py-5">
                        <figure class="position-relative">
                            <picture>
                                <?php the_post_thumbnail(); ?>
                            </picture>                      
                        </figure>
                    </div>
                </div>   
            </div>
        </div>   
    </section>

    <section id="perche-noi">
        <?php

        $args_outside = array(
            'post_type' => 'sezioni_home',
            'post_per_page' => 1,
            'meta_key' => 'posizione_nella_pagina',
            'meta_compare' => '=',
            'meta_value' => 1
        );

        $custom_post_outside = new WP_Query($args_outside);

        while ($custom_post_outside->have_posts()) : $custom_post_outside->the_post();
        $post_outside_id = get_post();

        ?>
        <div class="text-center">
            <h2>
                <?php the_title(); ?>
            </h2>
        </div>
        <div class="py-5" >
            <div class="px-3 py-5 mx-5 bg-mycol3 rounded-big mb-sm-5">
                <div class="row">
                    <?php
                        $args = array(
                            'post_type' => 'perche_noi',
                            'post_per_page' => 1,
                            'meta_key' => 'posizione_nella_pagina',
                            'orderby'=>'meta_value_num',
                            'order'=>'ASC',
                        );

                        $custom_post = new WP_Query($args);
                        
                        while ($custom_post->have_posts()) : $custom_post->the_post();    
                            
                    ?>

                    <div class="col-12 col-lg-4">
                        <div class="row g-0 0">
                            <div class="col-12 col-lg-4 bg-size-cover pb-100" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>" >
                            </div>
                            <div class="col-12 col-lg-8 ps-3 mt-5 mt-lg-auto">
                                <h3 class="fs-responsive"> <?php the_title(); ?> </h3>
                                <div class="fs-responsive">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                        endwhile;
                        $custom_post_outside->reset_postdata();
                    ?>  
                </div>
            </div>
        </div>
        <?php
            endwhile;
            wp_reset_postdata();
        ?>
    </section>

    <section id="terapia-a-casa" class="pb-5">
        <div>
            <div class="py-5 mx-3 mx-big mt-sm-5 bg-mycol5 bg-left rounded-big">
                <?php

                    $args_outside = array(
                        'post_type' => 'sezioni_home',
                        'post_per_page' => 1,
                        'meta_key' => 'posizione_nella_pagina',
                        'meta_compare' => '=',
                        'meta_value' => 2
                    );

                    $custom_post_outside = new WP_Query($args_outside);

                    while ($custom_post_outside->have_posts()) : $custom_post_outside->the_post();
                    $post_outside_id = get_post();

                ?>
                <h2 class="mx-4 mx-sm-5"><?php the_title();?></h2>
                <div class="mx-4 mx-sm-5 opacity-09 pb-3 pb-sm-0">
                    <?php the_content();?>
                </div>
                
                <div class=" ms-lg-5 me-lg-0 mx-3 mx-sm-5 mb-md-0 py-4 row align-items-center">
                    <div class="col-12 col-lg-5 position-relative">
                        <div class="rounded-big bg-mycol4 ol-bg">
                        </div>
                        <ol class="ol-left">
                            <?php
                                $args_inside = array(
                                    'post_type' => 'steps',
                                    'post_per_page' => 1,
                                    'meta_key' => 'posizione_nella_pagina',
                                    'orderby'=>'meta_value_num',
                                    'order'=>'ASC',
                                );

                                $custom_post_inside = new WP_Query($args_inside);
                                
                                while ($custom_post_inside->have_posts()) : $custom_post_inside->the_post();    
        
                            ?>
                            
                            <li>
                                <?php the_content(); ?>
                            </li>

                            <?php
                                endwhile;
                                $custom_post_outside->reset_postdata();
                            ?> 
                    
                        </ol>
                    </div>
                    <div class="col-12 col-lg-7 z-1" >      
                        <div class="px-lg-5">
                            <figure class="px-lg-5">
                                <?php echo get_the_post_thumbnail($post_outside_id); ?>     
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="text-center text-lg-start mt-0 mt-lg-5 mt-xl-0">
                    <a class="btn my-btn ms-lg-5 me-lg-0 mx-3 mx-sm-5 fs-5"  href= <?php echo get_permalink(955) ?>>
                        <?php the_field("bottone_1"); ?>
                    </a>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>


    <section id="paziente-al-centro" class="py-5">
        <div>
            <div class="py-5 mx-3 mx-big mt-sm-5 bg-mycol3 bg-right rounded-big">
                <?php

                    $args_outside = array(
                        'post_type' => 'sezioni_home',
                        'post_per_page' => 1,
                        'meta_key' => 'posizione_nella_pagina',
                        'meta_compare' => '=',
                        'meta_value' => 3
                    );

                    $custom_post_outside = new WP_Query($args_outside);

                    while ($custom_post_outside->have_posts()) : $custom_post_outside->the_post();

                ?>

                <h2 class="mx-4 mx-sm-5 text-start text-lg-end"><?php the_title();?></h2>
                <div class="mx-4 mx-sm-5 opacity-09 pb-3 pb-sm-0 text-start text-lg-end">
                    <?php the_content();?>
                </div>
                
                <div class=" ms-lg-0 me-lg-0 mx-3 mx-sm-5 mt-lg-5 mt-3 mt-xl-3 mb-md-0 py-4 row align-items-center">
                    <div class="col-12 col-lg-7 z-1 pb-5 pb-lg-0" >      
                        <figure class="pb-5 pb-md-0">
                            <?php echo the_post_thumbnail(); ?>
                        </figure> 
                    </div>
                    <div class="col-12 col-lg-5 position-relative">
                        <div class="rounded-big bg-mycol2 ol-bg">
                        </div>
                        <ol class="ol-right">
                            <?php
                                $args_inside = array(
                                    'post_type' => 'paziente_al_centro',
                                    'post_per_page' => 1,
                                    'meta_key' => 'posizione_nella_pagina',
                                    'orderby'=>'meta_value_num',
                                    'order'=>'ASC',
                                );

                                $custom_post_inside = new WP_Query($args_inside);
                                
                                while ($custom_post_inside->have_posts()) : $custom_post_inside->the_post();    
        
                            ?>
                            
                            <li>
                                <?php the_content(); ?>
                            </li>

                            <?php
                                endwhile;
                                $custom_post_outside->reset_postdata();
                            ?> 
                    
                        </ol>
                    </div>
                
                </div>
                <div class="text-center text-lg-end mt-5 mt-xl-0 ">
                    <a class="btn my-btn me-lg-5 ms-lg-0 mx-3 mx-sm-5 fs-5"  href= <?php echo get_permalink(955) ?>>
                        <?php the_field("bottone_1"); ?>
                    </a>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <section id="zero-stress" class="my-big mx-3 mx-md-5">
        <?php
            $args = array(
                'post_type' => 'sezioni_home',
                'post_per_page' => 1,
                'meta_key' => 'posizione_nella_pagina',
                'meta_compare' => '=',
                'meta_value' => 4
            );

            $custom_post = new WP_Query($args);
            
            while ($custom_post->have_posts()) : $custom_post->the_post();    

        ?>
        <div class="text-center fs-1 mb-4">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="my-fs-p mx-2 mx-md-5 px-md-5 px-2 text-lg-center">
            <?php the_content(); ?>
        </div>
        <div class="text-center mt-5 pb-5">
            <a class="btn my-btn fs-5"  href= <?php echo get_permalink(955) ?>>
                <?php the_field("bottone_1"); ?>
            </a>
        </div>    
        <?php
            endwhile;
            wp_reset_postdata();
        ?>

    </section>

    <section id="faq" class="pb-3 pb-md-5">
        <?php

            $args_outside = array(
                'post_type' => 'sezioni_home',
                'post_per_page' => 1,
                'meta_key' => 'posizione_nella_pagina',
                'meta_compare' => '=',
                'meta_value' => 5
            );

            $custom_post_outside = new WP_Query($args_outside);

            while ($custom_post_outside->have_posts()) : $custom_post_outside->the_post();

        ?>
        <div class="py-5 mx-3 mx-medium mt-sm-5 bg-mycol4 rounded-big ">
            <h2 class="mx-4 mx-sm-5 text-center pb-3 pb-md-5"><?php the_title();?></h2>
            <div class="mx-md-5 mx-big mx-3 mb-3 mb-md-5 faq">
                <?php
                    $args_inside = array(
                        'post_type' => 'faq',
                        'post_per_page' => 1,
                        'meta_key' => 'posizione_nella_pagina',
                        'orderby'=>'meta_value_num',
                        'order'=>'ASC'
                    );

                    $custom_post_inside = new WP_Query($args_inside);

                    while ($custom_post_inside->have_posts()) : $custom_post_inside->the_post();
                ?>
                
                <div class="row faq-child"> 
                    <div class="col-12">
                        <button type="button" class="faq-button"><?php the_title(); ?></button>
                        <div class="faq-content">
                            <?php the_content(); ?>
                        </div>
                    </div>   
                </div>

                <?php
                    endwhile;
                    $custom_post_outside->reset_postdata();
                ?>    
            </div>
            <div class="mx-2 mx-md-5 px-md-5 px-2 text-lg-center">
                <?php the_content(); ?>
            </div>
            <div class="text-center mt-3 pb-3 mt-md-5 pb-md-5">
                <a class="btn my-btn fs-5"  href= <?php echo get_permalink(955) ?>>
                    <?php the_field("bottone_1"); ?>
                </a>
            </div>
        </div>
        <?php
            endwhile;
            wp_reset_postdata();
        ?>
    </section>

    <section id="contatti" class="">
        <div class="my-5 mx-3 mx-big px-3 px-lg-5 mx-big bg-mycol2 rounded-big position-relative">
            <?php
                $args = array(
                    'post_type' => 'sezioni_home',
                    'post_per_page' => 1,
                    'meta_key' => 'posizione_nella_pagina',
                    'meta_compare' => '=',
                    'meta_value' => 6
                );

                $custom_post = new WP_Query($args);
                
                while ($custom_post->have_posts()) : $custom_post->the_post();    

            ?>
            <div class="text-center fs-1 mb-4">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="text-center opacity-09 mb-4">
                <p><?php the_field("sottotitolo"); ?></p>
            </div>
            <div class="mx-2 mx-md-5 px-md-5 px-2 text-center">
                <a class="py-2 btn my-btn fs-5"  href= <?php echo get_permalink(955) ?>>
                    <?php the_field("bottone_1"); ?>
                </a>
            </div>
            <div class="position-absolute img-contatti-1">
                <?php the_post_thumbnail(); ?>
            </div>

            <?php
                endwhile;
                wp_reset_postdata();
            ?>

            <?php
                $args = array(
                    'post_type' => 'sezioni_home',
                    'post_per_page' => 1,
                    'meta_key' => 'posizione_nella_pagina',
                    'meta_compare' => '=',
                    'meta_value' => 7
                );

                $custom_post = new WP_Query($args);
                
                while ($custom_post->have_posts()) : $custom_post->the_post();    

            ?>

            <div class="position-absolute img-contatti-2">
                <?php the_post_thumbnail(); ?>
            </div>

            <?php
                endwhile;
                wp_reset_postdata();
            ?>

        </div>

    </section>
</main>

<?php

get_footer();
