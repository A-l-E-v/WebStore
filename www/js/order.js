// сохранение заказа

function saveOrder(){
    let name = $('#userName').html();
    let phone = $('#userPhone').html();
    let address = $('#userAddress').html();
    
    console.log(name, phone, address);

    $.ajax({
        type: 'POST',
        async: false,
        url: '/?controller=cart&action=saveorder&name=' + name + '&phone=' + phone + '&address=' + address,
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