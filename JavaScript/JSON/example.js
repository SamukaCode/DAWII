var alunoObj = {
    ra: 12345,
    nome:"Samuka"
}

var alunoStr = JSON.stringify(alunoObj); //convertendo o obj JS para um JSON (formato texto)
console.log("Obj em JSON:");
console.log(alunoStr);

var novoAlunoObj = JSON.parse(alunoStr); //convertendo o JOSN (formato texto) para um obj JS
console.log("Json em JS");
console.log(novoAlunoObj.ra);
console.log(novoAlunoObj.nome);