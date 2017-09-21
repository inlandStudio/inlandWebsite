<?php if( have_rows('module_type_1_big_lead_and_four_columns_with_images') ):
      while( have_rows('module_type_1_big_lead_and_four_columns_with_images') ): the_row();

?>
<?php if( get_sub_field('module_type_1_background_color') ): ?>
<!-- #1. Lead and four columns with images, headings and text -->
<div class="module <?php the_sub_field('module_type_1_background_color'); ?>">
    <div class="wrapper">
        <div class="lead-and-four-images">
            <!-- Lead text -->
            <div class="lead">
                <?php the_sub_field('module_type_1_lead_text'); ?>
            </div>
            <!-- // Lead text -->

            <!-- Image,heading and text repeater. Four columns -->
            <?php if( have_rows('module_type_1_images_and_text') ): ?>
            <div class="flex-container">
            <?php while( have_rows('module_type_1_images_and_text') ): the_row(); ?>
                <div class="item">
                    <img src="<?php the_sub_field('module_type_1_image'); ?>" alt="">
                    <h6><?php the_sub_field('module_type_1_heading'); ?></h6>
                    <?php the_sub_field('module_type_1_text'); ?>
                </div>
            <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <!-- // Image,heading and text repeater. Four columns -->
        </div>
    </div>
</div>
<!-- // #1. Lead and four columns with images, headings and text -->
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>


<?php if( have_rows('module_type_2_big_title_and_text') ):
      while( have_rows('module_type_2_big_title_and_text') ): the_row();
?>
<?php if( get_sub_field('module_type_2_background_color') ): ?>
<!-- #2. Big title and text -->
<div class="module <?php the_sub_field('module_type_2_background_color'); ?>">
    <div class="wrapper">
        <div class="large-heading-and-paragraph">
            <div class="two-thirds-width">
                <h2><?php the_sub_field('module_type_2_title'); ?></h2>
                <?php the_sub_field('module_type_2_text'); ?>
            </div>
        </div>
    </div>
</div>
<!-- // #2. Big title and text -->
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>


<?php if( have_rows('module_type_3_text_in_three_columns') ):
      while( have_rows('module_type_3_text_in_three_columns') ): the_row();
?>
<?php if( get_sub_field('module_type_3_background_color') ): ?>
<!-- #3. Big title and three columns -->
<div class="module <?php the_sub_field('module_type_3_background_color'); ?>">
    <div class="wrapper">
        <div class="three-equal-columns">
            <div>
                <?php the_sub_field('module_type_3_text'); ?>
            </div>
        </div>
    </div>
</div>
<!-- // #3. Big title and three columns -->
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>


<?php if( have_rows('module_type_4_media_container') ):
      while( have_rows('module_type_4_media_container') ): the_row();
?>
<?php if( get_sub_field('module_type_4_media_container_background_color') ): ?>
<!-- #4. Four images and/or video -->
<div class="module <?php the_sub_field('module_type_4_media_container_background_color'); ?>">
    <div class="wrapper">
        <div class="case-images-and-video">
            <div class="lead">
                <?php the_sub_field('module_type_4_media_container_lead'); ?>
            </div>
            <div class="explore-items-container">

                <?php if( have_rows('module_type_4_media_container_images_and_text') ): ?>
                <?php
                $i = 1;
                while( have_rows('module_type_4_media_container_images_and_text') ): the_row(); ?>
                <div class="image-item-<?php echo $i; ?>">
                    <img src="<?php the_sub_field('module_type_4_media_container_image'); ?>" alt="">
                    <p><?php the_sub_field('module_type_4_media_container_text'); ?></p>
                </div>
                <?php $i++; endwhile; ?>
                <?php endif; ?>

                <div class="clean"></div>
                <?php if( get_sub_field('module_type_4_media_container_video_id') ): ?>
                <div class="video-item">
                    <iframe
                        src="https://player.vimeo.com/video/<?php the_sub_field('module_type_4_media_container_video_id'); ?>"
                        frameborder="0"
                        webkitallowfullscreen mozallowfullscreen allowfullscreen>
                    </iframe>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- // #4. Four images and/or video -->
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>


<?php if( have_rows('module_type_5_quote') ):
      while( have_rows('module_type_5_quote') ): the_row();
?>
<?php if( get_sub_field('module_type_5_background_color') ): ?>
<!-- #5. Quote -->
<div class="module <?php the_sub_field('module_type_5_background_color'); ?>">
    <div class="wrapper">
        <div class="quote">
            <div class="quote-text">
                <?php the_sub_field('module_type_5_quote_text'); ?>
            </div>
            <?php if( get_sub_field('module_type_5_quote_author_name') ): ?>
            <span>&ndash; <?php the_sub_field('module_type_5_quote_author_name'); ?>, <?php the_sub_field('module_type_5_quote_author_title'); ?></span>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- // #5. Quote -->
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>


<?php if( have_rows('module_type_6_lead_and_image_or_video') ):
      while( have_rows('module_type_6_lead_and_image_or_video') ): the_row();
?>
<?php if( get_sub_field('module_type_6_background_color_copy') ): ?>
<!-- #6. Lead and image/video -->
<div class="module <?php the_sub_field('module_type_6_background_color_copy'); ?>">
    <div class="wrapper">
        <div class="case-image-or-video">
            <div>
                <?php the_sub_field('module_type_6_lead_text'); ?>
                <p class="note-message"><?php the_sub_field('module_type_6_detail_text'); ?></p>
            </div>
            <div>
                <div class="thumbnail-container">
                    <img src="<?php the_sub_field('module_type_6_image'); ?>" alt="">
                    <?php if( get_sub_field('module_type_6_video') ): ?>
                    <iframe
                        src="https://player.vimeo.com/video/<?php the_sub_field('module_type_6_video'); ?>"
                        frameborder="0"
                        webkitallowfullscreen mozallowfullscreen allowfullscreen>
                    </iframe>
                    <?php endif; ?>
                </div>
                <p class="note-message"><?php the_sub_field('module_type_6_media_description'); ?></p>
            </div>
        </div>
    </div>
</div>
<!-- // #6. Lead and image/video -->
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>


<?php if( have_rows('module_type_7_lead_and_four_text_columns') ) :
      while( have_rows('module_type_7_lead_and_four_text_columns') ): the_row();
?>
<?php if( get_sub_field('module_type_7_background_color') ): ?>
<!-- #7. Lead and four text columns -->
<div class="module <?php the_sub_field('module_type_7_background_color'); ?>">
    <div class="lead-and-four-columns">
        <div class="wrapper">
            <div class="two-thirds-width lead">
                <?php the_sub_field('module_type_7_lead_text'); ?>
            </div>
        </div>

        <?php if( have_rows('module_type_7_bubbles_subsection') ) :
              while( have_rows('module_type_7_bubbles_subsection') ): the_row();
        ?>
        <div class="submodule-bubbles">
            <div class="title-section <?php the_sub_field('module_type_7_bubbles_subsection_background_color'); ?>">
                <div class="wrapper">
                    <h2><?php the_sub_field('module_type_7_bubbles_subsection_header'); ?></h2>
                </div>
            </div>
            <div class="bubbles">
                <div class="wrapper">
                    <div class="bubble-1">
                        <div class="image">
                            <img src="<?php the_sub_field('module_type_7_bubbles_subsection_image_1'); ?>" alt="">
                        </div>
                        <div class="text">
                            <h3><?php the_sub_field('module_type_7_bubbles_subsection_subtitle_1'); ?></h3>
                            <p><?php the_sub_field('module_type_7_bubbles_subsection_text_1'); ?></p>
                        </div>
                    </div>

                    <div class="bubble-2">
                        <div class="image">
                            <img src="<?php the_sub_field('module_type_7_bubbles_subsection_image_2'); ?>" alt="">
                        </div>
                        <div class="text">
                            <h3><?php the_sub_field('module_type_7_bubbles_subsection_subtitle_2'); ?></h3>
                            <p><?php the_sub_field('module_type_7_bubbles_subsection_text_2'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <div class="wrapper">
            <h3><?php the_sub_field('module_type_7_subtitle_for_columns'); ?></h3>
            <div class="flex-container">
                <?php if( have_rows('module_type_7_columns') ): ?>
                    <?php while( have_rows('module_type_7_columns') ): the_row(); ?>
                        <div class="item">
                            <h6><?php the_sub_field('module_type_7_columns_title'); ?></h6>
                            <p><?php the_sub_field('module_type_7_columns_description'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- // #7. Lead and four text columns -->
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>


<?php if( (have_rows('module_type_8_big_title_and_text_in_three_columns')) ):
      while( have_rows('module_type_8_big_title_and_text_in_three_columns')): the_row();
?>
<?php if( get_sub_field('module_type_8_background_color') ): ?>
<!-- #8. Big title and three columns -->
<div class="module <?php the_sub_field('module_type_8_background_color'); ?>">
    <div class="wrapper">
        <div class="large-heading-and-three-columns">
            <div class="two-thirds-width">
                <h2><?php the_sub_field('module_type_8_title'); ?></h2>
            </div>
            <?php if( have_rows('module_type_8_columns') ):
                  while( have_rows('module_type_8_columns') ): the_row();
            ?>
            <div class="flex-container">
                <div class="item">
                    <?php if( get_sub_field('module_type_8_column_1_text') ): ?>
                    <h6><?php the_sub_field('module_type_8_column_1_title'); ?></h6>
                    <?php endif; ?>
                    <?php the_sub_field('module_type_8_column_1_text'); ?>
                </div>
                <div class="item">
                    <?php if( get_sub_field('module_type_8_column_2_text') ): ?>
                    <h6><?php the_sub_field('module_type_8_column_2_title'); ?></h6>
                    <?php endif; ?>
                    <?php the_sub_field('module_type_8_column_2_text'); ?>
                </div>
                <div class="item">
                    <?php if( get_sub_field('module_type_8_column_3_text') ): ?>
                    <h6><?php the_sub_field('module_type_8_column_3_title'); ?></h6>
                    <?php endif; ?>
                    <?php the_sub_field('module_type_8_column_3_text'); ?>
                </div>
                <div class="item">
                    <?php if( get_sub_field('module_type_8_column_4_text') ): ?>
                    <h6><?php the_sub_field('module_type_8_column_4_title'); ?></h6>
                    <?php endif; ?>
                    <?php the_sub_field('module_type_8_column_4_text'); ?>
                </div>
                <div class="item"></div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- // #8. Big title and three columns -->
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
