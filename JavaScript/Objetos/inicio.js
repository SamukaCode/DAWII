var objetoVazio = {};
console.log("objeto vazio:" + objetoVazio);

var disciplina = {
    sigla: "DAW",
    nome: "Desenvolvimento de Aplicações Web"
};

console.log("disciplina:" + disciplina);
console.log("disciplina.sigla:" + disciplina.sigla);
console.log("disciplina.nome:" + disciplina.nome);

// Criando objetos com create
var curso = new Object();
curso.nome = 'JavaScript Básico';
curso.responsavel = 'Prof. João';

curso['nome'] = 'JavaScript Básico';
curso['responsavel'] = 'Prof. João';