function select_op_professor(op){
    if(op === 'criar'){
        $('#criar').removeClass('d-none');
        $('#alterar').addClass('d-none');
        $('#excluir').addClass('d-none');
    }else if(op === 'alterar'){
        $('#criar').addClass('d-none');
        $('#alterar').removeClass('d-none');
        $('#excluir').addClass('d-none');
    }else if(op === 'excluir'){
        $('#criar').addClass('d-none');
        $('#alterar').addClass('d-none');
        $('#excluir').removeClass('d-none');
    }
}