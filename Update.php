<?php  

$back='Home_background_2.png';
$men='menofproject.png';
$lock='lock2-removebg-preview.png';
$globe='globe.png';
$doller='doller.png';
session_start();

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
            min-width:1000px;

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
            height:75vh;
            
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
            grid-template-rows:0.4fr 1.7fr 1fr;
            grid-template-columns:1fr 1fr;
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
        }
        .grid4{
            grid-column-start:1;
            grid-column-end:3;
            background-color:rgba(245, 195, 2, 0.09);
            padding:10px;
        }
        .update_screen{
            font-size:20px;
            text-align:center;
            padding:8px;
            color:green;
        }
        .Amount{
            text-align:center;
            font-family: 'Rethink Sans', sans-serif;
            font-size:19px;
            margin-top:20px;
        }
        [type='number']{
            height:23px;
            width:200px;
            margin-left:40px;
        }
        button{
            text-align:center;
        }
        #Account_error{
            color:red;
            font-size:14px;
            margin-left:170px;

        }
        .instruction1,.instruction2{
            text-align:center;
            padding:10px;
            font-family: 'Rethink Sans', sans-serif;
            margin-top:20px;
            background-color:rgba(255, 0, 255,.9);
            border-radius:5px;
            color:white;
            

        }
        .head{
            font-size:35px;
            padding-top:10px;
            color:blue;
            padding:10px 10px;
            /* text-shadow:2px 2px rgba(140, 140, 140, .5); */
            
        }
        #button{
            height:20px;
            width:60px;
        }

        


    </style>
</head>
<body>
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

    if(isset($_POST['Account'])){
        $account=$_POST['Account'];
        $b=0;
        if(strpos($f,$account)!==false){
            $b+=1;
            echo 'yes exist';
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
            // echo "<br>";
            // echo $table;
            // $correct='Account_error';

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
        // print_r($data);
        // echo $data['nominee'];
        // echo $data['phone'];
        // echo $data['gender'];
        // echo $data['password'];
        // echo $data['city'];
        $_SESSION['name']=$data['name'];
        $_SESSION['nominee']=$data['nominee'];
        $_SESSION['phone']=$data['phone'];
        $_SESSION['gender']=$data['gender'];
        $_SESSION['password']=$data['password'];
        $_SESSION['city']=$data['city'];
        $_SESSION['Account_no']=$_POST['Account'];
        
        $file_name='real_update.php';

        }


        
    }
    if($b==0){
        $error='Account_error';
    }
    
}


?>
<div class="container">
    <div class="item1">
        <h3>Instructions</h3>
    <br>
1. Fill user's Account Number in Appear. <br> <br>2.Press the Submit Button. <br>  <br>
 3. If user's Types Account Number is Correthen a Update form will appear on Screen Right Side of the Screen.
 <br>  <br>
 4. In case of Incorrect account numbuser's get an error. <br>  <br>
5. Fill the required Updated Details on tUpdate form. <br> <br>
 6. Press Done Button to Update the Details. <br>  
          
    </div>
    <div class="item2">
        <h1 class="grid1 head">UPDATE DETAILS</h1>
        <div class="grid2">
    <div class="instruction1">Costumer Should Have an Already Existing Account in Bank</div>
    <form action="" onsubmit='return valid()' method='post' name='update_form'>
      
      <div class="Amount">
        Account_no <input type="number" name='Account' required>
        <br>
        <div id="typed"></div>
        <span id="Account_error"></span>
      </div>
      <div style='display:flex; justify-content:center; margin-top:10px;'>
      <button id='button'>Submit</button></div>
    </form>
    <div class="instruction2">Update Form Will Be Displayed After Submission With Correct Account Number</div>
</div>
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
            account=document.forms['update_form']['Account'].value;



            if(account.length!=12){
                document.getElementById('Account_error').innerHTML='Invalid Acccount';
                value=false;
            }
            return value;
        }

        
                // string='harshit';
                // sub_str='har';
                // if(string.includes(sub_str)){
                // }
    </script>

</body>
</html>
    <script>
        document.getElementById('<?php echo $error; ?>').innerHTML='Invalid Account';
    </script>
    <script>
        document.getElementById('typed').innerHTML='Account_no - <?php echo $_POST['amount']; ?>';
        
    </script>



<div class="grid3">
    <div class="update_screen">UPDATE SCREEN</div>
<!-- <form action="" method='post' name='details_form'>
<div class="nominee">
    Nominee <input type="text" name='nominee'>
    <br>
    <span id='nominee_error'>*</span>
</div>
<div class="phone">
    phone <input type="phone" name='phone'>
    <br>
    <span id='phone_error'>*</span>
</div>

<div class="password">
    password <input type="password" name='password'>
    <br>
    <span id='password_error'>*</span>
</div> 
<pre><div id="city">City            <select name="city"><option value="Ghaziabad">Ghaziabad</option><option value="Rampur">Rampur</option><option value="Etah">Etah</option><option value="Prayagraj">Prayagraj</option><option value="Agra">Agra</option><option value="Ballia">Ballia</option><option value="Sultanpur">Sultanpur</option><option value="Varanasi">Varanasi</option><option value="Deoria">Deoria</option><option value="Mathura">Mathura</option><option value="Noida">Noida</option><option value="Gorakhpur">Gorakhpur</option><option value="Meerut">Meerut</option><option value="Shamli">Shamli</option><option value="Muzaffarnagar">Muzaffarnagar</option></select></div></pre>
<div class="gender">
    Gender 
    <br> Male  <input type="radio" name='gender' value='male'> <br>
     Female  <input type="radio" name='gender' value='female'>
</div>


<button id='button'>Change</button>
</form> -->
<!-- <script>
    function valid2(){
        value=true;
        nominee=document.forms['details_form']['nominee'].value;
        phone=document.forms['details_form']['phone'].value;
        password=document.forms['details_form']['password'].value;
        city=document.forms['details_form']['city'].value;
        gender=document.forms['details_form']['gender'].value;

        str='!@#$%^&*()~'
        for(i=0;i<str.length;i++){
            d=password.includes(str[i])
            console.log(d);
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
            doucment.getElementById('nominee_error').innerHTML='Invalid Nominee Name';
            value=false;
        }
        if(phone.length!=10){
            doucment.getElementById('phone_error').innerHTML='Invalid Phone Number';
            value=false;
            
        }
        if(password.length<8 || answer=='no'){
            doucment.getElementById('password_error').innerHTML='Invalid Password';
            value=false;
            
        }
        return value;

    }
</script> -->
</div>
<div class="grid4">
    1.Fill all the required details carefully. <br>
    <br>
    2.Software must connected with Xampp server Database Before the operation.  <br><br>
    3.Internet connectivity must required.  <br><br>
    4.In case of loosing password and other sensitive details inform to SBAM(Secured Bank Account Management) with in 10 days.



</div>
</div>
<script>
    location.href='<?php echo $file_name; ?>';
</script>



