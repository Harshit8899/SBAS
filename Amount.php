<?php
 session_start();
$acc=$_SESSION['Account'];

$pass=$_SESSION['password'];


           //  imporatnt variables
           $back='Home_background_2.png';
           $men='menofproject.png';
           $lock='lock2-removebg-preview.png';
           $globe='globe.png';
           $doller='doller.png' ;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>/
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            width: 100vw;
            <?php //echo $back; ?>
            /* background-image: url(''); */
            /* background-color:rgba(10, 0, 4, 0.16); */
            background-color:rgba(10, 0, 4, 0.02);
            background-size: 100% 100%;
            /* background-image: url('/globe.png'); */
            overflow-x: hidden;
            min-width:700px;

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

            /* border: 1px solid;  */


        }

        li:hover {
            /* background-color: rgb(244, 240, 240); */
            font-size: 19px;

        }
        li.widthdraw{
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
            margin-top: 12px;

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

        div.container{
            /* border:1px solid; */
            height:85%;
            display:flex;
            justify-content:space-between;

        }

        .bar{
            /* border:1px solid; */
            height:100%;
            width:17%;
            background-color:rgba(0, 202, 255, .7);
            box-shadow:2px 2px 10px 10px rgba(122, 122, 122, 0.6);
            /* rgba(0, 202, 255, 1) */
           
        }
        .deposite{
            /* border:1px solid; */
            width:80%;
            box-shadow:2px 2px 10px 10px rgba(122, 122, 122, 0.6);

           
            


        }
        .Widthdraw{
            background-color:rgba(0, 126, 227, 0.7);
        }
        .Deposite1,.Widthdraw{
            /* border:1px solid; */
            height:50px;
            padding-top:10px;
            text-align:center;
            font-size:20px;
            font-family: 'Rethink Sans', sans-serif;
            color:white;
            transition:all;
            transition-duration:0.1s;
            transition-timing-function:linear;
            cursor:pointer;
            
        }

        .Widthdraw:hover{
            font-size:24px;
        }

        .Deposite1:hover{
            font-size:24px;
        }
         #head{
            /* border:1px solid; */
            text-align:center;
            font-size:40px;
            margin:15px 0px;
            font-family: 'Rethink Sans', sans-serif;

            color:blue;


        } 
        .account_no{
            margin-top:20px;
            font-family: 'Rethink Sans', sans-serif;
            font-size:18px;
            height:30px;
            padding-top:5px;
            width:300px;
            background-color:pink;
            text-align:center;
border-radius:5px;
background-color:rgba(255, 0, 255,.9);
color:white;
}
.password{
            color:white;
            margin-top:10px;
            font-family: 'Rethink Sans', sans-serif;
            font-size:18px;
            height:30px;
            padding-top:5px;
            width:300px;
            background-color:pink;
            text-align:center;
            border-radius:5px;
            background-color:rgba(255, 0, 255,.9);
        }
        #amount{
            margin-top:10px;
            font-family: 'Rethink Sans', sans-serif;
            font-size:18px;
            height:33px;
            padding-top:3px;
            /* width:300px; */
            /* background-color:pink; */
            text-align:center;
            border-radius:5px;
            /* border:1px solid; */
            height:50px;

        }
        [type='number']{
            /* border:1px solid; */
            margin-left:20px;
            height:20px;

           
        }
        .button{
            /* border:1px solid; */
            height:30px;
            width:100px;
            font-size:16px;
            border-radius:5px;
            background-color:red;
            color:white;
        }
        .current_balance{
            font-size:16px;
            font-family: 'Rethink Sans', sans-serif;
            /* border:1px solid; */
            margin:10px 0px;
            padding:10px 0px;
            border-radius:5px;
            width:200px;
            background-color:#FFF59D;
        }
        #amount_error{
            margin-left:35px;
            font-size:13px;
            color:red;
        }
        #yes{
            font-family: 'Rethink Sans', sans-serif;
            text-align:center;
            font-size:20px;
            margin:10px 0pc;
            border-radius:5px;
            background-color:rgba(2, 255, 0, 0.7);
            width:500px;
            padding:7px;
            display:none;

        }
        #about{
            font-family: 'Rethink Sans', sans-serif;
            font-size:17px;
            color:white;
            text-align:center;
            /* border:10px solid;  */
            height:170px;
            padding:20px 10px;
            background-color:rgb(51, 153, 255);
            border-radius:5px;
            margin-top:20px;
        }

    </style>
</head>
<body>
<div class="menubar">
        <ul>
            <li class='home'><a href="Home.php">Home</a></li>
            <li class='create'><a href="create.php">Create</a></li>
            <li class='Deposite'><a href="Deposite.php">Deposite</a></li>
            <li class='widthdraw'><a href="#">Withdraw</a></li>
            <li><a href="view.php">View</a></li>
            <li><a href="Update.php">Update</a></li>
            <li><a href="delete.php">Delete</a></li>
        </ul>
</div>
    <div class="logo">
        <div class="globe1"></div>
        <div class="doller"></div>
        <div class="globe2"></div>
    </div>
    <div class="container">

<div class="bar">
    <div class="Deposite1" onclick='fun1()'>Deposite</div>
    <div style="color:white;"></div>
    <div class="Widthdraw" onclick='fun2()'>Widthdraw</div>
    <div style=" color:white;">
</div>
</div>

<div class="deposite">
    <h1 id="head"></h1>
    <div style=' text-align:center;display:flex;justify-content:center'>
        <div id="yes"></div>
        
    </div>
    <div style=' text-align:center;display:flex;justify-content:center'>
        <div class="account_no">Account</div>
    </div>
    <div style=' text-align:center;display:flex;justify-content:center'>
        <div class="password">password</div>
    </div>
    <div style='text-align:center;display:flex;justify-content:center'>
        <div class="current_balance">Balance</div>
    </div>
    



    <?php
            // echo $acc;
            // echo  $pass;

        // $pointer=fopen('Account_no.txt','r');
        // $f=fread($pointer,filesize('Account_no.txt'));
        // // echo $f;
        // // echo '<br>';
        // $ar=explode(' ',$f);
        // print_r($ar);
        // echo '<br>';
        // print_r($_POST);
        // echo '<br>';
        


        $servername="localhost:3307";
        $username="root";
        $password="";
        $database="miniproject_database";
        
        $conn=mysqli_connect($servername,$username,$password,$database);
        if(!$conn){
            die('soory'.mysqli_connect_error());
        }
        else{
            // echo 'connection Success full';
        }
        
        $table='';
        $pointer2=fopen('table.txt','r');
        while($a=fgets($pointer2)){
          if(strpos($a,$acc)!==false){
            $table=$a;
            break;
          }

        }
        // echo '<br>';
        // echo $table;
        // echo '<br>';

        $table_demo=$table;
        $real_table='';
        $table_array=str_split($table_demo);
        for($i=0;$i<sizeof($table_array)-1;$i++){
        
            $real_table.=$table_array[$i];
        
            
        }
        // echo $real_table;

        $query="SELECT * FROM `$real_table`";
        $result=mysqli_query($conn,$query);

        $no_of_rows=mysqli_num_rows($result);
        // echo "<br>";
        // echo $no_of_rows;
        // echo "<br>";

        $amount_array=[];
        for($i=0;$i<$no_of_rows;$i++){
          $data=mysqli_fetch_assoc($result);
          array_push($amount_array,(int)$data['Balance']);

        }
        
        $net_amount=$amount_array[$no_of_rows-1];
        // print_r($net_amount);

        // echo '<br>';

        if(isset($_POST['amount'])){
        // print_r($_POST);
        
        // echo '<br>';
        $rest_amount=$net_amount-$_POST['amount'];
        // echo $rest_amount;


        date_default_timezone_set('Asia/Kolkata');
        $today = date("d-m-Y h:i:s:a");


        $query="INSERT INTO `$real_table` (`Balance`, `name`, `nominee`, `phone`, `gender`, `password`, `city`, `date`) VALUES ('$rest_amount', '', '', '', '', '', '', '$today')";
        mysqli_query($conn,$query);
        $done='yes';

        // echo '<br>';
        // echo 'ho giya kam';



        }









?> 

<form action="" name='Amount_form' onsubmit='return valid()' method='post'>


<div id='amount'>
 Amount <input type="number" name='amount'> <br>
 <span id='amount_error'></span>
</div>

<div style='text-align:center;margin-top:10px;'>
<button type="submit" class='button'>Widthdraw</button>
</div>
</form>


<div id="about"> Secure bank account systems are pivotal in ensuring the safety and confidentiality of deposited funds.These systems employ various protocols and technologies to prevent unauthorized access and fraudulent activities.<br>Implementation of multi-factor authentication adds an extra layer of security by verifying users through multiple steps.Advanced algorithms are used to detect suspicious transactions and activities, flagging them for further investigation.<br>Advanced algorithms are used to detect suspicious transactions and activities, flagging them for further investigation</div>

</div>

<!--Amount From  -->


<script>
    count=0;
    greeting='Widthdraw Money'
    greeting_length=greeting.length
    real_greet=''
    b=setInterval(() => {
        if(count<greeting_length){
            real_greet+=greeting[count]
            document.getElementById('head').innerHTML=real_greet;
            count+=1;
        }
        if(count==greeting_length){
            clearInterval(b);
        }
    }, 83);

  function fun1(){
    location.href='Deposite.php';
  }
  function fun2(){
    location.href='Widthdraw.php';
  }

  
  if(window.history.replaceState){
    window.history.replaceState(null,null,window.location.href);
  }
  

  function valid(){
    value=true;
    amount=document.forms['Amount_form']['amount'].value;
    num=parseInt(amount);
    max_ammount=parseInt('<?php echo $net_amount; ?>');

      if(amount.length==0){
        document.getElementById('amount_error').innerHTML='Invalid Amount';
        value=false;
      }

      if(num==0){
        document.getElementById('amount_error').innerHTML='Widthdraw Amount Cannot be zero';
        value=false;
      }
      if(num > max_ammount){
        document.getElementById('amount_error').innerHTML='Amount sholud not exceeds than existing money ';
        
        value=false;
      }
      return value;
      
    }
    

  </script>
  <script>
    document.getElementsByClassName('account_no')[0].innerHTML='Account - <?php echo $acc ?>';
    document.getElementsByClassName('password')[0].innerHTML='password - <?php echo $pass ?>';
    document.getElementsByClassName('current_balance')[0].innerHTML='Balance - <?php echo $net_amount ?> $';
    </script>

<script>
    document.getElementById('<?php echo $done; ?>').style.display='block';
      document.getElementById('<?php echo $done; ?>').innerHTML='Widthdrawl successfull';

  </script>








