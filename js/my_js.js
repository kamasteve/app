
$(document).ready(function() {

  $('a[data-toggle=modal], button[data-toggle=modal]').click(function () {

    var my_id = '*missing*';

    if (typeof $(this).data('my-id') !== 'undefined') {
      my_id = $(this).data('my-id');
    }
	

    $.ajax({
        url: "http://ec2-54-186-105-222.us-west-2.compute.amazonaws.com/app/fetch_record.php",
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
        url: "http://ec2-54-186-105-222.us-west-2.compute.amazonaws.com/app/update_record.php",
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
        url: "http://ec2-54-186-105-222.us-west-2.compute.amazonaws.com/app/ajax/delete_record.php",
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
        url: "http://ec2-54-186-105-222.us-west-2.compute.amazonaws.com/app/ajax/fetch_expense.php",
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
  })//
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
        url: "http://ec2-54-186-105-222.us-west-2.compute.amazonaws.com/app/ajax/delete_expense.php",
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
 $('#myModal').on('hidden.bs.modal', function () {
 location.reload();
})

});
	  
