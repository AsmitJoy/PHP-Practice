<?php
$a = "I love Machine language";
$b = " what about u?";
$c = "i love php";
$e = 50;
$f= 50;
$fonts ='Roboto Condensed';
$color = "yellow";
$bg_color = "#00bcd4";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=d, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>PHP Syntax</title>
    <style>
    *{
        margin:0;
        padding:0;
    }
    body{
        font-family:<?php echo $fonts ?>
    }
    .phpcode{
        width:900px;
        margin:0 auto;
        background:#000;
        color:#fff;


    }
    .headerOption, .footerOption{
        background:<?php echo $bg_color ?>;
        color:<?php echo $color ?>;
        text-align:center;
        padding:20px;

    }

    .maincode{
        min-height:400px;
        padding:20px;

    }




    </style>
</head>
<body>
    <div class="phpcode">

            <!--Header-->
        <div class="headerOption">
        <?php echo "<h2>$c ".($e+$f)."%</h2>" ?>
        </div>

        <!--Main code-->
        <div class="maincode">
        <?php
        echo $a.$b;
        echo "a "."b";
        print"<br>"; 

        $z = true;
        var_dump($z);

        print"<br>"; 
        $name = array("joy","shovon","sakib");
        var_dump($name);

        echo "<br>";
        echo $name[1];
        echo "<br>";


          
        //Object
        class student{
            function department(){
                return "Bangla";
            }
            function details(){
                echo $this->department();
            }
        }
        
        $std = new student();
        $std->details();


        //String
        echo "<br>";

        $x = 'computer TV';

        echo strlen($x);
        echo "<br>";

        echo strrev($x);
        echo "<br>";

        echo str_word_count($x);
        echo "<br>";

        echo strpos($x, "TV");
        echo "<br>";

        echo str_replace("TV",'Movie',$x);
        echo "<br>";


        //Constans

        define('Name',"i am value",true);
        echo name; 
        
        echo "<br>";

        $x = 100;
        $y = "100";
        var_dump($x !== $y);

        echo "<br>";

        $a1 = "i am";
        $b1 =" Godzila expert";
        $a1.=$b1 ;
        echo $a1;

        echo "<br><br>";

        //Array
        echo "<br><br>Array :<br><br>";

             //Index array
        $a = array(10,34,55,1,6,7);
        $length = count($a);
        for($i = 0; $i < $length; $i++){
            echo "$a[$i]<br>";
        }


        echo"<br>";
        $x1 = array(
            'a' => "Dhaka",
            "b" => "Khulna"
        );
        $y1 = array(
            "c" =>"comilla",
            "d" =>"Rajshahi"
        );

        echo $x1['b'];
        echo"<br>";

        foreach($y1 as $o => $value ){
            echo"key = ".$o. ", city = ".$value;
            echo"<br>";
        }       
        echo "<br>";

        // Multidimantion array
        $cars = array(
            array("BMW","15","Nice"),
            array("Lamborghini","201","Awesome"),
            array("Volvo","15060","Wonderful")
        );
        echo $cars[1][0];
        echo "<br><br>";

        for($row = 0;$row < 3; $row++ ){
            echo"<p><br>Row number  $row</p>";
            echo"<ul>";
            for($col = 0; $col<3; $col++){
                echo"<li>".$cars[$row][$col]."</li>";
            }
            echo"</ul>";

        }
        echo "<br><br>";

        //Sort array
        $names = array("Php","Asmit","Shovon","Babay");
        sort($names);
        $length = count($names);
        for($i = 0; $i <$length; $i++){
            echo "$names[$i]<br>";
        }   

        echo "<br>";

        $names = array("12","2","1","33","6");
        rsort($names);
        $length = count($names);
        for($i = 0; $i <$length; $i++){
            echo "$names[$i]<br>";
        }



        echo "<br><br>";

        //If Else
        echo "<br>Condition :<br><br>";

        $age = 120;
        if ($age>5 and $age<13) {
            echo "Welcome to learn java<br>";
        }
        elseif($age>20 and $age<33){
            echo "Welcome to learn Microsoft Excel<br>";
        }
        elseif($age>33 && $age<50){
            echo "Welcome to learn Microsoft folder<br>";
        } else{
            echo "Welcome to upload video on youtube<br>";
        }

        //switch statement
        $n = 10;
        switch($n){
            case 5:
            echo "<br>Welcome to learn java<br>";
            break;
            case 10:
            echo "<br>Welcome to learn Microsoft<br>";
            break;
            case 15:
            echo "<br>Welcome to learn youtubing<br>";
            break;
            default:
            echo "<br>i am fool<br>";

        }

        //while
        echo "<br><br>while loop :<br><br>";

        $x = 1;
            while($x<=5){
                echo "The number is : $x<br>";
               $x++;
            }

        //do while
        echo "<br>do while loop :<br><br>";

        $y= 10;
        do{
            echo"the number is: $y<br>";
            $y++;
        }while($y<=5);


        //for loop
        echo "<br><br>For loop :<br><br>";

        for($a = 0;$a <7; $a++){
            echo"thi number is: $a<br>";
        }


        //foreach
        echo "<br><br> foreach : <br><br>";
        $friendnames = array("C#","PHP","C++","JAVA","DART");
        foreach ($friendnames as $name) {
            echo"$name<br>";
        }

        //Function
        echo "<br><br> Function : <br><br>";

        function school($name = "Hello!",$last="Aniki"){
            echo "$name I am Php $last<br>";
        }

        school("Hi! "," and Joy");
        school("Hi! "," and Shovon");
        school();

        function sum($x,$y){
            $z = $x + $y;
            return $z;
        }

        echo"10+10 = ".sum(10,10);

        //Variable scope
    
        echo "<br><br> Global Variable : <br><br>";
        $z = 10;
        function test1(){
            global $z;
            echo $z."<br>";
        }
        test1();

        //$GLOBALS
        $a = 10;
        $b = 22;
        function test2(){
        $GLOBALS['h'] = $GLOBALS['a']+$GLOBALS['b'];
        }
        test2();
        echo $h;

        //$_SERVER
        echo "<br><br> SERVER Variable(File location) : <br><br>";

            // echo $_SERVER["PHP_SELF"]."<br>";
            // echo $_SERVER["SERVER_NAME"]."<br>";
            // echo $_SERVER["SCRIPT_NAME"]."<br>";//same as PHP_SELF
            // echo $_SERVER["HTTP_USER_AGENT"]."<br>";//Browser name
        echo $_SERVER['SERVER_ADDR'];//IP Address of my browser
        echo "<br><br>";
        ?>

        <!-- <form action="<?PHP echo $_SERVER["PHP_SELF"];?>" method="post">
        <p>Username:</p>
        <input type="text" name="Username">
        <input type="submit" value="Submit">
        </form> -->

        <!-- <?PHP
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_REQUEST['Username'];
            if(empty($name)){
                echo"<span style='color:red'>You must field up Username</span>";
            }else {
                echo"<span style='color:green'>Submitted sucessfull</span> ".$name;
            }
        }
        ?> -->

        <!-- Shovon's Style -->
        <?php echo"Shovon's Style: "?>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <form method="post" action="#" style="margin-top:40px;background:lightblue;padding:20px;color:#000">
                    <h2 class="text-center text-primary">Login</h2>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="nameSS" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="emailSS" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit-ss" class="btn btn-primary btn-block">
                    </div>
                </form>
                </div>
            </div>
        </div>
        
        <?php
           if(isset($_POST['submit-ss'])){

            $nameSS = $_POST['nameSS'] ;
            $emailSS = $_POST['emailSS'] ;

                if(!empty($nameSS) && !empty($emailSS)){
                    echo '<script>alert("Name='.$nameSS.' Email= '.$emailSS.'")</script>';
                }
                // else {
                //     echo '<script>alert("you have to fulfil name and email")</script>';
                // }
            } 
        
        ?>


        <!-- SuperGllobals _GET: -->
        <a href = "get.php?msg=Hello!& text= I am joy"style="    margin: 38px 22px -18px 15px;
         display: block;">Send data</a>
    

        <!-- Form Validaion -->
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" style="padding:20px;background-color:#ff9800;font-size:20px">
                        <h2 class="text-center" style="color:#000">Form Validation</h2>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="user_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="user_email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Website</label>
                            <input type="text" name="user_website" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Comment</label>
                            <textarea name="user_comment"   class="md-textarea form-control" rows="3"></textarea>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="gendar" value="Male" checked>Male</label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="gendar" value="Female">Female</label>
                        </div>
                        <div class="form-group">
                        <input type="submit" name="user_submit" class="btn btn-danger btn-block" >
                    </div>
                    </form>
                </div>
            </div>
        </div>

            <!-- php -->
            <?php

            $name = $email = $website = $comment =  $gendar="";
            $error_name = $error_mail = $error_website = $error_comment = $error_gendar ="" ;



            if(isset($_POST['user_submit'])){
                $name     =  validate($_POST['user_name']);
                $email    =  validate($_POST['user_email']);
                $website  =  validate($_POST['user_website']);
                $comment  =  validate($_POST['user_comment']);
                $gendar   =  validate($_POST['gendar']);
                   
            echo "Name : ".$name."<br>";
            echo "Email : ".$email."<br>";
            echo "Website : ".$website."<br>";
            echo "Comment : ".$comment."<br>";
            echo "Gendar : ".$gendar."<br>";
            }

            function validate($data){
                $data = trim($data);//remove space
                $data = stripcslashes($data);//remove backlash
                $data = htmlspecialchars($data);//show html code
                return $data;
            }
         


            ?>








        </div>

        <!--Footer-->
        <div class="footerOption" style= "margin-top:40px;">
            <h2><?php echo"www.asmitjoy.shovon.net"; ?></h2>
        </div>

    </div>
</body>

</html>