<script src="controller/add_stuff.js"></script>

<body class="add-new-category-product">
    <nav>
        <a href="index.html">Home</a>
        <a href="stuff.php">Products</a>
        <a href="categorys.php">Categorys</a>
        <a href="Sign-in">Sign-in</a>
    </nav>
    <h1>Add new Product to List</h1>
    <table class="add-new-category-product">
        <tr>
            <td class="add-new-category-product">

            <label for="field-sku"></label>


            <label for="field-active">Active</label>


            <input type="number" id="field-active">


            <label for="field-category">Category_id</label>

            <select id="field-category">
                <option value="">Null</option>
            </select>

            
            <label for="field-name">Name</label>

            <input type="text" id="field-name">


            <label for="field-image">Image</label>

            <input type="link" id="field-image">


            <label for="field-spesification">Spesification</label>

            <input type="text" id="field-spesification">


            <label for="field-price">Price</label>

            <input type="number" id="field-price">


            <label for="field-stock">Stock</label>

            <input type="number" id="field-stock">

            </td>
        </tr>

    </table>


    <button class="done" id="stuff-done">Done</button>
    
</body>
<link rel="stylesheet" href="view/stylesheets/style.css">