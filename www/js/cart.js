

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

function conversPrice({$item['id']}, {$item['price']}){

    {
        let postData = getData ('#profile');
    
        $.ajax({
            type: 'POST',
            async: false,
            url: '/?controller=user&action=update&name=' + postData['newName'] + '&phone=' + postData['newPhone'] + '&address=' + postData['newAddress'] + '&pwd1=' + postData['newPwd1'] + '&pwd2=' + postData['newPwd2'] + '&curPwd=' + postData['curPwd'],
            dataType: 'json',
            success: function(data) {
                if (data['success']){
                    alert(data['message']);            
            } else {
                    alert(data['message']);
            }
            }
        });
    }
    
}