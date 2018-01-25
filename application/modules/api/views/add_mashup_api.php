  <div class="container">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Digital Service Canvas</a>
      </li>
      <li class="breadcrumb-item active">Add Mashup API</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header"></div>
      <div class="card-body">
        <form action="<?php echo site_url('api/add_mashup'); ?>" method="post">
          <div class="form-group">
		  <div class="form-row">
		  <div class="col-md-6">
            <label for="exampleInputEmail1">Name</label>
            <input class="form-control" id="exampleInputEmail1" type="text" name="nama" required placeholder="Name of Mashup API">
          </div>
		  </div>
		  </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="description">Description</label>
                <input class="form-control" id="description" type="text" name="detail" required placeholder="Descripton">
              </div>
              </div>
          </div>
              <button type="submit" class="btn btn-primary">Submit</button>
		          <button type="reset" class="btn btn-danger">Reset</button>
        </form>
		</div>
		<br>
		<div class="card-footer small text-muted"></div>
		</div>
		</div>
