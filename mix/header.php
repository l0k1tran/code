<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
    <?php
            $servername = "localhost";
            $database ="wordpress";
            $username= "root";
            $password="";
            $connect = mysqli_connect($servername, $username, $password, $database);
            mysqli_set_charset($connect,"UTF8");
            if(!$connect)
            {
                die ("connection failed". mysqli_connect_error());
            }
            if(isset($_POST['book_tickets'])){
                $ticket_group = $_POST['ticket_group'];
                $ticket = $_POST['ticket'];
                $date = $_POST['date'];
                $full_name = $_POST['full_name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                
                $sql_client = "INSERT INTO wp_clients (KH_LOAIVE, KH_SLVE, KH_DATE, KH_FULLNAME, KH_PHONE, KH_EMAIL) VALUES ('$ticket_group','$ticket','$date','$full_name','$phone','$email')";
                mysqli_query($connect, $sql_client);
            }
?>
</head>

<body <?php body_class(); ?>>
    <div class="wrapper">
        <div class="wrapper-header relative z-20">
            <header class="relative z-10">
                <div class=" absolute left-0 lg:left-[201px] top-[1px] ">
                    <img src="/altamedia/wp-content/uploads/2021/11/Little-Little-Logo-ngang-1.png" alt="logo">
                </div>

                <div>
                    <!-- <?php tittle_menu('primary-menu'); ?> -->
                    <ul
                        class="absolute z-20 top-7 w-full text-right sm:block lg:flex md:block justify-center item-center right-0 ">
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Sự kiện</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <li><a href="#">0123456789</a></li>
                    </ul>
                </div>
            </header>
        </div>

        <div class=" object-cover absolute  left-1 top-20 lg:left-9 z-0">
            <img src="/altamedia/wp-content/uploads/2021/11/bg.png" alt="">
        </div>