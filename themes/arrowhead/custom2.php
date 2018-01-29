<?php /* Template Name: CustomPageT2 */ ?>
<?php
/**
 * This uses the header without the spacing from the content.
 * @package WordPress
 * @subpackage Wp_Bootstrap
 * @since Wp Bootstrap 1.0
 */

    // Gets header.php


    // if (
    //   is_page(166) ||
    //   is_page(195) ||
    //   is_page(202) ||
    //   is_page(204))
    // {
    //   get_header('locations');
    // }
    // else
    // {
    //   get_header();
    // }
    // wp_head();
    get_header('locations');
    wp_head();


?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <div class="entry">
            <?php the_content(); ?>
        </div><!-- entry -->
<?php endwhile; ?>
<?php endif; ?>

<?php // Gets footer.php
get_footer();
?>
