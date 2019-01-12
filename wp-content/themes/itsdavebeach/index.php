<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package It's_Dave_Beach
 */
get_header();
?>

    <!-- Marquee -->
    <section id="marquee" class="stage">
        <div class="marquee__wrapper" data-top-bottom="transform: translateY(250px);" data-bottom-top="transform: translateY(-250px);">
            <div class="marquee__slide">
                <div class="marquee__text" data-top-bottom="transform: translateY(-150px);" data-bottom-top="transform: translateY(150px);">
                    <h1 class="heading-1">Hi, I&rsquo;m Dave Beach</h1>
                    <h2 class="heading-2">Full-stack developer with a passion for immersive experiences and blazing-fast code</h2>
                    <button class="btn btn-primary"><span>Let&rsquo;s Go</span></button>
                </div>
            </div>
        </div>
    </section>

    <div class="title-block stage">

        <!-- About Title Card -->
<?php
        set_query_var( 'title-block__slug', 'about' );
        set_query_var( 'title-block__text', 'About Me' );
        get_template_part( 'template-parts/title-block' );
?>

        <!-- Résumé Title Card -->
<?php
        set_query_var( 'title-block__slug', 'resume' );
        set_query_var( 'title-block__text', 'Résumé' );
        //get_template_part( 'template-parts/title-block' );
?>

        <!-- Skills Title Card -->
<?php
        set_query_var( 'title-block__slug', 'skills' );
        set_query_var( 'title-block__text', 'Skills' );
        //get_template_part( 'template-parts/title-block' );
?>

    </div>
    
    <div class="content-block stage">

        <!-- About -->
        <section id="about">
            <div class="section__container">
                <h1 class="heading-1">About</h1>
            </div>
        </section>

        <!-- Résumé -->
        <section id="resume">
            <div class="section__container">
                
            </div>
        </section>

        <!-- Skills -->
        <section id="skills">
            <div class="section__container">
                
            </div>
        </section>

        <!-- Blog -->


        <!-- Clients & Testimonials -->


        <!-- Contact -->

        
    </div>

<?php
get_footer();