<?php

function oddN($l, $r){
    for($l; $l<=$r; $l++){
        if($l%2){
            echo $l."<br>";
        }
    }
}

// oddN(2,5);

function slitter($str){
    //split the entire text
    $str = strval($str);
    // var_dump($str);
    $scater = str_split($str, 1); // convert the input to array
    
    $out = array(); //provision output array

    //re combine the scater values 
    foreach($scater as $pos=>$word){
        //get length
        if(count($out)>0){
        
            //FIRST APPROACH

            if(strstr($out[count($out)-1], $word) ){
                $out[count($out)-1] .= $word;
            }else{
                if(group($word, $out)){
                    $out = group($word, $out);
                }else{
                    array_push($out, $word);
                }
                // echo count($out);
                // echo "<br>";
                echo json_encode($out);
                echo "<br>";
            }

                //SECOND APPROACH
            
        }else{
            array_push($out, $word);
        }
        
    }

    echo count($out);
    echo "<br>";
    echo json_encode($out);
    
}

function group($key, $array){
    $status = false;
    foreach($array as $pos=>$group){
        //search each group if key is in it
        
        /** 
         * string search against needle and haystact of string '0' will always fail. used the code below to hack this
         * hack start
         */
        if($group==="0"&&$key==="0"){
            $status = true;
            $array[$pos].=$key;
        }
        //hack end

        if(strstr(strval($group), strval($key))){
            $array[$pos].=$key;
            $status = true;
            echo $key."<br>";
        }
    }
    return $status?$array:$status;
}

slitter("10002033450555fasodijuiwefajnksdnksvjasnuevhweufma;elf,spdojawoiehawef;lma;efawoef!@@##$#%$^%&%*^^)_$+$_$)%(%*^&%*#^!~`6777889233445214564523470,891723412375231984724193256,198234120983,47123501298,3416501235234590798739853");
// slitter("AABBBBPPPPCG##%%");

function smiley($str){
    $str = strval($str);

    $str = explode(" ", $str);
    $faceComponents = [';',':','~','-',')','(','_', '^', '*', '+', ':D','-D'];

    //loop and seek
    $count = 0;
    foreach($str as $word){
        if(in_array(str_split($word, 1), $faceComponents)){
            $count++;
        }
    }

    return $count;
}

// smiley("Gosh this is such a :) face. Peter must be celebrating after a :~) event");