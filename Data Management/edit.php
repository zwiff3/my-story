<?php
include 'db.php';
if (isset($_GET['action']) && $_GET['action'] == 'edit') {

$userssql="SELECT * FROM add_user";
$all_user=mysqli_query($con,$userssql);
$user=$all_user->fetch_assoc();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit_user</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    
    <div class="container">
        <div class="wrapper p-5m-5">
            <div class="d-flex p-2 justify-content-between">
             <h2> edit-user</h2>
             <div><a href="index.php"><i data-feather="corner-down-left"></i></a></div>
        </div>
        <form action="index.php" method="post">
            <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-control"> inter your mame </label>
             <input type="text" value="<?php echo $user['name'];?>" class="form-control" id="exampleFormControlInput1" placeholder="mesra" name="name">
            </div>
            <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-control">Email address</label>
             <input type="email"  value="<?php echo $user['email'];?>" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
            </div>
            <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-control">tel</label>
             <input type="tel"  value="<?php echo $user['tel'];?>" class="form-control"  id="exampleFormControlInput1" placeholder="64161863" name="tel">
            </div>
            <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-control">inter password</label>
             <input type="password" class="form-control"  value="<?php echo $user['password'];?>" id="exampleFormControlInput1" placeholder="password" name="password">
            </div>
           
            <input type="submit" class="btn btn-primary" value="edit" name="save">
          </form>  
        </div>
    </div>
    <?php
    
    if (isset($_POST['save'])) {
        $$new_name=$_POST['name'];
        $$new_email=$_POST['email'];
        $$new_tel=$_POST['tel'];
        $$new_password=$_POST['password'];
        
       $update_query ="UPDATE add_user 
                     SET name = '$new_name', 
                         email = '$new_email', 
                         tel = '$new_tel', 
                         password = '$new_password' 
                     WHERE id = $id";
                      $update = mysqli_query($con, $update_query);
        }
    ?>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/icons.js"></script>
    <script>
        feather.replace();
    </script>

</body>

</html>