<?php
    
    $employees = array();
    
    $employees["manny"] = array();
    $employees["manny"]["name"] = "Manny";
    $employees["manny"]["age"] = 38;
    $employees["manny"]["sex"] = "Male";
    $employees["manny"]["title"] = "Manager";
    
    
    $employees["mary"] = array();
    $employees["mary"]["name"] = "Mary";
    $employees["mary"]["age"] = 27;
    $employees["mary"]["sex"] = "Female";
    $employees["mary"]["title"] = "Assistant Manager";
    
    $employees["simon"] = array();
    $employees["simon"]["name"] = "Simon";
    $employees["simon"]["age"] = 23;
    $employees["simon"]["sex"] = "Male";
    $employees["simon"]["title"] = "Cashier";    
    
    $employees["jessica"] = array();
    $employees["jessica"]["name"] = "Jessica";
    $employees["jessica"]["age"] = 31;
    $employees["jessica"]["sex"] = "Female";
    $employees["jessica"]["title"] = "Supervisor";    
    
    $employees["jimmy"] = array();
    $employees["jimmy"]["name"] = "Jimmy";
    $employees["jimmy"]["age"] = 35;
    $employees["jimmy"]["sex"] = "Male";
    $employees["jimmy"]["title"] = "Customer Service Representative";    
    
    $employees["tim"] = array();
    $employees["tim"]["name"] = "Tim";
    $employees["tim"]["age"] = 20;
    $employees["tim"]["sex"] = "Male";
    $employees["tim"]["title"] = "Stocker";    
    
    $employees["tina"] = array();
    $employees["tina"]["name"] = "Tina";
    $employees["tina"]["age"] = 24;
    $employees["tina"]["sex"] = "Female";
    $employees["tina"]["title"] = "Manager";    
    
    $employees["johnny"] = array();
    $employees["johnny"]["name"] = "Johnny";
    $employees["johnny"]["age"] = 29;
    $employees["johnny"]["sex"] = "Male";
    $employees["johnny"]["title"] = "Loss Prevention Specialist";    
    
    $employees["nancy"] = array();
    $employees["nancy"]["name"] = "Nancy";
    $employees["nancy"]["age"] = 32;
    $employees["nancy"]["sex"] = "Female";
    $employees["nancy"]["title"] = "Order Filler";    
    
    $employees["oliver"] = array();
    $employees["oliver"]["name"] = "Oliver";
    $employees["oliver"]["age"] = 26;
    $employees["oliver"]["sex"] = "Male";
    $employees["oliver"]["title"] = "Warehouse Associate";    
    
    $employees["pete"] = array();
    $employees["pete"]["name"] = "Pete";
    $employees["pete"]["age"] = 30;
    $employees["pete"]["sex"] = "Male";
    $employees["pete"]["title"] = "Floor Leader";    
    
    $employees["samantha"] = array();
    $employees["samantha"]["name"] = "Samantha";
    $employees["samantha"]["age"] = 23;
    $sammantha["sex"] = "Female";
    $employees["samantha"]["title"] = "Logistics Coordinator";    
    
    $employees["jasmine"] = array();
    $employees["jasmine"]["name"] = "Jasmine";
    $employees["jasmine"]["age"] = 29;
    $employees["jasmine"]["sex"] = "Female";
    $employees["jasmine"]["title"] = "Human Resources";    
    
    $employee = $_GET['employee'];
    
    echo json_encode($employees[$employee]);

?>