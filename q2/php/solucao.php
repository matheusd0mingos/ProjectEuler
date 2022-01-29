<?php
class Fibonacci{
    public $x1=1;
    public $x2=2;

    public function get_term_n($n){
        $vetor=[$this->x1, $this->x2];
        for($i=1; $i<$n; $i++){
            [$vetor[0],$vetor[1]]=[$vetor[1], $vetor[0]+$vetor[1]];
        }
        return $vetor[0];
    }
    public function get_sum_option_n_limit($option, $limit){
        $S=0;
        $i=1;
        if($option==0){
            $comparador=0;

        }
        elseif($option==1){
            $comparador=1;
        }
        if ($option==0 || $option==1){
            while ($this->get_term_n($i)<$limit){
                if ($this->get_term_n($i) % 2==$comparador){
                    $S+=$this->get_term_n($i);
                }
                $i++;
            }   
        }
        else{
            $S= $this->get_sum_option_n_limit(0, $limit)+$this->get_sum_option_n_limit(1, $limit);
        }
        return $S;
    }

}

$fib=new Fibonacci();
echo $fib->get_sum_option_n_limit(2, 10);
?>