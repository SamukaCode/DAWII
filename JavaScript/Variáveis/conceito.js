// escopo de var
var nome = 'Samuka'

if(nome != null) {
    var sobrenome = 'Camargo';
    console.timeLog(nome + ' ' + sobrenome);
}

console.log(sobrenome) /* Acessível fora do if*/

// let

let universidade = 'Unicamp'

if(nome != null) {
    let colegio = 'Cotil';
    console.log(universidade + '/' + colegio);
}

//console.log(colegio) /* Não é acessível fora do if*/

// const

const IDADE = 18;
// idade = 21; - ERRADO, não pode mudar 
console.log(IDADE);

// É uma boa prática de programação declarar const em MAIÚSCULA.