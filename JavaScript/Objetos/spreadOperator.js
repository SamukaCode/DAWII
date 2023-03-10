var pessoa = {
    nome: "Simone",
    idade: 20,
    cargo: "Professora",
};

console.log(pessoa);

var novaPessoa = {
    ...pessoa,
    anoAtual: 2020,
    cidade: "Limeira"
};

console.log(novaPessoa);

console.log("\n=====-=====\n");

function cadastraPessoa(info) {
    let novosDados = {
        ...info,
        cargo: "Professor",
        status: "atuando",
        codigo: 1234
    };

    console.log(novosDados);
}

cadastraPessoa({nome: "Samuel", sobrenome: "Camargo", anoInicio: 2021});