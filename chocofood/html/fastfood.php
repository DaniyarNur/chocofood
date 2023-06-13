<?php 
	session_start(); 
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
    <title>Быстрый заказ еды из ресторана - Chocofood.kz</title>
    <link rel="stylesheet" href="../css/fastfood.css">
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
            <button>Вход</button>
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
                    <span><a href="#">Суши</a></span>
                    <span><a href="#">Грузинская кухня</a></span>
                    <span><a href="#">Бургер</a></span>
                </p>

            </div>
        </div>


        <div class="food-click">
            <div class="food-click-food">
                <img src="https://sc01.chocofood.kz/hermes/category/21eeaa73-d5c9-45a5-97e1-7be3b2e1a553">
                <p><a href="sushi.php">Суши</a></p>
            </div>

            <div class="food-click-food">
                <img src="https://sc01.chocofood.kz/hermes/category/81cbacf5-2da8-4141-a97d-afe161a2d9f2">
                <p class="highlight">Фастфуд</p>
            </div>
            <div class="food-click-food">
                <img src="https://sc01.chocofood.kz/hermes/category/adafe68a-5775-4ae1-820c-ad241cbc936f">
                <p><a href="kurochka.php">Курочка</a></p>
            </div>
            <div class="food-click-food">
                <img src="https://sc01.chocofood.kz/hermes/category/b4e5fb99-7b43-4dc5-8f9e-8ecabd83282f">
                <p>Донер</p>
            </div>
            <div class="food-click-food">
                <img src="https://sc01.chocofood.kz/hermes/category/c69a13d2-cd30-4761-972c-b80c5814d9d2">
                <p>Бургеры</p>
            </div>
            <div class="food-click-food">
                <img src="https://sc01.chocofood.kz/hermes/category/0ea44eb2-5e1f-47d1-8089-9187f2e0f129">
                <p>Пицца</p>
            </div>
            <div class="food-click-food">
                <img src="https://sc01.chocofood.kz/hermes/category/004243c0-e06a-4aa5-be77-5a4712fb0136">
                <p>Ночь</p>
            </div>
            <div class="food-click-food">
                <img src="https://sc01.chocofood.kz/hermes/category/614db3df-ebad-48a3-b99c-e669aed9137a">
                <p>Лучшая цена</p>
            </div>
            <div class="food-click-food">
                <img src="https://sc01.chocofood.kz/hermes/category/763e6d6a-120c-4aa3-9616-cbe57586f2e5">
                <p>Восточная</p>
            </div>
            <div class="food-click-food">
                <img src="https://sc01.chocofood.kz/hermes/category/3685cd8d-d0e7-44bf-9ff3-38c89e244bb0">
                <p>Европейская</p>
            </div>
        </div>

        <div class="restaurants_list">
        <?php

            $sql = "SELECT * FROM restaurants WHERE type = 'fastfood' ";
            $query = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($query)){
            ?>


                <div class="restaurants_list_item">
                    <img src="<?php echo $row['restaurants_image'] ?>">
                    <div class="raiting">
                        <img src="../images/star.png">
                        <span><?php echo $row['rating']?></span>
                    </div>
                    <div class="delivery_time">
                        <span><?php echo $row['delivery_time']?></span>
                    </div>
                    <div class="restaurants_list_item-other-info">
                        <div class="logo">
                            <a class="name"><?php echo $row['restaurants_name']?></a>
                            <div class="delivery_price">
                                <svg   xmlns="http://www.w3.org/2000/svg"><g data-v-26fecbb0="" fill="#85888b" fill-rule="evenodd"><path data-v-26fecbb0="" d="M4.505 16.144c-.896 0-1.622-.714-1.622-1.595 0-.88.726-1.595 1.622-1.595.896 0 1.622.714 1.622 1.595s-.726 1.595-1.622 1.595m.006-4.092c-1.4 0-2.533 1.116-2.533 2.492 0 1.375 1.134 2.49 2.533 2.49s2.533-1.115 2.533-2.49c0-1.376-1.134-2.492-2.533-2.492"></path> <path data-v-26fecbb0="" d="M22.033 16.066c-.977 0-1.77-.777-1.77-1.735 0-.959.793-1.736 1.77-1.736s1.769.777 1.769 1.736c0 .958-.792 1.735-1.77 1.735m1.322-4.11l.112-.017 1.036.09-1.072-.998c-.363-.339-1.544-1.14-1.544-1.14S19.798 6.88 19.38 6.38c-.417-.499-.254-.695-.327-1.033-.072-.339-.526-.838-.89-1.283-.363-.446-.58-.374-1.07-.463-.491-.09-.346-.838-.346-.838s.164-.338.236-.82c.073-.48-.09-.765-.236-.98-.145-.213-.29-.106-.436 0-.145.108-.236.375-.254.98-.018.606.508.891.545 1.034.036.143-.037.588-.037.588l1.708 6.556-1.653 4.472-3.832-.196s-1.29-3.332-1.435-3.777c-.145-.445.037-.73.2-1.265.164-.534.309-.445.545-.962.236-.517-.2-1.051-.2-1.051s-1.453-.018-2.16.053c-.71.072-1.454-.035-2.398-.07-.944-.037-1.18-.197-2.197-.34-1.017-.142-1.471.108-1.471.108L2.4 8.519l.781 1.621-2.47 1.942 3.051-1.71s.927.41 1.272.605c.345.196.635.428 1.162 1.052.527.623 2.36 1.799 2.36 1.799s2.289 1.318 3.524 1.639c1.235.32 3.723.053 4.485 0 .763-.053.781-.25 1.036-.517.254-.267 1.325-1.567 1.689-2.03.2-.255.465-.418.775-.519a2.677 2.677 0 0 0-.817 1.923c0 1.497 1.237 2.71 2.763 2.71 1.526 0 2.763-1.213 2.763-2.71a2.702 2.702 0 0 0-1.42-2.368"></path></g></svg>
                                <span><?php echo $row['delivery_price']?></span>
                            </div>
                        </div>
                    </div>
                </div>


            <?php
            }
            ?>
        </div>

        <div class="main-text">
            <p>Решили попробовать японские деликатесы или заказать обед из ресторана восточной кухни, но не знаете, как это правильно сделать? Используя наш сервис, вы избавите себя от этих проблем. Теперь на одном сайте вам доступны разные заведения Алматы с полным ассортиментом первых и вторых блюд, закусок, салатов, десертов и всего остального.<br>

                Удобный сервис для каждого<br>
                Доставка еды в Алматы доступна вам в любое время суток и в любой день недели, если вы решили использовать простой и эффективный сервис по работе с различными заведениями общественного питания. У вас нет необходимости тратить много времени в поисках нужного блюда. На нашем сайте уже предоставлена необходимая информация. Используя удобную навигацию, вы быстро найдете требуемое. Зайдя в этот раздел, можно ознакомиться с полным ассортиментом ресторана, ценами, специальными предложениями, условиями доставки.<br>
                
                Если вас интересует не конкретное кафе или ресторан, а лишь одно-единственное блюдо, которое должно стать главным украшением праздничного стола? Тогда вы просто набираете его в меню поиска, и вам будут предложены все места, где вы сможете его заказать.<br>
                
                Оформление заказа
                Мы предусмотрели все детали, позволяющие нашим клиентам как можно быстрее получить свой заказ и не потратить при этом ни одного лишнего тенге. Оформить заказ у нас очень легко, а наш оператор позаботится о том, чтобы все ваши пожелания были выполнены с максимальной точностью. При этом, все услуги Chocofood полностью бесплатны. Все, что вы оплачиваете – стоимость блюд и услуги курьера ресторана. В описании указана цена доставки, которая рассчитывается в зависимости от расстояния и суммы минимального заказа.<br>
                
                При оформлении своего заказа вы можете ознакомиться со специальными предложениями, которые доступны вам в выбранном ресторане. Это могут быть:<br>
              
                скидки на некоторые блюда;<br>
                подарки;<br>
                бесплатная доставка;<br>
                возможность рассчитаться бонусами.<br>
                Мы предлагаем отличные условия, чтобы каждый наш клиент остался доволен и обязательно вернулся на Chocofood в следующий раз.</p>
        </div>


    </div>
    
    <footer>
        <div class="footer-logo">
            <img src="../images/logo.png">
            <span>Сервис доставки еды в</span>
        </div>
        <div class="footer-columns">
            <div class="footer-columns-item">
                <ul><p>ПАРТНЕРАМ</p>
                <li>Что предлагаем</li>
                <li>Откуда клиенты</li>
                <li>Как это работает</li>
                <li>Соглашение</li>
                <li>Карта сайта</li>
                </ul>
            </div>

            <div class="footer-columns-item">
                <ul><p>МОБИЛЬНОЕ ПРИЛОЖЕНИЕ</p>
                <li>Apple Store</li>
                <li>Google Play Market</li>
            </ul>
            </div>

            <div class="footer-columns-item">
                <ul><p>ПРИСОЕДИНЯЙТЕСЬ К НАМ!</p>
                <li>Facebook</li>
                <li>Вконтакте</li>
                <li>Instagram</li>
            </ul>
            </div>
        </div>
    </footer>
    </div>
</body>
</html>