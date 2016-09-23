<!doctype html>
<html class="no-js" lang="en">
<?php include("head.php") ?>

<body>
    <div class="main-wrapper">
        <div class="app" id="app">
           <?php 
           include("header.php"); 
           include("sidebar.php");
           ?>		
           <article class="content dashboard-page">
            <section class="section">


                <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
                    <div class="row">
                        <div class="row step">
                            <div class="col-md-3" onclick="javascript: resetActive(event, 'step-1');">
                                <span class="fa fa-refresh"></span>
                                <p>Application Domain</p>
                            </div>
                            <div class="col-md-3" onclick="javascript: resetActive(event, 'step-2');">
                                <span class="fa fa-dollar"></span>
                                <p>Port and Protocol</p>
                            </div>
                            <div class="col-md-3" onclick="javascript: resetActive(event, 'step-3');">
                                <span class="fa fa-cloud-upload"></span>
                                <p>Verify Ownership</p>
                            </div>
                            <div id="last" class="col-md-3" onclick="javascript: resetActive(event, 'step-4');">
                                <span class="fa fa-star"></span>
                                <p>Scan</p>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content step hiddenStepInfo" id="step-1">
                        <div class="col-xs-12">
                            <div class="col-md-12 well text-center">
                                Enter the domain name where the Web application is deployed
                                <div class="row sameheight-container">
                                    <div class="col-md-5 col-md-offset-3">
                                        <form role="form">
                                            <div class="form-group">  
                                                <input type="text" class="form-control underlined">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-primary btn-sm">Check</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary btn-lg">Next</button>
                        </div>
                    </div>
                    <div class="row setup-content step hiddenStepInfo" id="step-2">
                        <div class="col-xs-12">
                            <div class="col-md-12 well text-center">
                                Enter the protocol and TCP port where the Web application listens for connections:<br>
                                <form>
                                    <label>Protocol:</label>
                                    <input type="radio" name="protocol" value="http" > HTTP
                                    <input type="radio" name="protocol" value="https"> HTTPS
                                </form>
                                <form>
                                    <label>Port:</label>
                                    <input type="radio" name="eighty"> 80
                                    <input type="radio" name="fourfourthree">443
                                    <input type="radio" name="other">Other
                                    <input type="text" name="num" maxlength="5" style="width: 30px;">
                                </form> 
                            </div>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary btn-lg">Next</button>
                        </div>
                    </div>

                    <div class="row setup-content step hiddenStepInfo" id="step-3">
                        <div class="col-xs-12">
                            <div class="col-md-12 well text-center">                          
                                <div class="alert alert-success">
                                    <strong>Success!</strong> Verification code copied to clipboard.
                                </div>
                                <div class="alert alert-warning">
                                    <strong>Warning!</strong> The HTTP response body does NOT contain the verification code.
                                </div>
                                Your plan requires you to verify bing.com's ownership before scanning it. To verify the domain add this HTML verification code to the site's root "index.html" page and click "Verify"
                                <br><br><br>
                                <div class="row">
                                    <div class="col-md-9 col-md-offset-1">
                                        <p style="word-break: break-all;"><font color="red">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</font></p>
                                    </div>
                                    <div class="col-md-">
                                        <button type="button" class="btn btn-primary">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary btn-lg">Next</button>
                        </div>
                    </div>
                    <div class="row setup-content step activeStepInfo" id="step-4">
                        <div class="col-xs-12">
                            <div class="col-md-12 well text-center">
                                <table class="table borderless">
                                    <tbody>
                                        <tr>
                                            <td>Target domain: </td>
                                            <td>google.com</td>
                                        </tr>
                                        <tr>
                                            <td>Profile</td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>            
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    .hiddenStepInfo {
                        display: none;
                    }

                    .activeStepInfo {
                        display: block !important;
                    }

                    .underline {
                        text-decoration: underline;
                    }

                    .step {
                        margin-top: 27px;
                    }

                    .progress {
                        position: relative;
                        height: 25px;
                    }

                    .progress > .progress-type {
                        position: absolute;
                        left: 0px;
                        font-weight: 800;
                        padding: 3px 30px 2px 10px;
                        color: rgb(255, 255, 255);
                        background-color: rgba(25, 25, 25, 0.2);
                    }

                    .progress > .progress-completed {
                        position: absolute;
                        right: 0px;
                        font-weight: 800;
                        padding: 3px 10px 2px;
                    }

                    .step {
                        text-align: center;
                    }

                    .step .col-md-2 {
                        background-color: #fff;
                        border: 1px solid #C0C0C0;
                        border-right: none;
                    }

                    .step .col-md-2:last-child {
                        border: 1px solid #C0C0C0;
                    }

                    .step .col-md-2:first-child {
                        border-radius: 5px 0 0 5px;
                    }

                    .step .col-md-2:last-child {
                        border-radius: 0 5px 5px 0;
                    }

                    .step .col-md-2:hover {
                        color: #F58723;
                        cursor: pointer;
                    }

                    .step .activestep {
                        color: #F58723;
                        height: 100px;
                        margin-top: -7px;
                        padding-top: 7px;
                        border-left: 6px solid #5CB85C !important;
                        border-right: 6px solid #5CB85C !important;
                        border-top: 3px solid #5CB85C !important;
                        border-bottom: 3px solid #5CB85C !important;
                        vertical-align: central;
                    }

                    .step .fa {
                        padding-top: 15px;
                        font-size: 40px;
                    }
                </style>

                <script type="text/javascript">
                    function resetActive(event, step) {

                        $("div").each(function () {
                            if ($(this).hasClass("activestep")) {
                                $(this).removeClass("activestep");
                            }
                        });

                        if (event.target.className == "col-md-2") {
                            $(event.target).addClass("activestep");
                        }
                        else {
                            $(event.target.parentNode).addClass("activestep");
                        }

                        hideSteps();
                        showCurrentStepInfo(step);
                    }

                    function hideSteps() {
                        $("div").each(function () {
                            if ($(this).hasClass("activeStepInfo")) {
                                $(this).removeClass("activeStepInfo");
                                $(this).addClass("hiddenStepInfo");
                            }
                        });
                    }

                    function showCurrentStepInfo(step) {        
                        var id = "#" + step;
                        $(id).addClass("activeStepInfo");
                    }
                </script>

                Was this template useful? 
            </section>                    
        </article>
    </div>
</div>
<!-- Reference block for JS -->
<div class="ref" id="ref">
    <div class="color-primary"></div>
    <div class="chart">
        <div class="color-primary"></div>
        <div class="color-secondary"></div>
    </div>
</div>
<script src="js/vendor.js"></script>
<script src="js/app.js"></script>
</body>

</html>