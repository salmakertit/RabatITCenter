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
                Nouveau Reponsable
            </h1>
            <article class="part card-details">
              <form method='post' action='index.php?action=addResponsableFonc' >
                <div class='group card-name'>
                  <label for='name'>Nom</label>
                  <input type='text' id='name' name='nom' class='' type='text' maxlength='20' placeholder='Nom' > 
                </div>
                <div class='group card-name'>
                    <label for='name'>Prénom</label>
                    <input type='text' id='name' name='prenom' class='' type='text' maxlength='20' placeholder='Prenom' > 
                </div>
                <input name = 'idstructure' hidden="hidden" value = '<?php echo $_GET['id']; ?>'>
                <div class='group card-name'>
                    <label for='name'>email</label>
                    <input type='text' id='name' name='mail' class='' type='text' maxlength='20'  placeholder='username'    >
                </div>
                <div class='group card-name'>
                    <label for='name'>Mot de passe</label>
                    <input type='password' id='name' name='password' class='' type='text' maxlength='20' placeholder='password' >
                </div>
    
                <button type='submit' class='btn btn-bi' name='ajouter' style='color: rgb(255, 255, 255);background-color:#868e96;'>Ajouter</button>
              </form>
            </article>
          </div>
        </div>
      </div>  
    </div>                     
  </div>
</div>
   