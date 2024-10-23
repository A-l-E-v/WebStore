
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


// регистрация нового пользователя

function registerNewUser(){
    let postData = getData ('.reg');

    $.ajax({
        type: 'POST',
        async: false,
        url: '/?controller=user&action=register&name=' + postData['name'] + '&email=' + postData['email'] + '&pwd1=' + postData['pwd1'] + '&pwd2=' + postData['pwd2'],
        dataType: 'json',
        success: function(data) {
            alert(data['message']);
        }
    });
}