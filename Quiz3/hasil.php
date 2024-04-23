<?php

if(isset($_POST['hobi'])){
    foreach($_POST['hobi'] as $selected){
        echo "<p>$selected</p>";
    }
} else {
    echo "<p>No hobby selected</p>";
}