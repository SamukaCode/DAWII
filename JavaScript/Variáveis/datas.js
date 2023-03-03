var hoje = new Date();
console.log(hoje);
console.log(typeof hoje);

console.log("=====================================");

var dataPassada = new Date("01/22/1994 15:34:41");
console.log(dataPassada);
console.log(typeof dataPassada);

console.log("=====================================");

var data1 = new Date("25 jul 2017 15:29:40");
console.log(data1);
console.log(typeof data1);

console.log("=====================================");

// meses - jan 0 a dez 0
// ano, mes, dia, hora, min, seg
var data2 = new Date(1994, 0, 22, 15, 23, 35);
console.log(data2);
console.log(typeof data2);

console.log("=====================================");

// exemplo de formatação de data
var hoje2 = new Date(); // data atual
console.log(hoje2); // exibe a data atual
var dia = hoje2.getDate(); // dia do mês
var mes = hoje2.getMonth(); // jan=0, fev= 1, mar=2, ...
var ano = hoje2.getFullYear(); // ano com 4 dígitos
var diaSemanaNum = hoje2.getDay(); // dom=0, seg=1, ter=2, ...

// if (diaSemanaNum == 0) {
//     diaSemana = "domingo";
// } else if (diaSemanaNum == 1) {
//     diaSemana = "segunda";
// }

var semana = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];
var diaSemana = semana[diaSemanaNum];

/*if (mes == 0) {
    mesTextual = "Janeiro";
} else if (mes == 1) {
    mesTextual = "Fevereiro";
} ... */

console.log("=====================================");

var meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
var mesTextual = meses[mes];

var hora = hoje2.getHours(); // hora
var min = hoje2.getMinutes(); // minuto
var seg = hoje2.getSeconds(); // segundo

//console.log(diaSemana + ", " + dia + " de " + mesTextual + " de " + ano + " às " + hora + ":" + min + ":" + seg);
console.log(`${ diaSemana }, ${ dia } de ${ mesTextual } de ${ ano } às ${ hora }: ${ min }: ${ seg }`); // template string

console.log("=====================================");

// Comparação de Datas
var dataX = new Date("10/04/2022");
var dataY = new Date("10/05/2022");

if (+dataX === +dataY) {
    console.log("dataX é igual a dataY");
} else {
    console.log("dataX é diferente de dataY");
}

// para comparar com <= ou >= não precisa de milisegundos
if (dataX <= dataY) {
    console.log("dataX é menor ou igual a dataY");
}

