  <div class="container">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Digital Service Canvas</a>
      </li>
      <li class="breadcrumb-item active">Reset Password</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        </div>
      <div class="card-body">
	  <form action="<?php echo site_url('auth/reset/'.$model->id);?>" method="POST">
     <div class="col col-sp-4">
      <div class="card-body">
        <div class="text-center mt-4 mb-5">
          <h4>Forgot your password?</h4>

        </div>
        <div class="form-group">
          
          <input class="form-control"  type="text" placeholder="Username" readonly value="<?php echo $model->username;?>">
        </div>
          <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="New Password" required>
          </div>
		  <center>
          <button type="submit" class="btn btn-primary  btn-medium">Reset Password</button>
			</center>
      </div>
	  </div>
	<br>
	</div>
		<div class="card-footer small text-muted"></div>
		</div>
		     </form>
  </div>
