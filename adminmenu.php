<?php
session_start();

if (!isset($_SESSION['userSession'])) {
 header("Location: index.php");
}

?>
<head>
<title>John Johns Admin Menu</title>
</head>

<html>

<body>

<H1>John John's Dogs</H1>
<H2>Website Maintenance Section</H2>

<b><i>SELECT THE MAINTENANCE FUNCTION TO USE:</i></b><BR>
<br>
<b>Edit ABOUT US webpage information:</b><br>
<a href="../admin/aboutusadmin.php">Edit "About Us"</a><br>
<BR>
<b>Add Restaurant EVENTS</b><br>
<a href="../admin/eventsupload.php">Register A New Event</a><br>
<br>
<BR>
<b>Delete Restaurant EVENTS</b><br>
<a href="../admin/eventsremove.php">Delete A Event</a><br>
<br>
<b>Add MENU ITEMS</b>
<BR>
<!-- <a href="../admin/menu_dropdown.php">Menu Dropdown Page</a><br>  -->
<a href="../admin/startersupload.php">Add Starters to Menu</a><br>
<a href="../admin/saladsupload.php">Add Salads to Menu</a><br>
<a href="../admin/hotdog_sandwichesupload.php">Add Sandwiches to Menu</a><br>
<a href="../admin/dessert_menuupload.php">Add "Desserts to Menu"</a><br>
<a href="../admin/drinksupload.php">Add Drinks to Menu</a><br>


<br>
<br>


<b>Delete MENU ITEMS</b>
<BR>
<!-- <a href="../admin/menu_dropdown.php">Menu Dropdown Page</a><br>  -->
<a href="../admin/startersremove.php">Delete Starters from Menu</a><br>
<a href="../admin/saladsremove.php">Delete Salads from Menu</a><br>
<a href="../admin/hotdog_sandwichesremove.php">Delete Sandwiches from Menu</a><br>
<a href="../admin/dessert_menuremove.php">Delete "Desserts from Menu"</a><br>
<a href="../admin/drinksremove.php">Delete Drinks from Menu</a><br>

<br>
<br>
<a href="../index.php">Website Home Page</a><br>

<a href="../login/logout.php?logout">Logout</a><br>

 

</body>

</html>