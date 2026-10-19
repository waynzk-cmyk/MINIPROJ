<?php
class Page {
    public static function display($page){
        switch ($page){
            case 'student';
            
        
            
            break;

            default: 
            include 'modules/dashboard.php';
        }
    }
}