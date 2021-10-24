	<footer class="layout-dark">
        <div class="copy-right">
			<div class="container padding-tb-15px">
				<div class="row">
					<div class="col-lg-6">
						<div class="copy-right-text text-lg-left text-center sm-mb-15px">© 2021 EZ AUTO TRANSPORTATION <a href="#"></a> - All rights reserved</div>
					</div>
					<div class="col-lg-6">
						<!--  Social -->
						<ul class="social-media list-inline text-lg-right text-center margin-0px text-white">
							<li class="list-inline-item"><a class="facebook" href="https://m.facebook.com/ezautotransportation/"  target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li class="list-inline-item"><a class="instagram" href="https://instagram.com/ezautotransportation?utm_medium=copy_link"  target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
						<!-- // Social -->
					</div>
				</div>
			</div>
		</div>
	</footer>
    <!-- jquery library  -->

    
    <!-- <script src="assets/js/bootstrap1.min.js"></script>-->
     <script src="assets/js/jquery-2.2.4.min.js"></script>
   
    
      <script src="assets/js/jquery.bootstrap.js"></script>
       <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/material-bootstrap-wizard.js"></script>
     <script src="assets/js/jquery.validate.min.js"></script>
    
        

    
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
    <script src="assets/js/YouTubePopUp.jquery.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/custom.js"></script>
   
    <script src="assets/js/popper.min.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOHEjweqW61WAqGaXKZzuQS7sbOakgpT0&libraries=places"></script>

</body>


<!-- Mirrored from nilethemes.com/html/nile-logistics/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Sep 2021 20:22:05 GMT -->
</html>

<script>
    
$(document).ready(function(){
    
      $("#next").prop('disabled', true); 
     $( ".BloquiarClick" ).prop('disabled', true);
    
    
    $("#add-new").click(function(){
	  
    //Add row
    row = '';
    row += '<tr><td><select class="cssbordertable" required="required"><option disabled="" selected=""></option>'+
		                                            	'<option>Open</option>'+
		                                            	'<option>Enclosed </option>'+
                                                        '</select></td>'+                                    
            '<td><select class="cssbordertable" required="required"><option disabled="" selected=""></option>'+
		                                            	'<option>Open</option>'+
		                                            	'<option>Enclosed </option></select></td>'+
                                                        '<td><input type="number" class="cssbordertable"style="text-align: center;" ></td>';
    
    row += '<td style="text-align: center;"><a class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a></td></tr>';
        
    $("tbody").append(row);
        
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
      
});
 
    
    $( "#PickUpLocation" ).keyup(function() {      
        
        if($("#PickUpLocation").val() != "" & $("#DeliveryLocation").val() != "") {
              $("#next").prop('disabled', false);
        }
          if($("#exampleI").val() == ""){
              $("#next").prop('disabled', true); 
        }       
});
    
        $("#DeliveryLocation" ).keyup(function() {      
        
        if($("#PickUpLocation").val() != "" & $("#DeliveryLocation").val() != "" ){
              $("#next").prop('disabled', false);
        }
          if($("#DeliveryLocation").val() == ""){
              $("#next").prop('disabled', true); 
        }       
});
    
    
 
    

    $("#DivRadioAuto").click(function(){        
              $("#next").prop('disabled', false);                 
           });
     $("#DivRadioMotorcycle").click(function(){        
              $("#next").prop('disabled', false);                 
           });


      $("#previous").click(function(){        
              $("#next").prop('disabled', false);                 
           });
    
    
      $("#next").click(function(){
          
          if( $("#exapleI").val() == "" ) {   
              
           alert("llene los campos");
                  
         } 
         else
             {
         if( $("#RadioAuto").prop('checked') || $("#RadioMotorcycle").prop('checked') ) {   
             
              $("#next").prop('disabled', true); 
         }; 
             }
           });
    
    $("#DivRadioAuto").click(function(){
             $( "#TypeV" ).empty();
            $( "#TypeV" ).append( 
            
                                        '<div class="col-sm-10 col-sm-offset-1 "> '     +                             
		                                    	 '<div class="form-group label-floating"> '+
		                                        	 '<input type="text" class="form-control" id="TypeVehicle" name="TypeVehicle"  value="Auto" > '+
		                                    	 '</div> '+
		                                	 '</div> '
            
            );
      
          $("#TypeV").hide();
            });
      $("#DivRadioMotorcycle").click(function(){
           $( "#TypeV" ).empty();
          $("#TypeV").show();
              $( "#TypeV" ).append( 
            
                                         
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
    
    $("#PickUpLocation").change(function(){
                   
       $(".originAdrees").addClass("is-focused");            
                   
});    

$("#DeliveryLocation").change(function(){
                   
       $(".destinoAddress").addClass("is-focused");            
                   
});


</script>

<script src="assets/js/GoogleConsulta.js"></script>
