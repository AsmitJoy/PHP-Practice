<?php include 'header.php' ?>

<!-- Php code -->
<?php
    //Getting value from a Text Box
    if (isset($_POST['user_name'])) {
        $name = $_POST['user_name'];
        echo"Username is : ".$name."<br>";
    } //End

    //Getting value from Radio Button 
    if (isset($_POST['gender'])) {
        $gen = $_POST['gender'];
        echo "Gender is : ".$gen."<br>";
    }//End

    //Getting value from Check Box
    if (isset($_POST['coder'])) {
        $code = $_POST['coder'];
        echo "Favourite code is : ";
        foreach ($code as $language => $value) {
            echo $value.",";
        }
    }//End

    //Getting value from Slected option
    if (isset($_POST['submit'])) {
        $player = $_POST['player'];
        echo "<br>Favourite player is : ".$player;
        }
    //End

?>


<!-- My form -->
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4"  style="background-color:#000;">
            <form action="#" method="post" name="my_form" style="font-size:20px;">
                <h2 class="text-center" style = "color:#F6E109">Getting Values from form</h2>
                <div class="form-group">
                    <label style = "color:#fff" for="Name">Name :</label>
                    <input class = "form-control" type="text" name="user_name" placeholder ="Your name" required>
                </div>
                <div class="form-group">
                    <label style = "color:#fff" for="Gender">Gender :</label>
                    <input type="radio" name="gender" value = "Male"><span style = "color :green;"> Male </span>
                    <input type="radio" name="gender" value = "Female"><sapn style = "color :green;"> Female </span>
                </div>
                <div class="form-group">
                    <label style = "color:#fff" for="language">Language :</label>
                    <input type="checkbox" name="coder[]" value = "PHP"><span style = "color :red;"> Php </span>
                    <input type="checkbox" name="coder[]" value = "JAVA"><sapn style = "color :red;"> Java </span>
                    <input type="checkbox" name="coder[]" value = "C#"><sapn style = "color :red;"> C# </span>
                </div>

                <div class="form-group">
                    <label style = "color:#fff" for="Player">Player :</label>
                    <select name="player">
                        <option value="Jao Flex">Jao Flex</option>
                        <option value="Ronaldo">Ronaldo</option>
                        <option value="Messi">Messi</option>
                        <option value="Neymar">Neymar</option>
                    </select>
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
