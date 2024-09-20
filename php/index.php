<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>helloo</h1>
    <a href=".\contact.html">poga</a>
    <hr>
    <h2>vai tev patīk mašinas?</h2>
    <input type="radio">
    <input type="radio">
       <hr>
    <img src="https://media.evo.co.uk/image/private/s--RJJq7MRg--/f_auto,t_content-image-full-desktop@1/v1606300459/evo/2020/11/AudiUK00025118-Audi-RS-Q8.jpg" alt="">
    <br>
    <p>apraksta par mani</p>
    <label for="car"></label>
    <input type="">
    <select name="Jā" id="jeāaa"></select>
    <?php
        $names = [
            1 => ["name" =>"Janis", "email" =>"janis@gmail.com"],
            2 => ["name" =>"Jana", "email" =>"jana@gmail.com"],
            3 => ["name" =>"Jigors", "email" =>"jigors@gmail.com"]
        ];
        echo "<ul>";
        foreach ($names as $name){
            echo "<li>" . $name['name'] . " " . $name['email'] . "</li>";
        }
        echo "</ul>";
    ?>
    <a href="/contact.html">sazinies</a>
</body>
</html>