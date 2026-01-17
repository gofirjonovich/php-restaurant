<?php include('./db.php'); 
if (isset($_POST['send'])) {
  $name=$_POST['name'];
  $job=$_POST['job'];
  $pic=$_FILES['image']['name'];
  $image=$_FILES['image']['tmp_name'];
  move_uploaded_file($image, '../restaurant/img/'.$pic);
  $link=$_POST['link'];
  $sql="INSERT INTO chefs (name, job, pic, link) VALUES ('$name', '$job', '$pic', '$link')";
  $query=mysqli_query($connect, $sql) or die(mysqli_error($connect));
  if ($query) {
  header("Location:./chefs.php");}
}
?>
<?php include('./header.php'); ?>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Oshpaz qo'shish</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ismi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ismini kiriting" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kasbi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Kasbini yozing"name="job">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Rasm tanlang</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Rasm tanlang</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Tanlash</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Linki</label>
                      <input type="text" class="form-control" name="link" id="exampleInputEmail1" placeholder="Biror bir tarmoqdagi linkingizni kiriting">
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Tekshirish</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href=""><button type="submit" name="send" class="btn btn-primary">Qo'shish</button></a>
                </div>
              </form>
</div>

<?php  include('./footer.php'); ?>  