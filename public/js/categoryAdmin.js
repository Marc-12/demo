var categoryAdmin = 
{
	categoryContent: "",
	
	init: function ()
	{
		this.loadData(); 
		this.displayContentErase(); 
		this.displayContentAdd(); 
	},
	loadData: function ()
	{		
		
		//load AJAX loading WHEEL
		$(".test").append("<div class='loading'>frfrf</div>"); 
		$(".loading").css({"background" : "url(public/images/ajax_loader.gif)","display" : "none","border": "solid re","position":"absolute","zIndex":"10","backgroundSize":"35px 35px","width":"40px","height":"40px","left": "45%","top":"25%","backgroundRepeat":"no-repeat"});

		//LOAD DATA 
		var that = this; 
		$.ajax(
		{	
			type: "GET",
			url: "/P4-VERSION5/index.php?action=adminReadCategory",
			success: function(data)
			{
				// console.log('AJAX LOAD CATEGORY---> success');
				that.categoryContent = data;
				function wait ()
				{
					this.AjaxStart();
				}
			}
		});
		//bisarre mais nécessaire :!!!
		//
		//
		alert(that.categoryContent);
	},
	displayContentErase: function ()
	{
		// APPEND
		$(".test .divCategoryList").empty();								
		$(".test .divCategoryList").append('<label for="pays">Choisir une catégorie: </label><select name="categories" id="category"><option value="">Pas de catégorie </option>'+this.categoryContent+'</select><input type="button" class="buttonDeleteCategory" value="erase">');											

		//ON CLICK ERASE
		var that = this;
		$("body").on("click",".buttonDeleteCategory",function()
		{
			//target content to DELETE
			var contentDelete = $('.test .divCategoryList #category option:selected').val();	
			that.adminDeleteCategory(contentDelete);
		});
	},			
	displayContentAdd: function ()
	{			
		//DISPLAY ADD CATEGORY
		$(".test .divCategoryAdd").append('<div class="adminCreateCategory"><label for="title">Ajouter une catégorie: </label><input type="text" id="categoryName" name="" placeholder=""/><button id="buttonCategory">Valider</button></div>');								

		//CLICK ADD category
		var that = this; 
		$("#buttonCategory").on("click", addCategory);
		function addCategory () 
		{
			var inputContent = $("#categoryName").val();
			//reset input value
			$("#categoryName").val(" ");	
			that.addCategory(inputContent);
		};
	},
	addCategory: function (inputContent)
	{
		//AJAX START
		this.AjaxStart();
		//AJAX REQUEST
		var that = this; 
		$.ajax(
		{
			type: "GET",
			url: "/P4-VERSION5/index.php?action=adminAddCategory",
			data: {categoryName: inputContent},
			success: function()
			{
				//RELOAD
				that.loadData();
				that.displayContentErase();
			}
		});
		//AJAX STOP
		this.AjaxStop();
	},
	adminDeleteCategory: function (contentDelete)
	{							
		//AJAX START
		this.AjaxStart();
		//AJAX REQUEST
		var that = this;
		$.ajax(
		{
			type: "POST",
			url: "/P4-VERSION5/index.php?action=adminDeleteCategory",
			data: {categoryName: contentDelete},
			success: function(data)
			{
				//RELOAD categoy's list
				that.loadData();
				that.displayContentErase();
			}
		});
		//AJAX STOP
		this.AjaxStop();
	},
	AjaxStart: function ()
	{
		$(document).ajaxStart(function() 
		{
			$(".loading").show();
		});
		
	},
	AjaxStop: function ()
	{
		$(document).ajaxStop(function() 
		{
			$(".loading").hide();
			$(".loading").empty();
		});
		
	}
}			
	var categoryAdmin1 = Object.create(categoryAdmin);		
	categoryAdmin1.init();