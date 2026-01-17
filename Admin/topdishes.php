<?php 
include('./db.php'); 
$sql="SELECT * FROM topdish";
$query=mysqli_query($connect, $sql);
$topdish=mysqli_fetch_all($query, MYSQLI_ASSOC);
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql1="DELETE FROM topdish where id='$id'";
    $query1=mysqli_query($connect, $sql1);
    if ($query1) {
        header("Location:topdishes.php");
    }   
}
if(isset($_POST['adddish'])){
    header("Location: ./topadd.php");
}
include('header.php');
?>
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">Top Ovqatlar</h2>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                     <a href="./topadd.php"><button type="button" class="btn btn-block btn-info" name="adddish">Ovqat Qo'shish</button></a>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap" border="1px">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nomi</th>
                      <th>Rasmi</th>
                      <th>Haqida</th>
                      <th>Amallar</th>
                    </tr>
                  </thead>
                  <tbody><?php foreach ($topdish as $top) {  ?>
                    <tr>
                      <td><?php echo $top['id']; ?></td>
                      <td><?php echo $top['name'];?></td>
                      <td><span class="tag tag-success"><img width="120" src="../restaurant/img/<?php echo $top['image'];?>" alt=""></span></td>
                      <td><?php echo $top['about'];?></td><?php   ?>
                      <td>
                      <a href="topedit.php?id=<?php echo  $top['id']; ?>"><button type="button" name="edit" class="btn btn-block btn-outline-info btn-sm">Tahrirlash</button></a>
                      <a href="?id=<?php echo  $top['id']; ?>"><button type="button" name="delete" class="btn btn-block btn-outline-danger btn-sm">O'chirish</button></a>
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