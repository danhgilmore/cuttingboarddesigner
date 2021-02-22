<?php
/** 
 * Template Name: Designer
 * 
 * @subpackage storefront
 */
get_header();

// TODO: Unfuck all these enqueues
wp_enqueue_style( 'designer_css', 'http://www.dancywood.dev.cc/wp-content/themes/cuttingboarddesigner/designer.css'  );
wp_enqueue_script( 'designer_js', 'http://www.dancywood.dev.cc/wp-content/themes/cuttingboarddesigner/designer.js');
wp_enqueue_script( 'jquery-ui-dialog' );
wp_enqueue_style( 'wp-jquery-ui-dialog' );
wp_enqueue_style( 'designer_jquery_ui_css', 'http://www.dancywood.dev.cc/wp-content/themes/cuttingboarddesigner/css/jquery-ui.css' );
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );


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

            <div class="form-group">

</div>



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
                <div class="designer-form-container">

                    <div class="designer-form-left">
                        <h3>Parameters</h3>
                        <div class="designer-measurements">
                            <label for="length" >Length:</label>
                            <input type="number" step="0.25" min="16" max="22" value="16" id="inputLength" name="length" class="input-control" id="inputLength">
                            <label for="width">Width:</label>
                            <input type="number" step="0.25" min="8" max="12.5" value="12" id="inputWidth" name="width" class="input-control" >
                            <label for="thickness">Thickness:</label>
                            <input type="number" step="0.25" min="0.75" max="1.5" value="1" id="thickness" name="thickness" class="input-control" id="thickness">  
                        </div>
                        <div class="designer-pattern">
                            <label for="pattern">Pattern</label>
                            <input type="text" id="layout" name="pattern" value="1W 1M 1W 1M 1W 1M 1W 1M 1W 1M 1W 1M">
                        </div>
                        <div class="designer-layout-instructions">
                            <h3>Pattern Format</h3>
                                <p>Patterns consist of one or more blocks that have a wood type and a size. For example, "1W 1M" would represent
                                    1in of walnut followed by 1in of maple.</p>
                                <p>Valid wood types are:
                                    <ul>
                                        <li>(C) Cherry</li>
                                        <li>(M) Maple</li>
                                        <li>(P) Padauk</li>
                                        <li>(PH) Purple Heart</li>
                                        <li>(W) Walnut</li>
                                    </ul>
                                </p>
                        </div>
                    </div>
                    <div class="designer-form-right">
                        <div class="designer-preview">
                            <div class="designer-preview-title">
                                <h3>Preview</h3>
                            </div>
                            <div class="designer-preview-dimensions">
                                <span id="resultLength"> in x </span>
                                <span id="resultWidth"> in</span>
                            </div>
                            <div class="designer-preview-picture">
                                This here is the pic
                            </div>
                        </div><!-- end of class="designer-preview" -->
                    </div>
                </div>
                














                
            </div><!-- end of class="entry-content" -->
        </article>  
    </main><!-- .site-main -->
 
    <?php get_sidebar( 'content-bottom' ); ?>
 
</div><!-- .content-area -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>