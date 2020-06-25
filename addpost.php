<?php

require('config/config.php');
if(!isset($_SESSION['email'])){

    header('location:login.php');
}
?>


<?php

if(isset($_POST['submit'])){

    $title = $_POST['title'];
    $desc = $_POST['description'];
	$category = $_POST['category'];
	$product = $_POST['product'];
	


	$query = "INSERT INTO postdata (title,description,category,product) 
	VALUES ('$title','$desc','$category','$product')";
	$insert = mysqli_query($con,$query) or die('eror in addpost');
	

    if($insert){

       header('location:index.php');
    }









}


?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<div class="container">

	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create post</h1>
    	
    		<form action="addpost.php" method="POST" enctype="multipart/form-data">
    		    
    		   
    		    
    		    <div class="form-group">
    		        <label for="title">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title" />
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="description">Description</label>
    		        <textarea rows="5" class="form-control" name="description" ></textarea>
    		    </div>
				<div class="form-group">
    		        <label for="description">product Name</label>
					<input type="text" class="form-control" name="product" />
    		     
    		    </div>
    		    
    		    
    		    
               
                <div class="form-group">
    		        <label>Select category </label><br><br>
                    <input type="radio" name="category" value ="indoor" />
                    <label for="">Indoor</label>&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="category" value = "outdoor"/>
                    <label for="">Outdoor</label>&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="category" value = "garden" />
                    <label for="">Garndening</label>
					
    		    </div>
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary" name = "submit">
    		            Addpost
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>