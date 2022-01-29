<?php
class Number{
    protected int $value;

    public function  __construct(int $value){
        $this->value=$value;
    }
    public function get_sum_one_divisor(int $divisor){
        $S=0;
        for ($i = 1; $i < $this->value; $i++) {
            $S+=$i*($i%$divisor==0);
        }
        return $S;
        
    }
    public function get_sum_with_two_divisors(int $divisor1, int $divisor2){
        $S=$this->get_sum_one_divisor($divisor1)+$this->get_sum_one_divisor($divisor2)-$this->get_sum_one_divisor($divisor1*$divisor2);
        return $S;
    }
}
$x=new Number(1000);
echo $x->get_sum_with_two_divisors(3,5);
?>