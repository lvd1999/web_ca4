<?php
function get_guns() {
    global $db;
    $query = 'SELECT * FROM guns
              ORDER BY gunID';
    $statement = $db->prepare($query);
    $statement->execute();
    $guns = $statement->fetchAll();
    $statement->closeCursor();
    return $guns;
}

function get_guns_by_category($category_id) {
    global $db;
    $query = 'SELECT * FROM guns
              WHERE guns.categoryID = :category_id
              ORDER BY gunID';
    $statement = $db->prepare($query);
    $statement->bindValue(":category_id", $category_id);
    $statement->execute();
    $guns = $statement->fetchAll();
    $statement->closeCursor();
    return $guns;
}

function get_gun($gun_id) {
    global $db;
    $query = 'SELECT * FROM guns
              WHERE gunID = :gun_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":gun_id", $gun_id);
    $statement->execute();
    $gun = $statement->fetch();
    $statement->closeCursor();
    return $gun;
}

function delete_gun($gun_id) {
    global $db;
    $query = 'DELETE FROM guns
              WHERE gunID = :gun_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':gun_id', $gun_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_gun($category_id, $name, $bullet) {
    global $db;
    $query = 'INSERT INTO guns
                 (categoryID, gunName, bullet)
              VALUES
                 (:category_id, :name, :bullet)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':bullet', $bullet);
//    $statement->bindValue(':price', $price);
    $statement->execute();
    $statement->closeCursor();
}

function update_gun($gun_id, $category_id, $name, $bullet_id) {
    global $db;
    $query = 'UPDATE guns
              SET categoryID = :category_id,
                  gunName = :name,
                  bullet = :bullet_id
               WHERE gunID = :gun_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':gun_id', $gun_id);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':bullet_id', $bullet_id);
    $statement->bindValue(':name', $name);
//    $statement->bindValue(':price', $price);
    $statement->execute();
    $statement->closeCursor();
}
?>