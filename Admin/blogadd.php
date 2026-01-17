<?php include('./db.php'); 
if (isset($_POST['send'])) {
  $data=$_POST['data'];
  $title=$_POST['title'];
  $body=$_POST['body'];
  $pic=$_FILES['image']['name'];
  $image=$_FILES['image']['tmp_name'];
  move_uploaded_file($image, '../restaurant/img/'.$pic);
  $like=$_POST['like'];
  $koment=$_POST['koment'];
  $sql="INSERT INTO blogs (`data`, title, body, `like`, comment, pic) VALUES ('$data', '$title', '$body', '$like', '$koment', '$pic')";
  $query=mysqli_query($connect, $sql) or die(mysqli_error($connect));
  if ($query) {
  header("Location:./blogs.php");}
}
?>
<?php include('./header.php'); ?>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Blog qo'shish</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Data</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Sanani kiriting" name="data">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Mavzusini yozing"name="title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Body</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tavsilotini yozing"name="body">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Like</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Like sonini yozing"name="like">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Koment</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Koment sonini yozing"name="koment">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Rasm</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Rasm tanlang</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Tanlash</span>
                      </div>
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