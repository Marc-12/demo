var LogAdmin =
{
	
	init: function ()
	{
		this.loginSession();
		this.adminAppendDiv();
	},
	loginSession: function  ()
	{
			//connect session 
			$("#connectSession").on( "click", connect);
			function connect() 
			{
				window.location.href="/P4-VERSION5/view/frontend/connexion.php";
			}
			//deconnect session 
			$( "#deconnectSession" ).on( "click", deconnect );
			function deconnect() 
			{
				jQuery.ajax(
				{
					type : "POST",
					url : "/P4-VERSION5/view/frontend/deconnect.php",
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
	},
	adminAppendDiv: function ()
	{
		//append infos session 
		$( "#buttonAdminZone" ).on( "click", adminInfos);
		function adminInfos() 
		{
			if ($(".adminInfos").css("height") == "0px") 
			{
				//$(".adminInfos").show();
				$(".adminInfos").animate({"height": "70px"}, 100);
				$(".adminInfos").css({"border": "solid re",
												"position": "absolute",
									             "padding": "1%", 
								             "paddingLeft": "2%",
											       "width":"90%",
												     "top": "80px",
											        "left": "5%", 
									               // "right": "5%",
									             "display": "block",
							            "background-color": "black",
									              "zIndex": "11"});
									   
				//move #content (title on top the page) 	  
				  $(".content").css({"top": "35px"});
				// append HTML link
				$(".adminInfos").append('<a href="/P4-VERSION5/index.php?action=admin">Administration Posts / Commentaires</a><br/><div class="adminCategory"><a href="/P4-VERSION5/index.php?action=adminCategory">Administration catégories</a></div>');				
				$(".adminInfos a").css({"color": "white","fontSize":"18px"});
			}
			else if ($(".adminInfos").css("height") == "70px") 
			{
				$(".adminInfos").empty();
				$(".adminInfos").hide();
				$(".adminInfos").animate({"height": "0px"}, 100);
				$(".adminInfos").css("height", "0px");
				$(".adminInfos").css("padding", "0px");
				$(".adminInfos").css("boxShadow", "");
				//move #content (title & rest of the page) 	  
				$(".content").css({"top": "15px"});
			}
		}
		
	}
};
	var LogAdmin1 = Object.create(LogAdmin);		
	LogAdmin1.init(); 