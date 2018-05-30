var commentAdmin =
{
	
	init: function ()
	{
		this.postOpinionComments();
		this.adminAcceptComments();
	},
	postOpinionComments: function ()
	{
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
					url : "/P4-VERSION5/index.php?action=commentOpinion?opinion=like?id=+id+",
					//data :
					//cache : false,
					success : function()
					{
						//alert('success');
					}
				});
		}		
	},
	adminAcceptComments: function ()
	{
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
	}
};
var commentAdmin1 = Object.create(commentAdmin);		
commentAdmin1.init(); 