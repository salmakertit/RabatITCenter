  

  <!-- Register -->

  <div class="register">

    <div class="container-fluid">
      
      <div class="row row-eq-height">

       <div class="col-lg-12 nopadding">
          
          <!-- connect -->

          <div class="search_section d-flex flex-column align-items-center justify-content-center">
            <div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
            <div class="search_content text-center" style="padding: 50px;">
              
              <h1 class="search_title" >Se connecter</h1>
              <?php if(isset($_GET['error'])){
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

  
