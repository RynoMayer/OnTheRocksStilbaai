<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of menuClass
 *
 * @author rmayer
 */
class menuClass {
    
    function displayMainMenuContainer(){
        echo "<div  id='menuContainer' class='container ' >
            <div   class='row col-lg-12'>
            <div id ='Starters' class='box'>
                <div  class='col-lg-12'>
                    <hr>
                    <h2 class='intro-text text-center'>On The Rocks
                        <strong>Menu</strong>
                    </h2>
                    <hr>
                </div>
                <div  id='galleryRow' class='col-lg-12 text-center'>
                    <!-- STARTER SECTION -->
                        <div class='row'>";
        
        menuItem('6 Crumb Butterfly Prawns', '54.90', 'http://placehold.it/320x150');
        
        echo "<!-- \STARTER SECTION  -->
                    </div>
                    
                </div>";
        
        
        
        
    }
    
    function displayMainMenuStart(){
        echo "<div  id='menuContainer' class='container ' >
            <div   class='row col-lg-12'>
            <div id ='Starters' class='box'>
                <div  class='col-lg-12'>
                    <hr>
                    <h2 class='intro-text text-center'>On The Rocks
                        <strong>Menu</strong>
                    </h2>
                    <hr>
                </div>";
                
    }
    function displayStartersBegin(){
        echo "<div  id='galleryRow' class='col-lg-12 text-center'>
                    <!-- STARTER SECTION -->
                        <div class='row'>";
    }
    
    function displayStartersEnd(){
        echo "<!-- \STARTER SECTION  -->
                    </div>
                    
                </div>";
    }
    
    function displayMains(){
        echo ' <div  id ="Mains" class="col-lg-12 text-center">
                    <div   class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center"><strong>Mains</strong></h2>
                        <hr>
                    </div>';
        
        
    }
    
    function menuItemHeader($id, $name){
        echo '<div  class="col-lg-12 text-center">
                    <div  id="'.$id.'" class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center"><strong>'.$name.'</strong></h2>
                        <hr>
                    </div>';
    }
    
    function menuItem($name,$price, $image){
        echo "<div class='col-sm-4 col-lg-4 col-md-4'>
                            <div class='menuItems thumbnail'>
                                <img src=$image alt=''>
                                <div class='caption'>
                                    <h4 class='pull-right'>R$price</h4>
                                    <h4><a href='#'>$name</a>
                                    </h4>
                                    <p>See more snippets like this.</p>
                                </div>
                               
                            </div>
                        </div>";
        
    }
    
    //Not using this one
    public function menuItemFile($section, $image){
       
        //$itemInfo = $this->readMyFile($section);
        //print $itemInfo;
        echo "<div class='col-sm-4 col-lg-4 col-md-4'>
                            <div class='thumbnail'>
                                <img src=$image alt=''>
                                <div class='caption'>
                                    <h4 class='pull-right'>R ".$itemInfo[1]."</h4>
                                    <h4><a href='#'>".$itemInfo[0]."</a>
                                    </h4>
                                    <p>See more snippets like this online.</p>
                                </div>
                                <div class='ratings'>
                                    <p class='pull-right'>15 reviews</p>
                                    <p>
                                        <span class='glyphicon glyphicon-star'></span>
                                        <span class='glyphicon glyphicon-star'></span>
                                        <span class='glyphicon glyphicon-star'></span>
                                        <span class='glyphicon glyphicon-star'></span>
                                        <span class='glyphicon glyphicon-star'></span>
                                    </p>
                                </div>
                            </div>
                        </div>";
    }
    
      function readMyFile(){
        $myFile = file("resources/inventory.txt");
        //$file_handle = fopen("resources/inventory.txt", "rb");
        //$inventory_array = array();
        //$section = "*".$sect;
        //$parts = array();
        /*while (!feof($file_handle) ) {

            $line_of_text = fgets($file_handle);
            //print $line_of_text."<br>";
            $strcomp = strcasecmp($line_of_text, $section);
            print $strcomp;
            if($strcomp == 0){
                break;
            }
            else if(strpbrk($line_of_text, "*")){
                
            }
            else{
            //if (strpbrk($line_of_text, "*") == FALSE){
                
               $parts = explode('-', $line_of_text);
               print $parts[0]. " ".$parts[1]."<br>";  
              
            //}
            //else{
                                    
            
             //print $parts;
             //array_push($inventory_array, $parts);
           
             //print $section."<br>";
                //fclose($file_handle);
                //break;

           // }
            }
             //break;                      
                                
        }*/
        //echo "<br>";
        //print_r($myFile);
        //print_r($inventory_array);
       // echo "<br>";
        
        //print $inventory_array[0][0]." ".$inventory_array[0][1]."<br>";
        //print $inventory_array[1][0]." ".$inventory_array[1][1]."<br>";
      
        //fclose($file_handle);
        //return $inventory_array;
        return $myFile;
    }
    
    function SplitFile($array, $section){
        
        //$inventory = array();
        //print_r($array);
        
        if($section == "STR"){
            $starters = array();
            
            foreach ($array as $item) {
                if(substr($item,0,3) == "STR"){
                    //print $item."<br>";
                    
                    $value = $item;
                    $info = explode("*", $value);
                    //print_r($info);
                    //print "<br>";
                    
                    $info_array = explode("-", $info[1]);
                    
                    
                    
                    array_push($starters, $info_array);
                    //print_r($starters);
                }
            }
            return $starters;
        }
        else if($section == "MAN"){
             $mains = array();
            
            foreach ($array as $item) {
                if(substr($item,0,3) == "MAN"){
                    //print $item."<br>";
                    
                    $value = $item;
                    $info = explode("*", $value);
                    //print_r($info);
                    //print "<br>";
                    
                    $info_array = explode("-", $info[1]);
                    array_push($mains, $info_array);
                    //print_r($starters);
                }
            }
            return $mains;
        }
        else if($section == "BRG"){
             $burgers = array();
            
            foreach ($array as $item) {
                if(substr($item,0,3) == "BRG"){
                    //print $item."<br>";
                    
                    $value = $item;
                    $info = explode("*", $value);
                    //print_r($info);
                    //print "<br>";
                    
                    $info_array = explode("-", $info[1]);
                    array_push($burgers, $info_array);
                    //print_r($starters);
                }
            }
            return $burgers;
        }
        else if($section == "VEG"){
             $vegetarian = array();
            
            foreach ($array as $item) {
                if(substr($item,0,3) == "VEG"){
                    //print $item."<br>";
                    
                    $value = $item;
                    $info = explode("*", $value);
                    //print_r($info);
                    //print "<br>";
                    
                    $info_array = explode("-", $info[1]);
                    array_push($vegetarian, $info_array);
                    //print_r($starters);
                }
            }
            return $vegetarian;
        }
        else if($section == "KID"){
             $kids = array();
            
            foreach ($array as $item) {
                if(substr($item,0,3) == "KID"){
                    //print $item."<br>";
                    
                    $value = $item;
                    $info = explode("*", $value);
                    //print_r($info);
                    //print "<br>";
                    
                    $info_array = explode("-", $info[1]);
                    array_push($kids, $info_array);
                    //print_r($starters);
                }
            }
            return $kids;
        }
        else if($section == "BSK"){
             $baskets = array();
            
            foreach ($array as $item) {
                if(substr($item,0,3) == "BSK"){
                    //print $item."<br>";
                    
                    $value = $item;
                    $info = explode("*", $value);
                    //print_r($info);
                    //print "<br>";
                    
                    $info_array = explode("-", $info[1]);
                    array_push($baskets, $info_array);
                    //print_r($starters);
                }
            }
            return $baskets;
        }
        else if($section == "SEA"){
             $seafood = array();
            
            foreach ($array as $item) {
                if(substr($item,0,3) == "SEA"){
                    //print $item."<br>";
                    
                    $value = $item;
                    $info = explode("*", $value);
                    //print_r($info);
                    //print "<br>";
                    
                    $info_array = explode("-", $info[1]);
                    array_push($seafood, $info_array);
                    //print_r($starters);
                }
            }
            return $seafood;
        }
        else if($section == "GRL"){
             $grill = array();
            
            foreach ($array as $item) {
                if(substr($item,0,3) == "GRL"){
                    //print $item."<br>";
                    
                    $value = $item;
                    $info = explode("*", $value);
                    //print_r($info);
                    //print "<br>";
                    
                    $info_array = explode("-", $info[1]);
                    array_push($grill, $info_array);
                    //print_r($starters);
                }
            }
            return $grill;
        }
        else if($section == "CKN"){
             $chicken = array();
            
            foreach ($array as $item) {
                if(substr($item,0,3) == "CKN"){
                    //print $item."<br>";
                    
                    $value = $item;
                    $info = explode("*", $value);
                    //print_r($info);
                    //print "<br>";
                    
                    $info_array = explode("-", $info[1]);
                    array_push($chicken, $info_array);
                    //print_r($starters);
                }
            }
            return $chicken;
        }
        else if($section == "PZA"){
             $pizza = array();
            
            foreach ($array as $item) {
                if(substr($item,0,3) == "PZA"){
                    //print $item."<br>";
                    
                    $value = $item;
                    $info = explode("*", $value);
                    //print_r($info);
                    //print "<br>";
                    
                    $info_array = explode("-", $info[1]);
                    array_push($pizza, $info_array);
                    //print_r($starters);
                }
            }
            return $pizza;
        }
        else if($section == "DST"){
             $dessert = array();
            
            foreach ($array as $item) {
                if(substr($item,0,3) == "DST"){
                    //print $item."<br>";
                    
                    $value = $item;
                    $info = explode("*", $value);
                    //print_r($info);
                    //print "<br>";
                    
                    $info_array = explode("-", $info[1]);
                    array_push($dessert, $info_array);
                    //print_r($starters);
                }
            }
            return $dessert;
        }
        else if($section == "EXA"){
             $extra= array();
            
            foreach ($array as $item) {
                if(substr($item,0,3) == "EXA"){
                    //print $item."<br>";
                    
                    $value = $item;
                    $info = explode("*", $value);
                    //print_r($info);
                    //print "<br>";
                    
                    $info_array = explode("-", $info[1]);
                    array_push($extra, $info_array);
                    //print_r($starters);
                }
            }
            return $extra;
        }
        else if($section == "SCS"){
             $sauces= array();
            
            foreach ($array as $item) {
                if(substr($item,0,3) == "SCS"){
                    //print $item."<br>";
                    
                    $value = $item;
                    $info = explode("*", $value);
                    //print_r($info);
                    //print "<br>";
                    
                    $info_array = explode("-", $info[1]);
                    array_push($sauces, $info_array);
                    //print_r($starters);
                }
            }
            return $sauces;
        }
        else if($section == "BEV"){
             $beverages= array();
            
            foreach ($array as $item) {
                if(substr($item,0,3) == "BEV"){
                    //print $item."<br>";
                    
                    $value = $item;
                    $info = explode("*", $value);
                    //print_r($info);
                    //print "<br>";
                    
                    $info_array = explode("-", $info[1]);
                    array_push($beverages, $info_array);
                    //print_r($starters);
                }
            }
            return $beverages;
        }
    }
    
    
    //put your code here
}
