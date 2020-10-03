<?php
/*
  Template Name: Игрушки
*/

?>

<?php
 get_header();
?>
    <div class="toys">
        <div class="container">
        <?php        
            $category_id = get_cat_ID( 'Мягкие игрушки' );
            $category_soft_link = get_category_link( $category_id );
        ?>
            <h2 class="subtitle"><a href="<?php echo $category_soft_link?>">Мягкие игрушки</a></h2>
            <div class="toys__wrapper">
                <?php
                //! метод для виведення постів
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'soft_toys',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>
                            <div class="toys__item" style="background-image: url(<?php
                                //! якщо встановлена картинка прев'юшка, то ми її використовуємо
                                if(has_post_thumbnail()){
                                    the_post_thumbnail_url();
                                } else {
                                    echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                                }
                            ?>)">
                            <div class="toys__item-info">
                                <div class="toys__item-title"><?php the_title();?></div>
                                    <div class="toys__item-descr">
                                        <?php the_field('toys_descr');?>
                                    </div>
                                    <a href="<?php echo get_permalink();?>" class="minibutton toys__trigger">Подробнее</a>
                                </div>
                            </div>
                        <?php
                    }

                    wp_reset_postdata(); // сброс
                ?>
            </div>

            <?php 
                $category_id = get_cat_ID( 'Развивающие игрушки' );
                $category_edy_link = get_category_link( $category_id );
            ?>
            <h2 class="subtitle"><a href="<?php echo $category_edy_link?>">Развивающие игрушки</a></h2>
            <div class="toys__wrapper">
                <?php
                //! метод для виведення постів
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'edy_toys',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                                <div class="toys__item" style="background-image: url(<?php
                                    if(has_post_thumbnail()){
                                        the_post_thumbnail_url();
                                    } else {
                                        echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                                    }
                                ?>)">
                                    <div class="toys__item-info">
                                        <div class="toys__item-title"><?php the_title();?></div>
                                        <div class="toys__item-descr">
                                            <?php the_field('toys_descr');?>
                                        </div>
                                        <a href="<?php echo get_permalink();?>" class="minibutton toys__trigger">Подробнее</a>
                                    </div>
                                </div>
                            <?php
                        }

                        wp_reset_postdata(); // сброс
                    ?>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="toys__alert">
                        <span><?php the_field('toy_alert');?></span><?php the_field('toy_text');?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
 get_footer();
?>