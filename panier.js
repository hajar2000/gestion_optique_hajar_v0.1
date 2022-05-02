		var prixTotalGlobal=0;

		function addPrixTotalGlobal(){
			prixTotalGlobal=0;
				$('.table-condensed tr').each(function(index, tr) {
					if(index > 0){
						var prixTotalProduit=$(tr).find('.cart_total .cart_total_price').text();
						console.log("prixTotalProduit=>"+prixTotalProduit);
						prixTotalProduit=parseInt(prixTotalProduit);
						prixTotalGlobal=parseInt(prixTotalGlobal);
						prixTotalGlobal=prixTotalGlobal+prixTotalProduit;
						console.log("PrixTotalGlobal =>("+prixTotalGlobal+")");
					}
					
				  });
				
				  $("#prixTotalGlobal").text(prixTotalGlobal);
		}
		function refreshQuantity(){
			$("#cart_items").load("cart.php #cart_items");

		}

		function viderPanier(){
			$.ajax({
					url:"removePanier.php",    //the page containing php script ProduitAcheteController
					type: "get",    //request type,
				
					success:function(result){
						
						
						refreshPanier();
						window.location.href="http://localhost/gestion_optique_hajar_v0.1/";
					}
					,error:function(result){

						console.log("Erreur envoi");
					}
				});

		}
		function refreshPanier(){

			$("#header-panier").load("index.php #header-panier");
			$("cart.php #cart_items").load("cart.php #cart_items");
		}
		function addProduitToCart(pCodeProduit){
    		
				$.ajax({
					url:"addProduit.php",    //the page containing php script ProduitAcheteController
					type: "get",    //request type,
					data: "codeProduit="+pCodeProduit,
					success:function(result){
						
						console.log("Pcode = "+pCodeProduit);
						refreshPanier();
					}
					,error:function(result){
						console.log("Erreur envoi");
						//alert("NotOk");
					}
				});
				}

				function addQuantity(quantity,codeProduit,prixTotal){
					$.ajax({
						url:"addQuantity.php",    //the page containing php script ProduitAcheteController
						type: "get",    //request type,
						data: "codeProduit="+codeProduit+"&prixTotal="+prixTotal+"&quantiteDemandee="+quantity,
						success:function(result){
							
							
						
						}
						,error:function(result){
	
							console.log("Erreur envoi");
						}
					});
					
					}
					function removeProduit(codeProduit){
						
						$.ajax({
							url:"removeProduit.php",    //the page containing php script ProduitAcheteController
							type: "get",    //request type,
							data: "codeProduit="+codeProduit,
							success:function(result){
								
							console.log("Ok removed");
								
								
							}
							,error:function(result){
		
								console.log("Erreur envoi");
							}
						}); 
						
						}

						function passerCommande(){
						
							$.ajax({
								url:"PasserCommandeController.php",    //the page containing php script PasserCommandeController
								type: "post",    //request type,
							
								success:function(result){
									
								console.log("Ok commande passed");
									
									
								}
								,error:function(result){
			
									console.log("Error :NO commande passed");
								}
							}); 
							
							}
		
		$(document).ready(function(){
			var leTotal=0;
					addPrixTotalGlobal();
					
			$(".table-condensed").on('click', '.cart_quantity_up', function() {
				
				var currentRow = $(this).closest('tr');
				var codeProduit=currentRow.find('.cart_description .code_produit').text();
				
				var prixUnitaire = currentRow.find('.cart_price .cart_unite_price').text();
				prixUnitaire = parseFloat(prixUnitaire);
			
				var prixTotal = currentRow.find('.cart_total .cart_total_price').text();
				prixTotal = parseFloat(prixTotal);
				var quantity = currentRow.find('input[type="text"]').val();
				 quantity = parseInt(quantity);
				quantity=quantity+1;
				currentRow.find('input[type="text"]').val(quantity);
				prixTotal=prixUnitaire*quantity;
				currentRow.find('.cart_total .cart_total_price').text(prixTotal);
				/*leTotal=0;
				leTotal=leTotal+prixTotal;
				alert(leTotal); */
				addPrixTotalGlobal();
				addQuantity(quantity,codeProduit,prixTotal);
			
				
					
			});
			$(".table-condensed").on('click', '.cart_quantity_down', function() {

				var currentRow = $(this).closest('tr');
				var codeProduit=currentRow.find('.cart_description .code_produit').text();
				var prixUnitaire = currentRow.find('.cart_price .cart_unite_price').text();
				prixUnitaire = parseFloat(prixUnitaire);
				
				var prixTotal = currentRow.find('.cart_total .cart_total_price').text();
				prixTotal = parseFloat(prixTotal);
				var quantity = currentRow.find('input[type="text"]').val();
				if(quantity >1){
					 quantity = parseInt(quantity);
					 quantity=quantity-1;
					currentRow.find('input[type="text"]').val(quantity);
					prixTotal=prixTotal-prixUnitaire;
					currentRow.find('.cart_total .cart_total_price').text(prixTotal);
					
						addPrixTotalGlobal();
					addQuantity(quantity,codeProduit,prixTotal);
					
					
				}
				
					
			});

			//remove produit
			$(".table-condensed").on('click', '.cart_quantity_delete', function() {
				
					
				var currentRow = $(this).closest('tr');
				var	rowId=currentRow.find('.cart_description .code_produit').text();
				removeProduit(rowId);
				rowId="#"+rowId;
				$(rowId).remove();
				refreshPanier();
				var rowCount = $(".table-condensed tr").length-1;
            	
				if(rowCount == 0){
				
					window.location.href="http://localhost/gestion_optique_hajar_v0.0/index.php";
					return;
				}
				addPrixTotalGlobal();
			});
		});
	