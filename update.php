<?php
require('config/config.php');
session_start();
if(!isset($_SESSION['email'])){

    header('location:login.php');
}




if(isset($_GET['upd'])){

    $id = $_GET['upd'];
    $query = "SELECT * FROM postdata WHERE id = '$id'";
    $result = mysqli_query($con,$query) or die('error in update');

    if(mysqli_num_rows($result)>0){

        $update = mysqli_fetch_assoc($result);



    }
}
?>
<?php 

if(isset($_POST['submit'])){

    $id = $_POST['update_id'];

    $title = $_POST['title'];
    $desc = $_POST['description'];
    $category = $_POST['category'];
   
    $query= "UPDATE postdata SET title = '$title' ,
    description = '$desc', category = '$category' WHERE id ='$id'";

    $result1 = mysqli_query($con,$query)or die('error in edit');


    if($result1)
    {
        header('location:login.php');
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
	        
    		<h1>Edit Post</h1>
    		
    		<form action="update.php" method="POST" enctype="multipart/form-data">
    		    
    		   
    		    
    		    <div class="form-group">
    		        <label for="title">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title" value="<?php echo $update['title']?>"/>
    		        <input type="hidden" class="form-control" name="update_id" value="<?php echo $_GET['upd']; ?>"/>
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="description">Description</label>
    		        <textarea rows="5" class="form-control" name="description"><?php echo $update['description']; ?></textarea>
    		    </div>
               
                <div class="form-group">
    		        <label>Select category </label><br><br>
                    <input type="radio" name="category" value ="indoor" <?php if($update['category']=='indoor'){?>

                        checked
                    <?php }  ?> />
                    <label for="">Indoor</label>&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="category" value = "outdoor" <?php if($update['category']=='outdoor'){?> 
                    checked
                    
                    <?php } ?>/>
                    <label for="">Outdoor</label>&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="category" value = "garden"  <?php  if($update['category']=='garden'){?>

                        checked

                   <?php  }?>/>
                    <label for="">Garndening</label>
    		    </div>
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary" name = "submit">
    		            Edit
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
                </div>
    		    
    		</form>
		</div>
		
	</div>
</div>