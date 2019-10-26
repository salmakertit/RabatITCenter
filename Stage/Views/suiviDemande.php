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
        <div class="container">
          <div class="row" style="padding-top: 50px; padding-left: 220px;">      
            <div class="col-md-12">
              <div class="wrapper">
                <div class="container" style="width: 830px;">
                  <h1 >liste des demandes</h1>
                  <article class="part card-details">
                    <table id="table_projet" class="table table-bordered table-striped text-center">
                      <thead style="color: brown; " class="text-center">
                        <tr class="text-center">
                          <th>ID</th>
                          <th>Nom</th>
                          <th>Prénom</th>
                          <th>dépenses</th>
                          <th>Montant</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody style="color: black;font-weight: 300">
                        <?php 
                          $sz = count($array['IDDEMANDE']);
                          for($i = 0; $i < $sz; $i++){
                          ?>  
                            <tr>
                              <td><?php echo $array['IDDEMANDE'][$i];?></td>
                              <td><?php echo $array['NOMCHECHEUR'][$i];?></td>
                              <td><?php echo $array['PRENOMCHECHEUR'][$i];?></td>
                              <td><?php echo rubriqueName($array['IDRUBRIQUE'][$i]);?></td>                                                           
                              <td><?php echo $array['COUT'][$i];?></td>
                              <td>

                                <a onclick="return confirm('Are you sure?')" href="index.php?action=acceptDemande&id=<?php echo $array['IDDEMANDE'][$i];?>" class="btn btn-primary waves-effect waves-light btnmodifier"  title="Modification"><i class="fa fa-edit"></i></a> 


                                <a onclick="return confirm('Are you sure?')" href="index.php?action=refuseDemande&id=<?php echo $array['IDDEMANDE'][$i];?>" class="btn btn-s btn-danger waves-effect waves-light btnremove" data-id="'.$i.'"  title="Supression"><i class="fas fa-trash-alt"></i></a>
                                  
                                  
                                 
                              </td>
                            </tr>

                          <?php
                        }
                          ?>
                        </tbody>
                      </table>

                  </article>
                </div>
              </div>                     
            </div>  
          </div> 
        </div>       
      </div>
    </div>
  </div>
  

