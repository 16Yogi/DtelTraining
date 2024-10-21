<?php
    function datatype(){
        $a = 10;
        $b = "Hello";
        $c = 10.22;
        $d = true;
        $e  = array(1, 2, 3);
        // $f = new color("Red","green");
        $g = null;
    
        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        // var_dump($f);
        var_dump($g);
    
        echo "Hello";

    }
    // datatype();

    function stringfun(){
        $str1 = "Hello I am   string   ";
        echo "String:$str1 <br>";
        echo strlen($str1);
        echo "<br>";
        echo str_word_count($str1);
        echo "<br>";
        echo strpos($str1,"I");
        echo "<br>";
        echo strtoupper($str1);
        echo "<br>";
        echo strtolower($str1);
        echo "<br>";
        echo str_replace("Hello","chalo",$str1);
        echo "<br>";
        echo strrev($str1);
        echo "<br>";
        echo trim($str1);
        
    }

    // stringfun();


    function numberfun(){
        $num1 = 12;
        var_dump(is_int($num1));
        var_dump(is_float($num1));
        var_dump(is_long($num1));
    }
    // numberfun()

    function mathfun(){
        echo(pi());
        echo "<br>";
        echo(min(1,78,54,79,78,1.5,0.2));
        echo "<br>";
        echo(max(78,78,12,10.2));
        echo "<br>";
        echo(abs(-12.2));
        echo "<br>";
        echo(sqrt(64));
        echo "<br>";
        echo(round(0.34));
        echo "<br>";
        echo(round(0.55));
        echo "<br>";
        echo(rand(1000,9999));
        echo "<br>";
        echo __FILE__;
        echo "<br>";
        echo __DIR__;
        echo "<br>";
        echo __FUNCTION__;
        echo "<br>";
        echo __CLASS__;
        echo "<br>";
        echo __NAMESPACE__;
        echo "<br>";
        echo __LINE__;
        echo "<br>";
        echo __METHOD__;
        
    }
    // mathfun();

    function operatorfun(){
        $num1 = 10;
        $num2 = 2;
        
        echo "Arithmetic Operator";
        echo "<br>";
        echo $num1 - $num2;
        echo "<br>";
        echo $num1 + $num2;
        echo "<br>";
        echo $num1 * $num2;
        echo "<br>";
        echo $num1 / $num2;
        echo "<br>";
        echo $num1 % $num2;
        
        echo "<br>";
        
        echo "Assignment Operator";
        echo "<br>";
        echo $num1 = $num2;
        echo "<br>";
        echo $num1+=$num2;
        echo "<br>";
        echo $num1-=$num2;
        echo "<br>";
        echo $num1*=$num2;
        echo "<br>";
        echo $num1/=$num2;
        echo "<br>";
        echo $num1%=$num2;
        
        echo "<br>";

        echo "Comparision Operator";
        echo "<br>";
        echo $num1==$num2;
        echo "<br>";
        echo $num1!=$num2;
        echo "<br>";
        echo $num1===$num2;
        echo "<br>";
        echo $num>$num2;
        echo "<br>";
        echo $num1<$num2;
        echo "<br>";
        echo $num1>=$num2;
        echo "<br>";
        echo $num1<=$num2;
        echo "<br>";
        echo $num1!==$num2;
        echo "<br>";
        echo $num1<>$num2;
        echo "<br>";
        echo $num1<=>$num2;

        echo "<br>";

        echo "Logical Operator";
        echo "<br>";
        echo $num1 && $num2;
        echo "<br>";
        echo $num1 || $num2;
        echo "<br>";
        echo !($num1==$num2);
    }
    // operatorfun();

    function loopstatementswitch(){
        $set_dest1 = "N";
        $set_dest2 = "S";
        $set_dest3 = "E";
        $set_dest4 = "W";
        
        $n_loc = array("Rishikesh and Haridwar","Shimla","Manali","Dharamshala and McLeod Ganj","Leh-Ladakh","Nainital");
        $s_loc = array("Kanyakumari","Mahabalipuram","Kerala","Hampi","Coorg (Kodagu)","Kodaikanal","Ooty","Mysore");
        $e_loc = array("Kolkata","Darjeeling","Sikkim","Bhutan","Puri","Konark","Bhubaneswar","Andaman and Nicobar Islands","Bihar","Assam");
        $w_loc = array("Mumbai","Goa","Rajasthan","Gujarat","Maharashtra","Madhya Pradesh","Diu","anthambore National Park","Kutch","Uttarakhand");
        
        $n_loc1 = "Rishikesh and Haridwar";
        $s_loc1 = "Kanyakumari";
        $e_loc1 = "Darjeeling";
        $w_loc1 = "Mumbai";

        echo "Hey! where you want to visit in india";
        echo  "<br>";
        echo  "N for North";
        echo  "<br>";
        echo  "S for South";
        echo  "<br>";
        echo  "E for East";
        echo "<br>";
        echo  "W for West";

        switch($set_dest4){
            case "N":
                echo "You want to visit in North India";
                // $len_n = count($n_loc);
                $len_n = count($n_loc);
                for($loc1 = 0; $loc1 < $len_n; $loc1++){
                    echo "<br>Location " . ($loc1 + 1) . ": " . $n_loc[$loc1];
                }
                echo "<br>";
                echo "------------------------";
                echo "<br>";
                echo "Select  your location from above list";
                echo "<br>";

                if (in_array($n_loc1, $n_loc)) {
                    echo "Your Booking is confirm for : $n_loc1";
                } else {
                    echo "<br>Location not found.";
                }
                break;
            case "S":
                echo "<br>You want to visit South India.";
                $len_s = count($s_loc);
                for($loc1 = 0; $loc1 < $len_s; $loc1++){
                    echo "<br>Location " . ($loc1 + 1) . ": " . $s_loc[$loc1];
                }
                echo "<br>";
                echo "------------------------";
                echo "<br>";
                echo "Select  your location from above list";
                echo "<br>";

                if(in_array($s_loc1,$s_loc)){
                    echo "You Booking is confirm for: $s_loc1";
                }else{
                    echo "<br>Location not found.";
                }
                break;
            case "E":
                echo "<br>You want to visit East India.";
                $len_e = count($e_loc);
                for($loc1 = 0; $loc1 < $len_e; $loc1++){
                    echo "<br>Location " . ($loc1 + 1) . ": " . $e_loc[$loc1];
                }

                echo "<br>";
                echo "------------------------";
                echo "<br>";
                echo "Select  your location from above list";
                echo "<br>";

                if(in_array($e_loc1,$e_loc)){
                    echo "You booking is confirm for: $e_loc1";
                }else{
                    echo "<br>Location not found.";
                }
                break;
            case "W":
                echo "<br>You want to visit West India.";
                $len_w = count($w_loc);
                for($loc1 = 0; $loc1 < $len_w; $loc1++){
                    echo "<br>Location " . ($loc1 + 1) . ": " . $w_loc[$loc1];
                }

                echo "<br>";
                echo "------------------------";
                echo "<br>";
                echo "Select  your location from above list";
                echo "<br>";

                if(in_array($w_loc1,$w_loc)){
                    echo "Your booking is confirm for: $w_loc1";
                }else{
                    echo "<br>Location not found.";
                }
                break;
            default:
                echo "<br>Please choose a valid direction (N, S, E, W).";
        }        
    }
    // loopstatementswitch();

    function loopfun(){
        for($a=1;$a<=8;$a++){
            echo $a;
            echo "<br>";
        }  

        echo "---------------------";
        echo "<br>";

        $b =1;
        while($b<=5){
            echo $b." ";
            $b++;
            if($b==2){
                echo $b;
            }
            // $b++;
        }

        echo "<br>";
        echo "---------------------";
        echo "<br>";
        
        $c = 1;
        do{
            echo $c." ";
            $c++;
        }while($c<=6);

        echo "<br>";
        echo "---------------------";
        echo "<br>";

        $colors = array("red", "green", "blue", "yellow");
        foreach($colors as $x){
            echo "$x<br>";
        }
        
        echo "<br>";
        echo "---------------------";
        echo "<br>";

        $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        foreach($members as $x => $y){
            echo "Key: $x, Value: $y<br>";
        }

        echo "<br>";
        echo "---------------------";
        echo "<br>";

    }
    // loopfun();

    function arrayfun(){
        $arr = array("apple", "banana", "cherry", "date", "elder");
        echo $arr[0];
        echo "<br>";
        $arr[0]="Apply";
        echo $arr[0];
        echo "<br>";

        foreach($arr as $i){
            echo " $i , ";
        }

        $len = count($arr);
        for($i=0;$i<=$len;$i++){
            echo $arr[$i].",";
        }
        echo "<br>";
        echo "<br>";


        $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
        echo $car["model"];
        echo "<br>";
        var_dump($car);
        echo "<br>";
        $car["year"] = 2050;
        echo $car["year"];
        echo "<br>";
        
        foreach($car as $x => $y){
            echo "$x:$y <br>";
        }

        $cars1 = array("Volvo", "BMW", "Toyota");
        unset($cars1[1]);
        echo $cars1[2];
        echo $cars1[1];
        echo $cars1[0];

    }

    // arrayfun();

    function sumOfNumber() {
        $num1 = 10;
        $sum = 0; // Initialize the sum variable
    
        for ($i = 0; $i <= $num1; $i++) {
            echo $i . "<br>"; // Print the current value of i
            $sum += $i; // Accumulate the sum
        }
        
        echo "Result: " . $sum; // Print the final result
    }
    
    // Call the function    
    // sumOfNumber();
    
    $a1 = 12;
    function superglobal(){
        echo $GLOBALS['a1'];
        echo "<br>";
        echo $_SERVER['PHP_SELF'];
        echo "<br>";

        echo $_SERVER['SERVER_NAME'];
        echo "<br>";

        echo $_SERVER['HTTP_HOST'];
        echo "<br>";

        echo $_SERVER['HTTP_REFERER'];
        echo "<br>";

        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";

        echo $_SERVER['SCRIPT_NAME'];
        echo "<br>";

        $_REQUEST['form.php'];  

    }
    superglobal();
    
?>