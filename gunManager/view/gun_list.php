<?php include 'includes/header.php'; ?>
<main>
    <div id="selection">
        <a href="?action=show_add_form">Add gun</a>
        <a href="?action=list_categories">List Categories</a>
    </div>
    <center><h3>List guns by</h3></center>
    <form action="index.php">
        <input type="submit" value="Categories" class="button" style="background-color: #0000ff; color: white;"/>
    </form>
    <form action="index_bullet.php">
        <input type="submit" value="Bullets" class = "button"/>
    </form>

    <aside>
        <!-- display a list of categories -->
        <center><img src="../img/gun.png" class="icon2"></center>
        <?php include 'includes/category_nav.php'; ?>        
    </aside>

        <center><h2><?php echo $category_name; ?></h2></center>
    <section>
        <!-- display a table of guns -->
        <table class="highlight">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <!--<th class="right">Price</th>-->
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($guns as $gun) : ?>
                <tr>
                    <td><?php echo $gun['gunID']; ?></td>
                    <td><?php echo $gun['gunName']; ?></td>
    <!--                <td><?#php echo $bullets['bulletName']; ?></td>-->

                    <td><form action="." method="post">
                            <input type="hidden" name="action"
                                   value="show_edit_form">
                            <input type="hidden" name="gun_id"
                                   value="<?php echo $gun['gunID']; ?>">
                            <input type="hidden" name="category_id"
                                   value="<?php echo $gun['categoryID']; ?>">
                            <input type="submit" value="Edit" class="button2">
                        </form></td>
                    <td><form action="." method="post">
                            <input type="hidden" name="action"
                                   value="delete_gun">
                            <input type="hidden" name="gun_id"
                                   value="<?php echo $gun['gunID']; ?>">
                            <input type="hidden" name="category_id"
                                   value="<?php echo $gun['categoryID']; ?>">
                            <input type="submit" value="Delete">
                        </form></td>
                </tr>
            <?php endforeach; ?>
        </table>


    </section>
    

</main>
<?php include 'includes/footer.php'; ?>