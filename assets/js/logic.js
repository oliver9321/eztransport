
function AddVehicleList() {

    $('#templateVehiculo').find(".select2").each(function(index) {
        if ($(this).data('select2')) {
            $(this).select2('destroy');
        }
    });

   var clonado =  $('#templateVehiculo').clone().val('');
   clonado.removeAttr('hidden');
   clonado.appendTo("#contentVehicle");
   $(clonado).find(".select2").select2({ width:'100%'});

}




function EliminarVehiculo(e) {
    $(e).parent().parent().remove();
}

function saveQuote(){

    vehiclesArray = new Array();
    var Brand, StatusVehicle, Model, Year, ConditionVehicle, CarrierType;
    $(".registroVehiculo").each(function(){
       
       Brand               = $(this).find("input[name='Brand']").val();
       StatusVehicle       = $(this).find("select[name='StatusVehicle']").val();
       Model               = $(this).find("input[name='Model']").val();
       Year                = $(this).find("input[name='Year']").val();
       ConditionVehicle    = $(this).find("select[name='ConditionVehicle']").val();
       CarrierType         = $(this).find("select[name='CarrierType']").val();
       
       if(Brand!=""){
           vehiclesArray.push({'Brand':Brand, 'Model':Model, 'Year':Year, 'ConditionVehicle':ConditionVehicle,'CarrierType':CarrierType, 'StatusVehicle':StatusVehicle  });
       }
});


    $.ajax({
        type: 'POST',
        url: "../system/index.php?c=orders&a=saveQuote",
        data: {'quote': $("#formQuote").serialize(), 'vehicles': vehiclesArray},
        beforeSend:function(){
            $(".btn-finish").hide();
            $("#LoadingButton").show();
        },
        success: function(data) {
            $("#LoadingButton").hide();
             
            if(data){

                    var response = JSON.parse(data);
                               
                    if(response.Error == false){
                        Swal.fire('The quote was sent',response.Message,'success');
                        $("#myModal").modal('hide');

                       $("#PickUpLocation").val('');
                     $("#OriginCity1").val('');
                     $("#OriginState2").val('');
                     $("#ZipCode").val('');  
                     $("#DeliveryLocation").val('');
                     $("#DestinyCity").val('');
                     $("#DestinyState").val('');
                     $("#ZipCode2").val('');
                     $("#ShippingDate").val('');
                     $("#FirstName").val('');
                     $("#LastName").val('');
                     $("#Phone").val('');
                     $("#Email").val('');
                   

                    }else{
                        Swal.fire('Error',response.Message,'error' );
                        $(".btn-finish").show();
                    }   
                  
                }else{
                    Swal.fire('Error',response.Message,'error' );
                    $(".btn-finish").show();
                }
            }
        })
    }

    $(".btn-finish").click(function(){
        saveQuote();
    });