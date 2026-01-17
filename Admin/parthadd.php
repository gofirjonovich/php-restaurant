<?php include('./db.php'); 
if (isset($_POST['send'])) {
  $name=$_POST['name'];
  $title=$_POST['title'];
  $about=$_POST['about'];
  $sql="INSERT INTO header (name, about, title) VALUES ('$name', '$about', '$title')";
  $query=mysqli_query($connect, $sql) or die(mysqli_error($connect));
  if ($query) {
  header("Location:./parth.php");}
}
?>
<?php include('header.php');?>
<div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Part Add</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nomini kiriting" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tavsifi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Qandayligi haqida  yozing"name="about">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Titleni yozing haqida  yozing"name="title">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Tekshirish</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href=""><button type="submit" name="send" class="btn btn-danger">Qo'shish</button></a>
                </div>
              </form>
</div>

<?php include('footer.php');?>