<?php include 'header.php' ?>

<!-- Php code -->
<?php
    // //Getting value from a Text Box
    // if (isset($_POST['user_name'])) {
    //     $name = $_POST['user_name'];
    //     echo"Username is : ".$name."<br>";
    // } //End

    // //Getting value from Radio Button 
    // if (isset($_POST['gender'])) {
    //     $gen = $_POST['gender'];
    //     echo "Gender is : ".$gen."<br>";
    // }//End

    // //Getting value from Check Box
    // if (isset($_POST['lan'])) {
    //     $code = $_POST['lan'];
    //     echo "Favourite code is : ";
    //     foreach ($code as $language => $value) {
    //         echo $value.",";
    //     }
    // }//End

    // //Getting value from Slected option
    // if (isset($_POST['submit'])) {
    //     $coder = $_POST['coder'];
    //     echo "<br>Favourite coder is : ".$coder;
    //     }
    // //End
?>
<?php

    if (isset($_POST['submit'])) {
        $name   = $_POST['user_name'];
        $gender = $_POST['gender'];
        $code  = $_POST['lan'];
        $coder  = $_POST['coder'];
        
  
?>

<table class="table table-dark table-bordered ">
    <tr>
        <td colspan = "2" class="text-center">Output</td>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo $name;?></td>

    </tr>

    <tr>
    <td>Gender</td>
        <?php       
            if ($gender == "Male") { ?>
                <td><?php echo"Male"?></td>
        <?php } elseif($gender == "Female"){ ?>
                <td><?php echo"Female"?></td>
        <?php }
        ?>

    </tr>
       
    <tr>
    <td>Language</td>

        <?php if ($code == "Php") { ?>
                <td><?php echo"$code"?></td>
        <?php } elseif($code == "Java"){ ?>
                <td><?php echo"Java"?></td>
        <?php } elseif($code == "C#"){ ?>
                <td><?php echo"C#"?></td>
        <?php }
        ?>

    </tr>

    
    <tr>
    <td>Coder</td>
    <td><?php echo $coder;?></td>
    </tr>

</table>

        <?php } ?>

<!-- My form -->
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4"  style="background-color:#000;">
            <form action="#" method="post" name="my_form">
                <h2 class="text-center" style = "color:#F6E109;padding-top:20px;">Getting Values from form</h2>
                <div class="form-group">
                    <label style = "color:#fff" for="Name">Name :</label>
                    <input class = "form-control" type="text" name="user_name" placeholder ="Your name">
                </div>
                <div class="form-group">
                    <label style = "color:#fff" for="Gender">Gender :</label>
                    <input type="radio" name="gender" value = "Male"><span style = "color :green;"> Male </span>
                    <input type="radio" name="gender" value = "Female"><sapn style = "color :green;"> Female </span>
                </div>
                <!-- <div class="form-group">
                    <label style = "color:#fff" for="language">Language :</label>
                    <input type="checkbox" name="lan[]" value = "Php"><span style = "color :red;"> Php </span>
                    <input type="checkbox" name="lan[]" value = "Java"><sapn style = "color :red;"> Java </span>
                    <input type="checkbox" name="lan[]" value = "C#"><sapn style = "color :red;"> C# </span>
                </div> -->
                <div class="form-group">
                    <label style = "color:#fff" for="language">Language :</label>
                    <input type="radio" name="lan" value = "Php"><span style = "color :red;"> Php </span>
                    <input type="radio" name="lan" value = "Java"><sapn style = "color :red;"> Java </span>
                    <input type="radio" name="lan" value = "C#"><sapn style = "color :red;"> C# </span>
                </div>

                <div class="form-group">
                    <label style = "color:#fff" for="Colder">Coder :</label>
                    <select name="coder">
                        <option value="Jao Flex">Jao Flex</option>
                        <option value="Ronaldo">Ronaldo</option>
                        <option value="Messi">Messi</option>
                        <option value="Neymar">Neymar</option>
                    </select>
                </div>
                <div class="form-group">
                    <input class = " btn btn-danger" type="submit" value="submit" name = "submit">
                    <input class = " btn btn-danger" type="reset" value="clear">
                </div>                
            </form>
        </div>
    </div>
</div>

















<?php include 'footer.php' ?>
