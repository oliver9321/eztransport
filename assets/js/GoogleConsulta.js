
$(document).ready(function() {

    //Google Maps API Origin Address
    let autocomplete;
    let address1Field;
    let postalField;
    
      //Google Maps API Origin Address2
    let autocomplete2;
    let address1Field2;
    let postalField2;

    function initAutocomplete() {

        address1Field = document.querySelector("#PickUpLocation");
        postalField = document.querySelector("#ZipCode");
        
        autocomplete = new google.maps.places.Autocomplete(address1Field, {
            componentRestrictions: { country: ["us", "ca"] },
            fields: ["address_components", "geometry"],
            types: ["address"],
        });
        
      autocomplete.addListener("place_changed",fillInAddress);

    }
    
      function initAutocomplete2() {

        address1Field2 = document.querySelector("#DeliveryLocation");
        postalField2 = document.querySelector("#ZipCode2");
        
        autocomplete2 = new google.maps.places.Autocomplete(address1Field2, {
            componentRestrictions: { country: ["us", "ca"] },
            fields: ["address_components", "geometry"],
            types: ["address"],
        });
        
      autocomplete2.addListener("place_changed",fillInAddress2);

    
}
    
    
    function fillInAddress() {
        // Get the place details from the autocomplete object.
        const place = autocomplete.getPlace();
        let address1 = "";
        let postcode = "";

        for (const component of place.address_components) {

            const componentType = component.types[0];

            switch (componentType) {
                case "street_number":
                    {
                        address1 = `${component.long_name} ${address1}`;
                        break;
                    }

                case "route":
                    {
                        address1 += component.short_name;
                        break;
                    }

                case "postal_code":
                    {
                        postcode = `${component.long_name}${postcode}`;
                        break;
                    }

                case "postal_code_suffix":
                    {
                        postcode = `${postcode}-${component.long_name}`;
                        break;
                    }
                case "locality":

                    if (component.long_name != '') {
                        document.querySelector("#OriginCity1").value = component.long_name;
                       
                    } else {
                        $("#OriginCity1").css("border-color", "orange");
                        document.querySelector("#OriginCity1").value = "";
                    }

                    break;
                case "administrative_area_level_1":
                    {

                        if (component.short_name != '') {
                            document.querySelector("#OriginState2").value = component.short_name;
                            $("#OriginState2").css("border-color", "green");
                        } else {
                            $("#OriginState2").css("border-color", "orange");
                            document.querySelector("#OriginState2").value = "";
                        }

                        break;

                    }

            }

            if (postcode != '') {
                postalField.value = postcode;             
            } else {             
               postalField.value = "";
            }

        }
    }
    
    function fillInAddress2() {
        // Get the place details from the autocomplete object.
        const place = autocomplete2.getPlace();
        let address1 = "";
        let postcode = "";

        for (const component of place.address_components) {

            const componentType = component.types[0];

            switch (componentType) {
                case "street_number":
                    {
                        address1 = `${component.long_name} ${address1}`;
                        break;
                    }

                case "route":
                    {
                        address1 += component.short_name;
                        break;
                    }

                case "postal_code":
                    {
                        postcode = `${component.long_name}${postcode}`;
                        break;
                    }

                case "postal_code_suffix":
                    {
                        postcode = `${postcode}-${component.long_name}`;
                        break;
                    }
                case "locality":

                    if (component.long_name != '') {
                        document.querySelector("#DestinyCity").value = component.long_name;
                        $("#DestinyCity").css("border-color", "green");
                    } else {
                        $("#DestinyCity").css("border-color", "orange");
                        document.querySelector("#DestinyCity").value = "";
                    }

                    break;
                case "administrative_area_level_1":
                    {

                        if (component.short_name != '') {
                            document.querySelector("#DestinyState").value = component.short_name;
                            $("#DestinyState").css("border-color", "green");
                        } else {
                            $("#DestinyState").css("border-color", "orange");
                            document.querySelector("#DestinyState").value = "";
                        }

                        break;

                    }

            }

            if (postcode != '') {
                postalField2.value = postcode;             
            } else {             
               postalField2.value = "";
            }

        }
    }


    initAutocomplete();
    initAutocomplete2();

});