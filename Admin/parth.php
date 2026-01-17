<?php 
include('./db.php'); 
$sql="SELECT * FROM header";
$query=mysqli_query($connect, $sql);
$part=mysqli_fetch_all($query, MYSQLI_ASSOC);
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql1="DELETE FROM header where id='$id'";
    $query1=mysqli_query($connect, $sql1);
    if ($query1) {
        header("Location:parth.php");
    }   
}
if(isset($_POST['parthadd'])){
    header("Location: ./parthadd.php");
}
include('header.php');
?>
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">Qismlar</h2>
                <?php 
                    $sql="SELECT * FROM header";
                    $query=mysqli_query($connect, $sql);
                    $parth=mysqli_fetch_all($query, MYSQLI_ASSOC);
                    if (!count($parth)>0) { ?>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                        <a href="./parthadd.php"><button type="button" class="btn btn-block btn-info" name="parthadd">Video Qo'shish</button></a>
                        </div>
                    </div><?php } ?>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap" border="1px">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nomi</th>
                      <th>Haqida</th>
                      <th>Title</th>
                      <th>Amallar</th>
                    </tr>
                  </thead>
                  <tbody><?php foreach ($part as $p) {  ?>
                    <tr>
                      <td><?php echo $p['id']; ?></td>
                      <td><?php echo $p['name'];?></td>
                      <td><?php echo $p['about'];?></td>
                      <td><?php echo $p['title']; ?></td>
                      <td>
                      <a href="parthedit.php?id=<?php echo  $p['id']; ?>"><button type="button" name="edit" class="btn btn-block btn-outline-info btn-sm">Tahrirlash</button></a>
                      <a href="?id=<?php echo  $p['id']; ?>"><button type="button" name="delete" class="btn btn-block btn-outline-danger btn-sm">O'chirish</button></a>
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