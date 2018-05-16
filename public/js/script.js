			//append infos session 
			$( "#buttonAdminZone" ).on( "click", adminInfos);
				function adminInfos() 
				{
					if ($(".adminInfos").css("height") == "0px") 
					{
						//$(".adminInfos").show();
						$(".adminInfos").animate({"height": "50px"}, 100);
						$(".adminInfos").css({"border": "solid re",
											"position": "absolute",
											 "padding": "1%", 
										 "paddingLeft": "2%",
												 "top": "45px",
											  "bottom": "60",
											 "display": "block",
									"background-color": "#e6f0ff",
									"background": "rgba(255, 255, 255, 01)",
											 "opacity": "1",
											  "zIndex": "11",
												"left": "5%", 
											   "right": "5%"});
						//move #content (title & rest of the page) 	  
						  $(".content").css({"top": "85px"});
						
						//$(".adminInfos").append('<a href="view/frontend/administrateur.php">Administration du blog</a>');				
						$(".adminInfos").append('<a href="index.php?action=admin">Administration du blog</a>');				
						$(".adminInfos a").css({"color": "black",
											 "fontSize":"18px"});
					}
					else if ($(".adminInfos").css("height") == "50px") 
					{
						$(".adminInfos a").empty();
						$(".adminInfos").animate({"height": "0px"}, 100);
						$(".adminInfos").css("height", "0px");
						$(".adminInfos").css("padding", "0px");
						$(".adminInfos").css("boxShadow", "");
						//move #content (title & rest of the page) 	  
						$(".content").css({"top": "25px"});
					}
				}

				
			//connect session 
			$( "#connectSession" ).on( "click", connect);
			function connect() 
			{
				window.location.href="view/frontend/connexion.php";
			}
			//deconnect session 
			$( "#deconnectSession" ).on( "click", deconnect );
			function deconnect() 
			{
				jQuery.ajax(
				{
					type : "POST",
					url : "view/frontend/deconnect.php",
					//data :
					//cache : false,
					success : function(response)
					{
						//recharger la page
						location.reload();
						//success
						alert('déconnecté');
						console.log('Deconnect session')
					}
				});
			}
			//CLICK UPDATE post
			$('.buttonUpdatePost').click(function(e)
			{
				e.preventDefault();
				
				//get HREF of link clicked
				var URLValue = $(this).attr("href");
				console.log(URLValue);
				
				
				if ($(".DivUpdatePost").css("height") == "0px") 
				{
					
					//get the last part of the URL
					URLValue = URLValue.split("id=").reverse();
					//mise en variable
					var URL = URLValue[0]
					console.log(URL);
					
				
					
					/*
					//var id = 87;
					$(".DivUpdatePost").append('<form class="adminUpdatePost" action="index.php?action=adminUpdatePost&amp;id='+url2+'" method="POST" enctype="multipart/form-data"><div><label for="title">Sélectionner une image mise en avant: </label><br/><input type="hidden" name="MAX_FILE_SIZE" value="10408576" /><input type="file" id="icone" name="image"/><br/><br/></div><div><label for="title">Titre de l\'article: </label><input type="text" id="title" name="title"/><br/><br/></div><div><label for="title">Contenu de l\'article: </label><br/><textarea class="DivTinyMceUpdate" name="content"></textarea></div><div><input type="submit" value="Valider"/></div></form>');
					*/
					
					$(".DivUpdatePost").show();
					$(".DivUpdatePost").animate({"height": "500px"}, 100);
					
					$(".adminUpdatePost").css({"display": "block",
					                            "height": "100%"});

					$(".DivUpdatePost").css({"border": "solid red",
											"padding": "1%", 
										  "marginTop": "10px",
								   "background-color":"#b3d1ff",
											  "width": "90%",
											"opacity":"0.8",
										 "marginLeft": "auto", 
									   "marginBottom": "15px", 
										  "marginTop": "15px", 
									   "margin-right": "auto"});	
					
					// set HREF attribute to the link
					$(".adminUpdatePost").attr("action",'index.php?action=adminUpdatedPost&amp;id='+URL+'');
					
					
					
													//	index.php?action=adminAcceptComment&amp;id=<?= $datas['id'] ?>
												   
				}
				else if ($(".DivUpdatePost").css("height") == "500px") 
				{
					//$(".DivUpdatePost form").hide();
					$(".DivUpdatePost").hide();
					$(".DivUpdatePost").animate({"height": "0px"}, 100);
					$(".DivUpdatePost").css("height", "0px");
					$(".DivUpdatePost").css("padding", "0px");
				}
			});	
		
			//
			//CLICK buttonCreatePost 
			$(".buttoncreatePost").on("click", divCreatePost);
			function divCreatePost() 
			{
				if ($(".DivCreatePost").css("height") == "0px") 
				{
					
					$(".DivCreatePost").show();
					$(".DivCreatePost").animate({"height": "500px"}, 100);
					$(".adminCreatePost").css({"display": "block",
					                            "height": "100%"});
					
					$(".DivCreatePost").css({"border": "solid gree",
										   "position": "relative", 
										     "zIndex":"19",
										    "padding": "1%", 
									      "marginTop": "10px",
							       "background-color":"#b3d1ff",
									          "width": "90%",
									        "opacity":"0.9",
								         "marginLeft": "auto", 
								        "marginRight": "auto", 
								       "marginBottom": "15px", 
								          "marginTop": "15px"});
				}
				else if ($(".DivCreatePost").css("height") == "500px") 
				{
					$(".DivCreatePost").hide();		
					$(".DivCreatePost").animate({"height": "0px"}, 100);
					$(".DivCreatePost").css("height", "0px");
					$(".DivCreatePost").css("padding", "0px");
				}
			}
		
			//ADMIN CLICK ACCEPTER/REFUSER commentaire
			$(".buttonAccept").on("click", acceptComment);
			function acceptComment() 
			{
				
				$(this).css("backgroundColor", "green");
				
				
				 // remove the class-name from the the other elements:
				 $('.contentData').removeClass('buttonAccept');

				  // add the class to the clicked element:
				  $(this).addClass('buttonAccept');

			}
			$(".buttonRefuse").on("click", refuseComment);
			function refuseComment() 
			{
				$(".contentData").css("backgroundColor", "red");
			}
			
			
			//CLICK LIKE/DISLIKE 
			$(".buttonLike").on("click", buttonLikeClick);
			function buttonLikeClick() 
			{
					//alert('ACTIVE TRUE');
					var id = $('.buttonLike').attr("href");
					//alert (id);
					jQuery.ajax(
					{
						type : "POST",
						url : "index.php?action=commentOpinion?opinion=like?id=+id+",
						//data :
						//cache : false,
						success : function()
						{
							//alert('success');
						}
					});
					
				/*
				if($(".buttonLike").hasClass("active") == true)					
				{
					//retour à l'initial
					alert('ACTIVE TRUE');
				}
				else
				{
					//$(".buttonLike").addClass('active');
					
				}*/
			}