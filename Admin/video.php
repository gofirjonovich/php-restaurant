<?php 
include('./db.php'); 
$sql="SELECT * FROM video";
$query=mysqli_query($connect, $sql);
$video=mysqli_fetch_all($query, MYSQLI_ASSOC);
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql1="DELETE FROM video where id='$id'";
    $query1=mysqli_query($connect, $sql1);
    if ($query1) {
        header("Location:video.php");
    }   
}
if(isset($_POST['addvideo'])){
    header("Location: ./videoadd.php");
}
include('header.php');
?>
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">Video Qismi</h2>
                    <?php 
                    $sql="SELECT * FROM video";
                    $query=mysqli_query($connect, $sql);
                    $videolar=mysqli_fetch_all($query, MYSQLI_ASSOC);
                    if (!count($videolar)>0) { ?>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                        <a href="./videoadd.php"><button type="button" class="btn btn-block btn-info" name="addvideo">Video Qo'shish</button></a>
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
                      <th>Video</th>
                      <th>Amallar</th>
                    </tr>
                  </thead>
                  <tbody><?php foreach ($video as $v) {  ?>
                    <tr>
                      <td><?php echo $v['id']; ?></td>
                      <td><?php echo $v['name'];?></td>
                      <td><?php echo $v['body'];?></td>
                      <td><span class="tag tag-success"><img width="120" src="../restaurant/img/<?php echo $v['video'];?>" alt=""></span></td>
                      <td>
                      <a href="videoedit.php?id=<?php echo  $v['id']; ?>"><button type="button" name="edit" class="btn btn-block btn-outline-info btn-sm">Tahrirlash</button></a>
                      <a href="?id=<?php echo  $v['id']; ?>"><button type="button" name="delete" class="btn btn-block btn-outline-danger btn-sm">O'chirish</button></a>
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