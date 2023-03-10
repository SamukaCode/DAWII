var curso = {
    sigla: "TI",
    nome: "Técnico de Informática",
    disciplinas: [
        {
            sigla: "DS",
            nome: "Desenvolvimento de Aplicações Web"
        },
        {
            sigla: "LP",
            nome: "Lógica de Programação"
        },
    ]
};

console.log(curso.sigla);
console.log(curso.nome);

console.log(curso.disciplinas);

console.log(curso.disciplinas[0].sigla);
console.log(curso.disciplinas[0].nome);
curso.disciplinas[0].sigla = "DAW";
console.log(curso.disciplinas[1].sigla);
console.log(curso.disciplinas[1].nome);