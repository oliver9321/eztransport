    <!-- Search  -->
    <div id="search">
        <button type="button" class="close">×</button>

        <form class="clearfix d-block" style="z-index: 99999 !important;">
            <center>
                <img src="assets/img/Oficial-logo.png" alt="" class="border-radius-500" height="200">
                <h2 class="title-text">Tracking your order here!</h2>
            </center>
            <input type="search" id="buscar" name="buscar" class="solo-numero" autocomplete="off" placeholder="Search by Order ID" />
            <button id="search1" type="submit" class="btn btn-primary ">Search</button>
            <br><br>
            <center>
                <h4 class="title-text" id="StatusText"></h4>
            </center>
        </form>

        <div style="display:inline-block;width:100%;position: relative; top: 35%;text-align: center;">
            <ul style="left: 50px;" class="timeline timeline-horizontal">

                <li class="timeline-item">
                    <div class="timeline-badge primary">
                        <b> <i id="pendiente1" class="fa fa-road" aria-hidden="true"></i> </b>
                        <p id="pendiente"></p>
                    </div>
                    <p><span id="lower-text">COLLECTION <br>PROCESS </span>
                </li>

                <li class="timeline-item">
                    <div class="timeline-badge primary">
                        <b><i id="recojido1" class="fa fa-truck " aria-hidden="true"></i></b>
                        <p id="recojido"> </p>
                    </div>
                    <p><span id="lower-text">VEHICLE <br>PICKED UP</span></p>
                </li>

                <li class="timeline-item">
                    <div class="timeline-badge primary">
                        <b><i id="entregado1" class="fa fa-handshake-o" aria-hidden="true"></i></b>
                        <p id="entregado"> </p>
                    </div>
                    <p><span id="lower-text">DELIVERED AT<br>DESTINATION</span></p>
                </li>

                <li class="timeline-item">
                    <div class="timeline-badge primary">
                        <b><i id="estado11" class="fa fa-ban fa-1x fa-fw"></i></b>
                        <p id="estado1"></p>
                    </div>
                    <p><span id="lower-text">ORDER<br>CANCELLED</span></p>
                </li>

            </ul>
        </div>
    </div>
    <!-- Search  -->
