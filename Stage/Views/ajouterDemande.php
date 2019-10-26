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
                Nouvelle Demande
              </h1>
              <article class="part card-details">
                <form method='post' action='index.php?action=addDemandeFonc'>
           
                  <div class='group card-name'>
                    <label for='name'>Nature de dépense</label>
                    <select name = "depense" onchange="javascript:location.href = 'index.php?action=ajouterDemande&id='+ this.value;">
                      <?php
                        $size = count($array['IDDEPENSE']);
                        for($i = 0; $i < $size; $i++){
                    ?>
                          <option value="<?php echo $array['IDDEPENSE'][$i]; ?>"
                            <?php
                              if(isset($_GET['id']) && $_GET['id'] == $array['IDDEPENSE'][$i])
                                echo "selected = 'selected'";
                            ?>
                          ><?php echo $array['TYPEDEPENSE'][$i]; ?></option>
                      <?php
                    }
                    ?>
                    </select>
                </div>

                <?php
                  if(isset($_GET['id'])){
                    ?>
                  <div class='group card-name'>
                    <label for='name'>catégorie de dépense</label>
                    <select name = "rubrique">
                      <?php
                        $size = count($rub['IDRUBRIQUE']);
                        for($i = 0; $i < $size; $i++){
                    ?>
                          <option value="<?php echo $rub['IDRUBRIQUE'][$i]; ?>">
                            <?php echo $rub['NOMRUBRIQUE'][$i]; ?>
                              
                          </option>
                      <?php
                    }
                    ?>
                    </select>
                </div>
                <div class='group card-name'>
                  <label for='name'>COUT</label>
                  <input type='text' id='name' name='cout' class='' type='text' maxlength='20' placeholder='cout' > 
                </div>
                  <button type='submit' class='btn btn-bi' name='ajouter' style='color: rgb(255, 255, 255);background-color:#868e96;'>Ajouter</button>
                </form>
                <?php
              }
              ?>
              </article> 
            </div>
          </div>
        </div>  
      </div>                     
    </div>
  </div>
</div>