class Numero{
    constructor(valor){
        this.valor=valor;
    }
    get_sum_one_divisor(divisor){
        var S=0
        for(var i=1; i<this.valor; i++){
            S+=i*(i%divisor==0)
        }
        return S
    }
    get_sum_two_divisors(divisor1, divisor2){
        return this.get_sum_one_divisor(divisor1)+this.get_sum_one_divisor(divisor2)-this.get_sum_one_divisor(divisor1*divisor2)
    }
}

const x= new Numero(1000)
console.log(x.get_sum_two_divisors(3,5))