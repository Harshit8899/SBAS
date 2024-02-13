
<?php
// any variable comes from database side like table_name , database_name table_column_name,Table_row_name or the name which is to be defined as a column name or table name or database_name is to be written in the lits(``); 
// values that is to be inserted in the table is written in the single quotes;
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
    <title>Document</title>
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
            background-color:rgba(10, 0, 4, 0.01);
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
        li.home{
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
            border: 1px solid;
        }

        .text_container {
            /* border: 1px solid; */
            height: 400px;
            margin-top: 20px;
            /* min-width: 1200px; */
            display:flex;
            justify-content: center;
            flex-wrap: nowrap;

        }
        

        .intro{
            /* border: 1px solid; */
            margin-top:30px;
            display:flex;
            justify-content:center;
            /* box-shadow:10px 10px 10px 10px; */
            /* background-color:white; */
        }
        
        .innerintro{
            box-shadow:3px 3px 20px 1px rgba(164, 0, 255, 0.8);

            /* color:rgba(245, 40, 145, 0); */
            color:rgba(145, 0, 255, 0.8);
            border-top: 1px solid black;
            font-family: 'Rethink Sans', sans-serif;
            text-align:center;
            width:800px;
            border-radius:20px;
            font-size:17px;
            background-color:white;
            padding:10px;
            /* height:100px; */
        }

        .lock {
            background-image: url('<?php echo $lock; ?>');
            background-size: 100% 100%;
            height: 140px;
            width: 120px;
            /* border: 1px solid; */
            float: left;
            /* margin-left: 10px; */
            position: relative;
            left: 80px;
            animation-name: updown;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-duration: 1s;
            position: relative;
            animation-direction: alternate-reverse;
        }


        .welcome {
            font-family: 'Poppins', sans-serif;
            float: left;
            /* border: 1px solid; */
            font-size: 62px;
            margin-top: 70px;
            width: 600px;
            height: 230px;
            color: blue;
            text-align: center;
            line-height: 74px;

        }

        .men {
            background-image: url('<?php echo $men; ?>');
            background-size: 100% 100%;
            height: 320px;
            width: 200px;
            float: left;
            margin-top: 50px;
            /* border: 1px solid; */

        }

        @keyframes updown {
            from {
                top: 0px;
            }

            to {
                top: 30px;
            }
        }

        .button {
            color: black;
            /* border: 1px solid; */
            border-radius: 22px;
            font-size: 33px;
            padding: 0px 10px;
            background-color: rgb(242, 19, 19);

            width: 170px;
            margin-left: 34%;
            margin-top: 2%;


        }

        .flexcon{
            /* border: 1px solid; */
            height:380px;
            width: 1050px;
            margin-left: -50px;
            /* word-wrap: break-word; */
            min-width: 1050px;
        }
        .sidebar{
            /* border: 1px solid; */
            height: 90px;
            width: 290px;
            position: absolute;
            font-size:16px;
            font-family: 'Poppins', sans-serif;
            background-color:rgba(216, 0, 255, 0.3);
            color: black;
            top: 520px;
            right: -400px;
            padding: 10px;
            border-radius: 20px;
            animation-name:slide;
            animation-duration: 2s;
            animation-timing-function:cubic-bezier();
            animation-iteration-count: 1;
            animation-fill-mode:forwards;
            animation-delay: 3s;

        }
        @keyframes slide{
            from{
                right: -300px;
            }
            to{
                right: 20px;
            }
        }
        .security,.privacy,.access_control,.vulnerability{
            font-size: 17px;
            font-family: 'Poppins', sans-serif;
            /* border: 1px solid; */
            /* height: 20px; */
            width: 193px;
            border-radius: 9px;
            padding: 0px 10px;
            text-align: center;
            position: relative;
            top: -274px;
            /* left: -200px; */
            animation-timing-function: cubic-bezier();
            animation-iteration-count: 1;
            animation-name: anima1;
            animation-fill-mode: forwards;
            margin: 7px;
            color: black;
            background-color:rgba(216, 0, 255, 0.3);
            



            
        }
        .security{
            animation-duration: 2s;

        }
        .privacy{
            animation-duration: 2.2s;
        }
        .access_control{
            animation-duration: 2.6s;
        }
        .vulnerability{
            animation-duration: 2.8s;
        }
        @keyframes anima1{
            from{
             left: -200px;
            }
            to{
                left: 70px;
            }
        }
        .circle{
            height:200px;
            width:200px;
            /* border:1px solid; */
            border-radius:50%;
            position:absolute;
            top:20px;
            right:20px;
            background-color:rgba(242, 34, 209, 0.74);
            /* position:fixed; */
            /* top:20px; */
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
            <li><a href="Update.php">Update</a></li>
            <li><a href="delete.php">Delete</a></li>
        </ul>
    </div>
    <div class="logo">
        <div class="globe1"></div>
        <div class="doller"></div>
        <div class="globe2"></div>
    </div>
    <div class="circle"></div>
    <div class="intro"><div class="innerintro">Secured Bank Account System! Ensuring your financial safety is our top priority.<br> Explore our advanced features, robust encryption, and user-friendly interface designed to provide <br>you with a secure and  seamless banking experience.<br> Your trust is our commitment.</div></div>
    <div class="text_container">

        <div class="flexcon">
            <div class="lock"></div>
            <div class="men"></div>
            <div class="welcome">Secured Bank <br>Account System <br>
                <div class="button" onclick="fun1()">Create</div>
            </div>
        </div>

    </div>
    <div class="sidebar">
        Welcome to Secured 
        Bank<br> Account System. <br>
        Let's  begin your First
        Transaction
    </div>
    <div class='move1'>.
    <div class="security">Security</div>
    <div class="privacy">Privacy</div>
    <div class="access_control">Access Control</div>
    <div class="vulnerability">Vulnerability</div></div>
    <script>
    function fun1(){
        location.href='create.php';
    }
    
</script>
</body>

</html>