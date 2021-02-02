<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package HW1Site
 */

get_header();

?>

<div class="singleContentFlex">
<div class="singleContentLeft">
    <?php
    echo "<div class='posted-on'>";
    // wpdhw1_ryansawejka_posted_on();
    the_time('F j Y');

    echo "</div>";

    ?>
    <?php wpdhw1_ryansawejka_post_thumbnail(); ?>

    <?php
    the_post();
    ?>
    <?php
    echo "<div>";
    wpdhw1_ryansawejka_posted_by();
    echo "</div>";
    ?>
		<?php


            the_content();


?>
    <div class="LongSideBarWrapper">
    <div class="LongSideBarWrapperLeft">
    <aside id="secondary" class="widget-area">
        <?php dynamic_sidebar( 'LongSideBar1' ); ?>

    </aside><!-- #secondary -->
    </div>
    <div class="LongSideBarWrapperRight">
        <aside id="secondary" class="widget-area">
            <?php dynamic_sidebar( 'LongSideBar2' ); ?>

        </aside><!-- #secondary -->

    </div>
</div>

<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;


		?>


</div>
<div class="singleContentRight">
    <aside id="secondary" class="widget-area">
        <?php dynamic_sidebar( 'RealSideBar1' ); ?>
    </aside><!-- #secondary -->
    <aside id="secondary" class="widget-area">
        <?php dynamic_sidebar( 'RealSideBar2' ); ?>
    </aside><!-- #secondary -->
    <aside id="secondary" class="widget-area">
        <?php dynamic_sidebar( 'RealSideBar3' ); ?>
    </aside><!-- #secondary -->
    <aside id="secondary" class="widget-area">
        <?php dynamic_sidebar( 'RealSideBar4' ); ?>
    </aside><!-- #secondary -->
</div>
</div>
<?php
get_sidebar();
get_footer();
