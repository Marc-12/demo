var pageAdmin =
{
	postTitle: "titre",
	postContent: "contenu",
	
	init: function ()
	{
		this.adminClickCreatePost();
		this.adminClickUpdatePost();
	},
	adminClickCreatePost: function ()
	{
		var that = this; 
		//CLICK buttonCreatePost 
		$(".buttoncreatePost").on("click", divCreatePost);
		function divCreatePost() 
		{
			if ($(".DivCreatePost").css("height") == "0px") 
			{			
				$(".DivCreatePost").show();
				//hide DivUpdatePost
				$(".DivUpdatePost").hide();

				$(".DivCreatePost").animate({"height": "500px"}, 100);
				$(".divForm .adminCreatePost").css({"display": "block","height": "100%"});	
				$(".DivCreatePost").css({"border": "solid gree","position": "relative","zIndex":"19",
			   "padding": "1%","background-color":"#b3d1ff","opacity":"0.9","marginBottom": "15px","marginTop": "15px"});									  
				//CATEGORY
				$(".test").show();
				$(".test").css({"display": "block","border":"solid re","height": "10%"});				
			}
			else if ($(".DivCreatePost").css("height") == "500px") 
			{
				
				$(".adminCreateCategory").hide();						
				$(".DivCreatePost").css("height", "0px");

				$(".DivCreatePost").hide();		
				$(".DivCreatePost").animate({"height": "0px"}, 100);
				$(".DivCreatePost").css("padding", "0px");
			}
		}
	},
	adminClickUpdatePost: function ()
	{
		console.log(this.postTitle);
		console.log(this.postContent);
		var that = this;

		$('.buttonUpdatePost').click(function(e)
		{
			e.preventDefault();
			//get HREF of link clicked
			var URLValue = $(this).attr("href");
			console.log(URLValue);
				
			if ($(".DivUpdatePost").css("height") == "0px") 
			{
				//hide DivCreatePost
				$(".DivCreatePost").hide();
				
				//get the last part of the URL
				URLValue = URLValue.split("id=").reverse();
				//mise en variable
				var URL = URLValue[0]
				console.log(URL);	
				console.log('index.php?action=adminUpdatePost&id='+URL+'');

				$.ajax(
				{
					type: "POST",
					url: "/P4-VERSION5/index.php?action=adminUpdatingPostData",
					data: {id: URL},
					dataType: "text",
					success: function(data)
					{
						//PARSE JSON datas
						var parsedJson = $.parseJSON(data);
						//set TITLE 
						$(".adminUpdatePost #title").val(parsedJson.title);
						//set CONTENT to textarea
						 tinyMCE.activeEditor.setContent(parsedJson.content);
						 
						 console.log('AJAX PARSED CATEGORY-->'+parsedJson.category);
					}
				});
				
				// set HREF attribute to the link      
				$(".adminUpdatePost").attr("action","index.php?action=adminUpdatePost&id="+URL+"");
				
				$(".DivUpdatePost").show();
				$(".DivUpdatePost").css({"border": "solid re","padding": "1%", "marginTop": "10px","background-color":"#b3d1ff",
					"width": "90%","opacity":"0.8","marginLeft": "auto","marginBottom": "15px","marginTop": "15px","margin-right": "auto"});	
				$(".DivUpdatePost").animate({"height": "500px"}, 100);
				$(".test").show();
				$(".test").css({"display": "block","border":"solid re","height": "10%"});				
				$(".adminUpdatePost").css({"display": "block","height": "100%"});
			}
			else if ($(".DivUpdatePost").css("height") == "500px") 
			{
				//$(".DivUpdatePost form").hide();
				$(".DivUpdatePost").hide();
				$(".test").empty();
				$(".DivUpdatePost").animate({"height": "0px"}, 100);
				$(".DivUpdatePost").css("height", "0px");
				$(".DivUpdatePost").css("padding", "0px");
			}
		});	
	}
};
	var pageAdmin1 = Object.create(pageAdmin);		
	pageAdmin1.init(); 
	
	
			
				
				
				
				