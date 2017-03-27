<html>
    <head>
        <title>５つ目の問題　-出力-</title>
    </head>
    <body>
        <?php
        for($i = 0 ; $i < (3*3*3*3*3*3*3*3*3) ; $i++){
            $num = $i;
            $numres = 1;
            $k = 0;
            $s ="1";
            $T = FALSE;
            if(substr_count(base_convert($num, 10, 3),"00") > 0){
                continue;
            }
            for($j = 2 ; $j < 10 ; $j++){
                switch($num % 3){
                    case 0:
                        $k = $j*10 + ($j+1);
                        $T = TRUE;
                        break;
                    case 1:
                        if($T == TRUE){
                            $numres = $numres + $k;
                            $s = $s."+".$k;
                        }else{
                            $numres = $numres + $j;
                            $s = $s."+".$j;
                        }
                        $T = FALSE;
                        break;
                    case 2:
                        if($T == TRUE){
                            $numres = $numres - $k;
                            $s = $s."-".$k;
                        }else{
                            $numres = $numres - $j;
                            $s = $s."-"."$j";
                        }
                        $T = FALSE;
                }
                $num = $num / 3;
            }
            if($numres == 100 && T == FALSE){
                print $s."=100<br/>";
            }
        }
                
        ?>
    </body>
</html>