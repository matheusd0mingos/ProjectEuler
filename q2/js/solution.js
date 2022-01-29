class Fibonacci{
    fib_n(n){
        var vec=[1,2]
        for(var i=1; i<n; i++){
            [vec[0], vec[1]]=[vec[1], vec[0]+vec[1]]
        }
        return vec[0]
    }
    get_sum_of_fibs_limited(option, limit){
        //option=0: Soma dos pares
        //option=1: Soma dos impares
        //option!=0 and !=1 Soma global
        var S=0;
        var i=1;
        var comparador;
        if (option==0){
            comparador=0;
        }
        else if (option==1){
            comparador=1;
        }
        while(true){
            var fib_i=this.fib_n(i);
            if (fib_i>=limit){
                break;
            }
            if (comparador==0 || comparador==1){
                S+=fib_i*(fib_i%2==comparador);
            }
            else{
                S=get_sum_of_fibs_limited(0, limit)+get_sum_of_fibs_limited(1, limit)
            }
            i++
        }
        return S
    }
}
fib=new Fibonacci();
console.log(fib.get_sum_of_fibs_limited(0,4000000))