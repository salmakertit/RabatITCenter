<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/mainStyles.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<div class="register">
  <div class="row row-eq-height">
    <div class="register_section d-flex flex-column align-items-center justify-content-center">
      <div class="container">
        <div class="row">
          <div class="wrapper">
            <div class="container">
              <h1>
                Modifier la structure
              </h1>
              <?php
              $sz = count($array['IDSTRUCTURE']);
              for($i = 0; $i < $sz; $i++){
                if($resp == "N/A"){
                  ?>
                  <form method = "post" action="index.php?action=addResponsable&id=<?php echo $array['IDSTRUCTURE'][$i]; ?>">
                  <button type='submit' class='btn btn-bi' name='ajouterResp' style='float:right; margin-top : 20px; color: rgb(255, 255, 255);background-color:#868e96;'>AJOUTER UN RESPONSABLE</button>
                  </form>
                <?php }
                else{
                  ?>
                  <form method = "post" action="index.php?action=addNewResp&id=<?php echo $array['IDSTRUCTURE'][$i]; ?>&old=<?php echo $resp; ?>">
                    <div style='margin-top : 20px; ' class='group card-name'>
                      <label for='name'>Nom du responsable</label>
                      <input type='text' id='name' name='respname' class='' type='text' readonly="readonly" maxlength='20' placeholder='Nom de structure' value = '<?php echo responsableName($array['IDSTRUCTURE'][$i]);?>'> 
                  </div>
                  <button type='submit' class='btn btn-bi' name='ChangerResp' style='color: rgb(255, 255, 255);background-color:#868e96;'>CHANGER LE RESPONSABLE</button>
                </form>
                  
                <?php
                }
                ?>
              <article class="part card-details">
                <form method='post' action='index.php?action=editStructFonc&id=<?php echo $array['IDSTRUCTURE'][$i]; ?>'>
    
                  <div class='group card-name'>
                      <label for='name'>Nom de structure</label>
                      <input type='text' id='name' name='name' class='' type='text' maxlength='20' placeholder='Nom de structure' value = '<?php echo $array['NOMSTRUCTURE'][$i];?>'> 
                  </div>
                  <div class='group card-name'>
                      <label for='name'>Etablissement d'attache</label>
                      <input type='text' id='name' name='etab' class='' type='text' maxlength='20' placeholder='Etablissement dattache' value = '<?php echo $array['ETTABLISSEMENTATTACHEE'][$i];?>'> 
                  </div>
                  <div class='group card-name'>
                      <label for='name'>Type de structure</label>
                      <input type='text' id='name' name='type' class='' type='text' maxlength='20'  placeholder='Type de structure'   value = '<?php echo $array['TYPESTRUCTURE'][$i];?>' >
                  </div>
                  <button type='submit' class='btn btn-bi' name='ajouter' style='color: rgb(255, 255, 255);background-color:#868e96;'>Modifier</button>
                </form>
              </article> 
              <?php
            }
            ?>
            </div>
          </div>
        </div>  
      </div>                     
    </div>
  </div>
</div>