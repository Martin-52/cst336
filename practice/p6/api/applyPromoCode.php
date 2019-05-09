<?php

    $discounts = array();
    
    $discounts["getFifty"] = 0.50;
    $discounts["halfPrice"] = 0.50;
    $discounts["sand30"] = 0.30;
    $discounts["spring30"] = 0.30;
    $discounts["beach"] = 0.20;
    $discounts["sunny"] = 0.20;
    
    $string = $_GET("promoCode");
    
    if (isset($discounts[$string])) {
        
    } else {
        
    }

?>
