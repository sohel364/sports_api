<?php include 'include/header.php'; ?>
<?php include 'include/nav.php'; ?>

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-2">
	        <!-- <h1 class="page-header">Forms</h1> -->
	        <?php
	        	$flag = isset($_REQUEST['flag']) ? "You can not left any field" : null;
	        	if($flag != null)
	        		echo '<p class="text-center text-danger">'.$flag.'</p>';
	        ?>
	        <hr>
	    </div>
	</div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-md-offset-2 col-lg-offset-2">
        	<div class="panel panel-default">
	            <div class="panel-heading">
	                Basic Form Elements
	            </div>
	            <div class="panel-body">
	            	<div class="row">
	            		<div class="col-lg-12 col-md-12 ">
				            <form role="form" action="../model/DB.php?flag=news" method="POST">
				                <div class="form-group">
				                    <label class="control-label" for="inputSuccess">News Title</label>
				                    <input type="text" class="form-control" name="title" id="inputSuccess">
				                </div>
				                <div class="form-group">
				                    <label class="control-label" for="inputWarning">Image URL</label>
				                    <input type="text" class="form-control" name="imageurl" id="inputWarning">
				                </div>
				                <div class="form-group">
				                    <label class="control-label" for="inputError">Description</label>
				                    <input type="text" class="form-control" name="description" id="inputError">
				                </div>
				                <div class="form-group">
				                    <label class="control-label" for="inputError">PublishTime</label>
				                    <input type="text" class="form-control" name="publishTime" id="inputError">
				                </div>
				                <div  style="text-align:center">
				                	<input type="submit" class="btn btn-primary" value="Submit">
				                	<input type="reset" class="btn btn-default" value="Reset">
				                </div>
				            </form>
				        </div>
				        <!-- -->
	            	</div>
	            </div>
            </div>
        </div>
    </div>
</div>    
<!-- /#page-wrapper -->

<?php include 'include/footer.php'; ?>
