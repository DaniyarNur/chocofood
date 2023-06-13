<?php 
	session_start(); 
    include_once 'controllers/Comment.php';
    $com = new Comment();
	require("../includes/connections.php"); 
	if(isset($_GET['page'])){ 
		 
		$pages=array("restaurants", "cart"); 
		 
		if(in_array($_GET['page'], $pages)) { 
			 
			$_page=$_GET['page']; 
			 
		}else{ 
			 
			$_page="restaurants"; 
			 
		} 
		 
	}else{ 
		 
		$_page="restaurants"; 
		 
	} 
 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню - Chocofood.kz</title>
    <style>
        .box{border: 1px solid #999;margin: 30px auto 0;padding: 20px;width: 600px;height: 400px;overflow: scroll;}
        .box ul{margin: 0;padding: 0;list-style: none;}
        .box li{display: block;border-bottom: 1px dashed #ddd;margin-bottom: 5px;padding-bottom: 5px;}
        .box li:last-child{border-bottom: 0 dashed #ddd;}
        .box span{color: #888;}
        .comment_textt{
            font-size: 16px;
        }
        .comment_time{
            font-size: 14px;
            text-align: right;
        }
/*        table {
          border-collapse: separate;
          border-spacing: 0 15px;
        }*/

        th {
          background-color: #4287f5;
          color: white;
        }

        th,
        td {
          width: 200px;
/*          border: 1px solid black;*/
          padding: 5px;
          vertical-align:top;
        }
        .comment_td {
            width: 500px;
        }
        .comment_form {
            padding: 0px;
        }
        .bonuses {
            color: white;
            padding: 0px;
            margin: 0px;
        }
        .percent {
            font-weight: 300;
        }
        .top-bar-right {
            margin-left: 360px;
            color: white;
            font-size: 12px;
            font-weight: 600;
        }
    </style>
    <link rel="stylesheet" href="../css/menu.css">
</head>
<body>
    <div class="before-top-bar">
        <div class="left-bar">
            <div class="left-bar-card">
                <p>Скидки до 90%<br>
                <span class="project-name">Chocolife.me</span></p>
            </div>
            <div class="left-bar-card">
                <p>Авиабилеты<br>
                <span class="project-name">Chocotravel</span></p>
            </div>
            <div class="left-bar-card">
                <p>Оптика<br>
                <span class="project-name">Lensmark</span></p>
            </div>
            <div class="left-bar-card">
                <p>Поиск врачей<br>
                <span class="project-name">Doctor.kz</span></p>
            </div>
            <div class="left-bar-card">
                <p>Оплата c кэшбеком<br>
                <span class="project-name">PAXMET</span></p>
            </div>
        </div>

        <div class="right-bar">
            <p>Как заказывать еду?</p>
            <button>FAQ</button>
        </div>
    </div>
    

    <div class="top-bar">
        <div class="top-bar-left">
            <div class="top-bar-left-menu">
                <img src="../images/hamburger.png">
            </div>
            <div class="top-bar-left-location">
                <img src="../images/location.png">
            </div>
            <button>АЛМАТЫ</button>
            <button>1-й микрорайон, 35</button>
        </div>
        <div class="top-bar-center">
            <img src="../images/logo.png">
        </div>
        <div class="top-bar-right">
            <p class="bonuses">Ваши бонусы: 0 бонусов<p>
            <p class="bonuses percent">С каждого заказа 5%</p>
        </div>
    </div>


    <div class="main">


        <div class="main-search">
            <form>
                <div class="main-search-input">
                    <img src="../images/search.png">
                    <input type="text" name="search" placeholder="Название заведения или блюда">
                </div>
                <button type="submit" name="submit" value="Submit">НАЙТИ</button>
            </form>

            <div class="main-search-top-requests">
                <p>Популярные запросы:<br>
                    <span><a href="suchi.html">Суши</a></span>
                    <span><a href="#">Грузинская кухня</a></span>
                    <span><a href="#">Бургер</a></span>
                </p>

            </div>
        </div>


        
        <div class="main-content">
            <div class="main-content-menu">
                <div class="main-content-menu-img">
                    <img src="https://sc01.chocofood.kz/hermes/restaurant/dfe433b1-637e-4af0-8968-2f1286631e31">
                    <div class="main-content-menu-img-otherinfo">
                        <p class="name-of-restaurant">Чибо Сано</p>
                        <div class="main-content-menu-img-otherinfo-items">
                        <button onclick="openCity(event, 'menu')" class="tablinks">
                            МЕНЮ 
                        </button>
                        <button type="button" onclick="openCity(event, 'dostavka')" class="tablinks">
                            ДОСТАВКА
                        </button>
                        <button onclick="openCity(event, 'review')" class="tablinks">
                            ОТЗЫВЫ
                        </button>
                        </div>
                        <!-- РАЗДЕЛ ОТЗЫВОВ -->
                        <div id="review" class="tabcontent">
                            <div class="review-content">
                               <center>
                                <?php 
                                    if (isset($_GET['msg'])) {
                                        $msg = $_GET['msg'];
                                        if($msg === 'Такого заказа не существует') {
                                            echo "<span style='color:red;font-size:18px'>".$msg."</span>";
                                        } else {
                                            echo "<span style='color:green;font-size:20px'>".$msg."</span>";
                                        }
                                    }
                                 ?>
                            
                            <div style="width: 100%; height: 280px">
                                <form class="comment_form" action="post_comment.php" method="post"><br><br><br>
                                    <table>
                                        <tr>
                                            <td>Номер Вашего заказа:</td>
                                            <td><input style="width: 80px;height: 30px;" type="" name="name" placeholder="#123123"></td>
                                        </tr>
                                        <tr>
                                            <td>Ваш комментарий:</td>
                                            <td class="comment_td">
                                                <textarea name="comment" rows="5" cols="50" placeholder="Текст комментария"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input style="width: 150px;height: 30px;" type="submit" name="submit" value="Опубликовать"></td>
                                            <td></td>
                                        </tr>
                                    </table>
                              </form>
                            </div>
                            </center>
                            <div class="box">
                                <ul>
                                    <?php 
                                        $result = $com->index();
                                        while ($data = $result->fetch_assoc()) {
                                     ?>
                                    <li class="comment_li"><p class="comment_textt"><?php echo $data['comment'] ?></p><p class="comment_time"><?php echo $com->dateFormat($data['comment_time']); ?></p></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            </div>
                        </div>

                        <div id="dostavka" class="tabcontent">
                            <div class="dostavka-content">
                                <p>Стоимость доставки:</p>
                                <p><span>500</span> при заказе от <span>3 000 тг</span></p>
                                <p>Доставка от ресторана:</p>
                                <p>Доставка осуществляется курьерами ресторана.</p>
                            </div>
                        </div>

                        <div id="menu" 
                        class="tabcontent"
                        >
                            <div class="menu-left">
                                <ul><p class="type-of-food">Вид блюда:</p>
                                    <li><a href="#kurochka">Курочка 🐓</a></li>
                                    <li><a href="#rolles">Роллы классические</a></li>
                                    <li><a href="#sets">Сеты</a></li>
                                </ul>
                            </div>

                            <div class="menu-right">
                                <p id="kurochka">Курочка</p>
                                <?php 
                                    if(isset($message)){ 
                                        echo "<h2>$message</h2>"; 
                                    } 
                                ?>
                                <div class="menu-right-row">
                                <?php

                                $sql = "SELECT * FROM products WHERE type = 'kurochka' ";
                                $query = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_array($query)){
                                ?>
                                <div class="menu-right-row-items">
                                    <img src="<?php echo $row['product_image'] ?>">
                                    <p><?php echo $row['name'] ?></p>
                                    <p><?php echo $row['text'] ?></p>
                                    <p><?php echo $row['price'] ?></p>

                                    <button>Добавить к заказу</button>
                                </div>
                                <?php
                                }
                                ?>
                                </div>

                                <p id="rolles">Роллы классические</p>
                                <?php 
                                    if(isset($message)){ 
                                        echo "<h2>$message</h2>"; 
                                    } 
                                ?>
                                <div class="menu-right-row">
                                    <?php

                                    $sql = "SELECT * FROM products WHERE type = 'sushi' ";
                                    $query = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_array($query)){
                                    ?>
                                    <div class="menu-right-row-items">
                                        <img src="<?php echo $row['product_image'] ?>">
                                        <p><?php echo $row['name'] ?></p>
                                        <p><?php echo $row['text'] ?></p>
                                        <p><?php echo $row['price'] ?></p>

                                        <button>Добавить к заказу</button>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>


                                <p id="sets">Сеты</p>
                                <?php 
                                    if(isset($message)){ 
                                        echo "<h2>$message</h2>"; 
                                    } 
                                ?>
                                <div class="menu-right-row">
                                    <?php
                                        $sql = "SELECT * FROM products WHERE type = 'set' ";
                                        $query = mysqli_query($conn, $sql);

                                        while ($row = mysqli_fetch_array($query)){
                                        ?>
                                        <div class="menu-right-row-items">
                                            <img src="<?php echo $row['product_image'] ?>">
                                            <p><?php echo $row['name'] ?></p>
                                            <p><?php echo $row['text'] ?></p>
                                            <p><?php echo $row['price'] ?></p>

                                            <a href="../htmI/menu.php#sets"><button>Добавить к заказу</button></a>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                </div>
                                

                            </div>
                            
                            
                        </div>
                        
                        
                    </div>
                    
                    </div>
                    


            </div>

            <div class="main-content-korzina">
                <div class="main-content-korzina-header">
                    <span>Корзина:</span>
                    <button>Очистить корзину</button>
                </div>
        
                <div class="main-content-korzina-items">
                    <p>
                        Корзина пуста
                    </p>
                </div>

                <div class="main-content-korzina-items">
                    <div class="main-content-korzina-items-delivery">
                        <span>
                            Доставка
                        </span>
                        <span>
                            0 тг
                        </span>
                    </div>
                </div>

                <div class="main-content-korzina-summa">
                    <span>
                        Сумма:
                    </span>
                    <span>
                        0 тг
                    </span>
                </div>
                <button id="order">
                    ОФОРМИТЬ ЗАКАЗ
                </button>
            </div>

    </div>

    <script>
        function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
        }
    </script>

</body>
</html>