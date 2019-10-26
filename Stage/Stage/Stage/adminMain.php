<!DOCTYPE html>
<html lang="en">
<head>
<title>Rabat IT center </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<?php
    if(isset($_GET['id'])){
      $idchart = $_GET['id'];
    }
    else
      $idchart = '';
?>
<script type="text/javascript">
  
  $(document).ready(function(){
  $.ajax({
    url: "http://localhost:8080/getAxeRate?id=<?php echo $idchart; ?>",
    method: "GET",
    success: function(data) {
      console.log(data);
      var ecole = [];
      var score = [];

      for(var i in data) {
        ecole.push(data[i].ecole + " (" + data[i].count+")") ;
        score.push(data[i].sum / data[i].count);
      }

      var chartdata = {
        labels: ecole,
        datasets : [
          {
            label: 'La moyenne des ecoles',
            backgroundColor: 'rgba(200, 200, 200, 0.75)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: score
          
          }
        ]
      };


      var ctx = $("#mycanvas");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});
</script>

<style type="text/css">
      #chart-container {
        width: 60%;
        height: auto;
        margin:0 auto;
        margin-top: 50px;
        margin-bottom: 50px;
      }
    </style>
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">

  <!-- Header -->

 
    <header class="header_content d-flex flex-row align-items-center">
      <!-- Logo -->
      <div class="logo_container">
        <div class="logo">
         
          <span>Rabat IT Center</span>
        </div>
      </div>

      <!-- Main Navigation -->
      <nav class="main_nav_container">
        <div class="main_nav">
          <ul class="main_nav_list">
            <li class="main_nav_item"><a href="index.php">Acceuil</a></li>
            
            <li class="main_nav_item"><a href="index.php?action=contact">Contact</a></li>
              <?php
                if(isset($_SESSION['ACTIF']) && $_SESSION['ACTIF'] == 'YES'){
                  echo "<li class=\"main_nav_item\"><a href=\"index.php?action=logout&id=".$_SESSION['id']."\">se déconnecter</a></li>";
                }
                else{
                  echo "<li class=\"main_nav_item\"><a href=\"index.php?action=login\">se déconnecter</a></li>";
                }
              ?>
          </ul>
        </div>
      </nav>
   
    
  </header>
  
  <!-- Menu -->
  <div class="menu_container menu_mm">

    <!-- Menu Close Button -->
    <div class="menu_close_container">
      <div class="menu_close"></div>
    </div>

    
    </div>

  </div>
  <!-- Home -->

  <div class="home">

    <!-- Hero Slider -->
    <div class="hero_slider_container">
      <div class="hero_slider owl-carousel">
        
        <!-- Hero Slide -->
        <div class="hero_slide">
          <div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
          <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
            <div class="hero_slide_content text-center">
              <button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">Gestion des chercheurs</button>
              <button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">Gestion des structures de recherche</button>
            </div>
          </div>
        </div>
        
        <!-- Hero Slide -->
  

      </div>

      
    </div>

  </div>



  

  <?php echo $page; ?>  

  <!-- Footer -->

  

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
</html>