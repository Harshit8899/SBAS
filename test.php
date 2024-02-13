<!-- <style>
    #heading{
        border:1px solid;
        width:100px;
        height:100px;
    }
</style>




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


// $pointer=fopen('Account_no.txt','r');
// $f=fread($pointer,filesize('Account_no.txt'));
// echo $f;
// echo '<br>';
// $ar=explode(' ',$f);
// print_r($ar);
// echo '<br>';
// print_r($_POST);
// echo '<br>';



// $b=0;
// if(isset($_POST['Account_no'])){
    
//     $account=$_POST['Account_no'];
//     for($i=0;$i<sizeof($ar);$i++){
//         if($account==$ar[$i]){
//             $b+=1;
//             break;
//         }
//     }
 
//     $table='';
//     $present='';
//     if($b>=1){
//         $pointer2=fopen('table.txt','r');
//         while($a=fgets($pointer2)){
//             if(strpos($a,"$account")!==false){
//                 $table=$a;
//                 break;
//             }

            
            
//         }

//                 echo '<br>';
//         echo $table;
//         echo '<br>';
//         echo 'length of table name ';
//         echo strlen($table);
        
        
//         // for to remove the last character of table 
//         $table_demo=$table;
//         $real_table='';
//         $table_array=str_split($table_demo);
//         for($i=0;$i<sizeof($table_array)-1;$i++){
        
//             $real_table.=$table_array[$i];
        
            
//         }
        
//         echo $real_table;
//         echo '<br>';
//         // echo strlen($real_table);
//         // echo '<br>';

//         echo '<br>';
//                 $servername="localhost:3307";
//         $username="root";
//         $password="";
//         $database="miniproject_database";
        
//         $conn=mysqli_connect($servername,$username,$password,$database);
//         if(!$conn){
//             die('soory'.mysqli_connect_error());
//         }
//         else{
//             echo 'connection Success full';
//         }
        
//         $query="SELECT * FROM `$real_table`";
//         $result=mysqli_query($conn,$query);
//         echo '<br>';

//         // for to know the the number of rows in table 
//         echo 'this is the number of table rows ';
//         $no_of_rows=mysqli_num_rows($result);
//         echo '<br>';
        
//         $amount_array=[];
//         // for to get the data from database 
//         for($i=0;$i<$no_of_rows;$i++){
//         $data=mysqli_fetch_assoc($result);
//         array_push($amount_array,(int)$data['Balance']);
//         print_r($data);
//         echo '<br>';
//         }




        
//         echo '<br>';
//         echo $data['name'];
//         echo '<br>';
//         echo $data['Balance'];
//         echo '<br>';
//         echo $data['phone'];
//         echo '<br>';
//         echo $data['gender'];
//         echo '<br>';    
//         echo $data['password'];
        
        
//         // echo $data[`name`];
//         print_r($amount_array);
        

//         // INSERT INTO `aman _ 519580013457` (`Balance`, `name`, `nominee`, `phone`, `gender`, `password`, `city`, `date`) VALUES ('23', '', '', '', '', '', '', '');
         

//         // for to set the indian time zone
//         date_default_timezone_set('Asia/Kolkata');
//         $today = date("d-m-Y h:i:s:a");
//         echo $today;





//         $money=(int)$_POST['Amount']+$amount_array[sizeof($amount_array)-1];
//         echo '<br>';
//         echo $money;
//         echo '<br>';
//         $query1="INSERT INTO `$real_table` (`Balance`, `name`, `nominee`, `phone`, `gender`, `password`, `city`, `date`) VALUES ('$money', '', '', '', '', '', '', '$today')";
//         mysqli_query($conn,$query1);
//         echo 'kam ho giya ';

        
        

//     }
//     else{
//         $present='Account_error';
//     }

//     // echo $account;
//     // echo $present;
//     // echo '<br>';
//     // echo $table;
//     // echo '<br>';

// }





// echo '<br>';
// echo $b;




?>

<form action="" name='transition_form' method='post' onsubmit='return valid()'>
<div id="account_no">
    Account No. <input type="number" name='Account_no'>
    <br>
    <span id='Account_error'>*</span>
</div>
<br>

<div id="amount">
    Amount <input type="number" type='number' name='Amount'>
    <br>
    <span id='Amount_error'>*</span>
</div>

<input type="submit">
<h3 id='heading'></h3>

</form>
<script>
    
    if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }
        
    function valid(){
        value=true;
        ac=document.forms['transition_form']['Account_no'].value;

        amo=document.forms['transition_form']['Amount'].value;
        num=parseInt(amo);
        

        if(ac.length!=12 || ac.length==0){
            document.getElementById('Account_error').innerHTML='Invalid Account Number';
            value=false;
        }

        if(num<=0){
            document.getElementById('Amount_error').innerHTML='Amount zero will not creadit';
            value=false;
        }

        // document.getElementById('heading').innerHTML='majak';
        

        return value;

        }

</script>
<script>
    document.getElementById('<?php // echo $present;?>').innerHTML='Invalid Account_no';
    document.getElementById('heading').innerHTML='Refresh the page and please Enter the valid account number';
</script> -->

<?php 

$p=fopen('Account_no','a');
fwrite($p,"\n");
fclose($p);


?>