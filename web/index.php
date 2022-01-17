<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title>BookShelter</title>
</head>
    
<body class="body_st">
        <header>
            <nav class="navigation">
                <ul class="navigation-list">
                    <a href="lk.html"><li class="navi-item"><p><?=$_COOKIE['user']?></p></li>
 
                    <li class="navi-item" style="position: absolute; height: 100%; top: -10%;"><img class="find-lk" src="Image/circ.svg" style="height: 90%;"><img class ="find-lk" src="Image/man.svg"></li></a>
                    <a href="find.html"><li class="navi-item"><img class="find-img" src="Image/books.svg" style="margin-left: -90px;"></li>
                    <li class="navi-item"><p style="position: absolute; right: 15%; top: 10%; margin-left: 100px; text-decoration: underline;">Поиск</p></li></a>
                </ul>
            </nav>
        </header>
        <main>
            <div class="headers-margin">
                <h1>Библиотека без библиотекаря</h1>
                <h2>Просто выбери книгу и мы откроем тебе к ней доступ</h2>
            </div>
            
            <a href="#log-window">
                <div class="rectangle1"><p style="font-family: Main-font;">Логин</p></div>
            </a>
            
            <a href="#reg-window">
                <div class="rectangle"><p style="font-family: Main-font;">Регистрация</p></div>
            </a>
            
            <div class="under-line-main-text"></div>
        </main>
    
                <div class="reg-window" id="reg-window">
                    <a href="#" class="close"></a>
                    <div id="okno">
                
                        <p class="reg-header">Регистрация</p>
                        <p>Ваше ФИО</p>
                        <form action="/check.php" method="post">
                            <input type="text" placeholder="Введите ваше ФИО" name="login">
                            <p>Институт</p>
                            <input type="text" placeholder="Введите ваш институт" name="inst_name">
                            <p>Пароль</p>
                            <input type="password" placeholder="Введите ваш пароль" name="password">
                            
                            <input type="submit" value="Отправить" class="submit-button">
                        </form>                                        
                    </div>
                </div>
    
                <div class="log-window" id="log-window">
                    <a href="#" class="close"></a>
                    <div id="okno">
                        <p class="log-header">Логин</p>
                        <p>Ваше ФИО</p>
                        <form action="/auth.php" method="post">
                            <input type="text" placeholder="Введите ваше ФИО" name="login">
                            <p>Институт</p>
                            <input type="text" placeholder="Введите ваш институт" name="inst_name">
                            <p>Пароль</p>
                            <input type="password" placeholder="Введите ваш парооль" name="password">
                            
                            <input type="submit" value="Отправить" class="submit-button">
                        </form>
                    </div>
                </div>
                
                 
    
        <footer>

        </footer>
</body>
    
</html>