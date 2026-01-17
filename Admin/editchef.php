<?php include('./db.php');
if (isset($_POST['send'])) {
    $id=$_GET['id'];
    $sql="SELECT * FROM chefs where id='$id'";
    $query=mysqli_query($connect, $sql) or die(mysqli_error($connect));
    $chefs=mysqli_fetch_assoc($query);
    if (isset($_POST['send'])) {
        $name=$_POST['name'];
        $job=$_POST['job'];
        $pic=$_FILES['pic']['name'];
        $image=$_FILES['pic']['tmp_name'];
        move_uploaded_file($image, '../restaurant/img/'.$pic);
        $link=$_POST['link'];
        $sql2=" UPDATE chefs SET `name`='$name', `job`='$job', `pic`='$pic', `link`='$link' where id='$id'";
        $query2=mysqli_query($connect, $sql2) or die(mysqli_error($connect));
        if ($query2) {
        header("Location:./chefs.php");}
    }

}
$id1=$_GET['id'];
$sql3="SELECT * FROM chefs where id='$id1'";
$query3=mysqli_query($connect, $sql3) or die(mysqli_error($connect));
$chef=mysqli_fetch_assoc($query3)
?>
<?php include('./header.php') ?>

<div class="card card-success">
    <div class="card-header">
            <h3 class="card-title">Tahrirlash</h3>
    </div>
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            <input class="form-control form-control-lg" value="<?php echo $chef['name'];?>" type="text" placeholder="" name="name">
            <br>
            <input class="form-control" type="text" value="<?php echo $chef['job'];?>" name="job">
            <br>
            <label for="exampleInputFile">Rasm tanlang</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" value="<?php echo $chef['pic'] ?>" class="custom-file-input" id="exampleInputFile" name="pic">
                    <label class="custom-file-label" for="exampleInputFile">Rasm tanlang</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Tanlash</span>
                </div>
            </div><br>
            <input class="form-control form-control-sm" type="text"  value="<?php echo $chef['link'];?>" name="link">
            <br>
            <input class="btn btn-primary" type="submit" placeholder="" value="Saqlash" name="send" style="width: 1080px">
        </form>
    </div>
    <!-- /.card-body -->
</div>
<?php include('footer.php') ?>