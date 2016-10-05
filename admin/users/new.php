<?php 
    include '../../config/config.php';
    include ADMIN_PATH . 'header.php';

    if (count($_POST) > 0) {
        
    }
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add New User</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo DASHBOARD_URL; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo USERS_URL;?>"><i class="fa fa-dashboard"></i> Users</a></li>
            <li class="active">New Users</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Basic Information</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="post" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                          <div class="form-group">
                              <label for="email">Email address</label>
                              <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                              <label for="password">Password</label>
                              <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                          </div>
                          <div class="form-group">
                              <label for="profile">File input</label>
                              <input type="file" name="profile" id="profile">
                            <p class="help-block">Example block-level help text here.</p>
                          </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>            
            </div>
        </div>
    </section>
</div>

<?php include ADMIN_PATH . 'footer.php'; ?>