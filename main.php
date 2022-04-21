<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <div class="flex-container">

        <div class="header">
                <?php include 'logo.inc.php' ?>
                <?php include 'menu.inc.php' ?>
        </div>   
        
        <div class="about me">

          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php
                    echo '<img src="img/photo.jpg">';
                    ?>
                </div> 
                
                <div class="fullname">
                    <p> <strong>Меня зовут:</strong>
                    <?php echo $name, ' '. '<br>'; ?>
                    </p>
                    <p> <strong>Моя Фамилия:</strong>
                    <?php echo $surname, ' '. '<br>';                    
                          echo '<strong>Я из города:</strong>', ' ', $city; ?>
                    </p>
                    
                    <p> Мне
                    <?php   echo $age;  ?>
                    лет </p>
                    <p> Мы научились кодить </p>
                    <p> Вот создали первую страничку на РНР </p>
                    <p> Изучили всякие штуки и это только начало!!! </p>                        
                </div> 
            </div>   
            
            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                    Я учюсь на инженера по безопасности. 
                    Уверен что принесу много пользы, а пока время учёбы! 
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>