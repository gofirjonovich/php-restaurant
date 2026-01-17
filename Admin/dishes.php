<?php 
include('./db.php'); 
$sql="SELECT * FROM dishes";
$query=mysqli_query($connect, $sql);
$dishes=mysqli_fetch_all($query, MYSQLI_ASSOC);
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql1="DELETE FROM dishes where id='$id'";
    $query1=mysqli_query($connect, $sql1);
    if ($query1) {
        header("Location:dishes.php");
    }   
}
if(isset($_POST['adddish'])){
    header("Location: ./dishadd.php");
}
include('header.php');
?>
<div class="row">
<div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">Ovqatlar</h2>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                     <a href="./dishadd.php"><button type="button" class="btn btn-block btn-primary" name="adddish">Ovqat Qo'shish</button></a>
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
                      <th>Haqida</th>
                      <th>Rasmi</th>
                      <th>Amallar</th>
                    </tr>
                  </thead>
                  <tbody><?php foreach ($dishes as $dish) {  ?>
                    <tr>
                      <td><?php echo $dish['id']; ?></td>
                      <td><?php echo $dish['name'];?></td>
                      <td><?php echo $dish['about'];?></td>
                      <td><span class="tag tag-success"><img width="100" src="../restaurant/img/<?php echo $dish['pic'];?>" alt=""></span></td>
                      <td>
                      <a href="editdish.php?id=<?php echo  $dish['id']; ?>"><button type="button" name="edit" class="btn btn-block btn-outline-info btn-sm">Tahrirlash</button></a>
                      <a href="?id=<?php echo  $dish['id']; ?>"><button type="button" name="delete" class="btn btn-block btn-outline-danger btn-sm">O'chirish</button></a>
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