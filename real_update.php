<?php

session_start();
$back='Home_background_2.png';
$men='menofproject.png';
$lock='lock2-removebg-preview.png';
$globe='globe.png';
$doller='doller.png';

// echo $_SESSION['nominee'];
// $nominee=$_SESSION['nominee'];

// echo $_SESSION['phone'];
// $phone=$_SESSION['phone'];

// echo $_SESSION['gender'];
// $gender=$_SESSION['gender'];

// echo $_SESSION['password'];
// $password=$_SESSION['password'];

// echo $_SESSION['city'];
// $city=$_SESSION['city'];

// echo $_SESSION['Account_no'];
$Account_no=$_SESSION['Account_no'];

// echo $_SESSION['name'];
$name=$_SESSION['name'];

// echo 'hello';


// print_r($_POST);

if(isset($_POST['nominee'])){

    $nominee=$_POST['nominee'];
    $phone=$_POST['phone'];
    $password1=$_POST['password'];
    // echo '<br>'; 
    // echo $password1;
    // echo '<br>'; 
    $city=$_POST['city'];
    $gender=$_POST['gender'];

    $servername="localhost:3307";
    $username="root";
    $password="";
    $database="miniproject_database";
    
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die('soory'.mysqli_connect_error());
    }
    else{
        // echo '<br>';
        // echo 'connection Success full';
    }
    
    $table='';
    $pointer2=fopen('table.txt','r');
    while($a=fgets($pointer2)){
        if(strpos($a,"$Account_no")!==false){
            $table=$a;
            break;
        }
}

    // echo $table;


    $table_demo=$table;
    $real_table='';
    $table_array=str_split($table_demo);
    for($i=0;$i<sizeof($table_array)-1;$i++){
    
        $real_table.=$table_array[$i];
    
        
    }
    // echo $real_table;

    




    $query1="UPDATE `$real_table` SET `nominee`='$nominee',`phone`='$phone',`gender`='$gender',`city`='$city',`password`='$password1' WHERE `name`='$name'";
    mysqli_query($conn,$query1);


    

    // echo 'ho giya';
    $conform='conformation';


    


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">

    <style>
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Rethink Sans', sans-serif;

        }

        body {
            height: 100vh;
            width: 100vw;
            <?php //echo $back; ?>
            /* background-image: url(''); */
            background-color:rgba(10, 0, 4, 0.01);
            background-size: 100% 100%;
            /* background-image: url('/globe.png'); */
            overflow-x: hidden;

        }

        .menubar {
            width: 100%;
            height: 35px;
            background-color: rgba(0, 0, 0, .9);
            position: sticky;
            top:0px;
            z-index:2;
            min-width: 700px;
        }

        li {
            list-style: none;
            float: left;
            font-size: 16px;
            padding: 7px 20px;
            transition-property: all;
            /* transition-delay:1s; */
            transition-timing-function: linear;
            transition-duration: 0.1s;
            font-family: 'Rethink Sans', sans-serif;

            /* border: 1px solid; */


        }

        li:hover {
            /* background-color: rgb(244, 240, 240); */
            font-size: 19px;

        }
        li.update{
            background-color: rgba(255, 255, 255,.4);
        }
        ul {
            padding: 0px 18px;
        }

        a {
            color: white;
            text-decoration: none;
            font-family: 'Rethink Sans', sans-serif;
        }

        .logo {
            width: 100%;
            /* border: 1px solid; */
            height: 150px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-top: 2px;

        }

        .doller {
            background-image: url('<?php echo $doller; ?>');
            background-size: 100% 100%;
            height: 170px;
            width: 100px;
            /* border: 1px solid; */




        }

        .globe2 {
            background-image: url('<?php echo $globe; ?>');
            height: 54px;
            width: 60px;
            background-size: 100% 100%;
            background-position: -2px -2px;
            margin-top: 10px;
            /* border: 1px solid; */
            animation-name: rotation;
            animation-timing-function: linear;
            animation-duration: 3s;
            animation-iteration-count: infinite;
        }

        .globe1 {
            background-image: url('<?php echo $globe; ?>');
            height: 54px;
            width: 60px;
            /* border: 1px solid; */
            background-size: 100% 100%;
            background-position: -2px -2px;

            margin-top: 45px;
            animation-name: rotation;
            animation-timing-function: linear;
            animation-duration: 3s;
            animation-iteration-count: infinite;
        }

        @keyframes rotation {
            from {
                transform: rotate(0deg);
            }

            to {
                
                transform: rotate(360deg);
            }
        }
        .container{
            /* border:1px solid; */
            display:flex;
            justify-content:space-between;
            height:88vh;

        }
        .item1{
            /* border:1px solid; */
            width:15%;
            /* height:100px; */
            margin-left:20px;
            font-family: 'Rethink Sans', sans-serif;
            font-size:16px;
            padding:10px;
            background-color:rgba(0, 202, 255, .7);
            box-shadow:1px 2px 4px 4px rgba(140, 140, 140, .8);

        }
        .item2{
            /* border:1px solid; */
            width:80%;
            display:grid;
            grid-template-rows:0.4fr 1.7fr 1fr 0.3fr;
            grid-template-columns:0.6fr 1.2fr;
            row-gap:10px;
            column-gap:40px;
            padding:10px;
        }
        .grid1,.grid2,.grid3,.grid4{
            /* border:1px solid; */
        }
        .grid1{
            grid-column-start:1;
            grid-column-end:3;
            text-align:center;
        }
        .grid2{
            padding:10px;
            border-radius:5px;
            box-shadow:1px 2px 4px 4px rgba(140, 140, 140, .8);

        }
        .grid3{
            box-shadow:1px 2px 4px 4px rgba(140, 140, 140, .8);
            border-radius:5px;
            padding-top:10px;
        }
        .grid4{
            grid-column-start:1;
            grid-column-end:3;
            /* border:1px solid red; */
            padding:10px;
            background-color:rgba(245, 195, 2, 0.09);
        }
        .update_screen{
            font-size:20px;
            text-align:center;
            padding:3px;
            color:green;
            margin-bottom:5px;
            /* border:1px solid; */

        }
        .head{
            font-size:35px;
            padding-top:10px;
            color:blue;
            padding:10px 10px;
            /* text-shadow:2px 2px rgba(140, 140, 140, .5); */
            
        }


        .recently_typed{
            text-align:center;
            padding:10px;
            font-family: 'Rethink Sans', sans-serif;
            margin-top:50px;
            background-color:rgba(255, 0, 255,.9);
            border-radius:5px;
            color:white;
            
        }
        .previous_details{
            /* border:1px solid; */
            width:33%;



        }
        .flex_box{
            display:flex;
            justify-content:space-between;
            padding:5px;
            /* border:5px solid; */
            height:330px;
        }
        .form{
            /* border:1px solid; */
            width:65%;
            height:100%;
            text-align:left;
            padding:14px 0px;
            padding-left:90px;
            overflow:scroll;
            border-radius:5px;
            box-shadow:1px 2px 4px 4px rgba(140, 140, 140, .4);
            

        }
        #ac{
            text-align:center;
            margin-top:30px;

        }
        .instruction1{
            text-align:center;
            padding:10px;
            font-family: 'Rethink Sans', sans-serif;
            margin-top:50px;
            background-color:rgba(255, 0, 255,.9);
            border-radius:5px;
            color:white;
            
        }
        #instruction2{
            text-align:center;
            padding:10px;
            font-family: 'Rethink Sans', sans-serif;
            margin-bottom:3px;
            background-color:rgba(255, 0, 255,.9);
            border-radius:5px;
            color:white;
            margin-top:5px;
            
            
        }
        .previous_details{
            text-align:left;
            padding:5px;
            padding-left:15px;
            text-align:center;
            /* border:1px solid; */
            border-radius:5px;
            box-shadow:1px 2px 4px 4px rgba(140, 140, 140, .4);

            


        }
        #nominee_error,#phone_error,#password_error{
            margin-left:30px;
            color:red;
            font-size:12px;
        }
        .button{
             margin-left:30px;
             height:30px;
             width:50px;
        }
        #conformation{
            border:1px solid;
            grid-column-start:1;
            grid-column-end:3;
            border-radius:5px;
            background-color:rgba(116, 237, 116, 1);
            color:white;
            font-size:20px;
            text-align:center;
            padding:5px;
            display:none;

        }


        
    </style>
</head>
<body>
        <div class="menubar">
        <ul>
            <li class='home'><a href="Home.php">Home</a></li>
            <li><a href="create.php">Create</a></li>
            <li><a href="Deposite.php">Deposite</a></li>
            <li><a href="widthdraw.php">Withdraw</a></li>
            <li><a href="view.php">View</a></li>
            <li class='update'><a href="Update.php">Update</a></li>
            <li><a href="delete.php">Delete</a></li>
        </ul>
    </div>
    <div class="logo">
        <div class="globe1"></div>
        <div class="doller"></div>
        <div class="globe2"></div>

    </div>
<div class="container">
    <div class="item1">
        <h3>Instructions</h3>
    <br>
1.Fill user's Account Number in Appear. <br> <br>2.Press the Submit Button. <br>  <br>
 3.If user's Types Account Number is Correthen a Update form will appear on Screen Right Side of the Screen.
 <br>  <br>
 4. In case of Incorrect account numbuser's get an error. <br>  <br>
5.Fill the required Updated Details on tUpdate form. <br> <br>
 6.Press Done Button to Update the Details. <br>  
</div>

<div class="item2">
    <h1 class="grid1 head">UPDATE DETAILS</h1>
    <div id="conformation">UPDATION SUCCESSFULL</div>
<div class="grid2">
    <div class='recently_typed'>Receptly Typed</div>
    <div id="ac"></div>
    <div class="instruction1">Fill the New Details on the Update screen Form By matching With Previous Data. </div>
</div>
<div class="grid3">


<div class="update_screen">UPDATE SCREEN</div>
    
    <div class="flex_box">
<div class="previous_details">
    <div id='instruction2'>Previous Data</div>
    <div id="nominee"></div>   <br>
    <div id="phone"></div>  <br>
    <div id="password"></div>  <br>
    <div id="city"></div>  <br>
    <div id="gender"></div>  
</div>

<div class="form">
<form action="" onsubmit='return valid()' method='post' name='details_forms'>

<div class="nominee">
   Nominee <input type="text" name='nominee' required>
    <br>
    <span id='nominee_error'></span>
</div>   <br>
<div class="phone">
   Mobile Number <input type="number" name='phone' required>
    <br>
    <span id='phone_error'></span>
</div>  <br>
<div class="password">
   Password <input type="password" name='password' required>
    <br>
    <span id='password_error'></span>
</div>  <br>
<pre><div id="city">City    <select name="city"><option value="Ghaziabad">Ghaziabad</option><option value="Rampur">Rampur</option><option value="Etah">Etah</option><option value="Prayagraj">Prayagraj</option><option value="Agra">Agra</option><option value="Ballia">Ballia</option><option value="Sultanpur">Sultanpur</option><option value="Varanasi">Varanasi</option><option value="Deoria">Deoria</option><option value="Mathura">Mathura</option><option value="Noida">Noida</option><option value="Gorakhpur">Gorakhpur</option><option value="Meerut">Meerut</option><option value="Shamli">Shamli</option><option value="Muzaffarnagar">Muzaffarnagar</option></select></div></pre>
 <br>
<div class="gender">
 <pre>Gender :-   Male <input type="radio" name='gender' value='male' required>   Female <input type="radio" name='gender' value='female' required></pre>
</div>
<br>
<button class='button' >Done</button>

</form>

<script>

if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }

    count=0;
    greeting='UPDATE DETAILS';
    greeting_length=greeting.length
    real_greet=''
    b=setInterval(() => {
        if(count<greeting_length){
            real_greet+=greeting[count]
            document.getElementsByClassName('head')[0].innerHTML=real_greet;
            count+=1;
        }
        if(count==greeting_length){
            clearInterval(b);
        }
    }, 83);


function valid(){
    value=true;
    nominee=document.forms['details_forms']['nominee'].value;
    phone=document.forms['details_forms']['phone'].value;
    password=document.forms['details_forms']['password'].value;
    a=0;
    str='!@#$%^&*()~'
    for(i=0;i<str.length;i++){
        d=password.includes(str[i])
        // console.log(d);
        if(d==true){
            a+=1;
        }
    }
    if(a>0){
        answer='yes'; // for valid
    }
    else{
        answer='no';  // for invalid
    }
    
    if(nominee.length<4){
        document.getElementById('nominee_error').innerHTML='Nominee Name Must Contain Minimum Four Character';
        value=false
    }

    if(phone.length!=10){
        document.getElementById('phone_error').innerHTML='Mobile number Must Be Of Ten Digit ';
        value=false
    }

    if(password.length<8 || answer=='no'){
    document.getElementById('password_error').innerHTML='Password must contain 8 character with some special character';
        value=false
    }

    return value

}



</script>
</div>
</div>
</div>





<div class="grid4">
1.Fill all the required details carefully. <br>
    <br>
    2.Software must connected with Xampp server Database Before the operation.  <br><br>
    3.Internet connectivity must required.  <br><br>
    4.In case of loosing password and other sensitive details inform to SBAM(Secured Bank Account Management) with in 10 days.

</div>
</div>


</body>
</html>


<script>
    document.getElementById('ac').innerHTML='Account Number  -  <?php echo $_SESSION['Account_no'];?> <br> <br> Account Holder\'s Name   -   <?php echo $name; ?>'
    document.getElementById('nominee').innerHTML='Nominee  -  <?php echo $_SESSION['nominee'];?>'
    document.getElementById('phone').innerHTML='Mobile_No  -  <?php echo $_SESSION['phone'];?>'
    document.getElementById('password').innerHTML='Password  -  <?php echo $_SESSION['password'];?>'
    document.getElementById('city').innerHTML='City  -  <?php echo $_SESSION['city'];?>'
    document.getElementById('gender').innerHTML='Gender  -  <?php echo $_SESSION['gender'];?>'
    
</script>
<script>
    document.getElementById('<?php echo $conform; ?>').style.display='block';
</script>

