<?php
session_start();
if (isset($_SESSION['block'])) {
    header('Location: ../index.php');
}
include 'includes/header.php';
?>
<main>
    <h1>Add gun</h1>
    <form action="index.php" method="post" id="add_gun_form">
        <input type="hidden" name="action" value="add_gun">

        <label>Category:</label>
        <select name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>

        <label>Name:</label>
        <input type="input" name="name">
        <br>

        <label>Bullet type:</label>
        <select name="bullet">
            <?php foreach ($bullets as $bullet) : ?>
                <option value="<?php echo $bullet['bulletID']; ?>">
                    <?php echo $bullet['bulletName']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add gun">
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_guns">View gun List</a>
    </p>

</main>
<?php include 'includes/footer.php'; ?>