	<footer class="layout-dark">
	    <div class="copy-right">
	        <div class="container padding-tb-15px">
	            <div class="row">
	                <div class="col-lg-6">
	                    <div class="copy-right-text text-lg-left text-center sm-mb-15px">© 2021 EZ AUTO TRANSPORTATION <a
	                            href="#"></a> - All rights reserved</div>
	                </div>
	                <div class="col-lg-6">
	                    <!--  Social -->
	                    <ul class="social-media list-inline text-lg-right text-center margin-0px text-white">
	                        <li class="list-inline-item"><a class="facebook" href="<?=FACEBOOK?>" target="_blank"><i
	                                    class="fa fa-facebook" aria-hidden="true"></i></a>
	                        </li>
	                        <li class="list-inline-item"><a class="instagram"
	                                href="https://instagram.com/ezautotransportation?utm_medium=copy_link"
	                                target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
	                    </ul>
	                    <!-- // Social -->
	                </div>
	            </div>
	        </div>
	    </div>
	</footer>
	  <!-- <script src="assets/js/bootstrap1.min.js"></script>-->
	  <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.mask.js"></script>
    <script src="assets/js/jquery.bootstrap.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/material-bootstrap-wizard.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/select2/select2.min.js"></script>
    <script src="assets/js/nile-slider.js"></script>
    <!--<script src="assets/js/jquery-3.2.1.min.js"></script>-->
    <!-- <script src="assets/js/jquery-2.2.4.min.js"></script>-->
    <!-- REVOLUTION JS FILES -->
    <script src="assets/rslider/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/rslider/js/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    <script src="assets/rslider/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/rslider/js/extensions/revolution.extension.video.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/ThemaAlert/dist/sweetalert2.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOHEjweqW61WAqGaXKZzuQS7sbOakgpT0&libraries=places">
    </script>
	</body>
	</html>

	<script>
$(document).ready(function() {
    $("#LoadingButton").hide();
    $('.phone').mask("(000) 000-0000");
    $('.inputDate').mask("00/00/0000");
    $('.solo-numero').on('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    $("#next").prop('disabled', true);
    $(".BloquiarClick").prop('disabled', true);

    $("#add-new").click(function() {

        //Add row
        row = '';
        row +=
            '<tr><td><select class="cssbordertable" required="required"><option disabled="" selected=""></option>' +
            '<option>Open</option>' +
            '<option>Enclosed </option>' +
            '</select></td>' +
            '<td><select class="cssbordertable" required="required"><option disabled="" selected=""></option>' +
            '<option>Open</option>' +
            '<option>Enclosed </option></select></td>' +
            '<td><input type="number" class="cssbordertable"style="text-align: center;" ></td>';

        row +=
            '<td style="text-align: center;"><a class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a></td></tr>';

        $("tbody").append(row);

    });
    // Delete row on delete button click
    $(document).on("click", ".delete", function() {
        $(this).parents("tr").remove();
        $(".add-new").removeAttr("disabled");
    });

});



$("#ZipCode").keyup(function() {

    if ($("#ZipCode").val() != "" & $("#ZipCode2").val() != "") {
        $("#next").prop('disabled', false);
    }
    if ($("#ZipCode").val() == "") {
        $("#next").prop('disabled', true);
    }
});

$("#ZipCode2").keyup(function() {

    if ($("#ZipCode2").val() != "" & $("#ZipCode").val() != "") {
        $("#next").prop('disabled', false);
    }
    if ($("#ZipCode2").val() == "") {
        $("#next").prop('disabled', true);
    }
});


$("#DivRadioAuto").click(function() {
    $("#next").prop('disabled', false);
});
$("#DivRadioMotorcycle").click(function() {
    $("#next").prop('disabled', false);
});

$("#DivRadioBoth").click(function() {
    $("#next").prop('disabled', false);
});


$("#previous").click(function() {
    $("#next").prop('disabled', false);
});


$("#next").click(function() {

    if ($("#exapleI").val() == "") {

        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please complete all fields'
        })


    } else {
        if ($("#RadioAuto").prop('checked') || $("#RadioMotorcycle").prop('checked')) {
            $("#next").prop('disabled', true);
        };
    }
});

$("#DivRadioAuto").click(function() {
    $("#TypeV").empty();
    $("#TypeV").append(

        '<div class="col-sm-10 col-sm-offset-1 "> ' +
        '<div class="form-group label-floating"> ' +
        '<input type="text" class="form-control" id="TypeVehicle" name="TypeVehicle"  value="Auto" > ' +
        '</div> ' +
        '</div> '

    );

    $("#TypeV").hide();
});
$("#DivRadioMotorcycle").click(function() {
    $("#TypeV").empty();
    $("#TypeV").show();
    $("#TypeV").append(


        '  <div class="form-group label-floating">' +
        ' 	<label class="control-label">Select Vehicle*</label>' +
        ' 	<select class="form-control" id="TypeVehicle" name="TypeVehicle" required="required">' +
        '    	<option disabled="" selected=""></option>' +
        '    	<option>Motorcycle</option>' +
        '   	<option>ATV/UTV </option>' +
        '       <option>Other </option>' +
        ' 	</select>' +
        ' </div>'


    );

});


$("#search1").click(function() {

    $("#pendiente").empty();
    $("#recojido").empty();
    $("#entregado").empty();
    $("#estado1").empty();

    $("#pendiente1").removeClass("fa fa-road styleVerde");
    $("#pendiente1").addClass("fa fa-road");
    $("#recojido1").removeClass("fa fa-truck styleVerde");
    $("#recojido1").addClass("fa fa-truck");
    $("#entregado1").removeClass("fa fa-handshake-o styleVerde");
    $("#entregado1").addClass("fa fa-handshake-o");

    $("#pendiente1").removeClass("fa fa-road styleRojo");
    $("#pendiente1").addClass("fa fa-road");
    $("#recojido1").removeClass("fa fa-truck styleRojo");
    $("#recojido1").addClass("fa fa-truck");
    $("#entregado1").removeClass("fa fa-handshake-o styleRojo");
    $("#entregado1").addClass("fa fa-handshake-o");
    $("#estado11").removeClass("fa fa-ban fa-1x fa-fw styleRojo");
    $("#estado11").addClass("fa fa-ban fa-1x fa-fw");

    var OrderID = $("#buscar").val();
    $("#StatusText").html("");
    var server = "<?=SERVIDOR?>";
    
    $.ajax({
        type: 'POST',
        dataType: "json",
        crossDomain: true,
        format: "json",
        url: server+"index.php?c=Orders&a=GetStatusOrder",
        data: {
            'OrderID': OrderID
        }
    }).then(function(response) {

        if (response != "") {

            var data = response.Status;

            $("#StatusText").html("Hello <b>" + response.CustomerOrigin +
                "</b>, the status of your order is <b>" + data + "</b>");

            switch (data) {

                case "Pending":

                    $("#pendiente").append('<img src="assets/icons/validate3.png">');
                    $("#pendiente1").removeClass("fa fa-road");
                    $("#pendiente1").addClass("fa fa-road styleVerde");

                    break;

                case "Picked up":

                    $("#pendiente").append('<img src="assets/icons/validate3.png">');
                    $("#recojido").append('<img src="assets/icons/validate3.png">');

                    $("#pendiente1").removeClass("fa fa-road");
                    $("#pendiente1").addClass("fa fa-road styleVerde");
                    $("#recojido1").removeClass("fa fa-truck");
                    $("#recojido1").addClass("fa fa-truck styleVerde");
                    break;

                case "Delivered":

                    $("#pendiente").append('<img src="assets/icons/validate3.png">');
                    $("#recojido").append('<img src="assets/icons/validate3.png">');
                    $("#entregado").append('<img src="assets/icons/validate3.png">');

                    $("#pendiente1").removeClass("fa fa-road");
                    $("#pendiente1").addClass("fa fa-road styleVerde");
                    $("#recojido1").removeClass("fa fa-truck");
                    $("#recojido1").addClass("fa fa-truck styleVerde");
                    $("#entregado1").removeClass("fa fa-handshake-o");
                    $("#entregado1").addClass("fa fa-handshake-o styleVerde");

                    break;

                case "Cancelled":

                    $("#estado1").append('<img src="assets/icons/close.png">');

                    $("#pendiente1").removeClass("fa fa-road");
                    $("#pendiente1").addClass("fa fa-road styleRojo");
                    $("#recojido1").removeClass("fa fa-truck");
                    $("#recojido1").addClass("fa fa-truck styleRojo");
                    $("#entregado1").removeClass("fa fa-handshake-o");
                    $("#entregado1").addClass("fa fa-handshake-o styleRojo");
                    $("#estado11").removeClass("fa fa-cog fa-spin fa-1x fa-fw");
                    $("#estado11").addClass("fa fa-cog fa-spin fa-1x fa-fw styleRojo");
                    break;

					default:
					$("#pendiente").empty();
					$("#recojido").empty();
					$("#entregado").empty();
					$("#estado1").empty();

					$("#pendiente1").removeClass("fa fa-road styleVerde");
					$("#pendiente1").addClass("fa fa-road");
					$("#recojido1").removeClass("fa fa-truck styleVerde");
					$("#recojido1").addClass("fa fa-truck");
					$("#entregado1").removeClass("fa fa-handshake-o styleVerde");
					$("#entregado1").addClass("fa fa-handshake-o");

					$("#pendiente1").removeClass("fa fa-road styleRojo");
					$("#pendiente1").addClass("fa fa-road");
					$("#recojido1").removeClass("fa fa-truck styleRojo");
					$("#recojido1").addClass("fa fa-truck");
					$("#entregado1").removeClass("fa fa-handshake-o styleRojo");
					$("#entregado1").addClass("fa fa-handshake-o");
					$("#estado11").removeClass("fa fa-ban fa-1x fa-fw styleRojo");
					$("#estado11").addClass("fa fa-ban fa-1x fa-fw");
						break;

            }

        } else {

			$("#StatusText").html("");
			$("#buscar").val("");

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'This request is not registered.'
            })
        }


    });

});


$("#PickUpLocation").change(function() {
    $(".originAdrees").addClass("is-focused");
});

$("#DeliveryLocation").change(function() {
    $(".destinoAddress").addClass("is-focused");
});

$("#closeModal").click(function(){

			$("#StatusText").html("");
			$("#buscar").val("");

			$("#pendiente").empty();
					$("#recojido").empty();
					$("#entregado").empty();
					$("#estado1").empty();

					$("#pendiente1").removeClass("fa fa-road styleVerde");
					$("#pendiente1").addClass("fa fa-road");
					$("#recojido1").removeClass("fa fa-truck styleVerde");
					$("#recojido1").addClass("fa fa-truck");
					$("#entregado1").removeClass("fa fa-handshake-o styleVerde");
					$("#entregado1").addClass("fa fa-handshake-o");

					$("#pendiente1").removeClass("fa fa-road styleRojo");
					$("#pendiente1").addClass("fa fa-road");
					$("#recojido1").removeClass("fa fa-truck styleRojo");
					$("#recojido1").addClass("fa fa-truck");
					$("#entregado1").removeClass("fa fa-handshake-o styleRojo");
					$("#entregado1").addClass("fa fa-handshake-o");
					$("#estado11").removeClass("fa fa-ban fa-1x fa-fw styleRojo");
					$("#estado11").addClass("fa fa-ban fa-1x fa-fw");
});

</script>
<script src="assets/js/GoogleConsulta.js"></script>
<script src="assets/js/logic.js"></script>