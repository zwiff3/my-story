<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>save</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Jaro:opsz@6..72&family=Oswald:wght@200..700&family=Parkinsans:wght@300..800&display=swap" rel="stylesheet">

   
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Parkinsans:wght@300..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- this is css for card-->
   <style>

.card{
    float: right;
    margin-top: 10px;
    padding: 5px;
    margin-left: 10px;
}
.card img{
    width: 100%;
    height: 200px;
}
a{
    border: none;
text-decoration: none;
font-size: 20px;
color: blue;
font-family: "Cairo", sans-serif;
font-weight: bold;
font-size: 25px;
}
a:hover{
    background-color: turquoise;
    font-size: xx-large;
    font-family: "Cairo", sans-serif;
    color: black;

}


   </style>
</head>
<body>
<!-- ده عنوان الصفحه -->
<h1 class="p">المنتجات التي اضفتها</h1>

<?php
// ده ملف الاتصال بالسرفر
include ('config.php');
// ده اللوب هيتصل بالسرفر ةيحدد كل البيانات ويرتبها علي شكل ارريه علشان اتحكم في كل اندكس لوحده
$reback= mysqli_query($conn ,"SELECT * FROM mycar");
while($row = mysqli_fetch_array($reback)){
    //ده الكارد الي هتظهر فيه البيانات 
    echo"
    
    <center>

    <main>
    
    <div class='card' style='width: 18rem;'>
    <img src='$row[imgs]' class='card-img-top'>
      <div class='card-body'>
        <h5 class='card-title'>$row[fname]</h5>
        <p class='card-text'>$row[price]</p>
        <a href= 'del.php?id=$row[id]'>أزاله</a>
    </div>
    </div>
    
    
    </main>
    </center>";
    }



//ده نهايه الكود يا حبيب أخوك



?>
 




</body>
</html>