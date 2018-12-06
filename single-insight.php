<?php get_header(); ?>
<div class="to_archive-wrap">
    <main>
        <article class="to_single to_single-article">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <header>
                        <h1 class="to_single-page-title"><?php the_title(); ?></h1>
                        <div class="to_single-authors">
                            Authors: <a href="#">Stefan Amisten</a>, <a href="#">Matthew Goodwin</a>
                        </div>
                        <div class="to_single-intro">
                            Insights into the efficacy and safety of the SGLT2 inhibitor dapagliflozin as an adjunct therapy to insulin in type 1 diabetes, presented at the American Diabetes Association’s 78th Scientific Sessions, Orlando, Florida, 22–26 June 2018.
                        </div>
                    </header>
                    <div class="to_single-insight-content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </article>
        <?php if( have_rows('article_references') ): ?>
            <aside class="to_article-references">
                <h2>References</h2>
                <div class="to_references-container">
                    <ol>
                        <?php while ( have_rows('article_references') ) : the_row(); ?>
                            <li>
                                <?php if(get_sub_field('article_reference_link')): ?>
                                    <a href="<?php the_sub_field('article_reference_link'); ?>" target="_blank"><?php the_sub_field('article_reference_text'); ?></a>
                                <?php else: ?>
                                    <?php the_sub_field('article_reference_text'); ?>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    </ol>
                </div>
            </aside>
        <?php endif; ?>
    </main>
    <div class="to_sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>
<div class="to_related-insights">
    <div class="to_wrap">
        <h2>Related Insights</h2>
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
