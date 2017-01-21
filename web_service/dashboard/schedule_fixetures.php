<?php include 'include/header.php'; ?>
<?php include 'include/nav.php'; ?>

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
	        <!-- <h1 class="page-header">Forms</h1> -->
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
				            <form role="form" action="#" method="POST">
				                <div class="form-group">
				                    <label class="control-label" for="inputSuccess">Title</label>
				                    <input type="text" class="form-control" id="inputSuccess">
				                </div>
				                <div class="form-group">
				                    <label class="control-label" for="inputWarning">Venue</label>
				                    <input type="text" class="form-control" id="inputWarning">
				                </div>
				                <div class="form-group">
				                    <label class="control-label" for="inputError">Match Time</label>
				                    <input type="text" class="form-control" id="inputError">
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
