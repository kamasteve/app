
$(document).ready(function() {

  $('a[data-toggle=modal], button[data-toggle=modal]').click(function () {

    var my_id = '*missing*';

    if (typeof $(this).data('my-id') !== 'undefined') {
      my_id = $(this).data('my-id');
    }
	

    $.ajax({
        url: "http://localhost:6060/app/fetch_record.php",
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
    var name=$("#name").val();
    var amount=$("#amount").val();
    var responsible=$("#responsible").val();
    var mode=$("#mode").val();
    var payment_ref=$("#payment_ref").val();
    var tenant_id=$("#tenant_id").val();

    $.ajax({
        url: "http://localhost:6060/app/update_record.php",
        type: "POST",
        data: {
           id_:id_,
           payment_ref:payment_ref,
           name:name,
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
  
  $('#myTable').DataTable( {
	dom: 'T<"clear">lfrtip',
	tableTools: {
        "sSwfPath": "/swf/copy_csv_xls_pdf.swf"
    }
	} );

});
	  
