<?php
include('./db.php'); 
$sql="SELECT * FROM chefs";
$query=mysqli_query($connect, $sql);
$chefs=mysqli_fetch_all($query, MYSQLI_ASSOC);
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql1="DELETE FROM chefs where id='$id'";
    $query1=mysqli_query($connect, $sql1);
    if ($query1) {
        header("Location:chefs.php");
    }   
}

include('./header.php');
?>
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Oshpazlar</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                     <a href="./addchef.php">
                      <button type="button" class="btn btn-block btn-info" name="addchef">Oshpaz Qo'shish</button></a>
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
                      <th>Kasbi</th>
                      <th>Rasmi</th>
                      <th>Linki</th>
                      <th>Amallar</th>
                    </tr>
                  </thead>
                  <tbody><?php foreach ($chefs as $chef) {  ?>
                    <tr>
                      <td><?php echo $chef['id']; ?></td>
                      <td><?php echo $chef['name'];?></td>
                      <td><?php echo $chef['job'];?></td>
                      <td><span class="tag tag-success"><img width="120" src="../restaurant/img/<?php echo $chef['pic'];?>" alt=""></span></td>
                      <td><?php echo $chef['link'];?></td><?php   ?>
                      <td>
                      <a href="editchef.php?id=<?php echo  $chef['id']; ?>"><button type="button" name="edit" class="btn btn-block btn-outline-info btn-sm">Tahrirlash</button></a>
                      <a href="?id=<?php echo  $chef['id']; ?>"><button type="button" name="delete" class="btn btn-block btn-outline-danger btn-sm">O'chirish</button></a>
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