function ehString(campo, id){
    var a = document.getElementsByName(campo);
    elemento = a[id];
    var tel = "";
    num = [1,2,3,4,5,6,7,8,9,0];
    for(let i =0; i<elemento.value.length; i++){
        if(!num.includes(parseInt(elemento.value[i]))){
            tel = tel + elemento.value[i];
        }
    }
    elemento.value = tel;
}
function ehNum(campo, id){
    var a = document.getElementsByName(campo);
    elemento = a[id];
    var tel = "";
    num = [1,2,3,4,5,6,7,8,9,0];
    for(let i =0; i<elemento.value.length; i++){
        if(num.includes(parseInt(elemento.value[i]))){
            tel = tel + elemento.value[i];
        }
    }
    elemento.value = tel;
}
function ehTel(campo, id){
    var a = document.getElementsByName(campo);
    elemento = a[id];
    var tel_ = "";
    var tel = "";
    num = [1,2,3,4,5,6,7,8,9,0];
    for(let i =0; i<elemento.value.length; i++){
        if(num.includes(parseInt(elemento.value[i]))){
            tel = tel + elemento.value[i];
        }
    }
    if(tel.length == 10){
        for(let i =0; i<tel.length; i++){
            if(i == 2){
                tel_ = tel_ +' '+ tel[i];
            }else if(i == 6){
                tel_ = tel_ +'-'+ tel[i];
            }else{
                tel_ = tel_ + tel[i];
            }
        }
        elemento.value = tel_;
    }else{
        elemento.value = "";
    }
}
function ehCel(campo, id){
    var a = document.getElementsByName(campo);
    elemento = a[id];
    var tel_ = "";
    var tel = "";
    num = [1,2,3,4,5,6,7,8,9,0];
    for(let i =0; i<elemento.value.length; i++){
        if(num.includes(parseInt(elemento.value[i]))){
            tel = tel + elemento.value[i];
        }
    }
    if(tel.length == 11){
        for(let i =0; i<tel.length; i++){
            if(i == 2){
                tel_ = tel_ +' '+ tel[i];
            }else if(i == 7){
                tel_ = tel_ +'-'+ tel[i];
            }else{
                tel_ = tel_ + tel[i];
            }
        }
        elemento.value = tel_;
    }else{
        elemento.value = "";
    }
}

function ehCpf(campo, id){
    var a = document.getElementsByName(campo);
    elemento = a[id];
    var tel_ = "";
    var tel = "";
    num = [1,2,3,4,5,6,7,8,9,0];
    for(let i =0; i<elemento.value.length; i++){
        if(num.includes(parseInt(elemento.value[i]))){
            tel = tel + elemento.value[i];
        }
    }
    if(tel.length == 11){
        for(let i =0; i<tel.length; i++){
            if(i == 3){
                tel_ = tel_ +'.'+ tel[i];
            }else if(i == 6){
                tel_ = tel_ +'.'+ tel[i];
            }else if(i == 9){
                tel_ = tel_ +'-'+ tel[i];
            }else{
                tel_ = tel_ + tel[i];
            }
        }
        elemento.value = tel_;
    }else{
        elemento.value = "";
    }
}

function ehCep(campo, id){
    var a = document.getElementsByName(campo);
    elemento = a[id];
    var tel_ = "";
    var tel = "";
    num = [1,2,3,4,5,6,7,8,9,0];
    for(let i =0; i<elemento.value.length; i++){
        if(num.includes(parseInt(elemento.value[i]))){
            tel = tel + elemento.value[i];
        }
    }
    if(tel.length == 8){
        for(let i =0; i<tel.length; i++){
            if(i == 2){
                tel_ = tel_ +'.'+ tel[i];
            }else if(i == 5){
                tel_ = tel_ +'-'+ tel[i];
            }else{
                tel_ = tel_ + tel[i];
            }
        }
        elemento.value = tel_;
    }else{
        elemento.value = "";
    }
}

function ehRg(campo, id){
    var a = document.getElementsByName(campo);
    elemento = a[id];
    var tel_ = "";
    var tel = "";
    num = [1,2,3,4,5,6,7,8,9,0];
    for(let i =0; i<elemento.value.length; i++){
        if(num.includes(parseInt(elemento.value[i]))){
            tel = tel + elemento.value[i];
        }
    }
    if(tel.length == 8){
        for(let i =0; i<tel.length; i++){
            if(i == 2){
                tel_ = tel_ +'.'+ tel[i];
            }else if(i == 5){
                tel_ = tel_ +'.'+ tel[i];
            }else{
                tel_ = tel_ + tel[i];
            }
        }
        elemento.value = tel_;
    }else{
        elemento.value = "";
    }
}

