<?php
include('./db.php'); 
$sql="SELECT * FROM blogs";
$query=mysqli_query($connect, $sql);
$blogs=mysqli_fetch_all($query, MYSQLI_ASSOC);
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql1="DELETE FROM blogs where id='$id'";
    $query1=mysqli_query($connect, $sql1);
    if ($query1) {
        header("Location:blogs.php");
    }   
}
if(isset($_POST['addblog'])){
    header("Location: ./blogadd.php");
}
include('./header.php');
?>
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Vloglar</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                     <a href="./blogadd.php"><button type="button" class="btn btn-block btn-info" name="addblog">Blog Qo'shish</button></a>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap" border="1px">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Data</th>
                      <th>Title</th>
                      <th>Body</th>
                      <th>Image</th>
                      <th>Like</th>
                      <th>Koment</th>
                      <th>Functions</th>
                    </tr>
                  </thead>
                  <tbody><?php foreach ($blogs as $blog) {  ?>
                    <tr>
                      <td><?php echo $blog['id']; ?></td>
                      <td><?php echo $blog['data'];?></td>
                      <td><?php echo $blog['title'];?></td>
                      <td><?php echo $blog['body'];?></td>
                      <td><span class="tag tag-success"><img width="120" src="../restaurant/img/<?php echo $blog['pic'];?>" alt=""></span></td>
                      <td><?php echo $blog['like'];?></td>
                      <td><?php echo $blog['comment'];?></td>
                      <td>
                      <a href="blogedit.php?id=<?php echo  $blog['id']; ?>"><button type="button" name="edit" class="btn btn-block btn-outline-info btn-sm">Tahrirlash</button></a>
                      <a href="?id=<?php echo  $blog['id']; ?>"><button type="button" name="delete" class="btn btn-block btn-outline-danger btn-sm">O'chirish</button></a>
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
      
<?php include('./footer.php');?>