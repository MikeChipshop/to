<?php get_header(); ?>
<div class="to_archive-wrap">
<main>
<article class="to_single to-single_article">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <header>
                <h1 class="to_single-page-title"><?php the_title(); ?></h1>
                <div class="to_single-authors">
                    Authors: <a href="#">Stefan Amisten</a>, <a href="#">Matthew Goodwin</a>
                </div>
                <div class="to_single-intro">
                Mahmood Kazemi discusses the economic burden of insulin therapy and the benefits of flash glucose monitoring and routine self-monitoring
                of blood glucose. Filmed at the European Association for the Study of Diabetes (EASD) annual meeting, Berlin, Germany, 2018.
                </div>
            </header>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</article>
<?php if( have_rows('questions') ): ?>
            <aside class="to_article-references to_questions">
                <h2>Questions</h2>
                <div class="to_references-container">
                    <ol>
                        <?php while ( have_rows('questions') ) : the_row(); ?>
                            <li>
                                <?php the_sub_field('article_question'); ?>
                            </li>
                        <?php endwhile; ?>
                    </ol>
                </div>
            </aside>
        <?php endif; ?>
</main>
<aside class="to_sidebar">
        <?php get_sidebar(); ?>
    </aside>
</div>
<div class="to_related-insights">
    <div class="to_wrap">
        <h2>Related Videos</h2>
        <ul>
            <li>
                <div class="to_archive-box">
                    <div class="to_archive-image-content">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/post-image-2.jpg" alt="#">
                        <h2><i class="far fa-eye"></i>Lung Cancer</h2>
                        <div class="to_share-icons"><i class="fas fa-share-alt"></i></div>
                    </div>
                    <div class="to_archive-content">
                        <h1>Radium-223 from Bench to Bedside – Future Directions for Targeted Alpha Therapy</h1>
                    </div>
                </div>
            </li>
            <li>
                <div class="to_archive-box">
                    <div class="to_archive-image-content">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/post-image-2.jpg" alt="#">
                        <h2><i class="far fa-eye"></i>Lung Cancer</h2>
                        <div class="to_share-icons"><i class="fas fa-share-alt"></i></div>
                    </div>
                    <div class="to_archive-content">
                        <h1>Radium-223 from Bench to Bedside – Future Directions for Targeted Alpha Therapy</h1>
                    </div>
                </div>
            </li>
            <li>
                <div class="to_archive-box">
                    <div class="to_archive-image-content">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/post-image-2.jpg" alt="#">
                        <h2><i class="far fa-eye"></i>Lung Cancer</h2>
                        <div class="to_share-icons"><i class="fas fa-share-alt"></i></div>
                    </div>
                    <div class="to_archive-content">
                        <h1>Radium-223 from Bench to Bedside – Future Directions for Targeted Alpha Therapy</h1>
                    </div>
                </div>
            </li>
            <li>
                <div class="to_archive-box">
                    <div class="to_archive-image-content">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/post-image-2.jpg" alt="#">
                        <h2><i class="far fa-eye"></i>Lung Cancer</h2>
                        <div class="to_share-icons"><i class="fas fa-share-alt"></i></div>
                    </div>
                    <div class="to_archive-content">
                        <h1>Radium-223 from Bench to Bedside – Future Directions for Targeted Alpha Therapy</h1>
                    </div>
                </div>
            </li>
            <li>
                <div class="to_archive-box">
                    <div class="to_archive-image-content">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/post-image-2.jpg" alt="#">
                        <h2><i class="far fa-eye"></i>Lung Cancer</h2>
                        <div class="to_share-icons"><i class="fas fa-share-alt"></i></div>
                    </div>
                    <div class="to_archive-content">
                        <h1>Radium-223 from Bench to Bedside – Future Directions for Targeted Alpha Therapy</h1>
                    </div>
                </div>
            </li>
            <li>
                <div class="to_archive-box">
                    <div class="to_archive-image-content">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/post-image-2.jpg" alt="#">
                        <h2><i class="far fa-eye"></i>Lung Cancer</h2>
                        <div class="to_share-icons"><i class="fas fa-share-alt"></i></div>
                    </div>
                    <div class="to_archive-content">
                        <h1>Radium-223 from Bench to Bedside – Future Directions for Targeted Alpha Therapy</h1>
                    </div>
                </div>
            </li>
            <li>
                <div class="to_archive-box">
                    <div class="to_archive-image-content">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/post-image-2.jpg" alt="#">
                        <h2><i class="far fa-eye"></i>Lung Cancer</h2>
                        <div class="to_share-icons"><i class="fas fa-share-alt"></i></div>
                    </div>
                    <div class="to_archive-content">
                        <h1>Radium-223 from Bench to Bedside – Future Directions for Targeted Alpha Therapy</h1>
                    </div>
                </div>
            </li>
            <li>
                <div class="to_archive-box">
                    <div class="to_archive-image-content">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/post-image-2.jpg" alt="#">
                        <h2><i class="far fa-eye"></i>Lung Cancer</h2>
                        <div class="to_share-icons"><i class="fas fa-share-alt"></i></div>
                    </div>
                    <div class="to_archive-content">
                        <h1>Radium-223 from Bench to Bedside – Future Directions for Targeted Alpha Therapy</h1>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<?php get_footer(); ?>
