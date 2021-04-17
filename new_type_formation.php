<?php 
 require "page.php";
  require "./files/functions.php";
 if(isset($_POST['title']))
	 store_type_formation($_POST['title']);
 
?>

<div class="row">
        <div class="col-12">
            <div class="card">
              
                <!-- /.card-header -->
                <div class="card-body">
					<form method="post" action="">
						<div class="row">
							<div class="col-6">
								<label>Titre: </label>
								<input type="text" class="form-control" name="title" />
							</div>
						</div>
						
						<div class="d-flex justify-content-end">
							<button type="submit" class="btn btn-primary">Ajouter</button>
						</div>
					</form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
	
</div>   

