function GetListVehicles() {

    $.ajax({
        type: 'POST',
        url: "./system/index.php?c=vehicles&a=GetListVehicles",
        beforeSend: function() {
    }}).then(function(response) {

        $('.BrandVehicle, .ModelVehicle').empty();

        var data = JSON.parse(response);

        if (data.BrandsList.length > 0) {

            data.BrandsList.forEach(element => {
                var optionBucle = new Option(element.Brand, element.Brand, true, true);
                $('.BrandVehicle').append(optionBucle); //.trigger('change');
            });
        }

        if (data.ModelsList.length > 0) {

            data.ModelsList.forEach(element => {
                var optionBucle = new Option(element.Model, element.Model, true, true);
                $('.ModelVehicle').append(optionBucle); //.trigger('change');
            });

        }

        var optionDefault = new Option("Select brand", "", true, true);
        $('.BrandVehicle').append(optionDefault);
        $('.BrandVehicle').val("").trigger('change');

        var optionDefault2 = new Option("Select model", "", true, true);
        $('.ModelVehicle').append(optionDefault2);
        $('.ModelVehicle').val("").trigger('change');   
    
    });

}

GetListVehicles();

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

function GetModelsByBrand(e) {

    let Brand = $(e).val();
    
    if (Brand != "") {
    
        $.ajax({
            type: 'POST',
            url: "./system/index.php?c=vehicles&a=GetModelsByBrand",
            data: {
                'Brand': Brand
            }
        }).then(function(response) {
    
            if (response) {
    
                var newOptions = JSON.parse(response);
                var count = $('.BrandVehicle:not(:hidden)').closest('div').next().find('.ModelVehicle:not(:hidden)').length - 1;
                var htmlSelect = $('.BrandVehicle:not(:hidden)').closest('div').next().find('.ModelVehicle:not(:hidden)')[count];
                $(htmlSelect).empty();
    
                var optionDefault = new Option("Select the model", "", true, true);
                $(htmlSelect).append(optionDefault);
    
                newOptions.forEach(element => {
                    var optionBucle = new Option(element.Model, element.Model, true, true);
                    $(htmlSelect).append(optionBucle);
                });
    
            }
    
        })
    }
    }



function EliminarVehiculo(e) {
    $(e).parent().parent().remove();
}

function saveQuote(){

    vehiclesArray = new Array();
    var Brand, StatusVehicle, Model, Year, ConditionVehicle, CarrierType;
    $(".registroVehiculo").each(function(){
       
       Brand       = $(this).find("select[name='Brand']").val();
       StatusVehicle       = $(this).find("select[name='StatusVehicle']").val();
       Model       = $(this).find("select[name='Model']").val();
       Year        = $(this).find("input[name='Year']").val();
       ConditionVehicle   = $(this).find("select[name='ConditionVehicle']").val();
       CarrierType = $(this).find("select[name='CarrierType']").val();
       
       if(Brand!=""){
           vehiclesArray.push({'Brand':Brand, 'Model':Model, 'Year':Year, 'ConditionVehicle':ConditionVehicle,'CarrierType':CarrierType, 'StatusVehicle':StatusVehicle  });
       }
});


    $.ajax({
        type: 'POST',
        url: "./system/index.php?c=orders&a=saveQuote",
        data: {'quote': $("#formQuote").serialize(), 'vehicles': vehiclesArray},
        success: function(data) {

               if(data){

                    var response = JSON.parse(data);
                               
                    if(response.Error == false){
                        Swal.fire('The quote was sent',response.Message,'success');
                        $(".btn-finish").hide();
                        $("#myModal").modal('hide');

                    }else{
                        Swal.fire('Error',response.Message,'error' );
                    }   
                  
                }else{
                    Swal.fire('Error',response.Message,'error' );
                }
            }
        })
    }

    $(".btn-finish").click(function(){
        saveQuote();
    });