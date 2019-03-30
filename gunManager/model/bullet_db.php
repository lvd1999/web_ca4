<?php
function get_bullets() {
    global $db;
    $query = 'SELECT * FROM bullets
              ORDER BY bulletID';
    $statement = $db->prepare($query);
    $statement->execute();
    $guns = $statement->fetchAll();
    $statement->closeCursor();
    return $guns;
}

function get_guns_by_bullet($bullet_id) {
    global $db;
    $query = 'SELECT * FROM guns
              WHERE guns.bullet = :bullet_id
              ORDER BY gunID';
    $statement = $db->prepare($query);
    $statement->bindValue(":bullet_id", $bullet_id);
    $statement->execute();
    $guns = $statement->fetchAll();
    $statement->closeCursor();
    return $guns;
}
?>