

		function viderPanier(){
			$.ajax({
					url:"removePanier.php",    //the page containing php script ProduitAcheteController
					type: "get",    //request type,
				
					success:function(result){
						
						
						refreshPanier();
					}
					,error:function(result){
						console.log("Erreur envoi");
					}
				});

		}
		function refreshPanier(){

			$("#header-panier").load("index.php #header-panier");
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
		$(document).ready(function(){
    		//alert("Ok");
				/*$('.add-to-cart').click(
					function(){
								//alert("Ok");
						addProduitToCart(1554);
					});*/
			});
	