<?php include'header.php'?>
        <!--Main code-->
        <div class="maincode">

            <?php
            session_start();
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
            </form>  -->

            <?PHP
            // if($_SERVER["REQUEST_METHOD"] == "POST"){
            //     $name = $_REQUEST['Username'];
            //     if(empty($name)){
            //         echo"<span style='color:red'>You must field up Username</span>";
            //     }else {
            //         echo"<span style='color:green'>Submitted sucessfull</span> ".$name;
            //     }
            // }
            ?> 

        <!-- Shovon's Style -->
            <?php echo"<br>Shovon's Style: "?>
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
            <?php
                $error_name = $error_mail = $error_website = $error_gendar ="" ;   
                $name = $email = $website = $comment =  $gendar="";

                if(isset($_POST['user_submit'])){

                    if (empty($_POST['user_name'])) {
                        $error_name = '<script>alert("You Have to Fulfil Name")</script>';
                    }   else {
                        $name     =  validate($_POST['user_name']);
                    }

                    if (empty($_POST['user_email'])) {
                        $error_mail = '<script>alert("You Have to Fulfil  Email")</script>';
                    }
                    elseif(!filter_var($_POST['user_email'],FILTER_VALIDATE_EMAIL)){
                        $error_mail = '<script>alert("Invalid Email Format")</script>';//email validation //We can simply use 'type = email' in form for this
                    }else {
                        $email    =  validate($_POST['user_email']);
                    } 

                    if (empty($_POST['user_website'])) {
                        $error_website = '<script>alert("You Have to Fulfil Website Url")</script>';
                    }
                    elseif(!filter_var($_POST['user_website'],FILTER_VALIDATE_URL)){
                        $error_mail = '<script>alert("Invalid Website Format")</script>';//website validation //We can simply use 'type = url' in form for this
                    }else {
                        $website  =  validate($_POST['user_website']);
                    }
                    
                    $comment  =  validate($_POST['user_comment']);

                    if (empty($_POST['gendar'])) {
                        $error_gendar = '<script>alert("You Have to Fulfil Gendar")</script>';
                    }else {
                        $gendar   =  validate($_POST['gendar']);
                    }

                    //Show name, email, website and gendar if form is fulfil
                    if(!empty($name) && !empty($email) && !empty($website) && !empty($gendar)){
                        echo '<script>alert("Name='.$name.'  Email= '.$email.'  Website='.$website.'  Gendar='.$gendar.' ")</script>';
                    }
                    
                // echo "Name : ".$name."<br>";
                // echo "Email : ".$email."<br>";
                // echo "Website : ".$website."<br>";
                // echo "Comment : ".$comment."<br>";
                // echo "Gendar : ".$gendar."<br>";
                }

                function validate($data){
                    $data = trim($data);//remove space
                    $data = stripcslashes($data);//remove backlash
                    $data = htmlspecialchars($data);//show html code
                    return $data;
                }
            

            ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" style="padding:20px;background-color:#ff9800;font-size:20px">
                            <h2 class="text-center" style="color:#000">Form Validation</h2>
                            <div class="form-group">
                                <label for="name">Name</label><?php echo $error_name ?>
                                <input type="text" name="user_name" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label><?php echo $error_mail ?>
                                <input type="text" name="user_email" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="name">Website</label><?php echo $error_website ?>
                                <input type="text" name="user_website" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Comment</label>
                                <textarea name="user_comment"   class="md-textarea form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                            <label for="gendar">Gendar</label><?php echo $error_gendar ?>
                                <div class="radio">
                                    <label><input type="radio" name="gendar" value="Male" >Male</label>
                                </div>
                                <div class="radio">
                                <label><input type="radio" name="gendar" value="Female">Female</label>
                                </div>
                            </div>
                            <div class="form-group">
                            <input type="submit" name="user_submit" class="btn btn-danger btn-block" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        <!--Php date and time-->
            <?php
            echo"<br>Date and time<br>";
            echo "Today is: ".date("d/m/y")."<br>";
            echo "Today is: ".date("D-M-Y")."<br>";
            echo "Today is: ".date("l")."<br>";
            echo "Default time  is: ".date("h:i:sa")."<br>";
            date_default_timezone_set('Asia/Dhaka');
            echo "Bangladesh Time  is: ".date("h:i:sa")."<br>";
            echo date_default_timezone_get();

            ?>


        <!--ReadFile-->
            <?php
                echo "<br>";
                $ourfile = fopen("readfile.txt","r") or die("File not found");
                //echo fread($ourfile,filesize("readfile.txt"));//show all text
                //echo fgets($ourfile,filesize("readfile.txt"));//show first line
                //echo"<br>";
                //echo fgetc($ourfile);//show firt character
                while(!feof($ourfile)){
                    echo fgets($ourfile)."<br>";
                }
                fclose($ourfile);
            ?>

        <!--PHP Image Upload-->
         <br>
            <hr><p>PHP Image Upload</p><hr>
            <?php
                if (isset( $_FILES['image'])) {
                    $filename = $_FILES['image']['name'];
                    $filetmp  = $_FILES['image']['tmp_name'];
                    move_uploaded_file($filetmp,"images/".$filename);
                    echo"Image Uploaded sucessfully";
                }
            
            ?>
         <Form method = "POST" action="" enctype="multipart/form-data">
             <div class="form-group">
                   <input type="file" name="image" class="form-control" >
             </div>
            <div class="form-group">
                 <input type="submit" name="submits" class="btn btn-danger" >
              </div>
         </Form>
            

        <!--PHP Sessions-->

            <hr><p>PHP Sessions</p><hr>
            <?php

                $_SESSION['user'] = "Asmit";
                $_SESSION['password'] = "123";
                
                echo"usrname is ".$_SESSION['user'] = "Asmit"."<br>";
                echo"password is ".$_SESSION['password'] = "123";
                session_destroy();//session start in top of the whole code
            
            ?>



        <!--PHP Cookie-->
            
            <?PHP
            // echo"<hr><p>PHP Cookie</p><hr>";
            // setcookie("visited","1",time()+86400,"/") or die("Could not set cookie");
            //         echo "This is your first visit in this website.";
            //     if (!isset($_COOKIE['visited'])) {
                    
            //     } else {
            //         echo"You are our old visitor";
            //     }
            ?>
   
        <!--Php Filters-->
         <hr><p>PHP Filter</p><hr>
            <!--php filter names and id-->
             <table>
                <tr>
                    <td>Filter name</td>
                    <td>Filter Id</td>
                </tr>
                <?PHP
                foreach (filter_list() as $id =>$filter){
                    echo"<tr><td>".$filter."</td><td>". filter_id($filter)."</td></tr>";
                }
                ?>
             </table>
            <!--FILTER_SANITIZE--> 
             <?PHP
                echo"<br>";
                $str = "<h1>Hi!, I am Php.</h1>";
                echo $str;
                $newStr = filter_var ($str, FILTER_SANITIZE_STRING);
                echo"$newStr";
            
             ?>   
 
            <!--FILTER_VALIDATE_INT--> 
             <?php
                echo"<br><br>";
                $int = 44.4;
                if (filter_var($int, FILTER_VALIDATE_INT)) {
                echo $int." is integer";
                }
                else{
                echo $int." is not integer";

                }
             ?>

            <!--FILTER_VALIDATE_IP--> 
             <?php
                echo"<br><br>";
                $int = "127.0.0.1";
                if (filter_var($int, FILTER_VALIDATE_IP)) {
                echo $int." is valid IP address";
                }
                else{
                echo $int." is not IP address";

                }
             ?>


            <!--FILTER_VALIDATE_EMAIL--> 
             <?php
                echo"<br><br>";
                $mail = "asmitphp@gmail.com";
                if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    echo $mail." is valid EMAIL address";
                }
                else{
                echo $mail." is not EMAIL address";

                }
             ?>
            <!--FILTER_VALIDATE_URL--> 
              <?php
                echo"<br><br>";
                $url = "github.com/AsmitJoy";
                if (filter_var($url, FILTER_VALIDATE_URL)) {
                    echo $url." is valid Website address";
                }
                else{
                echo $url." is not Website address";

                }
              ?>
            <!--Filter Advanced-->
              <!--Int_filter-->
                <?php
                    echo"<br><br>";
                    $intnum = 2120;
                    $min = 1;
                    $max = 500;
                    if(filter_var($intnum,FILTER_VALIDATE_INT,array("options" => array("min_range" =>$min,"max_raxnge" =>$max)))){
                        echo"It is valid";
                    }else {
                        echo"It is not valid";
                    }
                ?> 
              <!--url_filter-->
                <?php
                        echo"<br><br>";
                        $url = "https://www.asmitjoy.shovon.net/";//index.html?=123?
                        if(filter_var($url,FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
                            echo"This url is valid";
                        }else {
                            echo"It is not query String";
                        }
                    ?> 
       
       
            <!--Filter section is closed-->

        <!--Error Handling-->
            <?php
                //phpinfo();
                error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE );
            ?>

        <!--Error Handling with Exception-->
            <?php
                echo"<br><br>";
                function num_check($num){
                    if($num!=7){
                        throw new Exception(" Number is not 5");
                    }
                    return true;
                }
                try{
                   num_check(7);
                   echo"You didn't know who is CR7.<br>0MG!!!!!!!!!";
                }catch(Exception $e){
                    echo "Error: ".$e->getMessage();
                }
            ?>
           
        <!--String to Array and Array to string(Explode and Implode)-->
         <?php
            //String to Array
            echo"<br><br>";
            $my_str = "Hi Godzila love Ronaldo.";
            $ary = explode(" ",$my_str);
            echo "<h2 style = color:red >$ary[3]</h2>";

            //Array to string
            $my_array = array("Hi!, ","Godzila","love","CR7.");
            $my_string = implode(" ",$my_array);//we can seperate it by comma(,)
            echo"<h3 style = color:green;>$my_string</h3>"
         ?>






         </div><!--Maincode Close-->
            
        <!--Footer-->
        <?php require'footer.php'?>

    </div><!--Php code-->
</body>

</html>