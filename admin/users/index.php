<?php 
    include '../../config/config.php';
    include ADMIN_PATH . 'header.php';

    $users = $db->query("SELECT * FROM users");
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Users &nbsp;&nbsp;&nbsp;<a href="<?php echo USERS_URL;?>new.php" title="Add User">+</a></h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo DASHBOARD_URL; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Users</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                <div class="box-header">
                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <?php
                    if (count($users) > 0) { 
                  ?>
                        <table id="users" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Phone</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                  <?php
                        foreach ($users as $user) {
                  ?>
                              <tr>
                                  <td><?php echo $user['id']; ?></td>
                                  <td><?php echo $user['display_name']; ?></td>
                                  <td><?php echo $user['email']; ?></td>
                                  <td><?php echo $user['status']; ?></td>
                                  <td><?php echo $user['phone']; ?></td>
                                  <td><a href="#">Edit</a></td>
                                </tr>
                  <?php
                        }
                  ?> 
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Phone</th>
                            <th></th>
                          </tr>
                        </tfoot>
                      </table>
                  <?php } else { ?>
                      <p>No users found!</p>
                  <?php } ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script>
    $('#users').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
</script>
<?php include ADMIN_PATH . 'footer.php'; ?>