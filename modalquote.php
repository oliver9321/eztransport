<style>
        .modal-lg {
            width: 100% !important;
       }
    </style>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="card wizard-card" data-color="purple" id="wizard">
                <form id="formQuote" autocomplete="off">
                    <div class="wizard-header">
                        <h3 class="wizard-title">
                            REQUEST A QUICK QUOTE
                        </h3>
                        <h5>¡Get a quote from our experts today! Fill out the form right now.</h5>
                    </div>
                    <div class="wizard-navigation">
                        <ul>
                            <li><a href="#location" class="BloquiarClick" data-toggle="tab">Location</a></li>
                            <li><a href="#type" class="BloquiarClick" data-toggle="tab">Quote Type</a></li>
                            <li><a href="#facilities" class="BloquiarClick" data-toggle="tab">Vehicle Information</a></li>
                            <li><a href="#description" class="BloquiarClick" data-toggle="tab">Date and contact</a></li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane" id="location">
                            <div class="row">

                                <div class="col-sm-8 col-sm-offset-1">
                                    <label style="color: black;" class="">PICK UP LOCATION</label>
                                </div>
                                <div class="col-sm-10 col-sm-offset-1">

                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" id="PickUpLocation" name="PickUpLocation" required="required" placeholder="Enter a pickup address" autocomplete="a" >
                                    </div>
                                </div>

                                <div class="col-sm-3 col-sm-offset-1">

                                    <div class="form-group label-floating originAdrees" style="margin: 27px -66px 0 0;">
                                        <label class="control-label"> City<b class="text-danger">*</b></label>
                                        <input type="text" class="form-control" id="OriginCity1" name="OriginCity1" required="required" autocomplete="a" >
                                    </div>
                                </div>

                                <div class="col-sm-2 col-sm-offset-1">

                                    <div class="form-group label-floating originAdrees" style="margin: 27px -66px 0 0;">
                                        <label class="control-label">State<b class="text-danger">*</b></label>
                                        <input type="text" class="form-control" id="OriginState2" name="OriginState2" required="required" autocomplete="a" >
                                    </div>
                                </div>

                                <div class="col-sm-2 col-sm-offset-1">

                                    <div class=" form-group label-floating originAdrees" style=" margin: 27px -66px 0 0;">
                                        <label class="control-label">Zip Code<b class="text-danger">*</b></label>
                                        <input type="text" class="form-control solo-numero" id="ZipCode" name="ZipCode" required="required" autocomplete="a" >
                                    </div>
                                </div>

                                <div>
                                    <br>
                                    <br>
                                </div>


                                <div class="col-sm-8 col-sm-offset-1">
                                    <label style="color: black;" class="">DELIVERY LOCATION</label>
                                </div>
                                <div class="col-sm-10 col-sm-offset-1">

                                    <div class="form-group label-floating">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" id="DeliveryLocation" name="DeliveryLocation" required="required" autocomplete="a">
                                    </div>
                                </div>

                                <div class="col-sm-3 col-sm-offset-1">

                                    <div class="form-group label-floating destinoAddress" style="margin: 27px -66px 0 0;">
                                        <label class="control-label"> City<b class="text-danger">*</b></label>
                                        <input type="text" class="form-control" id="DestinyCity" name="DestinyCity" required="required" autocomplete="a" >
                                    </div>
                                </div>

                                <div class="col-sm-2 col-sm-offset-1">

                                    <div class="form-group label-floating destinoAddress" style="margin: 27px -66px 0 0;">
                                        <label class="control-label">State<b class="text-danger">*</b></label>
                                        <input type="text" class="form-control" id="DestinyState" name="DestinyState" required="required" autocomplete="a" >
                                    </div>
                                </div>

                                <div class="col-sm-2 col-sm-offset-1">

                                    <div class=" form-group label-floating destinoAddress" style=" margin: 27px -66px 0 0;">
                                        <label class="control-label">Zip Code<b class="text-danger">*</b></label>
                                        <input type="text" class="form-control solo-numero" id="ZipCode2" name="ZipCode2" required="required" autocomplete="a" >
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="tab-pane" id="type">
                            <h4 class="info-text">What type of vehicle do you have? </h4>
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="col-sm-4" id="DivRadioAuto">
                                        <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have auto.">
                                            <input type="radio" id="RadioAuto" name="nameRadio" value="Auto" checked="">
                                            <div class="icon">
                                                <i class="material-icons">drive_eta</i>
                                            </div>
                                            <h6>Auto</h6>
                                        </div>
                                    </div>

                                    <div class="col-sm-4" id="DivRadioMotorcycle">
                                        <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have Motorcycle.">
                                            <input type="radio" id="RadioMotorcycle" name="nameRadio" value="Motocycle" checked="">
                                            <div class="icon">
                                                <i class="material-icons">two_wheeler</i>
                                            </div>
                                            <h6>Motorcycle</h6>
                                        </div>
                                    </div>

                                    <div class="col-sm-4" id="DivRadioBoth">
                                        <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have both types">
                                            <input type="radio" id="RadioBoth" name="nameRadio" value="Motocycle" checked="">
                                            <div class="icon">
                                                <i class="material-icons">checklist</i>
                                            </div>
                                            <h6>Both types</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="tab-pane" id="facilities">

                            <div class="row">

                                <div id="TypeV" class="col-sm-10 col-sm-offset-1">
                                </div>
                                <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <button type="button" onclick="AddVehicleList()" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i> Add vehicles</button>
                                </div>
                                <!--end card-header-->
                                <div class="card-body">
                                    <div class="repeater-default">
                                        <div data-repeater-list="car">
                                            <div data-repeater-item="">
                                                <div class="form-group align-items-end is-empty">
                                                    <div class="row">

                                                    <div class="row registroVehiculo" id="templateVehiculo" style="padding-bottom:20px !important" hidden>

                                                        <div class="col-sm-2">
                                                            <label class="mb-1 "><b>Brand</b></label>
                                                            <select  name="Brand" onchange="GetModelsByBrand(this)" class="select2 form-control mb-3 custom-select BrandVehicle vehicleList">
                                                                <option value="">Select brand</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-2">
                                                            <label class="mb-1 "><b>Model</b></label>
                                                            <select  name="Model" class="select2 form-control mb-3 custom-select ModelVehicle vehicleList">
                                                                <option value="">Select model</option>
                                                            </select>
                                                        </div>

                                                            <!--end col-->
                                                         <div class="col-sm-1">
                                                            <label class="mb-1 "><b>Year</b></label>
                                                            <input type="text"  name="Year"  minlength="4" maxlength="5" class="form-control YearVehicle vehicleList" placeholder="">
                                                        </div>

                                                        <div class="col-sm-2" >
                                                            <label class="mb-1 "><b>Carrier</b></label>
                                                            <select  name="CarrierType" class="form-control CarrierTypeVehicle vehicleList">
                                                            <option value="">Select</option>
                                                                <option value="Open">Open</option>
                                                                <option value="Enclosed">Enclosed</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-2" >
                                                            <label class="mb-1 "><b>Condition</b></label>
                                                            <select  name="ConditionVehicle" class="form-control ConditionVehicle vehicleList">
                                                            <option value="">Select</option>
                                                                <option value="Running">Running</option>
                                                                <option value="Non-running">Non-running</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-2">
                                                            <label class="mb-1 "><b>Status of vehicle</b></label>
                                                            <select class="form-control" id="StatusVehicle" name="StatusVehicle" required="required">
                                                                 <option value="">Select</option>
                                                                <option value="Stock">Stock</option>
                                                                <option value="Modification">Modifications </option>
                                                            </select>
                                                        </div>

                                                        <br></br>
                                                        <div class="col-sm-1">
                                                                <button type="button" title="Delete vehicle" onclick="EliminarVehiculo(this)"  class="btn btn-sm btn-danger"> <span class="fa fa-trash me-1"></span> </button>
                                                        </div>
                                                        <br></br>

                                                        <!--end col-->

                                                        </div>
                                                 
                                                        <div class="col-md-12" id="contentVehicle" style="overflow-y: auto; height:210px"></div>
                                                     
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <!--end /div-->
                                        </div>
                                        <!--end repet-list-->
                                    </div>
                                    <!--end repeter-->
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>

                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Comments</label>
                                        <textarea class="form-control" id="comments" name="comments"></textarea>
                                    </div>
                                </div>

                           
                           
                            </div>
                        </div>


                        <div class="tab-pane" id="description">
                            <div class="row">

                                <div class="col-sm-10 col-sm-offset-1">

                                    <div class="form-group">
                                        <label class="control-label">SHIPPING DATE</label>
                                        <input type="text" class="form-control inputDate" id="ShippingDate" name="ShippingDate" placeholder="MM/DD/YYYY" required="required">
                                    </div>
                                </div>

                                <div class="col-sm-4 col-sm-offset-1">

                                    <div class="form-group label-floating">
                                        <label class="control-label">First Name</label>
                                        <input type="text" class="form-control" id="FirstName" name="FirstName" required="required" maxlength="60">
                                    </div>
                                </div>
                                <div class="col-sm-5 col-sm-offset-1">

                                    <div class="form-group label-floating">
                                        <label class="control-label">Last Name</label>
                                        <input type="text" class="form-control" id="LastName" name="LastName" required="required" maxlength="60">
                                    </div>
                                </div>

                                <div class="col-sm-4 col-sm-offset-1">

                                    <div class="form-group label-floating">
                                        <label class="control-label">Phone</label>
                                        <input type="text" class="form-control phone" id="Phone" name="Phone" required="required" maxlength="18">
                                    </div>
                                </div>
                                <div class="col-sm-5 col-sm-offset-1">

                                    <div class="form-group label-floating">
                                        <label class="control-label">Email</label>
                                        <input type="text" class="form-control" id="Email" name="Email" required="required" maxlength="50">
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="wizard-footer">
                        <div class="pull-right">
                            <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' id="next" name='next' value='Next' />
                            <input type='button' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Finish' />
                        </div>
                        <div class="pull-left">
                            <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' id="previous" name='previous' value='Previous' />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>

        </div> <!-- wizard container -->
    </div>
</div> <!-- row -->
