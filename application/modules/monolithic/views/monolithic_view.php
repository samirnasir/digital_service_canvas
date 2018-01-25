  <div class="container">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Digital Service Canvas</a>
      </li>
      <li class="breadcrumb-item active">Monolithic API List</li>
    </ol>
        <?php if($this->session->flashdata('succes')): ?>
                    <div class="alert alert-dismissible alert-info">
                        <button class="close" type="button" data-dismiss="alert">×</button>
                        <strong>Berhasil!</strong> <?php echo $this->session->flashdata('succes'); ?>
                    </div>
                <?php endif; ?>
    <div class="card mb-3">
      <div class="card-header">
        <a href="<?php echo site_url('Monolithic/add_monolithic');?>" title="Add Monolithic API"><i class="fa fa-plus"> Add Monolithic API</i></a></div>
      <div class="card-body"
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
              <th>NO</th>
              <th>Category</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
            </thead>

            <tbody>
			<?php foreach ($model as $m) {
            ?>
            <tr>
              <td><?php echo $m->id_monolithic; ?></td>
              <td><?php echo $m->category; ?></td>
              <td><?php echo $m->detail; ?></td>
              <td>
                <a href="<?php echo site_url('monolithic/edit/'.$m->id_monolithic);?>" title="Edit"><i class="fa fa-fw fa-edit"></i></a>
                <a href="<?php echo site_url('monolithic/delete/'.$m->id_monolithic);?>" title="Delete"><i class="fa fa-fw fa-trash-o"></i></a>
                <!--<a href="#" title="View Detail"><i class="fa fa-fw fa-info-circle"></i></a>-->
              </td>
            </tr>
			<?php } ?>
            </tbody>

          </table>
        </div>
      </div>
      <div class="card-footer small text-muted"></div>
  </div>
