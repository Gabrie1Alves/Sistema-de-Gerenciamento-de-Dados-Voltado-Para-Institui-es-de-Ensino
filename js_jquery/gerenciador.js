function select_op_professor(op){
    if(op === 'aluno'){
        $('#aluno').removeClass('d-none');
        $('#professor, #disciplina, #horario').addClass('d-none');
    }else if(op === 'professor'){
        $('#aluno, #disciplina, #horario').addClass('d-none');
        $('#professor').removeClass('d-none');
    }else if(op === 'disciplina'){
        $('#aluno, #professor, #horario').addClass('d-none');
        $('#disciplina').removeClass('d-none');
    }
    // else if(op === 'horario'){
    //     $('#aluno, #professor, #disciplina').addClass('d-none');
    //     $('#horario').removeClass('d-none');
    // }
}

function selectTurma(){
    var op = $("#turma option:selected").val();
    console.log(op);
    if(op == 'a'){
        $('#texto-info-excluir').text("Matricula do aluno:");
    }else if (op == 'p'){
        $('#texto-info-excluir').text("Matricula do professor:");
    }  
}

function teste(){
    var op = $("#acao option:selected").val();
    if(op === 'aluno'){
        console.log('aa');
        $('#texto-select').text("RG do aluno:");
    }else if(op === 'professor'){
        $('#texto-select').text("CPF do professor:");
    }else if(op === 'disciplina'){
        $('#texto-select').text("Nome da dsiciplina:");
    }
    // else if(op === 'turma'){
    //     $('#texto-select').text("Nome da turma:");
    // }
}
