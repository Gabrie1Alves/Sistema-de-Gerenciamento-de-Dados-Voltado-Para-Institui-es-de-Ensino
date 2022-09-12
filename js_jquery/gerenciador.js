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
    }else if(op === 'horario'){
        $('#aluno, #professor, #disciplina').addClass('d-none');
        $('#horario').removeClass('d-none');
    }
}