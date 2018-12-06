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
            <div class="to_single-article-intro">
                    <h2>Abstract</h2>
                    <p>
                        The advent of enhanced imaging in prostate cancer has resulted in recurrent disease being identified earlier.
                        This has led to an increase in the number of patients undergoing intervention at this early stage.
                        There remains, however, a paucity of level one evidence to advise on the optimal management of this heterogenous
                        group, with a significant number of patients experiencing biochemical relapse unlikely to die of metastatic prostate cancer.
                        More work is needed to define those who do and do not require intervention, to avoid doing harm to an often elderly population.
                    </p>

                    <h2>Keywords</h2>
                    <p>Prostate cancer, rising PSA, prostatespecific antigen, non-metastatic (M0) patients, non-metastatic prostate cancer</p>

                    <h2>Disclosure</h2>
                    <p>Robert Chandler, Antonella Petremolo, Pasquale Rescigno and Johann de Bono have nothing to disclose in relation to this article.</p>

                    <h2>Review Process</h2>
                    <p>
                        This editorial is based on a debate held at the European Association of Nuclear Medicine (EANM) Focus 1 meeting, Valencia,
                        Spain, 1–3 February 2018 and, as such, has not been subject to this journal’s usual peer-review process.
                        The report was reviewed for scientific accuracy by the Editorial Board before publication.
                    </p>
                    <h2>Compliance with Ethics</h2>
                    <p>This editorial involves a review of the literature and did not involve any studies with human or animal subjects performed by any of the authors.</p>
                    <h2>Authorship</h2>
                    <p>
                        All named authors meet the criteria of the International Committee of Medical Journal Editors for authorship for this manuscript, take responsibility
                        for the integrity of the work as a whole and have given final approval for the version to be published.
                    </p>
                    <h2>Open Access</h2>
                    <p>
                        This article is published under the Creative Commons Attribution Noncommercial License, which permits any non-commercial use, distribution, adaptation
                        and reproduction provided the original author(s) and source are given appropriate credit. © The Authors 2018.
                    </p>
                    <h2>Received</h2>
                    <p>March 04, 2018 Published Online: May 11, 2018</p>
                    <h2>Correspondence</h2>
                    <p>Johann de Bono, ICR, Royal Marsden NHS Foundation Trust, Sycamore House, Downs Road, Sutton, Surrey, SM2 5PT, UK. E: johann.de-bono@icr.ac.uk</p>
                    <h2>Support</h2>
                    <p>No funding was received in the publication of this article.</p>
                </div>
                <div class="to_single-article-actions">
                    <ul>
                        <li><a href="#"><i class="fal fa-file-pdf"></i>Download PDF</a></li>
                        <li><a href="#"><i class="fas fa-heart"></i>Bookmark & Add to Profile</a></li>
                        <li><a href="#"><i class="far fa-dot-circle"></i>View eJournal</a></li>
                        <li><a href="#"><i class="fas fa-print"></i>Order reprints</a></li>
                        <li><a href="#">Get Permission</a></li>
                    </ul>
                </div>
                <div class="rte">
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
<aside class="to_sidebar">
        <?php get_sidebar(); ?>
    </aside>
</div>
<div class="to_related-insights">
    <div class="to_wrap">
        <h2>Related Articles</h2>
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
