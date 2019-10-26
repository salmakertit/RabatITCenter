
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/mainStyles.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images1/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



    <div class="register_section d-flex flex-column align-items-center justify-content-center">
      <div class="container">
        <div class="container">
         
            <div class="col-md-12">
              
                <div class="container" >

                  
             
       
            
                
                    
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content" style="width: 1000px;">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a class="btn-box big span4"><i class=" icon-tasks"     style="color:#454"></i><b><?php echo $nbStructures;?></b>
                                        <p class="text-muted">
                                            Demandes acceptées</p>
                                    </a><a  class="btn-box big span4"><i class="icon-user" style="color:#454"></i><b><?php echo $nbChercheur;?></b>
                                        <p class="text-muted">
                                            Membres permanents</p>
                                    </a><a  class="btn-box big span4"><i class="icon-money" style="color:#454"></i><b><?php echo $budget . ' MAD';?> </b>
                                        <p class="text-muted">
                                            Budget consommé</p>
                                    </a>
                                </div>
                                <div class="btn-box-row row-fluid">
                                    
                                </div>
                            </div>
                            <!--/#btn-controls-->
                          
                            <div class="module">
                                <div class="module-head">
                                    
                                </div>
                                    <table id="table_personne" class="table table-bordered table-striped text-center" style="width: 900px; margin: auto; padding: 20px;">
                <thead style="color: #756060; " class="text-center">
                <tr class="text-center">
                    <th>id</th>
                    <th>Nom de rubrique</th>
                   <th>cout TTC</th>
                   <th>Etat de demande</th>
                    
                </tr>
                </thead>
                <tbody style="color: black;font-weight: 300">
     
              <?php
                  $sz = count($array['IDDEMANDE']);
                  for($i = 0; $i < $sz; $i++){
                    ?>
                    <tr>
                      <td><?php echo $array['IDDEMANDE'][$i];?></td>
                      <td><?php echo rubriqueName($array['IDRUBRIQUE'][$i]);?></td>
                      <td><?php echo $array['COUT'][$i];?></td>
                      <td>
                        <?php
                        switch ($array['ETATDEMANDE'][$i]) {
  
                              case '-1':
                                echo 'refusée';
                              break;
                              case '0':
                                echo 'En cours';
                              break;  
                              case '1':
                                echo 'En cours';
                              break;    
                              case '2':
                                echo 'acceptée';
                              break;
                            }
                        ?>
                     </td>             
                    </tr>
                    <?php
                  }

                ?>
                
    
     
                </tbody>
                </table>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>



      </div>
    </div>
  </div>
</div>
</div>



      
