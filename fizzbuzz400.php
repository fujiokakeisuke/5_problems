<heml>
    <head>
        <title>
            2つ目の問題 -出力-
        </title>
    </head>
    <body>
        <?php
        $line1 = $_POST["line1"];
        $line2 = $_POST["line2"];
        $r = new re();
        try{
            $r->Bond($line1,$line2);
        }catch(Exception $e){
            echo "不具合が生じました。";
        }
        class re{
            function Bond($line1 , $line2){
                $line1 = ltrim($line1,"[");$line2 =ltrim($line2,"[");
                $line1 = rtrim($line1,"]");$line2 =rtrim($line2,"]");
                $line = "";
                for($i = 0 ; $i < (mb_substr_count($line1,",") + 1) ;$i++){
                $a = explode(",",$line1);
                $b = explode(",",$line2);
                }
                for($i = 0 ; $i < (mb_substr_count($line1,",") + 1) ; $i++){
                    $line = $line ."," ."$a[i]" ."," . "b[i]";
                }
                echo "[".$line."]";
            }
        }
        ?>
        <a href = "fizzbuzz201.html">前に戻る</a>
    </body>
</html>
