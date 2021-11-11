<?php
include 'core.php';
include("header.php");
?>
<div class="page-title">
    <div class="container">
        <div class="padding-tb-95px">
            <h1>Contact Us</h1>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Contact Us</li>
            </ol>
        </div>
    </div>
</div>


<div class="padding-tb-50px">

    <div class="container">
        <div class="row">

            <div class="col-lg-6 sm-mb-45px">
                <p> As <b>EZ Auto Transportation</b>, we will work hard and give the extra
                    mile to keep our clients satisfied. If you would like to
                    communicate with us or you can email.</p>
                <h5>Phone :</h5>
                <span class="d-block"><i class="fa fa-phone text-main-color margin-right-10px" aria-hidden="true"></i>
                    <a href="tel:<?=PHONE?>" style="color: #3C4858;">Main Phone <?=PHONE?></a></span>
                <h5 class="margin-top-20px">Address :</h5>
                <span class="d-block sm-mb-30px"><i class="fa fa-map text-main-color margin-right-10px"
                        aria-hidden="true"></i><a target="_blank"
                        href="https://www.google.com/maps/place/5951+NW+151st+St,+Hialeah,+FL+33014,+USA/@25.9111845,-80.2998638,17z/data=!3m1!4b1!4m5!3m4!1s0x88d9a549ed512c8b:0x4be6a0f050eb44f9!8m2!3d25.9111797!4d-80.2976751"
                        class="text-secondary"><?=ADDRESS?></a></span>
                <h5 class="margin-top-20px">Email :</h5>
                <span class="d-block sm-mb-30px"><i class="fa fa-envelope-open text-main-color margin-right-10px"
                        aria-hidden="true"></i> <a href="mailto:sales@ezautotransportationusa.com"
                        style="color: #3C4858;">sales@ezautotransportationusa.com</a> </span>
            </div>

            <div class="col-lg-6">
                <div class="contact-modal">
                    <div style="background-color:#3e3d3de0;">
                        <div class="padding-30px">
                            <h3 class="padding-bottom-15px">Email us and get quick responses.</h3>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label style="color:white">Full Name</label>
                                        <input type="text" class="form-control" id="fullname" name="fullname"
                                            placeholder="Full Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label style="color:white">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label style="color:white">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                                </div>
                                <button onclick="SendEmail()" class="btn-sm btn-lg btn-block background-dark text-white text-center  text-uppercase rounded-0 padding-15px">SEND MESSAGE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>


<div class="map-layout">
    <div class="map-embed">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3588.7300053841586!2d-80.29984868454196!3d25.91124480871755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDU0JzQwLjUiTiA4MMKwMTcnNTEuNiJX!5e0!3m2!1ses!2sdo!4v1634519876644!5m2!1ses!2sdo"
            width="100%" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

</div>
<?php
include("footer.php");
?>
<script type="text/javascript">

function SendEmail(){

    var fullname = $("#fullname").val();
    var email    = $("#email").val();
    var message = $("#message").val();

    if(fullname !== "" && email !== "" && message !== ""){

        $.ajax({
            type: 'POST',
            url: "smtp.php",
            data: {
                'fullname': fullname,
                'email':  email,
                'message': message
            }, success: function(response){
                if(response){
                    Swal.fire({
                        icon: 'success',
                        title: 'Message sent',
                        text: 'Thank you for trusting EZ AUTO TRANSPORTATION, We will be in contact with you soon'
                    })

                        $("#fullname").val("");
                    $("#email").val("");
                        $("#message").val("");
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Error to send message'
                    })
                }
            }
        });

    }else{
        Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Please complete all fields'
                    })
    }

}

</script>