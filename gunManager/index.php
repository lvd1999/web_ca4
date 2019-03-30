<?php
require('model/database.php');
require('model/gun_db.php');
require('model/category_db.php');
require('model/bullet_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_guns';
//        $action = 'list_guns_bullet';
    }
}

if ($action == 'list_guns') {
    // Get the current category ID
    $category_id = filter_input(INPUT_GET, 'category_id', 
            FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = 1;
//        $bullet_id = NULL;
    }
    
    // Get gun and category data
    $category_name = get_category_name($category_id);
    $categories = get_categories();
    $guns = get_guns_by_category($category_id);
//    $bullet_name = get_bullet_name($bullet_id);

    // Display the gun list
    include('view/gun_list.php');
    
} 

else if($action == 'list_guns_bullet') {
    // Get the current category ID
    $bullet_id = filter_input(INPUT_GET, 'bullet_id', 
            FILTER_VALIDATE_INT);
    if ($bullet_id == NULL || $bullet_id == FALSE) {
        $bullet_id = 1;
//        $bullet_id = NULL;
    }
    
    // Get gun and bullet data
    $bullet_name = get_bullet_name($bullet_id);
    $bullets = get_bullets();
    $guns = get_guns_by_bullet($bullet_id);
//    $bullet_name = get_bullet_name($bullet_id);

    // Display the gun list
    include('view/gun_list_by_bullet.php');
}


else if ($action == 'show_edit_form') {
    $gun_id = filter_input(INPUT_POST, 'gun_id', 
            FILTER_VALIDATE_INT);
    $bullet_id = filter_input(INPUT_POST, 'bullet_id', 
            FILTER_VALIDATE_INT);
    if ($gun_id == NULL || $gun_id == FALSE) {
        $error = "Missing or incorrect gun id.";
        include('../errors/error.php');
    } else { 
        $gun = get_gun($gun_id);
        include('view/gun_edit.php');
    }
    
} else if ($action == 'update_gun') {
    $gun_id = filter_input(INPUT_POST, 'gun_id', 
            FILTER_VALIDATE_INT);
    $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);
    $bullet_id = filter_input(INPUT_POST, 'bullet_id');
    $name = filter_input(INPUT_POST, 'name');
//    $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);

    // Validate the inputs
    if ($gun_id == NULL || $gun_id == FALSE || $category_id == NULL || 
            $category_id == FALSE || $name == NULL || $bullet_id == NULL) {
        $error = "Invalid gun data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        update_gun($gun_id, $category_id,  $name, $bullet_id);

        // Display the gun List page for the current category
        header("Location: .?category_id=$category_id");
    }
} else if ($action == 'delete_gun') {
    $gun_id = filter_input(INPUT_POST, 'gun_id', 
            FILTER_VALIDATE_INT);
    $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);
    $bullet_id = filter_input(INPUT_POST, 'bullet_id', 
            FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE ||
            $gun_id == NULL || $gun_id == FALSE) {
        $error = "Missing or incorrect gun id or category id.";
        include('../errors/error.php');
    } else { 
        delete_gun($gun_id);
        header("Location: .?category_id=$category_id");
    }
    
} else if ($action == 'show_add_form') {
    $categories = get_categories();
    $bullets = get_bullets();
    include('view/gun_add.php');
} else if ($action == 'add_gun') {
    $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);
    $bullet = filter_input(INPUT_POST, 'bullet');
    $name = filter_input(INPUT_POST, 'name');
//    $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
    if ($category_id == NULL || $category_id == FALSE || $name == NULL || $bullet == NULL) {
        $error = "Invalid gun data. Check all fields and try again.";
        include('../errors/error.php');
    } else { 
        add_gun($category_id, $name, $bullet);
        header("Location: .?category_id=$category_id");
    }
} else if ($action == 'list_categories') {
    $categories = get_categories();
    $bullets = get_bullets();
    include('view/category_list.php');
} else if ($action == 'add_category') {
    $name = filter_input(INPUT_POST, 'name');

    // Validate inputs
    if ($name == NULL) {
        $error = "Invalid category name. Check name and try again.";
        include('../errors/error.php');
    } else {
        add_category($name);
        header('Location: .?action=list_categories');  // display the Category List page
    }
} else if ($action == 'delete_category') {
    $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);
    delete_category($category_id);
    header('Location: .?action=list_categories');      // display the Category List page
}
?>