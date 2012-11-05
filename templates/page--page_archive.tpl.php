<?php
$theme_path = drupal_get_path('theme', 'cyranod7_mg');
include ($theme_path.'/includes/inc_header.php');
?>
 <!-- ______________________ LAYOUT PAGE ARCHIVES OVERRIDE PAR NODE.TPL CUSTOM _______________________ -->
  <!-- ______________________ CONTENU _______________________ -->

      <div id="contentPage">

        <div id="content">
              <!-- ______________________ CONTENT TOP _______________________ -->
      <?php if ($breadcrumb || ($page['content_top']) ): ?>
            <div id="content-top">
	<span id="ariane"> 
            <?php $breadcrumb = theme('breadcrumb', array('breadcrumb' => drupal_get_breadcrumb()));
             print $breadcrumb; ?></span>

              <?php print render ($page['content_top']); ?>
            </div>
              <?php endif; ?><!-- /#content-top -->
                
              <!-- ______________________ CONTENT TOP NODE_______________________ -->
               <?php if (!empty($page['content_top_node'])): ?>
            <div id="content-top-node">
	              <?php print render ($page['content_top_node']); ?>
            </div> <!-- /#content-top-node -->
            <?php endif; ?>

       <!-- ______________________ CONTENT INNER GLOBAL _______________________ -->


        <div id="content-inner-page-archives">

        <?php if ($messages || $tabs || $action_links): ?>
          <div id="content-header">

          

              <?php if (!empty($page['highlight'])): ?>
              <div id="highlight"><?php print render($page['highlight']) ?></div>
            <?php endif; ?>

          

            <?php print $messages; ?>
            <?php print render($page['help']); ?>
            <?php print render($tabs); ?>

          </div> <!-- /#content-header -->
        <?php endif; ?>

       <!-- ______________________ CONTENU CENTRAL _______________________ -->
          <div id="middle-content-page---archives">
          <?php print render($page['content']) ?>
        </div>

        <?php print $feed_icons; ?>

      </div>
    </div> <!-- /content-inner /content -->
		  

       	 <br clear="all"/>
 <!-- ______________________ CONTENU BAS _______________________ -->

      <?php if ($page['content_bottom']): ?>
            <div id="content-bottom">
              <?php print ($page['content_bottom']); ?>
           </div><!-- /#content-bottom -->
             <?php endif; ?>
           
	 </div> <!-- /contentPage -->
<?php
$theme_path = drupal_get_path('theme', 'cyranod7_mg');
include ($theme_path.'/includes/inc_footer.php');
?>       