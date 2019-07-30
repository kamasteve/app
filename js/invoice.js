$(function () {
    $('#create_invoice').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "/app/ajax/createInvoice.php";
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    var messageAlert = 'alert-' + data;
                    var messageText = data;
                    //alert(data);
                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#create_invoice').find('.messages').html(alertBox);
                        $('#create_invoice')[0].reset();
						//window.location.reload();
                    }
                }
            });
            return false;
        }
    })
});
$(function () {
    $('#create_invoice1').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "/app/ajax/record_payment.php";
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    var messageAlert = 'alert-' + data;
                    var messageText = data;
                    //alert(data);
                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#create_invoice1').find('.messages').html(alertBox);
                        $('#create_invoice1')[0].reset();
						//window.location.reload();
                    }
                }
            });
            return false;
        }
    })
});