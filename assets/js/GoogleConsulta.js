
$(document).ready(function() {

    //Google Maps API Origin Address
    let autocomplete;
    let address1Field;
    let postalField;

    function initAutocomplete() {

        address1Field = document.querySelector("#PickUpLocation");
        postalField = document.querySelector("#DeliveryLocation");

        autocomplete = new google.maps.places.Autocomplete(address1Field, {
            componentRestrictions: { country: ["us", "ca"] },
            fields: ["address_components", "geometry"],
            types: ["address"],
        });

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
                        document.querySelector("#PickUpLocation").value = component.long_name;
                        $("#PickUpLocation").css("border-color", "green");
                    } else {
                        $("#PickUpLocation").css("border-color", "orange");
                        document.querySelector("#PickUpLocation").value = "";
                    }

                    break;
                case "administrative_area_level_1":
                    {

                        if (component.short_name != '') {
                            document.querySelector("#DeliveryLocation").value = component.short_name;
                            $("#DeliveryLocation").css("border-color", "green");
                        } else {
                            $("#DeliveryLocation").css("border-color", "orange");
                            document.querySelector("#DeliveryLocation").value = "";
                        }

                        break;

                    }

            }

            if (postcode != '') {
                postalField.value = postcode;
                $("#DeliveryLocation").css("border-color", "green");
            } else {
                $("#DeliveryLocation").css("border-color", "orange");
                postalField.value = "";
            }

        }
    }

    initAutocomplete();

});