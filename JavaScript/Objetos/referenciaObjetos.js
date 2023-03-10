var curso = {
    sigla: "TI",
    nome: "Técnico em Informática"
};

// Não cria cópia, cria referência.
var x = curso;
x.sigla = "SI";
x.nome = "Sistemas de Informação"

// Cria cópia.
var y = {...curso};
y.sigla = "SI";
y.nome = "Sistemas de Informação"

console.log(curso.sigla);
console.log(x.sigla);

console.log(curso.nome);
console.log(x.nome);0