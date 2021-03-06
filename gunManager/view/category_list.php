<?php
session_start();
if (isset($_SESSION['block'])) {
    header('Location: ../index.php');
}
include 'includes/header.php';
?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($categories as $category) : ?>
            <tr>
                <td><?php echo $category['categoryName']; ?></td>
                <td>
                    <form id="delete_gun_form"
                          action="index.php" method="post">
                        <input type="hidden" name="action" value="delete_category">
                        <input type="hidden" name="category_id"
                               value="<?php echo $category['categoryID']; ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br />

    <h2>Add Category</h2>
    <form id="add_category_form"
          action="index.php" method="post">
        <input type="hidden" name="action" value="add_category">

        <label>Name:</label>
        <input type="input" name="name">
        <input type="submit" value="Add">
    </form>

    <p><a href="index.php?action=list_guns">List guns</a></p>

</main>
<?php include 'includes/footer.php'; ?>