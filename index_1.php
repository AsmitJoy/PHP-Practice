<?php include 'header.php' ?>

<!-- Php code -->
<?php
    if (isset($_POST['user_name'])) {
        $name = $_POST['user_name'];
        echo"Username is : ".$name;
    }
?>

Get value from a Text Box

<!-- My form -->
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4"  style="background-color:#000;">
            <form action="#" method="post" name="my_form" style="font-size:20px;">
                <h2 class="text-center" style = "color:#F6E109">Getting Values from form</h2>
                <div class="form-group">
                    <label style = "color:#fff" for="Name">Name</label>
                    <input class = "form-control" type="text" name="user_name" placeholder ="Your name" required>
                </div>
                <div class="form-group">
                    <input class = " btn btn-danger" type="submit" value="submit">
                    <input class = " btn btn-danger" type="reset" value="clear">

                </div>
            </form>
        </div>
    </div>
</div>

















<?php include 'footer.php' ?>
