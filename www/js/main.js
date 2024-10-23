function addToCart(itemId) {
    console.log ("js-addToCart(" + itemId + ")");

    $.ajax({
        type: 'POST',
        async: false,
        url: "/?controller=cart&action=addtocart&id=" + itemId + "/",
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                $('#cartCntItems').html(data['cntItems']);
                $('#addCart_'+itemId).hide();
                $('#removeFromCart_'+itemId).show();
            }
        }
    });
}

function removeFromCart(itemId) {
    // console.log ("js-removeFromCart(" + itemId + ")");

    $.ajax({
        type: 'POST',
        async: false,
        url: "/?controller=cart&action=removeFromCart&id=" + itemId + "/",
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                $('#cartCntItems').html(data['cntItems']);
                $('#addCart_'+itemId).show();
                $('#removeFromCart_'+itemId).hide();
            }
        }
    });
}
