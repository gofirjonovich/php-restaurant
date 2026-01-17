<?php
include('./db.php'); 
$sql="SELECT * FROM features";
$query=mysqli_query($connect, $sql);
$features=mysqli_fetch_all($query, MYSQLI_ASSOC);
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql1="DELETE FROM features where id='$id'";
    $query1=mysqli_query($connect, $sql1);
    if ($query1) {
        header("Location:features.php");
    }   
}
if(isset($_POST['addfeature'])){
    header("Location: ./featureadd.php");
}
include('./header.php');
?>
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Xususiyatlar</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                     <a href="./featureadd.php"><button type="button" class="btn btn-block btn-info" name="addfeature">Yangi Qo'shish</button></a>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap" border="1px">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Ismi</th>
                      <th>Mazmuni</th>
                      <th>Rasmi</th>
                      <th>Amallar</th>
                    </tr>
                  </thead>
                  <tbody><?php foreach ($features as $f) {  ?>
                    <tr>
                      <td><?php echo $f['id']; ?></td>
                      <td><?php echo $f['name'];?></td>
                      <td><?php echo $f['about'];?></td>
                      <td><span class="tag tag-success"><img width="120" src="../restaurant/img/<?php echo $f['icon'];?>" alt=""></span></td>
                      <td>
                      <a href="featureedit.php?id=<?php echo  $f['id']; ?>"><button type="button" name="edit" class="btn btn-block btn-outline-info btn-sm">Tahrirlash</button></a>
                      <a href="?id=<?php echo  $f['id']; ?>"><button type="button" name="delete" class="btn btn-block btn-outline-danger btn-sm">O'chirish</button></a>
                      </td>
                      <?php } ?>
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