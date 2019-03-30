<?php include 'includes/header.php'; ?>
<main>
    <h1>Edit Gun</h1>
    <form action="index.php" method="post" id="add_gun_form">

        <input type="hidden" name="action" value="update_gun">

        <input type="hidden" name="gun_id"
               value="<?php echo $gun['gunID']; ?>">

        <label>Category ID:</label>
        <input type="category_id" name="category_id"
               value="<?php echo $gun['categoryID']; ?>">
        <br>

        <label>Name:</label>
        <input type="input" name="name"
               value="<?php echo $gun['gunName']; ?>">
        <br>
        
        <label>Bullet type:</label>
        <input type="bullet_id" name="bullet_id"
               value="<?php echo $gun['bullet']; ?>">
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Save Changes">
        <br>
    </form>
    <p><a href="index.php?action=list_guns">View gun List</a></p>

</main>
<?php include 'includes/footer.php'; ?>