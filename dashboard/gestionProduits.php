<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gestion Produits</title>
	<!<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <?php   include("nav-side.php");?>
        <div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                        Gestion Produits <small></small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Empty</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
            <div id="page-inner"> 
<!---->
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Gérer Produits
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div  class="form-inline">
                                    <div class="form-group">
                                            <label>Code Produit :</label>
                                            <input type="text" style="width:150px;" name="codeProduit" id="codeProduit" class="form-control" placeholder="Code produit">
                                        </div>
                                        <div class="form-group">
                                            <label>Labell :</label>
                                            <input type="text" style="width:250px;" name="labellProduit" id="labellProduit" class="form-control" placeholder="Labelle produit">
                                        </div>
                                        <div class="form-group">
                                            <label>Prix (MAD) :</label>
                                            <input type="number" min="1" style="width:150px;" name="prixProduit" id="prixProduit" class="form-control" placeholder="Prix produit">
                                        </div>
                                        <div class="form-group">
                                            <label>Quantité :</label>
                                            <input type="number" min="1" style="width:100px;" name="quantiteProduit" id="quantiteProduit" class="form-control" placeholder="Quantité produit">
                                        </div>
                                        <div class="form-group">
                                            <label>Brand :</label>
                                            
                                            <select  class="form-control" style="width:200px;" name="brandProduit" id="brandProduit">
                                                <option value="1">Brand 1</option>
                                                <option value="2">Brand 2</option>
                                                
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Rank (1/5) :</label>
                                            <input type="number" min="1" max="5" name="rankProduit" id="rankProduit" style="width:200px;margin-top: 15px;"  class="form-control" placeholder="Rank produit">
                                        </div>
                                        <div class="form-group">
                                            <label>Photo : </label>
                                            <input type="text"  style="width:350px;margin-top: 15px;" name="photoProduit" id="photoProduit" class="form-control" placeholder="Photo produit">
                                        </div>
                                        <div class="form-group">
                                        <button  class="btn btn-success" style="margin-top: 15px;" name="btnValiderProduit" id="btnValiderProduit">Valider</button>
                                        <button  class="btn btn-warning" style="margin-top: 15px;" name="btnViderProduit" id="btnViderProduit">Vider</button>
                                        </div>
                                       
</div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
<!---->



            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tables Produits
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-produits">
                                    <thead>
                                        <tr>
                                            <th>Code Produit</th>
                                            <th>Labell</th>
                                            <th>Prix(MAD)</th>
                                            <th>Quantité</th>
                                            <th>Brand</th>
                                            <th>Rank</th>
                                            <th>Photo</th>
                                            <th>Operation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr >
                                            <td>1</td>
                                            <td>Produit 1</td>
                                            <td>1500</td>
                                            <td>7001</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td><img src="images/p1.png" width="50" height="50"/> </td>
                                            <td>
                                            <button  class="btn btn-primary">Modifier</button>
                                            <button  class="btn btn-danger">Supprimer</button> 
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>1</td>
                                            <td>Produit 2</td>
                                            <td>200</td>
                                            <td>8001</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td><img src="images/p2.png" width="50" height="50"/> </td>
                                            <td>
                                            <button  class="btn btn-primary">Modifier</button>
                                            <button  class="btn btn-danger">Supprimer</button> 
                                            </td>
                                        </tr>
                                        <tr >
                                            <td>3</td>
                                            <td>Produit3</td>
                                            <td>3000</td>
                                            <td>9001</td>
                                            <td>1</td>
                                            <td>5</td>
                                            <td><img src="images/p3.jpg" width="50" height="50"/> </td>
                                            <td>
                                            <button  class="btn btn-primary">Modifier</button>
                                            <button  class="btn btn-danger">Supprimer</button> 
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
				 <footer><p> Ecommerce|WIAMOptic</a></p></footer>
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>

            function ajouterProduit(){
     
      //e.preventDefault();
      var codeProduit = $('#codeProduit').val();
      var labellProduit = $('#labellProduit').val();
      var prixProduit = $('#prixProduit').val();
      var photoProduit = $('#photoProduit').val();
      var quantiteProduit = $('#quantiteProduit').val();
      var rankProduit = $('#rankProduit').val();
      var brandProduit = $('#brandProduit').val();
      if (labellProduit != ''
       && prixProduit != '' 
       && photoProduit != '' 
       && quantiteProduit != '' 
       && rankProduit != '' 
       && brandProduit != '') {
           alert("Tous les champs sont remplis");
        $.ajax({
          url: "ajouterProduitController.php", 
          type: "post",
          data: {
            labellProduit : labellProduit,
            prixProduit :prixProduit,
            photoProduit :photoProduit,
            quantiteProduit :quantiteProduit,
            rankProduit :rankProduit,
            brandProduit :brandProduit
           } ,
          success: function() {
            alert('Ok  sucess');
              dataTableProduits = $('#dataTables-produits').DataTable();
              dataTableProduits.draw();//pour actualiser les donnees de la datatable
             
           
          }
        });
      } else {
        alert('Tous les champs sont obligatoires');
      }
   


            }
            $(document).ready(function () {
                
                $('#dataTables-produits').dataTable();
                $('#btnValiderProduit').click(function(){
                            if("Ajouter" === "Ajouter"){
                               // alert("btnValiderProduit");
                               ajouterProduit();

                            }
                            

                });


            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
   
    
    
    
   
</body>
</html>
