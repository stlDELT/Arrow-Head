<?php /* Template Name: CustomPageT1 */ ?>
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
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
    get_header();
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
