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
            <hr><p>Error Handling</p><hr>

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
         <hr><p>String to Array $ Array to String(Explode,Implode)</p><hr>

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

        <!--Php case change-->
            <hr><p> case change</p><hr>
            <?php
                if (isset($_POST['text'])) {
                    global $txt;
                    $txt = $_POST['text'];
                    echo strtoupper($txt);//strtolower for lowercase
                    echo "<br>".ucfirst($txt);//first char will upercase
                    echo "<br>".ucwords($txt);//first char of all words will upercase                     
                    echo "<br>".ltrim($txt,".");//Remove white space & "."

                }
            ?>
            <form action="index.php" method = "post">
                <div class="container" style="background:red;color:red;padding:20px;width: 962px;">
                    <input type="text" name="text" value="<?php global $txt;echo $txt;?>" class=" form-control">
                    <input type="submit" value="Submit"style="margin-top:10px" class="btn btn-danger btn-block">    
                </div>
            </form><!--Close-->

            <!--require and require once-->
                <hr><p>Require and require once</p><hr>
                <?php
                    require "new.php";
                    //require "new.php";
                    require_once "new.php";        
                ?>


        <!--Array Series-->
         <hr><p>PHP ARRAY</p><hr>

            <!--pratice-->
                <?php
                    $car = array("volvo","BMW","Toyota");
                    $length = count($car);
                    for ($i=0; $i < $length; $i++) { 
                            echo $car[$i]."<br>";
                    }
                ?>
            <!--associative array-->
                <hr><h4>Associative array</h4><hr>
                <?php
                    $age = array(
                        "joy"     => 17,
                        "shovon"  => 28,
                        "ronaldo" => 421,
                        "anika"   => 112
                    );
                    foreach($age as $key => $value){
                        echo "Name = " .$key." Age = ".$value."<br>";
                    }
                //Php array_change_key_case()
                    $name = array(
                        "Bengema" =>19,
                        "Hazard"  =>22,
                        "Ronaldo" =>16,
                        "Huaguin" =>44
                    );
                    print("<pre>");
                    print_r(array_change_key_case($name, CASE_UPPER));//google it for more
                    print("</pre>");

                ?>

            <!--multidimensional array-->
             <hr><h4>Multidimensional array</h4><hr>
                <?php
                    $car = array(
                        array("Volvo","100","10"),
                        array("BMW","400","40"),
                        array("toyota","500","50"),
                        array("Lamborghini","900","90")
                    );                    
                    echo $car [3] [0]."<br>" ;
                    echo $car [0] [2]."<br>"  ;
                    echo $car [1] [0]."<br>"  ;
                    echo $car [2] [1]."<br>"  ;
                ?>
            <!--array_column-->
             <hr><h4>array_column</h4><hr>
                <?php
                    $name = array(
                        array(
                            'id'          => 200,
                            'first_name'  => 'Asmit',
                            'last_name'   => 'Joy'

                        ),
                        array(
                            'id'          => 201,
                            'first_name'  => 'Shovon',
                            'last_name'   => 'Das'

                        ),
                        array(
                            'id'          => 202,
                            'first_name'  => 'CR',
                            'last_name'   => '7'

                        )
                    );
                    $last_name = array_column($name,'last_name','first_name');
                    print("<pre>");
                    print_r($last_name);
                    echo"</pre>";
                    $last_name = array_column($name,'last_name','id');
                    print("<pre>");
                    print_r($last_name);
                    echo"</pre>";
                ?>
            <!--array_combne[Function]-->
             <hr><h4>Function - array_combine</h4><hr>
                <?php
                    $car_name   = array("Ronaldo","Grizman","Lukaku");
                    $department = array('Computer Science','Maths','Physics');
                    $combine    = array_combine($car_name,$department);
                    print("<pre>");
                    print_r($combine);
                    echo"</pre>";
                ?>

            <!--array_count_values-->
             <hr><h4>array_count_values</h4><hr>
             <?php
                 $name    = array("Ronaldo","Grizman","Lukaku","Ronaldo","Ronaldo","Ronaldo","Lukaku","Lukaku","Lukaku","Lukaku","Lukaku","Lukaku","Lukaku");
                 $age     = array('12','34','44','44','44','44','44','7','7','7','12','7','44','7');
                 $value   = array_count_values($name);
                 $value1  = array_count_values($age);
                 print("<pre>");
                 print_r($value);
                 print_r($value1);
                 echo"</pre>";
             ?>
            <!--Function - array_diff-->
                <hr><h4>array_diff</h4><hr>
                <?php

                        //It will compare only Value
                    $array_one = array("2","3",);
                    $array_two = array("1","3","5");
                    $differ    = array_diff($array_two,$array_one);
                    print("<pre>");
                    print_r($differ);
                    echo"</pre>";


                    $array_three = array(
                        "a" =>"Red",
                        "b" =>"Green",
                        "c" =>"Yellow",
                        "d" =>"Blue",
                        "e" =>"Ronaldo"
                    );
                    $array_four = array(
                        "a" =>"Red",
                        "b" =>"Green",
                        "d" =>"Blue",
                        "e" =>"messi"
                    );
                    $array_five = array(
                        "a" =>"Red",
                        "b" =>"Green",
                        "c" =>"Yellow"
                    );

                    $differ = array_diff($array_three,$array_four,$array_five);//first array will compare with others

                    print("<pre>");
                    print_r($differ);
                    echo"</pre>";
                    ?>
            <!--Function - array_diff_assoc-->
                <hr><h4>array_diff_assoc</h4><hr>
                <?php
                        //It will compare not only Value but also Key
                    $array_three = array(
                        "a" =>"Red",
                        "b" =>"Green",
                        "c" =>"Yellow",
                        "d" =>"Blue",
                        "e" =>"Ronaldo"
                    );
                    $array_four = array(
                        "h" =>"Red",
                        "i" =>"Green",
                        "j" =>"Blue",
                        "k" =>"messi"
                    );
                    $array_five = array(
                        "a" =>"White",
                        "m" =>"Green",
                        "n" =>"Yellow"
                    );

                    $differ_1 = array_diff($array_three,$array_four,$array_five);//first array will compare with others
                    $differ_2 = array_diff_assoc($array_three,$array_four,$array_five);//first array will compare with others
                    
                    print("<pre>");
                    echo"array_diff <br>";
                    print_r($differ_1);

                    echo"array_diff_assoc <br>";
                    print_r($differ_2);
                    echo"</pre>";
                ?>
            <!--Function - array_diff_key-->
                <hr><h4>array_diff_key</h4><hr> 
                <?php
                         //It will compare  only  Key
                    $array_three = array(
                        "a" =>"Red",
                        "b" =>"Green",
                        "c" =>"Yellow",
                        "d" =>"Blue",
                        "e" =>"Ronaldo"
                    );
                    $array_four = array(
                        "h" =>"Red",
                        "i" =>"Green",
                        "b" =>"Blue",
                        "k" =>"messi"
                    );
                    $array_five = array(
                        "l" =>"Whte",
                        "m" =>"Green",
                        "c" =>"Yellow"
                    );

                    $differ_key = array_diff_key($array_three,$array_four,$array_five);//first array will compare with others              
                    print("<pre>");

                    echo"array_diff <br>";
                    print_r($differ_key);
                    echo"</pre>";

                ?>       
            
            <!--Function - array_intersect-->
                <hr><h4>array_intersect  [Same Result-value]</h4><hr>           
                    <?php
                            //It will compare  only  value [Key is not fact]

                        $array_one = array(
                            "a" =>"Red",
                            "b" =>"Green",
                            "c" =>"Yellow",
                            "d" =>"Blue",
                            "e" =>"Ronaldo"
                        );
                        $array_two = array(
                            "a" =>"Black",
                            "i" =>"Green",
                            "d" =>"Blue",
                            "k" =>"messi",
                            "e" =>"Ronaldo"

                        );

                        $result= array_intersect($array_one,$array_two);//first array will compare with others[Same Result]             
                        
                        print("<pre>");
                        echo"array_intersect [Same Result] <br>";
                        print_r($result);
                        echo"</pre>";

                    ?>
            <!--Function - array_intersect_assoc-->
                <hr><h4>array_intersect_assoc  [Same Result-value and key]</h4><hr>           
                    <?php
                            //It will compare  only  value ut also key [Key is not fact]

                        $array_one = array(
                            "a" =>"Red",
                            "b" =>"Green",
                            "c" =>"Yellow",
                            "d" =>"Blue",
                            "e" =>"Ronaldo"
                        );
                        $array_two = array(
                            "a" =>"red",
                            "b" =>"Green",
                            "c" =>"Blue",
                            "d" =>"messi",
                            "e" =>"Ronaldo"

                        );
                        $array_three = array(
                            "a" =>"red",
                            "b" =>"Green",
                            "c" =>"Blue",
                            "d" =>"messi",
                            "e" =>"Ronaldo"

                        );

                        $result = array_intersect_assoc($array_one,$array_two,$array_three);//first array will compare with others[Same Result]             
                        
                        print("<pre>");
                        echo"array_intersect_assoc [Same Result] <br>";
                        print_r($result);
                        echo"</pre>";

                    ?>
            <!--Function - array_intersect_key-->
             <hr><h4>array_intersect_key  [Same Result-key]</h4><hr>           
                <?php
                        //It will compare  only   key [Key is not fact]

                    $array_one = array(
                        "a" =>"Red",
                        "b" =>"Green",
                        "c" =>"Yellow"
                    );
                    $array_two = array(
                        "a" =>"red",
                        "q" =>"Green",
                        "c" =>"Blue"
                    );
                    

                    $result = array_intersect_key($array_one,$array_two);//first array will compare with others[Same Result]             
                    
                    print("<pre>");
                    echo"array_intersect_assoc [Same Result] <br>";
                    print_r($result);
                    echo"</pre>";

                ?>


            <!--Function - array_key_exists-->
             <hr><h4>array_key_exists</h4><hr> 
                <?php
                    $arr = array(
                        "name" => "Joy",
                        "age"  => "44"
                    );
                    if (array_key_exists(AGE,$arr)) {
                        echo "Key already exists<br>";
                    }
                    else{
                        echo "Key dosen't exists<br>";
                    }


                    $arr_1 = array("joy","shovon"); 

                    if (array_key_exists(1,$arr_1)) {
                        echo "Key already exists";
                    }
                    else{
                        echo "Key dosen't exists";
                    }
                ?>
            <!--Function - array_key_exists-->
             <hr><h4>array_key_exists</h4><hr> 
                <?php
                    $car = array(
                        "Volvo" => "xc90",
                        "Bmw"   => "x5",
                        "Toyta" => "Benzema"
                    ) ;
                    $result   = array_keys($car, "x5");//echo key using parameter
                    $result_2 = array_keys($car);//echo all keys
                    echo"<pre>";
                    print_r($result);
                    print_r($result_2);
                    echo"</pre>";

                ?>
            <!--Function - array_map-->
             <hr><h4>array_key_map</h4><hr> 
             <?php
                function myfunction($value){
                    $result = $value+$value;
                    return $result;
                }
                $arr = array(1,2,3,4,5);

                $map = array_map("myfunction", $arr);
                print("<pre>");
                print_r($map);
                print("</pre>");

                //Another example
                function myfunction_1($value){
                    $v = strtoupper($value);
                    return $v;
                }
                $arr = array(
                    "Animal" => "Godzila_7",
                    "Type"   => "mammal",
                    "Age"    =>"messi"
                );

                $map = array_map("myfunction_1", $arr);
                print("<pre>");
                print_r($map);
                print("</pre>");

             ?>
            <!--Function - array_merge-->
             <hr><h4>array_merge</h4><hr>         
             <?php

                $array_one = array("red","green");
                $array_one = array("blue","yellow");
                $result    = array_merge($array_one,$array_two);

                print("<pre>");
                print_r($result);
                print("</pre>");

                //Another example
                $arr_one = array(
                    "a" => "Red",
                    "b" => "Green"
                );
                $arr_two = array(
                    "c" => "Black",
                    "b" => "White"//last key will echo
                );
                $result    = array_merge($arr_one,$arr_two);

                print("<pre>");
                print_r($result);
                print("</pre>");
             ?>

            <!--Function - array_multisort-->
             <hr><h4>array_multisort</h4><hr> 
                <?php
                        $arr_one = array("Dog","Cat");
                        $arr_two = array("Lion","Tiger");

                        array_multisort($arr_one,SORT_DESC,$arr_two,SORT_ASC);//Ascending order [A-Z]

                    print("<pre>");
                    print_r($arr_one);
                    print("</pre>");

                    print("<pre>");
                    print_r($arr_two);
                    print("</pre>");
                ?>
            <!--Function - array_Pad-->
                <hr><h4>array_pad</h4><hr> 
                <?php

                    $arr = array("Marcelo","Son","Messi");
                    $result = array_pad($arr,6,"Ronaldo");
                    $result_2 = array_pad($arr,-6,"Ronaldo");


                    print("<pre>");
                    print_r($result);
                    print_r($result_2);
                    print("</pre>");
                ?>
            <!--Function - array_pop-->
               <hr><h4>array_pop[DELETE LAST VALUE] & array_push[ADD VALUES]</h4><hr>
               <?php
                   
                   //DELETE LAST VALUE [array_pop]
                   $arr = array("Marcelo","Son","Ronaldo","Messi");
                   array_pop($arr);

                   print("<pre>");
                   print_r($arr);
                   print("</pre>");

                   //ADD VALUES. [array_push]
                   $arr = array("Marcelo","Son","Ronaldo","Messi");
                   array_push($arr,"Ozil","Pepe","Ramos");//Associative array will be same format

                   print("<pre>");
                   print_r($arr);
                   print("</pre>");
               ?>

            <!--Function - array_product-->
               <hr><h4>array_poduct</h4><hr>
                <?php
                    $arr = array(10,10,5);
                    $result = array_product($arr);

                    print("<pre>");
                    print_r($result);
                    print("</pre>");
                ?>
            <!--Function - array_replace-->
               <hr><h4>array_replace</h4><hr>
                <?php
                    $color_one = array("a"=>"Red", "Green");
                    $color_two = array("a"=>"Black","b"=>"White");
                    $result    = array_replace($color_one,$color_two);//Color_two is replace color_one 

                    print("<pre>");
                    print_r($result);
                    print("</pre>");

                    $color_one   = array("Red", "Green");
                    $color_two   = array("Black","White");
                    $color_three = array("Yellow","Skyblue");

                    $result      = array_replace($color_one,$color_two,$color_three);//Color_two is replace color_one 
                    print("<pre>");
                    print_r($result);
                    print("</pre>");
                ?>
            <!--Function - array_reverse-->
               <hr><h4>array_reverse</h4><hr>
                <?php
                    $color_one = array("a"=>"Red", "Green","Black","White");

                    $result    = array_reverse($color_one);//Associative array will be in same way

                    print("<pre>");
                    print_r($color_one);
                    print("</pre>");

                    print("<pre>");
                    print_r($result);//Reverse
                    print("</pre>");
                ?>
            <!--Function - array_Search-->
               <hr><h4>array_search</h4><hr>
               <?php
                    $color_one = array("a"=>"Red", "b"=>"Green","c"=>"Black","d"=>"White");
                    if (isset($_POST['Text'])) {
                        global $txt; 
                        $txt = $_POST['Text'];
                        $result = array_search($txt, $color_one);
                        echo"You have searched by ->$txt and your key is->$result";
                    }
                    
                ?>

                <form action="index.php" method = "POST" >
                    <input type="text" name = "Text" value="<?php global $txt; echo $txt; ?>" style = "color:red">
                    <input type="submit" value="Submit" class="btn-danger">
                </form>
                
            <!--Function - array_shift-->
                <hr><h4>array_shift[Remove first Value with key]</h4><hr>
                <?php
                    $color_one = array(
                        "a" =>"red",
                        "b" =>"green",
                        "c" =>"blue",
                        "d" =>"Black"
                    );
                    array_shift($color_one);
                    print("<pre>");
                    print_r($color_one);
                    print("</pre>");
                ?>
            <!--Function - array_slice-->
                <hr><h4>array_slice [Catch selected value]</h4><hr>
                <?php
                    $color_one = array("red","green","blue","Black","Skyblue");
                    $result = array_slice($color_one,1,3);
                    print("<pre>");
                    print_r($result);
                    print("</pre>");
                ?>
            <!--Function - array_sum-->
               <hr><h4>array_sum [sumation]</h4><hr>
                <?php
                    $arr = array(
                        "a" =>40,
                        "b" =>10,
                        "c" =>50
                    );
                    $result = array_sum($arr);

                    print("<pre>");
                    print_r($result);
                    print("</pre>");
                ?>
            <!--Function - array_unique-->
                 <hr><h4>array_unique [don't post same value two times]</h4><hr>
                    <?php
                       $arr = array(
                            "a" =>"red",
                            "b" =>"green",
                            "c" =>"blue",
                            "d" =>"skyblue",
                            "e" =>"red",
                            "f" =>"skyblue"
                        );
                        $result = array_unique($arr); 
                        print("<pre>");
                        print_r($result);
                        print("</pre>");
                    ?>
            <!--Function - array_unshift-->
                <hr><h4>array_unshift [Add new value]</h4><hr>
                    <?php
                        $color = array(
                            "a" =>"red",
                            "b" =>"green",
                            "c" =>"skyblue"
                        );
                        print("<pre>");
                        print_r($color);
                        print("</pre>");

                        array_unshift($color,"blue");

                        print("<pre>");
                        print_r($color);//After Unshift
                        print("</pre>");
                    ?>


            <!--Function - array_values-->
                <hr><h4>array_values [print only values] </h4><hr>
                    <?php
                        $color = array(
                            "a" =>"Annablle",
                            "b" =>"Annabelle Creation",
                            "c" =>"Annabelle Comes Home"
                        );
                        $result = array_values($color);
                        
                        print("<pre>");
                        print_r($result);
                        print("</pre>");
                    ?>

            <!--Function - array_walk-->
                <hr><h4>array_walk [print key and values using function]</h4><hr>
                    <?php

                    function myfunction_2($department,$name){

                        echo "<span style ='font-size:20px'><i>$name</i></span> comes from <span style ='font-size:20px'><i>$department</i></span> department<br>";
                    }
                        $name = array(
                            'Shovon' => "Biology", 
                            'Anik'   => "Computer Engineer",
                            "Lopa"   => "Scientist"
                        );
                        array_walk($name,"myfunction_2")
                    ?>      



            <!--Function - asort and arsort-->
                <hr><h4>asort and arsort </h4><hr>
                    <?php
                    
                    $age = array(
                        'Shovon' => "53", 
                        'Anik'   => "08",
                        "Lopa"   => "77",
                        "Joy"    => "35"

                    );
                    asort($age);//Ascending [use arsort for descending]
                    echo"Ascending<br>";
                    foreach($age as $name => $age){

                        echo"Name: $name Age: $age<br>";
                    }
                    $age = array(
                        'Shovon' => "53", 
                        'Anik'   => "08",
                        "Lopa"   => "77",
                        "Joy"    => "35"

                    );
                    arsort($age);
                    echo"<br>Descending<br>";
                    foreach($age as $name => $age){

                        echo"Name: $name Age: $age<br>";
                    }


                    ?>     


            <!--Function - compact-->
                <hr><h4>compact [print variable with var_name and value as assosiative array]</h4><hr>
                    <?php
                    
                        $name    = "Joy";
                        $dep     = "BGS";
                        $fv_code = "Java";
                        $result  = compact('name','dep','fv_code');

                        print("<pre>");
                        print_r($result);
                        print("</pre>");

                    
                    ?>                                  
            <!--Function - array_values-->
                <hr><h4>array_values</h4><hr>
                    <?php
                    
                    ?>                                  


        
        
        </div><!--Maincode Close-->
            
        <!--Footer-->
        <?php require'footer.php'?>

    </div><!--Php code-->
</body>

</html>
