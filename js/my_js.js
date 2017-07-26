
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
           
           tenant_id:tenant_id
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
	  
