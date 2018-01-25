<div class="container">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Digital Service Canvas</a>
    </li>
    <li class="breadcrumb-item active">Mashup API List</li>
  </ol>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Mashup API List</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($model as $m){ ?>
                <tr>
                  <td><?php echo $m->id_mashup;?></td>
                  <td><?php echo $m->name;?></td>
                  <td><?php echo $m->detail;?></td>
                  <td><a href="#" title="View Detail"><i class="fa fa-eye"></i></td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted"></div>
      </div>
    </div>
