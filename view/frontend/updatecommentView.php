<?php 
ob_start(); 
?>
<p><a href="index.php">Retour à la liste des posts</a></p>
						
<h2>Modifier le commentaire</h2>
<form class="formUpdateCommentView" action="index.php?action=updateCommentContent&amp;id=<?= $_GET['id'] ?>" method="post">
    <div>
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author"/>
    </div>
	<div>
        <label for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div><br/><br/>
</form>
						<script>
							// console.log('javascronpt entré');
								
								var URLValue = document.URL;							
								//get the last part of the URL
								URLValue = URLValue.split("id=").reverse();
								//mise en variable
								var URL = URLValue[0];
								console.log(URL);
								
								$.ajax({
							       	   url: "/P4-VERSION5/index.php?action=getCommentToModify",
									   type: "GET",
									   data: { id: URL},
									   dataType: 'text',
									   success: function(data)
									   { 										
											// PARSE JSON datas
											var parsedJson = $.parseJSON(data);											
											//set TITLE 
											$(".formUpdateCommentView #author").val(parsedJson.author);
											$(".formUpdateCommentView #comment").val(parsedJson.comment);										
									   },
									   error : function(data)
									   {
											console.log('AJAX error');
									   }
									});
						</script>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
				
				
			
	

