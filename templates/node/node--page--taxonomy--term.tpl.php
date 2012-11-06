<?php
/* Ce template permet la création d'un layout multicolonne pour le spages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL  node--page--taxonomy--term.tpl CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
        <!--______________COLONNE 1________________ -->
        <?php /* choix du layout selon nombre de colonne
         * .col1_layout_200_590_200{} .col1_layout_330_all{} .col1_layout_18_56_25{}
         * .col2_layout_200_590_200{} .col2_layout_330_all{} .col2_layout_18_56_25{}
         * .col3_layout_200_590_200{} .col3_layout_330_all{} .col3_layout_18_56_25{}
         * .col1_layout_215_535_235{} .col2_layout_215_535_235{} .col3_layout_215_535_235{}
         * .col1_layout_490_all{}  .col2_layout_490_all{}
         */?>
        <div id="colonne-1" class="col1_layout_200_590_200">
            
             <?php
              $theme_path = drupal_get_path('theme', 'cyranod7_mg');
              include ($theme_path.'/includes/inc_region_col_C1.php');
              ?>
        </div>
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="colonne-2" class="col2_layout_200_590_200">

            <?php print $user_picture; ?>
		    
    <?php if ($display_submitted): ?>
      <span class="submitted"><?php print $date; ?> — <?php print $name; ?></span>
    <?php endif; ?>

            <div class="content">
                    <?php 
  	    // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content['body']);
       ?>
                
                <?php
              $theme_path = drupal_get_path('theme', 'cyranod7_mg');
              include ($theme_path.'/includes/inc_taxo_term_01.php');
              ?>
                
                
            </div>

        </div>

        <!--______________COLONNE 3________________ -->
        <div id="colonne-3" class="col3_layout_200_590_200">
       


        </div>

     <?php if (!empty($content['links']['terms'])): ?>
      <div class="terms"><?php print render($content['links']['terms']); ?></div>
    <?php endif;?>
  	
    <?php if (!empty($content['links'])): ?>
	    <div class="links"><?php print render($content['links']); ?></div>
	  <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->