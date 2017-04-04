
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
          $("#payer_code").val(obj.payercode);
          $("#line_number").val(obj.linenumber);
          }
        }
      });
  })// end of edit button action

  $('#update_record').click(function () {

    var id_=$("#id_").val();
    var external_id=$("#external_id").val();
    var name=$("#name").val();
    var amount=$("#amount").val();
    var product_code=$("#product_code").val();
    var custcode=$("#custcode").val();
    var payer_code=$("#payer_code").val();
    var line_number=$("#line_number").val();

    $.ajax({
        url: "http://localhost:6060/app/update_record.php",
        type: "POST",
        data: {
           id_:id_,
           external_id:external_id,
           name:name,
           amount:amount,
           product_code:product_code,
           custcode:custcode,
           payer_code:payer_code,
           line_number:line_number
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
	  
