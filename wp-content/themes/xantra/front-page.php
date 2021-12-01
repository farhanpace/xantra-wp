<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xantra
 */
get_header();

?>

<main id="primary" class="site-main">
    <div class="first-sec p-3 p-md-5" id="first-sec">
        <div class="row">
            <div class="col-md-4">
                <?php the_custom_logo(); ?>
            </div>
            <div class="col-md-8">
                <div class="ul d-flex menu text-white justify-content-center justify-content-md-end mx-auto">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'd-flex list-unstyled',
                        )
                    ); ?>
                </div>
            </div>
        </div>
        <div class="">
            <div class="pos-abs">
                <img src="<?php echo get_template_directory_uri() ?>/images/ctelogo.png" alt="" class="img-fluid">
            </div>

            <div class="pos-abs-right">
                <img src="<?php echo get_template_directory_uri() ?>/images/nowhere.png" alt="" width="250px" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="second-sec row align-items-center p-4 p-md-5" id="second-sec">
        <div class="col-md-6">
            <h3 class="text-white">About</h3>
            <img src="<?php echo get_template_directory_uri() ?>/images/xantralogo.png" alt="" class="img-fluid logo-img my-3">
            <p class="text-white second-p">
                <b>Xantra</b> is one of the important projects and pillars of CTE company and it is the first
                organization for the production of various combat shows in the Kingdom of Saudi Arabia, <br> which seeks
                to be the first <br> platform to provide combat talent in the Middle East and North Africa and works to
                host major global fights for the most important stars in mixed martial arts.
            </p>
        </div>
        <div class="col-md-6">

        </div>
    </div>

    <div class="third-sec row p-5" id="third-sec">
        <div class="p-1 p-md-5">
            <h3 class="text-white">Tickets</h3>
        </div>

        <div>
            <div class="col-12 text-center">
                <h4 class="text-white">Upcoming Event</h4>
                <h1 class="text-white" style="font-size: 100px; font-weight:bold">X01</h1>
                <button class="btn btn-primary rounded w-50" style="background-color:#cf2139; border-color:#cf2139; font-size: 25px">Get Ticket</button>
            </div>
        </div>
    </div>
</main><!-- #main -->

<?php
