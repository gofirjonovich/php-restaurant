<?php include('./db.php');
if (isset($_POST['send'])) {
    $id=$_GET['id'];
    $sql="SELECT * FROM blogs where id='$id'";
    $query=mysqli_query($connect, $sql) or die(mysqli_error($connect));
    $blogs=mysqli_fetch_assoc($query);
    if (isset($_POST['send'])) {
        $data=$_POST['data'];
        $title=$_POST['title'];
        $pic=$_FILES['pic']['name'];
        $image=$_FILES['pic']['tmp_name'];
        move_uploaded_file($image, '../restaurant/img/'.$pic);
        $body=$_POST['body'];
        $like=$_POST['like'];
        $koment=$_POST['koment'];
        $sql2=" UPDATE blogs SET `data`='$data', title='$title', body='$body', `like`=$like, `comment`=$koment,  pic='$pic' where id='$id'";
        $query2=mysqli_query($connect, $sql2) or die(mysqli_error($connect));
        if ($query2) {
        header("Location:./blogs.php");}
    }

}
$id1=$_GET['id'];
$sql3="SELECT * FROM blogs where id='$id1'";
$query3=mysqli_query($connect, $sql3) or die(mysqli_error($connect));
$blog=mysqli_fetch_assoc($query3)
?>
<?php include('./header.php') ?>

<div class="card card-success">
    <div class="card-header">
            <h3 class="card-title">Tahrirlash</h3>
    </div>
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            <input class="form-control form-control-lg" value="<?php echo $blog['data'];?>" type="text" name="data">
            <br>
            <input class="form-control" type="text" value="<?php echo $blog['title'];?>" name="title">
            <br>
            <input class="form-control form-control-lg" type="text"  value="<?php echo $blog['body'];?>" name="body">
            <br>
            <input class="form-control form-control-lg" type="text"  value="<?php echo $blog['like'];?>" name="like">
            <br>
            <input class="form-control form-control-lg" type="text"  value="<?php echo $blog['comment'];?>" name="koment">
            <br>
            <label for="exampleInputFile">Rasm tanlang</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" value="<?php echo $blog['pic'] ?>" class="custom-file-input" id="exampleInputFile" name="pic">
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