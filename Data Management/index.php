<?php
include 'db.php';
$action=false;
if (isset($_POST['save'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$password=$_POST['password'];

$ins="INSERT INTO add_user(`name`,`email`,`tel`,`password`)
 VALUES ('$name','$email','$tel','$password')";
$rebak= mysqli_query($con,$ins);
$action="add";
}
if (isset($_GET['action'])&& $_GET['action']=='del'){
$id=$_GET['id'];
$dele="DELETE FROM add_user WHERE id =$id";
$delete=mysqli_query($con,$dele);
$action="del";
}




$userssql="SELECT * FROM add_user";
$all_user=mysqli_query($con,$userssql);
$user=$all_user->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/to.css">
</head>

<body>
    
    <div class="container">
        <div class="wrapper p-5m-5">
            <div class="d-flex p-2 justify-content-between mb-2">
             <h2> users</h2>
             <div><a href="add-user.php"><i data-feather="user-plus"></i></a></div>
            </div>
            <hr>

            <table class="table table-striped">
             <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">emaile</th>
      <th scope="col">tel</th>
      <th scope="col">password</th>
    </tr>
   </thead>
   <tbody>
    <?php
    
    
    while ($user=$all_user->fetch_assoc()) {?>
       <tr>
        <td>
        <?php echo $user['id']  ?>
        </td>
        <td>
        <?php echo $user['name']  ?>
        </td>
        <td>
        <?php echo $user['email']  ?>
        </td>
        <td>
        <?php echo $user['tel']  ?>
        </td>
        <td>action</td>
        <td>
          <div class="d-flex p-2 justify-content-between">
           <i onclick="confirm_delete(<?php echo $user['id'];?>);" class="text-danger" data-feather="trash-2"></i>
           <i  onclick="edit(<?php echo $user['id'];?>);" class="text-success" data-feather="edit"></i>
         </div>
        </td>
    </tr>
   <?php }
    
  ?>
  </tbody>
 </table>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/icons.js"></script>
    <script src="js/toastr.js"></script>
    <script src="js/notof.js"></script>
    <?php
    if ($action!=false) {
        if ($action=='add') {?>
        <script>
            show_add()
        </script>
        <?php
        }
        if ($action=='del') {?>
            <script>
                show_del()
            </script>
            <?php
            }

    }
    if ($action=='edit') {?>
        <script>
            edit()
        </script>
        <?php
        }

    
    ?>
    <script>
        feather.replace();
    </script>

</body>

</html>