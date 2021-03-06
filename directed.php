<?php 
    include 'LAMPAPI/db.inc.php';
    session_start();
    $sql = "SELECT * FROM loginInfo where username = '".$_SESSION["user"]."'";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo "Username: " .$row["username"];    
    } ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Manager | Universal-Contact-Filing</title>
        <link rel="icon" href="images/knighticon.png">
      
        <!-- Bootstrap css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        
        <!-- JQuery and Bootstrap scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      
        <!-- Link to css and js-->
        <link rel="stylesheet" href="./css/style2.css">
        <script src="./js/script2.js"></script>
    
        <!-- Font Awesome for icons -->
        <script src="https://kit.fontawesome.com/0c1bbd3644.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="fixed-top">
            <div class="container-fluid">
        <!-- UCF Heading and Add Button-->
                <div class="ucfheading">
                    <span class="ucftext">U</span><span class="normaltext">niversal</span>&nbsp;&nbsp;
                    <span class="ucftext">C</span><span class="normaltext">ontact</span>&nbsp;&nbsp;
                    <span class="ucftext">F</span><span class="normaltext">iling</span>
                    <button class="btn add-button"><i class="fas fa-plus"></i></button>
                </div>
            </div>
        </div>

        <!-- Top Nav Bar with Search Bar and Log Out Button -->
        <nav class="navbar navbar-expand-md fixed-top" style="background-image: linear-gradient(to right, black, rgb(184, 164, 105)) ">
            <div class="container-fluid">
                
                <form class="search-bar-form">
                    <input id="searchbar" type="text" class="nav-item" placeholder="Search...">
                    <button type="submit" class="btn nav-item search-button"><i class="fas fa-search"></i></button>
                </form>
                
                <a button href ="LAMPAPI/logout.php" name="logout" id="logout" type="button" class="btn nav-item logout-button"><i class="fas fa-sign-out-alt"></i> Log Out</button></a>

            </div>
        </nav>

        <!-- Table Generates Here -->
        
     <div id="dvTable"></div>
       
     <form>
            <tr>
                <td class="tb-fn"><input class="fill-in" type="text" placeholder="First Name"></td>
                <td class="tb-email"><input class="fill-in" type="text" placeholder="Email Address"></td>
                <td class="tb-date">*DateCreated*</td>
            </tr>
            <tr>
                <td class="tb-ln"><input class="fill-in" type="text" placeholder="Last Name"></td>
                <td class="tb-addr"><input class="fill-in" type="text" placeholder="Street Address"></td>
                <td class="tb-delete">
                    <button type="submit" class="btn add-button-check"><i class="fas fa-check"></i></button>
                </td>
            </tr>
        </form>      
      
    </body>
</html>