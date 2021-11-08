function GetListVehicles() {

    $.ajax({
        type: 'POST',
        type: 'json',
        url: "../system/index.php?c=vehicles&a=GetListVehicles",
        beforeSend: function() {
    }}).then(function(response) {

        console.log(response);

        //$('.BrandVehicle, .ModelVehicle').empty();

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


function EliminarVehiculo(e) {
    $(e).parent().parent().parent().remove();
}