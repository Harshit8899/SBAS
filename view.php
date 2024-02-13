<?php 

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
    <title>Transition list</title>
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
        li.view{
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
        .number{
            color:red;
            text-align:center;
            margin-top:10px;
        }

        #head{
            text-align:center;
            color:blue;
            margin:10px 0px;
            
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
        .container{
            padding:40px;
            display:grid;
            grid-template-rows:500px;
            grid-template-columns:.8fr 2.5fr .8fr;
            column-gap:50px;

        }
        .grid1,.grid2,.grid3{
            /* border:1px solid; */
        }
        #account_no,#password{
        text-align:center;}

        .button{
            margin-top:20px;
            height:25px;
            width:60px;

        }
        .grid2{
            overflow-y:scroll;
        }

        .table_d{
            display:flex;
            justify-content:center;
            margin:30px 0px;
           

        }
        .table{
            min-width:700px;
            min-height:190px;
            text-align:center;
        }
        .table th{
            background-color: #009879;
        }
        .feed{
            text-align:center;
            background-color:rgba(255, 0, 255,.9);
            display:none;
            border-radius:6px;
            width:300px;
            padding:10px;
            margin-bottom:20px;

        }
        .instruction{
            height:500px;
            width:250px;
            /* border:1px solid; */
            
            
            padding:10px;
            background-color:rgba(0, 202, 255, .7);
            box-shadow:1px 1px 5px 5px rgba(140, 140, 140, .8);
            border-radius:5px;
            
        }
        .instruction2{
            height:500px;
            width:250px;
            /* border:1px solid; */
            
            
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
            margin-top:20px;
        }
        #Account_error,#password_error{
            color:red;
            margin-left:110px;
            font-size:13px;
        }
        .grid2{
            background-color:white;
            border-radius:7px;
            box-shadow:1px 1px 5px 5px rgba(140, 140, 140, .8);

        }
        .net_amount{
            text-align:center;
            margin-bottom:20px;


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
            <li class='update'><a href="Update.php">Update</a></li>
            <li class='delete'><a href="delete.php">Delete</a></li>
        </ul>
    </div>
    <div class="logo">
        <div class="globe1"></div>
        <div class="doller"></div>
        <div class="globe2"></div>
    </div>
    <div class="container">

    <div class="grid1">

    <div class="instruction">
    <h3 style='text-align:center;background-color:white;padding:4px 0px;border-radius:6px;' >Instruction</h3> <br>
    1. Fill correct account number and password. <br> <br>
    2. click on the Submit button . <br> <br> 
    3. If account and password is not authentic then red     Instruction will be appear. <br> <br>
    4. If account number and password is authentic then Transition list will be displayed on the screen. <br> <br>
    5. Date of transition(DOT). <br> <br>
    6. Time of transition(TOT). <br>  <br>
      <div class="design1"></div> <br>
    </div>

    </div>


    <div class="grid2">
    <h1 id="head"></h1>
    
    <form action="" onsubmit='return valid()' 
    method='post' name='view_form'>

    <div style='display:flex;justify-content:center;'>
    <div class="instruct1">Costumer Should have an already existing account in bank</div>
    </div>


    <div id="account_no">
        Account No. <input type="number" name='Account_no' id='Ac'>  
        <br>
        <span id='Account_error'></span>
    </div>  
    <br>
        <div style='display:flex;justify-content:center;'>
    <div class="instruct2">Enter Account's Password</div>
    </div>
    <div id="password">
            Password  <input type="password" name='password' id='pass1' >  <br>
            <span id='password_error'></span>
    </div>  


<div style='display:flex;justify-content:center;'>
<button class='button'>Submit</button>
</div>

   
    <!--
        <div id="amount">
            Amount <input ty`qpe="number" id='Am' name='Amount'><br>
            <span id='Amount_error'>*</span>
        </div> -->
        <br><br>
        <div style='display:flex;justify-content:center; '>
        <div class="feed">
        <span id='ac'></span> <br>
        <span id='pass'></span> <br>
        </div>
    </div>
    </form>
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

            $table='';
            $present='';
            if($b>=1){
                $pointer2=fopen('table.txt','r');
                while($a=fgets($pointer2)){
                    if(strpos($a,"$account")!=false){
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

                $servername='localhost:3307';
                $username="root";
                $password="";
                $database="miniproject_database";
                 
                $conn=mysqli_connect($servername,$username,$password,$database);
                if(!$conn){
                    die('Soory'.mysqli_connect_error());
                }
                else{
                    // echo 'connection successfull';
                }

                $query="SELECT * FROM `$real_table`";
                $result=mysqli_query($conn,$query);
                
        
        
                $data_base=mysqli_fetch_assoc($result);


                
                if($_POST['password']==$data_base['password']){
                    $answer='yes';

                    $query="SELECT * FROM `$real_table`";
                    $result=mysqli_query($conn,$query);
    
                    $no_of_rows=mysqli_num_rows($result);
                    // echo $no_of_rows;

                    if($no_of_rows==0 || $no_of_rows==1){
                        echo "<h3 class='number'>Number Of Transition In This Account Is Zero</h3>";
                      }
                    else{

                        $result2=mysqli_fetch_assoc($result);

                        // echo '<br>';
                        $date_array=[];
$time_array=[];
$amount_array=[];
while($result2=mysqli_fetch_assoc($result)){
    $real_date='';
    $date=str_split($result2['date']);
    // print_r($date);
    $j=0;
    while($j<10){
        $real_date.=$date[$j];
        $j++;
    }
    array_push($date_array,$real_date);
    $time='';
    while($j<sizeof($date)){
       $time.=$date[$j];
       $j++;
    }
    array_push($time_array,$time);

    // echo $result2['Balance']."  ";
    // echo "<br>";
    array_push($amount_array,$result2['Balance']);
}
// print_r($amount_array);
$net_amount=$amount_array[sizeof($amount_array)-1];
// echo $net_amount;
// echo '<br>';


$amount_re_array=[];
array_push($amount_re_array,$amount_array[0]);
// print_r($amount_re_array);

// echo "<br>";

$credel=[];
array_push($credel,'Credited');
// print_r($credel);

for($i=1;$i<$no_of_rows-1;$i++){
    if($amount_array[$i]<=$amount_array[$i-1]){
        
        array_push($credel,'Debited');
        array_push($amount_re_array,$amount_array[$i-1]-$amount_array[$i]);
        
    }
    else{
        array_push($credel,'Credited');
        array_push($amount_re_array,$amount_array[$i]-$amount_array[$i-1]);

    }

}
// echo '<br>';
// print_r($amount_re_array);
// echo '<br>';
// print_r($credel);
// echo '<br>';
// print_r($date_array);
// echo '<br>';
// print_r($time_array);


// echo '<br>';
// echo '<br>';
// echo '<br>';
echo "<body>
<div class='table_d'>
<table border='1' class='table'>
    <tr>
    <th>Amount($)</th>
    <th>Transaction-T</th>
    <th>DOT</th>
    <th>TOT</th>
    </tr> 
    
    </body>";
    
$no_of_rows=mysqli_num_rows($result);
$r=0;
while($r<$no_of_rows-1){
    echo "<tr>
    <td>".$amount_re_array[$r]."</td>
    <td>".$credel[$r]."</td>
    <td>".$date_array[$r]."</td>
    <td>".$time_array[$r]."</td>
    
    </tr>";
    $r++;
}

echo "</table>";
echo '</div>';
echo '<div class="net_amount">';
echo "Net Amount "." = ".$net_amount."$";
echo '</div>';
// $net_amount=$amount_array[sizeof($amount_array)-1];

}


                }
                else{
                    $answer='no';
                    $password_error='password_error';
                }



            }
            else if($b==0){
                $account_error='Account_error';
                $password_error='password_error';
            }





        }
    
    
    
    
        ?>
        
<div class="net_amount"></div>
</div>
<div class="grid3">
<div class="instruction2">
    <h3 style='text-align:center;background-color:white;padding:4px 0px;border-radius:6px;' >Requirements</h3> <br>
    1. Internet connectivity must required. <br> <br>
    2. User must not try to delete there account twice a time.<br> <br>
    3. Invalid Account number and password will be shown by checking through bank's database (If User did't have account in bank will 
    face error)<br>  <br>
    4. Software must connected with Xampp server Database Before the operation. <br> <br>
    <div class="design2"></div> <br> 
</div>

</div>

</div>

</body>
</html>
<script>

count=0;
    greeting='Transition List';
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
        ac=document.forms['view_form']['Account_no'].value;

        pass=document.forms['view_form']['password'].value;

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


