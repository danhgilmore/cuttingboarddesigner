<?php
/** 
 * Template Name: Designer
 * 
 * @subpackage storefront
 */
get_header();

if (is_page('design-your-board')) {
    ?>
    <link rel="stylesheet" href="http://www.dancywood.dev.cc/wp-content/themes/cuttingboarddesigner/designer.css">
    <?php   
}

wp_enqueue_style( 'designer_css', 'http://www.dancywood.dev.cc/wp-content/themes/cuttingboarddesigner/designer.css'  );

?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <article id="post-624" class="post-624 post type-post status-publish format-standard hentry category-status">
            <header class="entry-header">    
                <h1 class="entry_title">
                    Design your own custom cutting board!
                </h1>
            </header>
            <div class="entry-content">
                <div class="designer-container">
                    <div class="designer-header">
                        <p>
                            Choose the size, types of wood, and layout that you would like. We will create a custom 
                            board using your design, and overall size. Please note that due to variations in
                            wood, we cannot guarantee that the strips will be the exact size you requested, 
                            but we will get it as close as possible.
                        </p>
                        <p>Size limitations
                            <ul>
                                <li>Length: 16"-22"</li>
                                <li>Width: 8"-12.5"</li>
                                <li>Thickness: 3/4"-1.5"</li>
                            </ul>
                        </p>
                    </div><!-- end class="designer-header" -->
                    <div class="designer-form">
                        designer form div
                        <div class="designer-parameters">
                            <div class="designer-measuerments">
                                <label for="length" >Length</label>
                                <input type="text" style="width: 35px" id="length" name="length">
                                <label for="width">Width</label>
                                <input type="text" style="width: 35px" id="width" name="width">
                                <label for="thickness">Thickness</label>
                                <input type="text" style="width: 35px" id="thickness" name="thickness">  
                            </div><!-- end of class="designer-measurements" -->
                            <div class="designer-layout">
                                DESIGNER LAYOUT
                            </div><!-- end of class="designer-layout" -->
                            <div class="designer-layout-instructions">
                                DESIGNER LAYOUT INSTRUCTIONS
                            </div><!-- end of class="designer-layout-instructions" -->
                        </div><!-- end of class="designer-parameters" -->
                        <div class="designer-preview">
                            Preview
                        </div><!-- end of class="designer-preview" -->
                    </div><!-- end of class="designer-form" -->
                </div><!-- end of class="designer-container" -->
            </div><!-- end of class="entry-content" -->
        </article>  
    </main><!-- .site-main -->
 
    <?php get_sidebar( 'content-bottom' ); ?>
 
</div><!-- .content-area -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>