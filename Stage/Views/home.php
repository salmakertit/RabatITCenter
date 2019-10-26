  

  <!-- Register -->

  <div class="register">

    <div class="container-fluid">
      
      <div class="row row-eq-height">
        <div class="col-lg-6 nopadding">
          
          <!-- Register -->

          <div class="register_section d-flex flex-column align-items-center justify-content-center">
            <div class="register_content text-center">
              <h1 class="register_title">Gestion du budget de fonctionnement au sein de <span>Rabat IT center</span> </h1>
              <p class="register_text">Pour une meilleure gestion du budget de fonctionnement du centre de recherche Rabat IT center et pour une traçabilité sur les demandes de financements, en quête de rendre l’accès à ces informations plus rapide et plus efficace et d’éviter le risque de dépassement de budget alloué à les structures de recherche</p>
              
            </div>
          </div>

        </div>

       <div class="col-lg-6 nopadding">
          
          <!-- connect -->

          <div class="search_section d-flex flex-column align-items-center justify-content-center">
            <div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
            <div class="search_content text-center">
              
              <h1 class="search_title">Se connecter</h1>
              <?php if(isset($_GET['r'])){
                echo '<h3>email ou mot de passe incorrect</h3>';
              }?>
              <form id="search_form" class="search_form" action="index.php?action=checkConnection" method="post">
                <input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Utilisateur" required="required" data-error="Course name is required." name="mail">
                <input id="search_form_degree" class="input_field search_form_degree" required="required" type="password" placeholder="Mot de passe" name="password">
                <button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">se connecter</button>
              </form>
            </div> 
          </div>

        </div>
      </div>
    </div>
  </div>

  
