<?php
function get_categories() {
    global $db;
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement; 
}

//function get_bullets() {
//    global $db;
//    $query = 'SELECT * FROM bullets
//              ORDER BY bulletID';
//    $statement = $db->prepare($query);
//    $statement->execute();
//    return $statement; 
//}

function get_category_name($category_id) {
    global $db;
    $query = 'SELECT * FROM categories
              WHERE categoryID = :category_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
    $category_name = $category['categoryName'];
    return $category_name;
}

function get_bullet_name($bullet_id) {
    global $db;
    $query = 'SELECT * FROM bullets
              WHERE bulletID = :bullet_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':bullet_id', $bullet_id);
    $statement->execute();    
    $bullet = $statement->fetch();
    $statement->closeCursor();    
    $bullet_name = $bullet['bulletName'];
    return $bullet_name;
}


function add_category($name) {
    global $db;
    $query = 'INSERT INTO categories (categoryName)
              VALUES (:name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();    
}

function delete_category($category_id) {
    global $db;
    $query = 'DELETE FROM categories
              WHERE categoryID = :category_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $statement->closeCursor();
}
?>