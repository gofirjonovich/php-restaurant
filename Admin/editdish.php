<?php include('./db.php');
if (isset($_POST['send'])) {
    $id=$_GET['id'];
    $sql="SELECT * FROM dishes where id='$id'";
    $query=mysqli_query($connect, $sql) or die(mysqli_error($connect));
    $dishes=mysqli_fetch_assoc($query);
    if (isset($_POST['send'])) {
        $name=$_POST['name'];
        $about=$_POST['about'];
        $pic=$_FILES['pic'];
        $image=$_FILES['pic']['tmp_name'];
        move_uploaded_file($image, '../restaurant/img/'.$pic);
        $sql2=" UPDATE dishes SET name='$name', pic='$pic', about='$about' where id='$id'";
        $query2=mysqli_query($connect, $sql2) or die(mysqli_error($connect));
        if ($query2) {
        header("Location:./dishes.php");}
    }

}
$id1=$_GET['id'];
$sql3="SELECT * FROM dishes where id='$id1'";
$query3=mysqli_query($connect, $sql3) or die(mysqli_error($connect));
$dish=mysqli_fetch_assoc($query3)
?>
<?php include('./header.php') ?>

<div class="card card-success">
    <div class="card-header">
            <h3 class="card-title">Tahrirlash</h3>
    </div>
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            <input class="form-control form-control-lg" value="<?php echo $dish['name'];?>" type="text" placeholder="" name="name">
            <br>
            <input class="form-control form-control-lg" type="text"  value="<?php echo $dish['about'];?>" name="about">
            <br>
            <label for="exampleInputFile">Rasm tanlang</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" value="<?php echo $dish['pic'] ?>" class="custom-file-input" id="exampleInputFile" name="pic">
                    <label class="custom-file-label" for="exampleInputFile">Rasm tanlang</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Tanlash</span>
                </div>
            </div><br>
            <input class="btn btn-primary" type="submit" placeholder="" value="Saqlash" name="send" style="width: 1080px">
        </form>
    </div>
    <!-- /.card-body -->
</div>
<?php include('footer.php') ?>