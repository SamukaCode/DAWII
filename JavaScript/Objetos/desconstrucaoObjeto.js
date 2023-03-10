const pessoa = {
    nome: "Samuel",
    sobrenome: "Camargo",
    idade: 18,
    cargo: "Professor"
};

console.log(pessoa);

// let nome = pessoa.nome;
let {nome} = pessoa;

console.log(nome);

// let sobrenome = pessoa.sobrenome;
let {sobrenome} = pessoa;
console.log(sobrenome);

let {idade, cargo} = pessoa;
console.log(idade);
console.log(cargo);

// let funcao = pessoa.cargo
let {cargo: funcao} = pessoa; // declara var funcao com o conteudo do atribulo pessoa.cargo
console.log(funcao);

nome = "Maria";
console.log(nome);
console.log(pessoa)