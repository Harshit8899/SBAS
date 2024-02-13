<?php

$back='Home_background_2.png';
$men='menofproject.png';
$lock='lock2-removebg-preview.png';
$globe='globe.png';
$doller='doller.png';
$deposite='deposite2.jpg';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposite</title>
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

            /* border: 1px solid; */


        }

        li:hover {
            /* background-color: rgb(244, 240, 240); */
            font-size: 19px;

        }
        li.Deposite{
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
        .Deposite1{
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

        #heading{
        /* border:1px solid; */
        width:100%;
        height:50px;
        text-align:center;
        font-family: 'Rethink Sans', sans-serif;
        margin-top:20px;
        background-color: rgba(198, 1, 253, 01);
        color:white;
        padding:5px;
        border-radius:5px;
        margin-bottom:5px;
        min-width: 700px;
        }

        #account_no,#amount{
            /* border:1px solid; */
            font-family: 'Rethink Sans', sans-serif;
            text-align:center;
            margin-top:10px;
            /* width:300px; */

        }
        
        #head{
            color:blue;
            font-family: 'Rethink Sans', sans-serif;
            text-align:center;
            font-size:42px;
            margin:10px 0px;
            margin-bottom:30px;
            

        }

        #Am{
            margin-left:24px;
            margin-top:10px;
            /* border-radius:12px; */
        
        }
        #Ac,#Am{
            width:180px;
            height:22px;
            padding-left:2px;
        }
        #Account_error,#Amount_error{
            color:red;
            font-family: 'Rethink Sans', sans-serif;
            font-size:13px;
            margin-left:100px;
           padding-top:10px;

        }
        .instruction1,.instruction2{
           
            /* border:1px solid; */
            padding:5px;
            border-radius:4px;
            background-color: rgba(198, 1, 253, 0.7);
            color:white;
            
            
           
            
        }
        button{
            margin-top:10px;
            /* border:2px solid; */
            height:28px;
            width:65px;
            color:blue;
        }
        #about{
            font-family: 'Rethink Sans', sans-serif;
            font-size:17px;
            color:white;
            text-align:center;
            /* border:1px solid; */
            height:170px;
            padding:20px 10px;
            background-color:rgba(0, 0, 255, 0.9);
            border-radius:5px;
        }
        .deposite_image{
            margin:3px;
            /* border:1px solid; */
            background-image:url("<?php echo $deposite; ?>");
            height:250px;
            background-size:100% 109%;
            border-radius:55px;
            margin-top:40px;
            

        }


    </style>
    <!-- 519580013457 -->
</head>
<body>
<div class="menubar">
        <ul>
            <li class='home'><a href="Home.php">Home</a></li>
            <li class='create'><a href="create.php">Create</a></li>
            <li class='Deposite'><a href="Deposite.php">Deposite</a></li>
            <li><a href="widthdraw.php">Withdraw</a></li>
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
        <div class="Deposite1">Deposite</div>
        <div style="border:1px solid; color:white;"></div>
        <div class="Widthdraw" onclick=fun()>Widthdraw</div>
        <div style="border:1px solid; color:white;">
    </div>

    <div class="deposite_image"></div>
    </div>
    <div class="deposite">
    
    <h1 id="head"></h1> 

    <?php
    
    // for to stablish the connection to the database
    // $servername="localhost:3307";
    // $username="root";
    // $password="";
    // $database="miniproject_database";
    
    // $conn=mysqli_connect($servername,$username,$password,$database);
    // if(!$conn){
    //     die('soory'.mysqli_connect_error());
    // }
    // else{
    //     echo 'connection Success full';
    // }

    
    $pointer=fopen('Account_no.txt','r');
    $f=fread($pointer,filesize('Account_no.txt'));
    // echo $f;
    // echo '<br>';
    $ar=explode(' ',$f);
    // print_r($ar);
    // echo '<br>';
    // print_r($_POST);
    // echo '<br>';
    
    
    
    $b=0;
    if(isset($_POST['Account_no'])){
        
        $account=$_POST['Account_no'];
        for($i=0;$i<sizeof($ar);$i++){
            if($account==$ar[$i]){
                $b+=1;
                break;
            }
        }
     
        $table='';
        $present='';
        if($b>=1){
            $pointer2=fopen('table.txt','r');
            while($a=fgets($pointer2)){
                if(strpos($a,"$account")!==false){
                    $table=$a;
                    break;
                }
        }

        //         echo '<br>';
        // echo $table;
        // echo '<br>';
        // echo 'length of table name ';
        // echo strlen($table);
        
        
        // for to remove the last character of table 
        $table_demo=$table;
        $real_table='';
        $table_array=str_split($table_demo);
        for($i=0;$i<sizeof($table_array)-1;$i++){
        
            $real_table.=$table_array[$i];
        
            
        }
        
        // echo $real_table;
        // echo '<br>';
        // echo strlen($real_table);
        // echo '<br>';

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
        
        $query="SELECT * FROM `$real_table`";
        $result=mysqli_query($conn,$query);
        // echo '<br>';

        // for to know the the number of rows in table 
        // echo 'this is the number of table rows ';
        $no_of_rows=mysqli_num_rows($result);
        // echo '<br>';
        
        $amount_array=[];
        // for to get the data from database 
        for($i=0;$i<$no_of_rows;$i++){
        $data=mysqli_fetch_assoc($result);
        array_push($amount_array,(int)$data['Balance']);

        
        // print_r($data);
        // echo '<br>';
    }
    // print_r($amount_array);




        
        // echo '<br>';
        // echo $data['name'];
        // echo '<br>';
        // echo $data['Balance'];
        // echo '<br>';
        // echo $data['phone'];
        // echo '<br>';
        // echo $data['gender'];
        // echo '<br>';    
        // echo $data['password'];
        
        
        // echo $data[`name`];
        // print_r($amount_array);
        

        // INSERT INTO `aman _ 519580013457` (`Balance`, `name`, `nominee`, `phone`, `gender`, `password`, `city`, `date`) VALUES ('23', '', '', '', '', '', '', '');
         

        // for to set the indian time zone
        date_default_timezone_set('Asia/Kolkata');
        $today = date("d-m-Y h:i:s:a");
        // echo $today;





        $money=(int)$_POST['Amount']+$amount_array[sizeof($amount_array)-1];
        // echo '<br>';
        // echo $money;
        // echo '<br>';
        $query1="INSERT INTO `$real_table` (`Balance`, `name`, `nominee`, `phone`, `gender`, `password`, `city`, `date`) VALUES ('$money', '', '', '', '', '', '', '$today')";
        mysqli_query($conn,$query1);
        // echo 'kam ho giya ';
        $sub='heading';

        
        

    }
    else{
        $present='Account_error';
    }

    // echo $account;
    // echo $present;
    // echo '<br>';
    // echo $table;
    // echo '<br>';

}





// echo '<br>';
// echo $b;




?>

<form action="" name='transition_form' method='post' onsubmit='return valid()'>

<div style=" text-align:center;font-family: 'Rethink Sans', sans-serif; height:40px; padding-top:5px;display:flex;justify-content:center;">
<div class="instruction1">Costumer Should have an already existing account in bank</div>
</div>

<div id="account_no">
    Account No. <input type="number" name='Account_no' id='Ac' required>
    <br>
    <span id='Account_error'></span>
</div>
<br>

<div style=" text-align:center;font-family: 'Rethink Sans', sans-serif;height:40px;padding-top:5px;display:flex;justify-content:center;">
<div class="instruction2">Enter Amount to Deposite</div>
</div>
<div id="amount">
   <pre></pre>Amount       <input type="number" id='Am' name='Amount' required></pre><br>
    <span id='Amount_error'></span>
</div>


<div style=" text-align:center;">
<button type="submit" >Deposite</button>
</div>

<div style="text-align:center;">
<h1 id='heading'>Click on the submit button after form filling</h1>
</div>

<div id="about"> Secure bank account systems are pivotal in ensuring the safety and confidentiality of deposited funds.These systems employ various protocols and technologies to prevent unauthorized access and fraudulent activities.<br>Implementation of multi-factor authentication adds an extra layer of security by verifying users through multiple steps.Advanced algorithms are used to detect suspicious transactions and activities, flagging them for further investigation.<br>Advanced algorithms are used to detect suspicious transactions and activities, flagging them for further investigation</div>

</form>
<script>
    
    if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }


    count=0;
    greeting='Deposite Money'
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
        
    function valid(){
        value=true;
        ac=document.forms['transition_form']['Account_no'].value;

        amo=document.forms['transition_form']['Amount'].value;
        num=parseInt(amo);
        

        if(ac.length!=12 || ac.length==0){
            document.getElementById('Account_error').innerHTML='Invalid Account Number';
            value=false;
        }

        if(num==0 || amo.length==0){
            document.getElementById('Amount_error').innerHTML='Amount zero will not creadit';
            value=false;
        }
        if(num<0){
            document.getElementById('Amount_error').innerHTML='Invalid Amount';
            value=false;
        }

        // document.getElementById('heading').innerHTML='majak';
        

        return value;

        }

        function fun(){
            location.href='widthdraw.php';
        }

</script>
<script>
    document.getElementById('<?php echo $sub; ?>').style.background='rgba(0, 251, 0, 0.8)';
    document.getElementById('<?php echo $sub; ?>').innerHTML='Deposite Successfull';
    


</script>

    </div>

    </div> 


</body>
</html>
<script>
    document.getElementById('<?php  echo $present; ?>').innerHTML='Invalid Account Number';
</script>
 




