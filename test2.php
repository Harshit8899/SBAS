<?php 
$servername='localhost:3307';
$password='';
$username='root';
$database='miniproject_database';
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die('soory'.mysqli_connect_error());
}
else{
    echo 'connection success full';
}
$query="SELECT * FROM `kushi _ 262494853195`";
$result=mysqli_query($conn,$query);
$no_of_rows=mysqli_num_rows($result);
echo $no_of_rows;

if($no_of_rows==0 || $no_of_rows==1){
  echo "<h3>Number of transition in the account is zero</h3>";
}

else{

$result2=mysqli_fetch_assoc($result);

echo '<br>';






// arrays for different fields
$date_array=[];
$time_array=[];
$amount_array=[];
while($result2=mysqli_fetch_assoc($result)){
    $real_date='';
    $date=str_split($result2['date']);
    print_r($date);
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

    echo $result2['Balance']."  ";
    echo "<br>";
    array_push($amount_array,$result2['Balance']);
}
print_r($amount_array);
echo '<br>';

$amount_re_array=[];
array_push($amount_re_array,$amount_array[0]);
// print_r($amount_re_array);

echo "<br>";

$credel=[];
array_push($credel,'Credited');
// print_r($credel);

for($i=1;$i<$no_of_rows-1;$i++){
    if($amount_array[$i]<$amount_array[$i-1]){
        
        array_push($credel,'Debited');
        array_push($amount_re_array,$amount_array[$i-1]-$amount_array[$i]);
        
    }
    else{
        array_push($credel,'Credited');
        array_push($amount_re_array,$amount_array[$i]-$amount_array[$i-1]);

    }

}
echo '<br>';
print_r($amount_re_array);
echo '<br>';
print_r($credel);
echo '<br>';
print_r($date_array);
echo '<br>';
print_r($time_array)







// echo $result2['Balance']."      ".$result2['name']."     ".$result2['nominee']."     ".$result2['phone']."       ".$result2['gender']."     ".$result2['password']."     ".$result2['date'];


?>

<body>
<table border='1'>
    <tr>
    <th>Amount</th>
    <th>Transaction-T</th>
    <th>DOT</th>
    <th>TOT</th>
    </tr> 
     <?php
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
    


}
?>
</table>
</body> 