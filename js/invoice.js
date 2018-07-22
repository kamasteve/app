$(function () {
    $('#create_invoice').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://ec2-18-130-16-81.eu-west-2.compute.amazonaws.com/app/ajax/createInvoice.php";
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