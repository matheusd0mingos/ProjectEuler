<?php
class Number{
    protected int $value;

    public function __construct(int $value){
        $this->value=$value;

    }

    public function prime_check(int $test){
        $isPrime=1;
        for($i=2; $i<=ceil(sqrt($test)); $i++){
            if ($test%$i==0){
                $isPrime=0;
            }
        }
        return $isPrime;
    }
    public function prime_decomposition(){
        $prime_array=[];
        for($i=1; $i<=ceil(sqrt(($this->value))); $i++){
            if($this->value % $i==0 && $this->prime_check($i)){
                $prime_array[]=$i;
            }    
        }
        return $prime_array;
    }
}
$time_start = microtime(true); 

$number= new Number(600851475143);
echo end($number->prime_decomposition());
$time_end = microtime(true);
$execution_time = ($time_end - $time_start);
echo '<b>Total Execution Time:</b> '.$execution_time.' Sec';
?>