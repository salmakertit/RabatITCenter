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
   
              <h1>Les dépenses de type : <?php echo $curr['TYPEDEPENSE'][0];?></h1>
          
                  <form method = "post" action="index.php?action=addRubrique&id=<?php echo $curr['IDDEPENSE'][0]; ?>">
                  <button type='submit' class='btn btn-bi' name='ajouterResp' style='float:right; margin-top : 20px; color: rgb(255, 255, 255);background-color:#868e96;'>AJOUTER UNE RUBRIQUE</button>
                  </form>
            <!-- /.box-header -->
          <article class="part card-details">
            

              <table id="table_personne" class="table table-bordered table-striped text-center" style="width: 900px; ">
                <thead style="color: #756060; " class="text-center">
                <tr class="text-center">
                   <th>idRubrique</th>
                    <th>Nom de rubrique</th>
                   <th>cout TTC</th>
                   <th>Action</th>
                    
                </tr>
                </thead>
                <tbody style="color: black;font-weight: 300">
     
              <?php
                  $sz = count($array['IDDEPENSE']);
                  for($i = 0; $i < $sz; $i++){
                    ?>
                    <tr>
                      <td><?php echo $array['IDRUBRIQUE'][$i];?></td>
                      <td><?php echo $array['NOMRUBRIQUE'][$i];?></td>
                      <td><?php echo $array['COUTTTC'][$i];?></td>
                      <td>

            

                 <a onclick="return confirm('Are you sure?')" href="index.php?action=deleterubrique&id=<?php echo $array['IDRUBRIQUE'][$i];?>"class="btn btn-s btn-danger waves-effect waves-light btnremove" data-id="'.$i.'"  title="Supression"><i class="fas fa-trash-alt"></i></a></td>                 
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


