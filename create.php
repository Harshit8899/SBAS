<?php

$back='back_ground_triangle.png';
$globe='globe.png';
$doller='doller.png';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
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
            height: 130vh;
            width: 100vw;
            
            background-image: url('<?php echo $back; ?>');

            background-size: 100% 100%;
            /* background-image: url('/globe.png'); */
            overflow-y: scroll;
            overflow-x:none;
            

        }

        .menubar {
            width: 100%;
            height: 35px;
            background-color: rgba(0, 0, 0, .9);
            position: sticky;
            top:0px;
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
        li.create{
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

        .three {
            /* border: 1px solid; */
        }

        form{
            /* border:1px solid; */
            display:flex;
            padding-top:20px;
            flex-flow:row nowrap;
            justify-content:center;
            /* align-content:center; */
            height:500px;
            /* width:500px; */
            /* padding-left:30%; */
    
        }
        
        input[type='text'],input[type='number'],input[type='password']{
            /* border:6px solid; */
            height:29px;
            width:250px;
            border-radius:20px;
            padding-left:10px;
            /* color:blue; */
            /* margin-left:25px; */

            
        }



        #name,#password,#nominee,#phone,#city,#gender{
            font-family: 'Rethink Sans', sans-serif;
            padding-left:10px;
            /* border:6px solid; */
           background-color:rgba(249, 249, 249,.8);
            width:630px;
            text-align:center;
             padding-top:10px;
            border-radius:12px;
            
        }
        #city{
            padding-bottom:12px;
        }
        
        
        select[name='city']{
            
            /* border:1px solid; */
            /* height:22px; */
            width:200px;
            height:29px;
            border-radius:12px;
           
        }
        
        .button{
            height:40px;

            width:100px;
            border-radius:12px;
            color:black;
            margin-top:50px;
            margin-bottom:20px;
            background-color:rgba(83, 221, 88, 0.82);
            /* background-color:rgba(181, 120, 252, 0.5); */
            /* margin-right:35%; */
            
        }
        
        #heading{
        font-family: 'Rethink Sans', sans-serif;
        font-size:72px;
        color:blue;
        text-align:center;
        }

        .formerror{
            margin-left:230px;
            font-size:12px;
            color:red;
            
            
        }
        .center{
            /* border:1px solid red; */
            text-align:center;
            border-radius:12px;
            background-color: rgba(198, 1, 253, 0.4);
            padding:15px;
            box-shadow:5px 5px 2px white;
            margin-bottom:20px

        }
        #gender{
            padding-bottom:7px;
        }
        .green_box{
            /* border:1px solid; */
            display:flex;
            justify-content:center;

        }
        #green{
            /* border:1px solid; */
            width:650px;
            height:40px;
            margin-top:5px;
            font-size:20px;
            font-family: 'Rethink Sans', sans-serif;
            background-color:rgba(63, 255, 80,.9);
            text-align:center;
            padding-top:9px;
            color:green;
            display:none;

        }
        #display{
            /* border:1px solid; */
            margin-top:60px;
            display:flex;
            justify-content:space-evenly;
            padding:20px 0px;
            background-color:rgba(2, 190, 255, 0.5);
           

        }
        #name1,#nominee1,#phone1,#password1,#city1,#account1{
            /* border:1px solid; */
            height:30px;
            width:250px;
            font-family: 'Rethink Sans', sans-serif;
            font-size:15px;
            margin-right:9px;
            text-align:center;
            padding-top:6px;
            border-radius:3px;
            background-color:rgba(255, 75, 255, 0.8);
            
        }
        

    </style>
</head>

<body>
    <div class="menubar">
        <ul>
            <li class="home"><a href="Home.php" >Home</a></li>
            <li class='create'><a href="create.php">Create</a></li>
            <li><a href="Deposite.php">Deposite</a></li>
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




<?php

// print_r($_POST);

// if(isset($_POST['fname'])){
    
//     $name=$_POST['fname'];
//     $nominee=$_POST['fnominee'];
//     $phone=$_POST['fphone'];
//     $gender=$_POST['gender'];
//     $password=$_POST['fpassword'];
//     $city=$_POST['city'];



//     $today = date("d-m-Y");
//     echo $today;

//     print_r($_POST["fname"]);
     
//     $insert="INSERT INTO `miniproject_database`.`$table_name` (`name`, `nominee`, `phone`, `gender`, `password`, `city`, `date`) VALUES ('$name', '$nominee', '$phone', '$gender', '$password', '$city', '$today');";
//      mysqli_query($conn,$insert);
// }




// echo count($_POST);
// for account number
if(count($_POST)==6){
$pointer=fopen('Account_no.txt','r');
$read=fread($pointer,filesize('Account_no.txt'));
fclose($pointer);
// echo var_dump(strpos($read,"9911921656"));



$start=0;
$x = '1234567890';
$account_no = '';
$present='yes';
while($present=='yes'){
while (strlen($account_no) != 12) {
    $rand = mt_rand(0, 9);
    if($start==0){
        if($rand==9){
            $rand=8;
        }
        else{
            $rand=$rand;
        }
        $start+=1;
    }
    else{
        $rand=$rand;
    }
    // Generates a random number between 0 and 9.
    $account_no .= $x[$rand]; // Appends a random digit from 'x' to the account number.
    // echo $account_no;
}


if(strpos($read,"$account_no")!==false){
    $present='yes';
}
else{
    $present='no';
}
// echo '<br>';



}

if($present=='no'){
    $f=fopen('Account_no.txt','a');
    fwrite($f,"$account_no \n");
    fclose($f);

// $_POST=Array();
// print_r($_POST);

}
$na=$_POST['fname'];
$account=$account_no;
$f=fopen('table.txt','a');
// echo $na.'_'.$account;
$table_name=$na.' _ '.$account;
fwrite($f,$na.' _ '.$account."\n");
fclose($f);



// account number ending

$today = date("d-m-Y h:i:s:a");
// echo $today;


// table name

$servername='localhost:3307';
$username='root';
$password='';
$conn=mysqli_connect($servername,$username,$password);

if(!$conn){
    die('soory we fail to connect'.mysqli_connect_error());
}
else{
    // echo 'connection scessfull';
}


mysqli_query($conn,"CREATE TABLE `miniproject_database`.`$table_name` (`Balance` INT(40), `name` VARCHAR(20) NOT NULL , `nominee` VARCHAR(20) NOT NULL , `phone` VARCHAR(20) NOT NULL , `gender` VARCHAR(20) NOT NULL , `password` VARCHAR(20) NOT NULL , `city` VARCHAR(20) NOT NULL , `date` VARCHAR(200) NOT NULL, `account_no` VARCHAR(20) NOT NULL )
");


// INSERT INTO `student1`(`name`, `nominee`, `phone`, `gender`, `password`, `city`, `date`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')



}

// print_r($_POST);

if(isset($_POST['fname'])){
    

    $name=$_POST['fname'];
    $nominee=$_POST['fnominee'];
    $phone=$_POST['fphone'];
    $gender=$_POST['gender'];
    $password=$_POST['fpassword'];
    $city=$_POST['city'];

    
    $today = date("d-m-Y");
    // echo $today;
    
    // print_r($_POST["fname"]);
    
    $insert="INSERT INTO `miniproject_database`.`$table_name` (`Balance`,`name`, `nominee`, `phone`, `gender`, `password`, `city`, `date`,`account_no`) VALUES ('0','$name', '$nominee', '$phone', '$gender', '$password', '$city', '$today','$account_no');";
     mysqli_query($conn,$insert);
    
    $sub='green';
    // echo $sub;
    

    
    }
    
    ?>


    <h1 id="heading"></h1>
    <div class="green_box"><div id="green">Submission   Successfull</div></div>
    <form action="" method='post' onsubmit='return valid()' name='myform'>
    <span class="center">
    <pre><div class="text" id="name">Name:-                <input type="text" name="fname" id="m1" required><br><span class="formerror" >     </span></div></pre>
    <br>
    
    <pre><div id="nominee">Nominee:-           <input type="text" name="fnominee" ><br><span class="formerror" required> </span> <br></div></pre>
    <br>
    <pre><div id="phone">Mobile No:-          <input type="number"name="fphone" ><br><span class="formerror" required> </span></div></pre>
    <br>

    <pre><div id='gender'>Gender                  Male    <input type='radio' name='gender'value='male' required>  Female    <input type='radio' name='gender' value='female' required></div></pre> <br>

    <pre><div id="password">Password:-           <input type="password" name="fpassword" required><br>     <span class="formerror" >  <pre>         </pre></span></div></pre>
    <br>


    <pre><div id="city">City                    <select name="city"><option value="Ghaziabad">Ghaziabad</option><option value="Rampur">Rampur</option><option value="Etah">Etah</option><option value="Prayagraj">Prayagraj</option><option value="Agra">Agra</option><option value="Ballia">Ballia</option><option value="Sultanpur">Sultanpur</option><option value="Varanasi">Varanasi</option><option value="Deoria">Deoria</option><option value="Mathura">Mathura</option><option value="Noida">Noida</option><option value="Gorakhpur">Gorakhpur</option><option value="Meerut">Meerut</option><option value="Shamli">Shamli</option><option value="Muzaffarnagar">Muzaffarnagar</option></select></div></pre>


    

    <button class='button' onclick="fun()" >Create</button></span>

    </form>

    <div id="display">
        <div id="name1">Name</div>
        <div id="nominee1">Nominee</div>
        <div id="phone1">Phone</div>
        <div id="account1">Account_No</div>
        <div id="password1">Password</div>
        <div id="city1">City</div>
    </div>

    <script>
        


        if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }
        
        
        

        count=0;
        greeting='Create Account'
        greeting_length=greeting.length
        real_greet=''
        b=setInterval(() => {
            if(count<greeting_length){
                real_greet+=greeting[count]
                document.getElementById('heading').innerHTML=real_greet;
                count+=1;
            }
            if(count==greeting_length){
                clearInterval(b);
            }

        }, 83);

        
        
        no_of_submit=0;

        function fun(){
          no_of_submit+=1;
 
            document.getElementById('ht').innerHTML=no_of_submit;
        }

        
        // for to generate the random account number
        x='1234567890'
        console.log(Math.floor(Math.random()*10))
        account_no='';
        a=0;
        while (account_no.length!=12){
            rand=Math.floor(Math.random()*10)
            if (a==0){
                if(x[rand]=='0'){
                    account_no+=x[rand-1]
                }
                else{
                    account_no+=x[rand]
                }
                a+=1
            }
            else{
                account_no+=x[rand]
            }
            
        }
        console.log(account_no);
        
        
        


        // form validation
        function seterror(index,error){
            document.getElementsByClassName('formerror')[index].innerHTML=error;
        }
        function valid(){
           returnval=true
           name=document.forms['myform']['fname'].value;
           nominee=document.forms['myform']['fnominee'].value;
           phone=document.forms['myform']['fphone'].value;
           password=document.forms['myform']['fpassword'].value;


        // for password checking
        a=0;
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

        // for to generate the random account number
        // x='1234567890'
        // console.log(Math.floor(Math.random()*10))
        // account_no='';
        // a=0;
        // while (account_no.length!=12){
        //     rand=Math.floor(Math.random()*10)
        //     if (a==0){
        //         if(x[rand]=='0'){
        //             account_no+=x[rand-1]
        //         }
        //         else{
        //             account_no+=x[rand]
        //         }
        //         a+=1
        //     }
        //     else{
        //         account_no+=x[rand]
        //     }

        //     }
        //     console.log(account_no);

        if(no_of_submit%2!=0){


           if(name.length<4) {
            seterror(0,'Name Must Have Four Character')
            returnval=false
           }


           if(nominee.length<4){
            seterror(1,"Nominee's Name Must Have Four Character")
            returnval=false
           }



           if(phone.length!=10){
            seterror(2,'Mobile_NO. Must Of Ten Digits')
            returnval=false
           }


           if(password.length<8 || answer=='no'){
            seterror(3,'Password must contain 8 character with some special character');
            returnval=false
        }

        }



        else{
            operator=0
            if(name.length>=4) {
                seterror(0,'')
                operator+=1
                
            }
            
            if(nominee.length>=4){
            seterror(1,'')
            operator+=1
        }
        
        if(phone.length==10){
            seterror(2,'')
            operator+=1
        }
        
        if(password.length>=8 || answer=='yes'){
            seterror(3,'');
            operator+=1
        }
        
           if(operator!=4){
            returnval=false
        }

    }
           
        return returnval;
           

        }


    </script>






</body>

</html>


<script>
    document.getElementById('<?php echo $sub; ?>').style.display='block';
    document.getElementById('name1').innerHTML='Name - <?php echo $name;?>';
    document.getElementById('nominee1').innerHTML='Nominee - <?php echo $nominee;?>';
    document.getElementById('phone1').innerHTML='Phone - <?php echo $phone;?>';
    document.getElementById('account1').innerHTML='Account_No - <?php echo $account_no;?>';
    document.getElementById('password1').innerHTML='Password - <?php echo $password;?>';
    document.getElementById('city1').innerHTML='City - <?php echo $city;?>';
</script>