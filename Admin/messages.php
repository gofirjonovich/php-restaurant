<?php 
include('./db.php'); 
$sql="SELECT * FROM messages";
$query=mysqli_query($connect, $sql);
$messages=mysqli_fetch_all($query, MYSQLI_ASSOC);
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql1="DELETE FROM messages where id='$id'";
    $query1=mysqli_query($connect, $sql1);
    if ($query1) {
        header("Location:messages.php");
    }   
}
include('header.php');
?>
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">Xabarlar</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap" border="1px">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Ismi</th>
                      <th>Email</th>
                      <th>Xabari</th>
                      <th>Amallar</th>
                    </tr>
                  </thead>
                  <tbody><?php foreach ($messages as $m) {  ?>
                    <tr>
                      <td><?php echo $m['id']; ?></td>
                      <td><?php echo $m['name'];?></td>
                      <td><?php echo $m['email'];?></td>
                      <td><?php echo $m['message'];?></td>
                      <td>
                      <a href="?id=<?php echo  $m['id']; ?>"><button type="button" name="delete" class="btn btn-block btn-outline-danger btn-sm">O'chirish</button></a>
                      </td><?php } ?>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
</div>
      

<?php include('footer.php');?>