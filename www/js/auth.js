
// получение данных из формы

function getData(obj_form){

    let hData = {};
    $('input, textarea, select', obj_form).each(function(){
        if (this.name && this.name != ''){
            hData[this.name] = this.value;
            // console.log('hData[' + this.name + '] = ' +hData[this.name]);
        }
    });
    return hData;
}

// логирование существующего пользователя

function loginUser(){
    let postData = getData ('#auth');

    $.ajax({
        type: 'POST',
        async: false,
        url: '/?controller=user&action=login&email=' + postData['emailLogin'] + '&pwd=' + postData['pwdLogin'],
        dataType: 'json',
        success: function(data) {
            if (data['success']){
                window.location.href = '/';
                alert(data['message']);
            } else{
                alert(data['message']);
            }
        }
    });
}