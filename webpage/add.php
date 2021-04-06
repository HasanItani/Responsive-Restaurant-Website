<!DOCTYPE html>


<?php
 $style= "";
$message="";
$message2="";
include('../data/connect.php');


if(isset($_POST['submitadd'])){


$name=$_POST['name'];
$code=$_POST['code'];
$price=$_POST['price'];
$category=$_POST['category'];



$ImageName = $_FILES['image']['name'];
$fileElementName = 'image';
$path = '../save/'; 
$location = $path . $_FILES['image']['name']; 

if (move_uploaded_file($_FILES['image']['tmp_name'], $location)) {
    echo "File is valid, and was successfully uploaded.\n";
  } else {
     echo "Upload failed";
  }


    $sql = "INSERT INTO `products` (id, name, code, price, category, image) VALUES (NULL, '$name', '$code', '$price', '$category', '$ImageName')";

    if(mysqli_query($con, $sql)){
        $message = "Product added successfully.";
        $style= 'style="color:green"';
    } 
    
    else{
        $message =  mysqli_error($con);
        $style= 'style="color:red"';
    }
     


}

if(isset($_POST['submitdelete'])){

    $id=$_POST['delete'];
    $sql = "DELETE FROM `products` WHERE id = $id ";
    if(mysqli_query($con, $sql)){
        $message2 = "Product deleted successfully.";
        $style= 'style="color:green"';
    } 
    
    else{
        $message2 =  mysqli_error($con);
        $style= 'style="color:red"';
    }
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form  enctype="multipart/form-data" action="" method="POST">

<fieldset>
<legend>Add</legend>
    <p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
    </p>
    <p>
        <label for="code">Code:</label>
        <input type="text" name="code" id="code" required>
    </p>
    <p>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" required>
    </p>
    <p>
        <label for="category">Category:</label>

        <select name="category" id="category">
        <option value="breakfast-brunch">Breakfast & Brunch</option>
        <option value="pizza-burger">Pizza & Burgers</option>
        <option value="mains-grills">Mains & Grills</option>
        <option value="soups">Soups</option>
        <option value="desserts">Desserts</option>
        <option value="beverages">Beverages</option>
        </select>
    </p>

<input name="image" type="file">

<br>
<p <?=$style?>><?=$message?></p>
    <input type="submit" name="submitadd">
    
    </fieldset>

</form>
  






    <form action="" method="POST">

<fieldset>
<legend>Delete</legend>

<?php
 $result = mysqli_query($con,"SELECT * FROM `products`");
      ?>
      <table border="1" style= "background-color: #0000; color: black; margin: 0 auto;" >
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Code</th>
          <th>Category</th>
          <th>Price</th>
          <td>Image</td>
        </tr>
      </thead>
      <tbody>
        <?php
        
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['id']}</td>
              <td>{$row['name']}</td>
              <td>{$row['code']}</td>
              <td>{$row['category']}</td>
              <td>{$row['price']}</td>
              <td>{$row['image']}</td> 
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
<br>
    <label for="delete">Enter ID to delete:</label>
        <input type="number" name="delete" id="delete" required>
        <input type="submit" name="submitdelete">
        <p <?=$style?>><?=$message2?></p>
</fieldset>



</form>


</body>
</html>