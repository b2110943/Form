<?php

include("database.php");
include("config.php");
include("functions.php");
secure();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger</title>
    <link rel="stylesheet" href="burger.css">
</head>
<body>
    <main class="main">
        <div class="out_f1">
            <div class="out_f2">
                <section class="frame">
                    <form class="div">
                        <img class="img" src="images/burger.jpg" alt="burger">
                        <h1>Create a burger !</h1>
                        <p>What type of protein would you like? <input type="text"></p>
                        <p>How many patties would you like? <input type="text"></p>
                        <p>How do you want your patty cooked</p>
                        <p>Rare <input class="range" type="range" name="points" min="0" max="10"> Well-Done</p>
                        <p>What toppings would you like?</p>
                        <input type="checkbox">Lettuce
                        <input type="checkbox">Tomatto
                        <input type="checkbox">Onion
                        
                        <p>Would you like to add cheese?</p>
                        <input name="gender" type="radio" value="Yes">Yes
                        <input name="gender" type="radio" value="No">No
        
                        <p>What type of bun would you like? 
                            <input list="browsers">
                            <datalist id="browsers">
                                <option value="Vừng đen"></option>
                                <option value="Vừng trắng"></option>
                                <option value="Nguyên cám"></option>
                        </datalist>
                        </p>
                        
                        <p>What type of sauce would you like? <input type="text"></p>
        
                        <p>Anything else you want to add?</p>
                        <textarea name="" id="" cols="30" rows="3"></textarea><br>
                        <p>
                            <a class="btn" href="logout.php">Logout</a>
                        </p>
                        
                        <!-- <div class="register-link">
                            <p>
                                <a href="index.php">Đăng Nhập</a>
                            </p>
                        </div> -->
                    </form>
        
                </section>
            </div>
        </div>
    </main>
</body>
</html>