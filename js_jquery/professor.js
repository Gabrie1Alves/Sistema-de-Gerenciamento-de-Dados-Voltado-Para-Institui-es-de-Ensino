function select_op_professor(op){
    if(op === 'criar'){
        $('#criar').removeClass('d-none');
        $('#alterar, #excluir').addClass('d-none');
    }else if(op === 'alterar'){
        $('#criar, #excluir').addClass('d-none');
        $('#alterar').removeClass('d-none');
    }else if(op === 'excluir'){
        $('#criar, #alterar').addClass('d-none');
        $('#excluir').removeClass('d-none');
    }
}