<?php
session_start();
$back='Home_background_2.png';
$men='menofproject.png';
$lock='lock2-removebg-preview.png';
$globe='globe.png';
$doller='doller.png';




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
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
        li.delete{
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

        .successfull{
            text-align:center;
            color:green;
            font-size:32px;
            display:none;

        }
        .container{
            /* text-align:center; */
            display:flex;
            justify-content:center;
            /* border:1px solid; */
            height:490px;

        }
        .sub_container{
            text-align:center;
            /* border:1px solid; */
            width:510px;
            border-radius:7px;
            box-shadow:1px 1px 5px 5px rgba(140, 140, 140, .8);
            background-color:white;

        }
        #head{
            color:red;
            padding:10px 0px;
        }
        .instruct1,.instruct2{
            height:35px;
            margin-bottom:10px;
            border-radius:5px;
            text-align:center;
            font-family: 'Rethink Sans', sans-serif;
            font-size:15px;
            margin:10px 5px;
            padding-top:7px;
 
            background-color:rgba(255, 0, 255,.9);
            color:black;
            width:470px;
            margin-left:17px;
            
           
            color:white;
            font-size:16px;
        }
        .button{
            /* border:1px solid; */
            height:30px;
            width:60px;
            border-radius:3px;
            margin-top:15px;
        }
        #account_no,#password{
            margin-top:15px;
        }
        #Account_error,#password_error{
            color:red;
            font-size:12px;
            margin-left:100px;
        }
        .feed{
            /* height:50px; */
            margin-bottom:10px;
            border-radius:7px;
            text-align:center;
            font-family: 'Rethink Sans', sans-serif;
            font-size:15px;
            margin:10px 5px;
            padding:7px 0px;
 
            background-color:rgba(255, 0, 255,.9);
            color:black;
            width:400px;
            
            margin-left:55px;
            color:white;
            font-size:16px;
            /* line-height:4px; */
            display:none;
        }
        .successfull{
            /* border:1px solid; */
            background-color:rgba(63, 255, 80,.9);
            border-radius:5px;
            font-size:18px;
            margin-top:10px;
            padding:10px;
            width:400px;
            margin-left:55px;

        }
        .refresh{
            display:none;
        }
        .instruction{
            height:500px;
            width:250px;
            /* border:1px solid; */
            position:absolute;
            top:190px;
            left:70px;
            padding:10px;
            background-color:rgba(0, 202, 255, .7);
            box-shadow:1px 1px 5px 5px rgba(140, 140, 140, .8);
            border-radius:5px;

        }
        .instruction2{
            height:500px;
            width:250px;
            /* border:1px solid; */
            position:absolute;
            top:190px;
            right:70px;
            padding:10px;
            background-color:rgba(0, 202, 255, .7);
            box-shadow:1px 1px 5px 5px rgba(140, 140, 140, .8);
            border-radius:5px;  

        }
        .design1,.design2{
            /* border:1px solid; */
            padding:10px;
            border-radius:5px;
            height:60px;
            background-color:white;
            margin-top:50px;

        }
        .design1{
            /* border:1px solid; */
            padding:10px;
            border-radius:5px;
            height:60px;
            background-color:white;
            margin-top:90px;
        }
        
         


    </style>
</head>
<body>
<div class="menubar">
        <ul>
            <li class='home'><a href="Home.php">Home</a></li>
            <li class='create'><a href="create.php">Create</a></li>
            <li class='Deposite'><a href="Deposite.php">Deposite</a></li>
            <li><a href="widthdraw.php">Withdraw</a></li>
            <li class='view'><a href="view.php">View</a></li>
            <li><a href="Update.php">Update</a></li>
            <li class='delete'><a href="delete.php">Delete</a></li>
        </ul>
    </div>
    <div class="logo">
        <div class="globe1"></div>
        <div class="doller"></div>
        <div class="globe2"></div>
    </div>

    <div class="container">

    <div class="bar">
        <!-- <div class="Deposite1">Deposite</div> -->
        <div style="border:1px solid; color:white;"></div>
        <!-- <div class="Widthdraw" onclick=fun()>Widthdraw</div> -->
        <div style="border:1px solid; color:white;">
    </div>
    </div>

    <?php
    // print_r($_POST);
    $pointer=fopen('Account_no.txt','r');
    $f=fread($pointer,filesize('Account_no.txt'));
    // echo $f;
    // echo '<br>';
    $ar=explode(' ',$f);
    // print_r($ar);
    // echo strlen($ar[2]);
    
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
        

        // echo $b;

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
        $table_demo=$table;
        $real_table='';
        $table_array=str_split($table_demo);
        for($i=0;$i<sizeof($table_array)-1;$i++){
        
            $real_table.=$table_array[$i];
        
            
        }
        // echo $real_table;

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


        $data=mysqli_fetch_assoc($result);
        
        // echo '<br>';
        // echo $data['password'];
        // echo '<br>';
        
        if($_POST['password']==$data['password']){
            $answer='yes';
        $A=$_POST['Account_no'];
        // echo $A;
        $ar=array_diff($ar,array("$A"));
        // echo 'this is arrray 2';
        // print_r($ar);

// 526777912011 
// 267665576628 
// 780062300209 
// echo '<br>';
// echo '<br>';
// echo '<br>';
// echo '<br>';
// echo '<br>';
        
        $pointer5=fopen('Account_no.txt','w');
        fwrite($pointer5,"");
        fclose($pointer5);

        // echo sizeof($ar);
        $pointer2=fopen('Account_no.txt','a');
        for($i=0;$i<sizeof($ar)-1;$i++){
            $element=$ar[$i];
            
            if($ar[$i]!=$A){
            
            fwrite($pointer2,"$element ");
            
        }
        }


        fwrite($pointer2,"\n");


        fclose($pointer2);

        

        $table_array=[];
        $pointer3=fopen('table.txt','r');
        while($a=fgets($pointer3)){
            array_push($table_array,"$a");

            // if(strpos($a,"$account ")!==false){
            //     $table=$a;
            //     break;
            // }
          }
        //  print_r($table_array);
         $pointer4=fopen('table.txt','w');
         for($i=0;$i<sizeof($ar);$i++){
            if(strpos($table_array[$i],"$A")!==false){
            }
            else{

                fwrite($pointer4,$table_array[$i]);
            }
         }

        $query="DROP TABLE `$real_table`";
        mysqli_query($conn,$query);
        $class_name='successfull';

        $refresh='refresh';


        // for($i=0;$i<)
        // fwrite($pointer,"$account_no \n")

        }
        else{
            $answer='no';
            $password_error='password_error';

        }
       

        $_SESSION['account_no']=$_POST['Account_no'];
        $_SESSION['password']=$_POST['password'];

        
        


        


        }
        if($b==0){
            $account_error='Account_error';
            $password_error='password_error';
        }




    }






    





    ?>
    <div class="container">
        <div class="sub_container">
    <h1 id="head"></h1>
    

    <form action="" onsubmit='return valid()' 
    method='post' name='delete_form'>

    <div class="instruct1">Costumer Should have an already existing account in bank</div>

    <div id="account_no">
        Account No. <input type="number" name='Account_no' id='Ac'>  
        <br>
        <span id='Account_error'></span>
    </div>  
    <br>
    
    <div class="instruct2">Enter Account's Password</div>

    <div id="password">
            Password  <input type="password" name='password' id='pass1' >  <br>
            <span id='password_error'></span>
    </div>  



<button class='button'>Delete</button>

   
    <!--
        <div id="amount">
            Amount <input ty`qpe="number" id='Am' name='Amount'><br>
            <span id='Amount_error'>*</span>
        </div> -->
        <br><br>
        <div class="feed">
        <span id='ac'></span> <br>
        <span id='pass'></span> <br>
        <div class='refresh'>Refresh The Page And Enter Valid Data</div>
    </div>
    </form>
    <div class="successfull">Delete Successfull</div>
</div>
<div class="instruction">
    <h3 style='text-align:center;background-color:white;padding:4px 0px;border-radius:6px;' >Instruction</h3> <br>
    1. Fill correct account number and password. <br> <br>
    2. click on the Delete button . <br> <br> 
    3. If account and password is not authentic then red     Instruction will be appear. <br> <br>
    4.If account number and password is authentic then
      a conformation bar will appear after pressing 'Delete' button on screen. <br>  <br>
      <div class="design1"></div> <br>
</div>
<div class="instruction2">
    <h3 style='text-align:center;background-color:white;padding:4px 0px;border-radius:6px;' >Requirements</h3> <br>
    1. Internet connectivity must required. <br> <br>
    2. User must have an already existing account in bank<br> <br>
    3. Invalid Account number and password will be shown by checking through bank's database (If User did't have account in bank will 
    face error)<br>  <br>
    4. Software must connected with Xampp server Database Before the operation. <br> <br>
    <div class="design2"></div> <br> 
</div>
</div>
<script>

count=0;
    greeting='Delete Account';
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
        ac=document.forms['delete_form']['Account_no'].value;

        pass=document.forms['delete_form']['password'].value;

        // amo=document.forms['transition_form']['Amount'].value;
        // num=parseInt(amo);


        if(ac.length!=12 || ac.length==0){
            document.getElementById('Account_error').innerHTML='Invalid Account Number';
            value=false;
        }

        if(pass.length<8 || pass.length==0){
            document.getElementById('password_error').innerHTML='Invalid Password';
            value=false;

        }

        
        return value;
        
        
        
        
    }
    


        
    </script>
</body>
</html>
<script>
    document.getElementById('<?php echo $password_error; ?>').innerHTML='Invalid password';
    document.getElementById('<?php echo $account_error; ?>').innerHTML='Invalid Account Number';
    
</script>
<script>
    document.getElementById('<?php echo $password_error; ?>').innerHTML='Invalid password';


</script>
<script>

    document.getElementsByClassName('feed')[0].style.display='block';
    document.getElementById('ac').innerHTML='Account_no - <?php echo $_POST['Account_no']; ?>';
    document.getElementById('pass').innerHTML='Password -  <?php echo $_POST['password']; ?>';
    

</script>
<script>
    document.getElementsByClassName('<?php echo $class_name;?>')[0].style.display='block';
</script>
