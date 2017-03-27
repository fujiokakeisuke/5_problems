<html>
<head>
<title></title>
</head>
<body>
<?php
$line = $_POST["line"];
$s = new sum0();
try{
    $s->a = explode(" ",$line);
}catch(Exception $e){
    echo "書式が間違っています。";
}
$T = TRUE;
for($i = 0 ; $i < count($a) ; $i++){
    if(is_numeric($a[$i]) == FALSE){
        $T = FALSE ;
    }
}
if($T == TRUE){
    $s->initial();
    $s->forsum();
    $s->initial(count($a));
    $s->recusum();
    $s->initial();
    $s->whilesum();
}else{
    echo "書式が間違っています。";
}
class sum0{
    public $a;
    public $sum;
    function forsum(){
        for($i = 0 ; $i < count($a) ; $i++){
            $this->sum = $this->a[$i] + $this->sum;
        }
        echo "for文で求めた合計は".$this->sum."<br/>";
    }
    function recusum($N){
        if($N != 0){
            $this->sum = $this->a[($N - 1)] + $this->sum;
            $this->recusum(N -1);
        }else{
            echo "再帰で求めた合計は".$this->sum."<br/>";
        }
    }
    function whilesum(){
        $i = 0;
        while(N < count($a)){
            $this->sum = $this->sum + $a[$i];
            $i = $i + 1;
        }
        echo "while文で求めた合計は".$this->sum."<br/>";
    }
    function initial(){
        $this->sum = 0;
        $this->a = explode(" ",$line);
    }
}
?>
<a href="fizzbuzz101.html">前のページに戻る。</a>
</body>
</html>