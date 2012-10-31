<?php
$theme_path = drupal_get_path('theme', 'cyranod7_mg');
include ($theme_path.'/includes/inc_header.php');
?>
 <!-- ______________________ LAYOUT PAGE contenu_actualites OVERRIDE PAR NODE.TPL CUSTOM _______________________ -->
  <!-- ______________________ CONTENU _______________________ -->

   <div id="contentPage" class="clearfix">

    <div id="content">
              <!-- ______________________ CONTENT TOP _______________________ -->
      <?php if ($breadcrumb || ($page ['content_top']) ): ?>
            <div id="content-top">
	<span id="ariane"> <?php print $breadcrumb; ?></span>

              <?php print render ($page ['content_top']); ?>
            </div>
              <?php endif; ?><!-- /#content-top -->

<!-- ______________________ CONTENT TOP NODE_______________________ -->
               <?php if (!empty($page['content_top_node'])): ?>
            <div id="content-top-node">
	              <?php print render ($page['content_top_node']); ?>
            </div> <!-- /#content-top-node -->
            <?php endif; ?>
       


       <!-- ______________________ CONTENT INNER GLOBAL _______________________ -->


        <div id="content-inner-page-VDL">

          <?php if ($mission || $messages || $help || $tabs): ?>
            <div id="content-header">

              <?php if ($mission): ?>
                <div id="mission"><?php print $mission; ?></div>
              <?php endif; ?>

              <?php print $messages; ?>

              <?php print render($page['help']); ?>

              <?php if ($tabs): ?>
                <div class="tabs"><?php print $tabs; ?></div>
              <?php endif; ?>

            </div> <!-- /#content-header -->
          <?php endif; ?>
		  <!-- ______________________ CONTENU CENTRAL _______________________ -->
          <div id="middle-content-page-VDL">

             <div id="content-area">
          <?php print render($page['content']) ?>
        </div>
              <?php print $feed_icons; ?>
          </div> <!-- /#content-area -->





      </div> <!-- /content-inner /content -->


   <!-- ______________________ MENU ET MENU SECONDAIRE _______________________ -->            
               
    <?php if ($main_menu || $secondary_menu): /*Si utilise Menu Principal de Drupal alors il faut cacher cette partie*/ ?>
      <div id="navigation" class="menu <?php if (!empty($main_menu)) {print "with-primary";} if (!empty($secondary_menu)) {print " with-secondary";} ?>">
        <?php /*print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); */?>
        <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary', 'class' => array('links', 'clearfix', 'sub-menu')))); ?>
  </div> <!-- /navigation -->   
  <?php endif; ?>





    	 <br clear="all"/>
         <!-- ______________________ CONTENU BAS _______________________ -->
      <?php if ($page ['content_bottom']): ?>
            <div id="content-bottom">
              <?php print ($page ['content_bottom']); ?>
           </div><!-- /#content-bottom -->
             <?php endif; ?>	 
    
    </div> <!-- /contentPage -->
<?php
$theme_path = drupal_get_path('theme', 'cyranod7_mg');
include ($theme_path.'/includes/inc_footer.php');
?>     