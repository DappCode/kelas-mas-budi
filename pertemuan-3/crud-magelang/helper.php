<?php 

    // untuk filtering data agar tag php/js/html tidak masuk ke Database
    function filterData($value) {
        return htmlspecialchars(strip_tags($value));
    }

?>