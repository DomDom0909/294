<link rel="stylesheet" href="view/stylesheets/style.css">
<script src="controller/category.js"></script>
<nav>
    <a href="index.html">Home</a>
    <a href="stuff.php">Products</a>
    <a class="active" href="categorys.php">Categorys</a>
    <a class="login" href="Sign-in">Sign-in</a>

</nav>
<h1>Your Categorys</h1>
<table class="product-category-table" id="categorys-table">
    <tr>
        <th class="product-category-header">Name</th>
        <th class="product-category-header">Active</th>
        <th class="product-category-header">Changeing Activity</th>
    </tr>
</table>
<br>
<a href="add-category.php"><button class="add-new" id="add-category">Add a new Category to your List</button></a>