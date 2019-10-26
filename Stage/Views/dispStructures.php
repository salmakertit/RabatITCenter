<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/mainStyles.css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



  <div class="register">

    
      
      <div class="row row-eq-height">
        
          
         

          <div class="register_section d-flex flex-column align-items-center justify-content-center">
            <div class="container" style=" margin-left: 300px;">
            
<div class="row" style="padding-top: 50px;">
                
<div class="col-md-12">
<div class="wrapper">
                <div class="container" style="
    width: auto;">
   
              <h1>liste des Structures</h1>
          
            <!-- /.box-header -->
          <article class="part card-details">
              <table id="table_personne" class="table table-bordered table-striped text-center" style="width: 900px; ">
                <thead style="color: #756060; " class="text-center">
                <tr class="text-center">
                  <th>id</th>
                  <th>Nom de la structure</th>
                  <th>Type de la structure</th>
                  <th>Etablissement Attachée</th>
                  <th>Action</th>
                   
                    
                </tr>
                </thead>
                <tbody style="color: black;font-weight: 300">
                <?php
                  $sz = count($array['IDSTRUCTURE']);
                  for($i = 0; $i < $sz; $i++){
                    ?>
                    <tr>
                      <td><?php echo $array['IDSTRUCTURE'][$i];?></td>
                      <td><?php echo $array['NOMSTRUCTURE'][$i];?></td>
                      <td><?php echo $array['TYPESTRUCTURE'][$i];?></td>
                      <td><?php echo $array['ETTABLISSEMENTATTACHEE'][$i];?></td>
                      <td><a href="index.php?action=showStructure&id=<?php echo $array['IDSTRUCTURE'][$i];?>" class="btn btn-s btn-success waves-effect waves-light" title="Visualisation"><i class="fa fa-eye"></i></a>

                  <a href="index.php?action=editStruct&id=<?php echo $array['IDSTRUCTURE'][$i];?>" class="btn btn-primary waves-effect waves-light btnmodifier"  title="Modification"><i class="fa fa-edit"></i></a> 


                 <a href="index.php?action=deletestructfonc&id=<?php echo $array['IDSTRUCTURE'][$i];?>"class="btn btn-s btn-danger waves-effect waves-light btnremove" data-id="'.$i.'"  title="Supression" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></a></td>                 
                    </tr>
                    <?php
                  }

                ?>

                
    
     
                </tbody>
                </table>

</div>
</article>

   </div>
                    </div>                     
                
    </div> </div> 
                
              
            
          </div>

        </div>

       <div class="col-lg-6 nopadding">
          

        </div>
      </div>
    </div>
  </div>


