<?php
$theme_path = drupal_get_path('theme', 'cyranod7_mg');
include ($theme_path.'/includes/inc_header.php');
?>
<!-- ______________________ LAYOUT HOMEPAGE VERTICAL D_______________________ -->
 <!-- ______________________ CONTENU _______________________ -->

	<div id="mainPage">

 <?php if ($messages || $tabs || $action_links): ?>
          <div id="content-header">

          
 <!-- ______________________ ADMIN ZONE _______________________ -->
            <?php if (!empty($page['highlight'])): ?>
              <div id="highlight"><?php print render($page['highlight']) ?></div>
            <?php endif; ?>

          

            <?php print $messages; ?>
            <?php print render($page['help']); ?>
            <?php print render($tabs); ?>

          </div> <!-- /#content-header -->
        <?php endif; ?>
          
           <!-- ______________________ CONTENT TOP _______________________ -->
          <?php if (!empty($page['content_top'])): ?>
            <div id="content-top">
              <?php print render ($page['content_top']); ?>
            </div> <!-- /#content-top -->
          <?php endif; ?>

            <!-- ______________________ PARTIE GAUCHE _______________________ -->

	<div id="HPGauche">

        <?php if (!empty($page['PartieGauche1'])): ?>
     <div id="HPGauche1"><?php print render ($page ['PartieGauche1']); ?></div>
        <?php endif; ?>

     <?php if (!empty($page['PartieGauche2'])): ?>
     <div id="HPGauche2"><?php print render ($page ['PartieGauche2']); ?></div>
        <?php endif; ?>

     <?php if (!empty($page['PartieGauche3'])): ?>
     <div id="HPGauche3"><?php print render ($page ['PartieGauche3']); ?></div>
        <?php endif; ?>

   </div><!-- /Partie Gauche -->

   <!-- ______________________ ZONE DIAPO DROITE_______________________ -->

            <?php if (!empty($page['DiapoHP'])): ?>

                 <div id="HPDiapo">
                  <?php print render($page['DiapoHP']); ?>
                 </div>
              <?php endif; ?>

	<br clear="all"/>
	<!-- ______________________ CONTENU BAS _______________________ -->
<?php if(!empty($page ['content_bottom_home'])): ?>
    <div id="content-bottom-home">
      <?php print render ($page ['content_bottom_home']); ?>
         <?php print $feed_icons; ?>
    </div><!-- /#content-bottom -->
    <?php endif; ?>
    

    <?php if(!empty($page ['content_bottom'])): ?>
            <div id="content-bottom">
              <?php print ($page ['content_bottom']); ?>
            </div><!-- /#content-bottom -->

          <?php endif; ?>



	 </div> <!-- /mainPage -->
    <?php
$theme_path = drupal_get_path('theme', 'cyranod7_mg');
include ($theme_path.'/includes/inc_footer.php');
?>