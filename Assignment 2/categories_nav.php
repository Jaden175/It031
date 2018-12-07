<!-- Jaden Hargraves -->
<!-- IT 031 -->
<!-- Assignment 2 -->
<main>
    <h1>Product List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
        <ul>
        <?php foreach ($categories as $category) : ?>
            <li>
            <a href="?category_id=<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        </ul>
        </nav>
    </aside>

</main>
<!-- Jaden Hargraves -->
<!-- IT 031 -->
<!-- Assignment 2 -->	