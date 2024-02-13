<?php

$back='Home_background_2.png';
$men='menofproject.png';
$lock='lock2-removebg-preview.png';
$globe='globe.png';
$doller='doller.png';
$widthdraw='widthdraw.jpg';
session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Withdraw</title>
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
            min-width:800px;
            /* min-height:900; */

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

        #conform{
            border:1px solid;
            border-radius:5px;
            background-color:red;
            height:30px;
            width:70px;
            color:white;
            text-align:center;
            display:none;

        }
        /* #head{
            border:1px solid;
            text-align:center;
            font-size:40px;
            font-family: 'Rethink Sans', sans-serif;
            margin:15px 0px;
            color:blue;


        } */
        .deposite{
            display:grid;
            padding:1rem;
            grid-template-rows:0.4fr 1.7fr 1fr;
            grid-template-columns:1fr 1fr;
            row-gap:10px;
            column-gap:40px;
            background-color:rgba(255, 255, 204,.1);

        }
        .item4{
            /* border:1px solid; */

        }
        .item1{
            grid-column-start:1;
            grid-column-end:3;
            text-align:center;
            padding-top:10px;
            color:blue;
            font-family: 'Rethink Sans', sans-serif;
            font-size:20px;

        }
        .item4{
            grid-column-start:1;
            grid-column-end:3;
        }
        .image{
            background-image:url("<?php echo $widthdraw; ?>");
            /* border:1px solid; */
            border-radius:55px;
            margin-top:40px;
            height:300px;
            background-size:100% 108%;

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
    <div class="Deposite1" onclick=fun1()>Deposite</div>
    <div style="border:1px solid; color:white;"></div>
    <div class="Widthdraw">Widthdraw</div>
    <div style="border:1px solid; color:white;">
</div>
<div class="image"></div>
</div>

<div class="deposite">
    <div class="item1">
    <h1 id="head"></h1>
    </div>

    <?php

        $pointer=fopen('Account_no.txt','r');
        $f=fread($pointer,filesize('Account_no.txt'));
        // echo $f;
        // echo '<br>';
        $ar=explode(' ',$f);
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
        


        $b=0;
        if(isset($_POST['Account_no'])){

            $account=$_POST['Account_no'];
            for($i=0;$i<sizeof($ar);$i++){
                if($account==$ar[$i]){
                    $b+=1;
                    break;
                }
            }
        if($b>=1){
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
        }
        // echo '<br>';
        // echo $table;


        $table_demo=$table;
        $real_table='';
        $table_array=str_split($table_demo);
        for($i=0;$i<sizeof($table_array)-1;$i++){
        
            $real_table.=$table_array[$i];
        
            
        }

        
        
        
        $query="SELECT * FROM `$real_table`";
        $result=mysqli_query($conn,$query);

        $no_of_rows=mysqli_num_rows($result);
        // echo "<br>";
        // echo $no_of_rows;

        $amount_array=[];
        $password='';
        $count=1;
        // for to get the data from database 
        for($i=0;$i<$no_of_rows;$i++){
        $data=mysqli_fetch_assoc($result);
        array_push($amount_array,(int)$data['Balance']);
        if($count==1){
            $password=$data['password'];
            $count+=1;
        }
        }
        // echo '<br>';


        // echo '<br>';

        $net_amount=$amount_array[$no_of_rows-1];
        // print_r($net_amount);
        // echo '<br>';
        // echo $password;
        // echo '<br>';
        // echo $_POST['password'];
        // echo '<br>';
        $step=0;
        if($_POST['password']!=$password){
            $step+=1;
            // echo $step;
        }
        if($step==1){
            $PE='password_error';
        }
        if($step==0){
            $in1='info1';
            $in2='info2';
            $conform_id='conform';
            $_SESSION['Account']=$_POST['Account_no'];
            $_SESSION['password']=$_POST['password'];


            
        }
        
        
    }
    if($b==0){
        $AE='Account_error';
        $PE='password_error';
    }




    }
        
    // 519580013457
    // 519580013457
    // 519580013457
    // 519580013457
    // 519580013457
    // 519580013457
    // 519580013457


        
    ?>

    <style>
        #account_no{
            /* border:1px solid; */
            font-family: 'Rethink Sans', sans-serif;
            height:40px;
            /* margin:20px 0px; */
            text-align:center;
            
            
        }
        #password{
            /* border:1px solid; */
            /* margin:20px 0px; */
            font-family: 'Rethink Sans', sans-serif;
            height:40px;
            text-align:center;
           
        }
        [type='number']{
            height:20px;
            margin-left:10px;

        }
        [type='password']{
            height:20px;
            margin-left:10px;



        }
        [type='submit']{
            height:30px;
            width:60px;

        }
        .move{
            /* border:1px solid; */
            text-align:center;
        }
        .instruct1,.instruct2,#info1,#info2,.wait{
            /* border:1px solid green; */
            height:35px;
            margin-bottom:10px;
            border-radius:5px;
            text-align:center;
            font-family: 'Rethink Sans', sans-serif;
            font-size:15px;
            padding-top:7px;
 
            background-color:rgba(255, 0, 255,.9);
            color:black;
            
           
            color:white;
            font-size:16px;
        }
        #password_error,#Account_error{
            color:red;
            font-size:14px;
            margin-left:100px;
        }
        #info1,#info2{
            background-color:rgba(255, 0, 255,.9);
            width:70%;
            color:black;

        }
        .conformation{
            /* border:1px solid; */
            text-align:center;
            font-size:20px;
            font-family: 'Rethink Sans', sans-serif;
            padding:7px 0px;
            background-color:rgba(73, 192, 73, 0.8);
            color:white;
            margin-bottom:19px;
            border-radius:6px;

        }
        #conform{
            height:40px;
            padding-top:9px;
            width:90px;
            margin-top:15px;
            font-family: 'Rethink Sans', sans-serif;
           cursor:pointer;
            
            
        }
        .recent{
            text-align:center;
            font-family: 'Rethink Sans', sans-serif;
            height:40px;
            background-color:rgb(255, 255, 204,.3)
            
        }
        .wait{
            margin-top:10px;
        }
        .item4{
            font-family: 'Rethink Sans', sans-serif;
            font-size:17px;
            color:black;
            text-align:center;
            /* border:1px solid; */
            height:170px;
            padding:20px 10px;
            background-color:rgb(51, 153, 255);
            border-radius:5px;
        }


    </style>


<div class="item2">

    <form action="" onsubmit='return valid()' 
    method='post' name='transition_form'>

    <div class="instruct1">Costumer Should have an already existing account in bank</div>

    <div id="account_no">
        Account No. <input type="number" name='Account_no' id='Ac' required>
        <br>
        <span id='Account_error'></span>
    </div>  
    <br>
    
    <div class="instruct2">Enter Account's Password</div>

    <div id="password">
            password <input type="password" name='password' > <br>
            <span id='password_error' required></span>
    </div>  



<div class="move">
    <input type="submit">
    </div>

   
    <!--
        <div id="amount">
            Amount <input ty`qpe="number" id='Am' name='Amount'><br>
            <span id='Amount_error'>*</span>
        </div> -->
    </form>
<div class="wait">Wait for Conformation Button after Submission on conformation screen
</div>
</div> 

<div class="item3">
    <div class="conformation">Conformation Screen</div>
    <div class="recent">Recenly Typed</div>
<div style='margin-left:24%;'>
<div id="info1">Account</div> </div>
<div style='margin-left:24%;'>
<div id="info2">Password</div> </div>
<div style='padding-left:43%;margin-top:35px;padding-bottom:10px;height:40px; cursor:pointer;'>
    <div id="conform" onclick='move()'>Conform</div>
    </div>
</div>
<div class="item4"> Secure bank account systems are pivotal in ensuring the safety and confidentiality of deposited funds.These systems employ various protocols and technologies to prevent unauthorized access and fraudulent activities.<br>Implementation of multi-factor authentication adds an extra layer of security by verifying users through multiple steps.Advanced algorithms are used to detect suspicious transactions and activities, flagging them for further investigation.<br>Advanced algorithms are used to detect suspicious transactions and activities, flagging them for further investigation</div>

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
        

        if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }
    


    

        function valid(){
        value=true;
        ac=document.forms['transition_form']['Account_no'].value;

        pass=document.forms['transition_form']['password'].value;

        // amo=document.forms['transition_form']['Amount'].value;
        // num=parseInt(amo);


        if(ac.length!=12 || ac.length==0){
            document.getElementById('Account_error').innerHTML='Invalid Account Number';
            value=false;
        }

        if(pass.length<8 || pass.length==0){
            document.getElementById('password_error').innerHTML='invalid Password';
            value=false;

        }

        
        return value;
        
        
        
        
    }
    

        function fun1(){
            location.href='Deposite.php';
        }
        



        </script>


</div>
    
</body>
</html>


<script>
    document.getElementById('<?php echo $PE; ?>').innerHTML='Incorrect Password';
    document.getElementById('info1').innerHTML='Account <?php   echo $_POST['Account_no'] ?>';
    document.getElementById('info2').innerHTML='Password <?php   echo $_POST['password'] ?>';

</script>


<script>
    document.getElementById('<?php echo $in2;?>').innerHTML='Password - <?php   echo $_POST['password'] ?>';
    document.getElementById('<?php echo $in1;?>').innerHTML='Account -  <?php   echo $_POST['Account_no'] ?>';
    document.getElementById('<?php echo $conform_id;?>').style.display='block';
    function move(){
        location.href='Amount.php';
    }
</script>



<script>
    document.getElementById('<?php echo $PE; ?>').innerHTML='Incorrect Password';
     document.getElementById('<?php echo $AE; ?>').innerHTML='Invalid Account Number';


</script>




