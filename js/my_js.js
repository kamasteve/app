
$(document).ready(function() {

  $('a[data-toggle=modal], button[data-toggle=modal]').click(function () {

    var my_id = '*missing*';

    if (typeof $(this).data('my-id') !== 'undefined') {
      my_id = $(this).data('my-id');
    }
	

    $.ajax({
        url: "http://localhost/app/fetch_record.php",
        type: "POST",
        dataType: 'json',
        data: {
          id:my_id
        },
        success: function(result){
          for(var i = 0; i < result.length; i++) {
          var obj = result[i];

          $("#id_").val(obj.invoice);
          $("#total").val(obj.total);
          $("#name").val(obj.name);
          $("#amount").val(obj.amount);
          $("#fname").val(obj.fname);
          $("#lname").val(obj.lname);
         // $("#mode").val(obj.mode);
          $("#tenant_id").val(obj.tenant_id);
		  $("#period").val(obj.period);
          }
        }
      });
  })// end of edit button action

  $('#update_record').click(function () {

    var id_=$("#id_").val();
    var fname=$("#fname").val();
    var total=$("#total").val();
    var amount=$("#amount").val();
    var responsible=$("#responsible").val();
    var mode=$("#mode").val();
    var payment_ref=$("#payment_ref").val();
    var tenant_id=$("#tenant_id").val();
	var period=$("#period").val();

    $.ajax({
        url: "http://localhost/app/update_record.php",
        type: "POST",
        data: {
           id_:id_,
           payment_ref:payment_ref,
           total:total,
           amount:amount,
           responsible:responsible,
           mode:mode,
           tenant_id:tenant_id,
		   period:period
        },
        success: function(result){
          console.log("Update response: "+result);
        }
      });
  })// end of update button action
    $('#update_user').click(function () {

    var id_=$("#id_").val();
    var fname=$("#fname").val();
    var lname=$("#lname").val();
    var email=$("#email").val();
    var phone_number=$("#phone_number").val();
    var country=$("#country").val();
    var company=$("#company").val();
    var role=$("#role").val();

    $.ajax({
        url: "http://localhost/app/ajax/update_profile.php",
        type: "POST",
        data: {
           username:id_,
           fname:fname,
           lname:lname,
           email:email,
           phone_number:phone_number,
           country:country,
           company:company,
		   role:role
        },
        success: function(result){
          console.log("Update response: "+result);
        }
      });
  })
   $('#update_unit').click(function () {

    var id_=$("#id_").val();
    var type=$("#type").val();
    var beds=$("#beds").val();
    var email=$("#email").val();
    var rent=$("#rent").val();
    var country=$("#country").val();
    var company=$("#company").val();
    var role=$("#role").val();

    $.ajax({
        url: "http://localhost/app/ajax/update_unit.php",
        type: "POST",
        data: {
           id:id_,
           type:type,
           beds:beds,
           rent:rent,
           
           country:country,
           company:company,
		   role:role
        },
        success: function(result){
          console.log("Update response: "+result);
        }
      });
  })
  $('#delete_record').click(function () {

    var id_=$("#id_").val();
    var fname=$("#fname").val();
    var total=$("#total").val();
    var amount=$("#amount").val();
    var responsible=$("#responsible").val();
    var mode=$("#mode").val();
    var payment_ref=$("#payment_ref").val();
    var tenant_id=$("#tenant_id").val();

    $.ajax({
        url: "http://localhost/app/ajax/delete_record.php",
        type: "POST",
        data: {
           id_:id_,
           payment_ref:payment_ref,
           total:total,
           amount:amount,
           responsible:responsible,
           mode:mode,
           
           tenant_id:tenant_id
        },
        success: function(result){
          console.log("Update response: "+result);
        }
      });
  })
   $('#delete_user').click(function () {

    var id_=$("#id_").val();
    var fname=$("#fname").val();
    var total=$("#total").val();
    var amount=$("#amount").val();
    var responsible=$("#responsible").val();
    var mode=$("#mode").val();
    var payment_ref=$("#payment_ref").val();
    var tenant_id=$("#tenant_id").val();

    $.ajax({
        url: "http://localhost/app/ajax/delete_user.php",
        type: "POST",
        data: {
           id_:id_,
           payment_ref:payment_ref,
           total:total,
           amount:amount,
           responsible:responsible,
           mode:mode,
           
           tenant_id:tenant_id
        },
        success: function(result){
          console.log("Update response: "+result);
        }
      });
  })
  
    $('#add_unit_edit').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
			
            var url = "http://localhost/app/ajax/add_unit.php";
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
                        $('#add_unit_edit').find('.messages').html(alertBox);
                        //$('#edit_tentant')[0].reset();
						
                    }
                }
            });
            return false;
        }
    });

  $('a[data-toggle=modal], button[data-toggle=modal]').click(function () {

    var my_id = '*missing*';

    if (typeof $(this).data('my-id') !== 'undefined') {
      my_id = $(this).data('my-id');
    }
	

    $.ajax({
        url: "http://localhost/app/ajax/fetch_expense.php",
        type: "POST",
        dataType: 'json',
        data: {
          id:my_id
        },
        success: function(result){
          for(var i = 0; i < result.length; i++) {
          var obj = result[i];

          $("#id_").val(obj.id);
          $("#payee").val(obj.payee);
          $("#due_date").val(obj.due_date);
          $("#credit").val(obj.credit);
          $("#fname").val(obj.fname);
          $("#lname").val(obj.lname);
         // $("#mode").val(obj.mode);
          $("#tenant_id").val(obj.tenant_id);
          }
        }
      });
  })
  $('a[data-toggle=modal], button[data-toggle=modal]').click(function () {

    var my_id = '*missing*';

    if (typeof $(this).data('my-id') !== 'undefined') {
      my_id = $(this).data('my-id');
    }
	

    $.ajax({
        url: "http://localhost/app/ajax/fetch_user.php",
        type: "POST",
        dataType: 'json',
        data: {
          id:my_id
        },
        success: function(result){
          for(var i = 0; i < result.length; i++) {
          var obj = result[i];

          $("#id_").val(obj.username);
          $("#email").val(obj.email);
          $("#fname").val(obj.fname);
          $("#country").val(obj.nationality);
          $("#role").val(obj.role);
          $("#lname").val(obj.lname);
         $("#company").val(obj.company);
          $("#phone_number").val(obj.phone);
          }
        }
      });
  })
  $('#delete_expense').click(function () {

    var id_=$("#id_").val();
    var fname=$("#fname").val();
    var total=$("#total").val();
    var amount=$("#amount").val();
    var responsible=$("#responsible").val();
    var mode=$("#mode").val();
    var payment_ref=$("#payment_ref").val();
    var tenant_id=$("#tenant_id").val();

    $.ajax({
        url: "http://localhost/app/ajax/delete_expense.php",
        type: "POST",
        data: {
           id_:id_,
           payment_ref:payment_ref,
           total:total,
           amount:amount,
           responsible:responsible,
           mode:mode,
           
           tenant_id:tenant_id
        },
        success: function(result){
          console.log("Update response: "+result);
        }
      });
  }) 
  $('#myTable').DataTable( {
	dom: 'T<"clear">lfrtip',
	tableTools: {
        "sSwfPath": "/swf/copy_csv_xls_pdf.swf"
    }
	} );
	$('a[data-toggle=modal], button[data-toggle=modal]').click(function () {

    var my_id = 'payexpense';

    if (typeof $(this).data('my-id') !== 'undefined') {
      my_id = $(this).data('my-id');
    }
	

    $.ajax({
        url: "http://localhost/app/ajax/fetch_expense.php",
        type: "POST",
        dataType: 'json',
        data: {
          id:my_id
        },
        success: function(result){
          for(var i = 0; i < result.length; i++) {
          var obj = result[i];

          $("#expense_id").val(obj.id);
          $("#responsible").val(obj.payee);
          $("#due_date").val(obj.due_date);
          $("#amount").val(obj.credit);
          $("#property").val(obj.property);
          $("#lname").val(obj.lname);
         // $("#mode").val(obj.mode);
          $("#tenant_id").val(obj.tenant_id);
          }
        }
      });
  })
  $('a[data-toggle=modal], button[data-toggle=modal]').click(function () {

    var my_id = 'payexpense';

    if (typeof $(this).data('my-id') !== 'undefined') {
      my_id = $(this).data('my-id');
    }
	

    $.ajax({
        url: "http://localhost/app/ajax/fetch_unit.php",
        type: "POST",
        dataType: 'json',
        data: {
          id:my_id
        },
        success: function(result){
          for(var i = 0; i < result.length; i++) {
          var obj = result[i];

          $("#id_").val(obj.unit_id);
          $("#type").val(obj.unit_type);
          $("#beds").val(obj.bed);
          $("#rent").val(obj.rent);
          $("#property").val(obj.property);
          $("#lname").val(obj.lname);
         // $("#mode").val(obj.mode);
          $("#tenant_id").val(obj.tenant_id);
          }
        }
      });
  })
  $('#payexpenses').click(function () {

    var id_=$("#id_").val();
    var fname=$("#fname").val();
    var total=$("#total").val();
    var amount=$("#amount").val();
    var responsible=$("#responsible").val();
    var mode=$("#mode").val();
    var payment_ref=$("#payment_ref").val();
    var property=$("#property").val();

    $.ajax({
        url: "http://localhost/app/ajax/payexpense.php",
        type: "POST",
        data: {
           id_:id_,
           payment_ref:payment_ref,
           total:total,
           amount:amount,
           responsible:responsible,
           mode:mode,
           property:property
        },
        success: function(result){
          console.log("Update response: "+result);
        }
      });
  })// end of update button ac
 

});
	  
