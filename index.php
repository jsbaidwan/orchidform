<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ========== Page Title ========== -->
    <title>Orchid Financial Services</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/fav.svg" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/plugins.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon-business-set.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900" rel="stylesheet">
    <style>
    .btn-theme {
        background-color: #ce2027;
        color: #ffffff !important;
        border: 2px solid #ce2027;
    }

    .service-item .info-title i {
        background: #ce2027 none repeat scroll 0 0;
    }


    .service-item .info-title {
        background: #ce2027 none repeat scroll 0 0;
    }

    .service-item .overlay {
        background: rgba(206, 32, 39, 0.8);
    }

    .services-area .service-carousel .owl-nav .owl-prev,
    .services-area .service-carousel .owl-nav .owl-next {
        color: #ce2027;
    }

    .attr-nav {
        margin-left: 35px;
    }

    .btn-primaryy {
        background: #ce2027;
        border-color: #ce2027;
        color: #fff;
        border-radius: 20px !important;
    }

    .btn-primaryy:hover {
        background: #000;
        border-color: #000;
        color: #fff;
    }

    .logo {
        width: 172px;
    }

    .modal-title {
        font-weight: 600;
        font-size: 20px;
    }

    .modal-content {
        border-radius: 0px 150px 0px 150px;
        padding: 35px;
    }

    .modal-body .form-group {
        border: 1px solid !important;
        border-radius: 30px !important;
    }

    .modal-header {
        border: none;
    }

    .modal-footer {
        border: none;
    }

    @media screen and (max-width:575px) {
        .contact-form-area .contact-form button {
            padding: 8px 20px !important;
        }

        .modal-content {
            border-radius: 0px 150px 10px 10px !important;
            padding: 0px !important;
        }

        nav.navbar.navbar-sticky .navbar-brand {
            top: -12px;
            position: relative;
            width: 64%;
            height: 50px !important;
            left: -15px;
            text-align: center;
        }
    }

    label {
        font-weight: 600;
        padding-left: 15px;
    }

    .form-control {
        border-radius: 30px;
        height: 50px;
    }

    .formf {
        margin-left: 0px !important;
        margin-right: 0px !important;
    }

    .formf .panel-heading {
        background: #ec8c48 !important;
        padding: 15px 15px;
    }

    .formf .panel-primary>.panel-heading {
        border-color: #ec8c48;
    }

    .formf .panel-primary {
        border-color: #ec8c48;
    }

    .formf .panel-primary {
        border-radius: 0px !important;
    }

    .panel-heading {
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
    }

    .formf .panel-title {
        font-size: 20px;
        color: inherit;
        font-weight: 600;
        text-align: center !important;

    }

    legend {
        font-weight: 600 !important;
        font-size: 20px !important;
        border-bottom: 1px solid #e5e5e5 !important;
        box-shadow: 5px 6px 16px 1px #ddd !important;
        border-radius: 30px !important;
        padding: 9px 20px !important;
        background: #102333;
        color: #fff;
    }

    .formf h3 {
        font-size: 20px !important;
    }

    .topbar-social li {
        margin-left: 0px !important;
        margin-right: 20px !important;
    }

    .contact-form-area .tab-content li .info span {
        text-transform: none;
    }

    @media only screen and (max-width: 767px) {
        .footer-bottom {
            margin-top: 50px;
            padding-bottom: 66px;
        }
    }

    .whatsapp {
        position: fixed;
        bottom: 10px;
        z-index: 9999;
        right: 15px;
        background: #962323;
        padding: 10px 20px;
        border-radius: 30px;
    }

    .bg-fixed {
        background-attachment: scroll !important;
        background-position: center center;
        background-size: cover;
    }

    .smbtn {
        margin-top: 0px !important;
        border-radius: 50px !important;
        background-color: #ce2027 !important;
        border: 1px solid #ce2027 !important;
        color: #fff !important;
        font-size: 12px !important;
        padding: 8px 35px !important;
        min-height: auto !important;
    }

    ol.gradient-list>li,
    ol.gradient-list>li::before {
        box-shadow: 0.25rem 0.25rem 0.6rem rgba(0, 0, 0, 0.05), 0 0.5rem 1.125rem rgba(75, 0, 0, 0.05);
    }

    /*** STYLE ***/
    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }

    ul.about-ul {
        list-style-image: url('assets/img/fav.svg');

    }

    .custom-list {
        list-style: none;
        padding-left: 0;
    }

    .custom-list li {
        position: relative;
        padding-left: 60px;
        margin-bottom: 15px;
    }

    .custom-list li:before {
        content: '';
        width: 50px;
        height: 50px;
        position: absolute;
        background-image: url('icon/arrow.png');
        background-size: cover;
        background-position: center;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
    }

    .custom-list li h3 {
        font-weight: 700;
        margin-bottom: 0px;
    }

    ul#stepForm,
    ul#stepForm li {
        margin: 0;
        padding: 0;
    }

    ul#stepForm li {
        list-style: none outside none;
    }

    label {
        margin-top: 10px;
    }

    .help-inline-error {
        color: red;
    }

    .form-group span.help-inline-error {
        position: absolute !important;
        top: 10px !important;
        right: 15px !important;
    }

    .yes1 {
        display: none;
    }

    .yes2 {
        display: none;
    }

    .yes3 {
        display: none;
    }

    .yes4 {
        display: none;
    }

    .formf {
        background: #102333;
    }

    .subhead {
        font-size: 20px;
        text-align: center;
        font-weight: 600;
        margin-top: 20px;
    }

    .frm {
        margin-bottom: 25px;
    }

    .logo-form {
        margin: 0px auto 30px auto;
        text-align: center;
        display: block;
        max-width: 100%;
    }

    .mybtn {
        background: #ec8c48;
        color: #fff;
        border-radius: 30px;
        padding: 14px 35px;
        border: 1px solid #ec8c48;
        margin-top: 30px;
    }

    .divdr {
        height: 5px;
        background: #ec8c48;
        margin-bottom: 35px;
    }

    @media screen and (max-width:768px) {
        .basic {
            margin-top: 50px;
        }
    }

    .timeline .timeline-content h5 {
        font-size: 20px !important;
    }

    .breadcrumb-area h1 {
        font-size: 60px;
    }

    @media screen and (max-width:575px) {
        .breadcrumb-area h1 {
            font-size: 35px;
        }
    }

    .mb-bot {
        margin-bottom: 15px;
    }

    #basicform2 {
        display: none;
    }

    #rembt2 {
        display: none;
    }

    #submit2 {
        display: none;
    }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- form start here -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <div class="row formf">
        <div class="container" style="padding-left: 15px; padding-right: 15px; margin-top:50px; margin-bottom:50px;">
            <div class="row">
                <div class="col-lg-12">
                    <img class="logo-form" src="assets/img/orchid-logo.png" alt="" title="" />
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Client Fact Find / Needs Analysis</h3>
                </div>
                <div class="panel-body">
                    <form name="basicform" id="basicform" method="post" action="">
                        <div id="sf1" class="frm">
                            <fieldset>
                                <legend>Personal Details (Borrower 1)</legend>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="subhead"></h4>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label class="control-label" for="gnamee1">Given Name </label>
                                                <input type="text" placeholder="Given Name" id="gnamee1" name="gname1"
                                                    class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="control-label" for="snamee1">Surname </label>
                                                <input type="text" placeholder="Surname" id="snamee1" name="sname1"
                                                    class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="control-label" for="caddress1">Current Address </label>
                                                <input type="text" placeholder="Current Address" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="control-label" for="tcaddress1">Time at Current Address
                                                </label>
                                                <input type="time" placeholder="From Date" id="tcaddress1"
                                                    name="tcaddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="">
                                                    <label class="control-label" for="rad1">Address Status</label>
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Mortage" id="mortage1"
                                                        name="mortage1" value="mortage1"
                                                        style="min-height:auto!important;" autocomplete="off"> Mortage
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Own" id="own1" name="own1"
                                                        value="own1" style="min-height:auto!important;"
                                                        autocomplete="off"> Own
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Rent" id="rent1" name="rent1"
                                                        value="rent1" style="min-height:auto!important;"
                                                        autocomplete="off"> Rent
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Other" id="other1" name="other1"
                                                        value="other1" style="min-height:auto!important;"
                                                        autocomplete="off"> other
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="control-label" for="caddress1">Previous Address <span>(if
                                                        within last 3 years)</span> </label>
                                                <input type="text" placeholder="Previous Address" id="caddress1"
                                                    name="preaddress1" class="form-control" autocomplete="off">
                                            </div>


                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Driver Licence No (Date
                                                    From)</label>
                                                <input type="date" placeholder="" id="udob" name="dlfrom1"
                                                    class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Driver Licence No (To
                                                    Date)</label>
                                                <input type="date" placeholder="Date of Birth" id="udob" name="dlto1"
                                                    class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">DOB </label>
                                                <input type="date" placeholder="Date of Birth" id="udob" name="dob1"
                                                    class="form-control" autocomplete="off">
                                            </div>


                                            <div class="col-lg-12">
                                                <label class="control-label" for="uname">Phone Number </label>
                                                <input type="text" placeholder="M" id="uphone" name="mphone1"
                                                    class="form-control mb-bot" autocomplete="off">
                                                <input type="text" placeholder="H" id="uphone" name="hphone1"
                                                    class="form-control mb-bot" autocomplete="off">
                                                <input type="text" placeholder="W" id="uphone" name="wphone1"
                                                    class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="control-label" for="snamee1">Email Address </label>
                                                <input type="email" placeholder="Email" id="snamee1" name="emailad1"
                                                    class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="">
                                                    <label class="control-label" for="rad1">Aust Citizen</label>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="austcitizen1"
                                                        value="yes" style="min-height:auto!important;"
                                                        autocomplete="off"> Yes
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="austcitizen1"
                                                        value="no" style="min-height:auto!important;"
                                                        autocomplete="off"> No
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="">
                                                    <label class="control-label" for="rad1">Status</label>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad1"
                                                        value="yes" style="min-height:auto!important;"
                                                        autocomplete="off"> PR
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad1"
                                                        value="no" style="min-height:auto!important;"
                                                        autocomplete="off"> Non-Resident
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Marital Status </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">Single</option>
                                                    <option value="married">Married</option>
                                                    <option value="de-facto">De Facto</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Age of Dependants</label>
                                                <input type="text" placeholder="Age of Dependants" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Number of
                                                    Dependants</label>
                                                <input type="text" placeholder="Number of Dependants" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="clearfix" style="height: 10px;clear: both;"></div>
                                            <div class="col-lg-12" style="margin-top:10px;">
                                                <legend>Current Employment (Borrower 1)</legend>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Type of Employment </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">PAYG</option>
                                                    <option value="married">Self-Employed</option>
                                                    <option value="de-facto">Not Employed</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Status </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">Full Time</option>
                                                    <option value="married">Part Time</option>
                                                    <option value="de-facto">Casual</option>
                                                    <option value="de-facto">Contract</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Employer Name</label>
                                                <input type="text" placeholder="Employer Name" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="clearfix" style="height: 10px;clear: both;"></div>
                                            <div class="col-lg-12" style="margin-top:10px;">
                                                <legend>A. Personal Detail (Applicant 1)</legend>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Title </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">Mr</option>
                                                    <option value="married">Mrs</option>
                                                    <option value="de-facto">Miss</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Surname</label>
                                                <input type="text" placeholder="Surname" id="caddress1" name="caddress1"
                                                    class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">First Name</label>
                                                <input type="text" placeholder="First Name" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Middle Name</label>
                                                <input type="text" placeholder="Middle Name" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Gender </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">Male</option>
                                                    <option value="married">Female</option>
                                                    <option value="de-facto">Other</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">DOB </label>
                                                <input type="date" placeholder="Date of Birth" id="udob" name="sdob"
                                                    class="form-control" autocomplete="off">
                                            </div>
                                            <div class="clearfix" style="height: 10px;clear: both;"></div>



                                            <div class="col-lg-12" style="margin-top:10px;">
                                                <legend>B. Contact Detail (Applicant 1)</legend>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Mobile Number</label>
                                                <input type="text" placeholder="Mobile Number" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Email Address</label>
                                                <input type="email" placeholder="Email Address" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Residential Status </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">PR</option>
                                                    <option value="married">Non Resident</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Start Date at Current Address
                                                </label>
                                                <input type="date" placeholder="Date of Birth" id="udob" name="sdob"
                                                    class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Current Address</label>
                                                <input type="text" placeholder="Current Address" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>


                                            <div class="col-lg-12" style="margin-top:20px;">
                                                <legend>C. Identification (Applicant 1)</legend>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Country Residency</label>
                                                <input type="text" placeholder="Country Residency" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Citizenship of</label>
                                                <input type="text" placeholder="Citizenship of" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Residential Status </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">PR</option>
                                                    <option value="married">Non Resident</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Driver License
                                                    Number</label>
                                                <input type="text" placeholder="Driver License Number" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">State of Issue</label>
                                                <input type="text" placeholder="State of Issue" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>



                                            <div class="col-lg-12" style="margin-top:20px;">
                                                <legend>D. Employment Detail (Applicant 1)</legend>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Employment Status </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">Employed</option>
                                                    <option value="married">Unemployed</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Employment Type </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">Govt</option>
                                                    <option value="married">Private</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Employment Basis </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">Full Time</option>
                                                    <option value="married">Part Time</option>
                                                    <option value="married">Casual</option>
                                                    <option value="married">Contract</option>
                                                </select>
                                            </div>



                                            <div class="col-lg-12" style="margin-top:20px;">
                                                <legend>E. Objective and Loan Features (Applicant 1)</legend>
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="control-label" for="caddress1">Please state primary reason
                                                    for seeking credit and how this loan may help you fulfil your long
                                                    term goals.</label>
                                                <textarea
                                                    placeholder="Please state primary reason for seeking credit and how this loan may help you fulfil your long term goals."
                                                    id="caddress1" name="caddress1" class="form-control"
                                                    autocomplete="off"></textarea>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="">
                                                    <label class="control-label" for="rad1">Select Loan Purpose</label>
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Mortage" id="mortage1"
                                                        name="mortage1" value="mortage1"
                                                        style="min-height:auto!important;" autocomplete="off"> Purchase
                                                    Home (Owner Occupied)
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Own" id="own1" name="own1"
                                                        value="own1" style="min-height:auto!important;"
                                                        autocomplete="off"> Refinance Home (Owner Occupied)
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Rent" id="rent1" name="rent1"
                                                        value="rent1" style="min-height:auto!important;"
                                                        autocomplete="off"> Debt Consolidator
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Other" id="other1" name="other1"
                                                        value="other1" style="min-height:auto!important;"
                                                        autocomplete="off"> Purchase Investment Poperty
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Other" id="other1" name="other1"
                                                        value="other1" style="min-height:auto!important;"
                                                        autocomplete="off"> Refinance Investment Loan
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Other" id="other1" name="other1"
                                                        value="other1" style="min-height:auto!important;"
                                                        autocomplete="off"> Constructor
                                                </div>
                                            </div>


                                            <div class="col-lg-12" style="margin-top:20px;">
                                                <legend>F. Your Financial Security (Applicant 1)</legend>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="">
                                                    <label class="control-label" for="rad1">Have you ever had any
                                                        financial judgments or legal proceedings against you?</label>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad22"
                                                        value="yes" style="min-height:auto!important;"
                                                        autocomplete="off"> Yes
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad22"
                                                        value="no" style="min-height:auto!important;"
                                                        autocomplete="off"> No
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="">
                                                    <label class="control-label" for="rad1">Do you have any difficulty
                                                        meeting your financial commitments in the past 2 years? </label>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad33"
                                                        value="yes" style="min-height:auto!important;"
                                                        autocomplete="off"> Yes
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad33"
                                                        value="no" style="min-height:auto!important;"
                                                        autocomplete="off"> No
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="">
                                                    <label class="control-label" for="rad1">Are any of yours existing
                                                        debts currently in arrears? </label>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad43"
                                                        value="yes" style="min-height:auto!important;"
                                                        autocomplete="off"> Yes
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad43"
                                                        value="no" style="min-height:auto!important;"
                                                        autocomplete="off"> No
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="">
                                                    <label class="control-label" for="rad1">Are you concerned about
                                                        rising interest rates? How concerned are you? </label>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad53"
                                                        value="yes" style="min-height:auto!important;"
                                                        autocomplete="off"> Yes
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad53"
                                                        value="no" style="min-height:auto!important;"
                                                        autocomplete="off"> No
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="">
                                                    <label class="control-label" for="rad1">Do you expect significant
                                                        changes to your financial situation in the foreseeable future
                                                        that would adversely impact your ability to meet your
                                                        commitments? </label>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad63"
                                                        value="yes" style="min-height:auto!important;"
                                                        autocomplete="off"> Yes
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad63"
                                                        value="no" style="min-height:auto!important;"
                                                        autocomplete="off"> No
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="control-label" for="caddress1">Please comment if you
                                                    answered 'Yes' to any of these</label>
                                                <textarea
                                                    placeholder="Please comment if you answered 'Yes' to any of these"
                                                    id="caddress1" name="caddress1" class="form-control"
                                                    autocomplete="off"></textarea>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="clearfix" style="height: 10px;clear: both;"></div>

                            </fieldset>
                        </div>
                    </form>
                    <div class="row" style="margin-bottom:30px;">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <button id="addbt1" class="btn btn-primary open3 pull-left mybtn">
                                    + Add 2nd Borrower
                                </button>
                                <button id="submit1" class="btn btn-primary open3 pull-right mybtn">
                                    Submit
                                </button>

                            </div>
                        </div>
                    </div>
                    <form name="basicform2" id="basicform2" method="post" action="">
                        <div class="row divdr"></div>
                        <div id="sf1" class="frm">
                            <fieldset>
                                <legend>Personal Details (Borrower 2)</legend>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="subhead"></h4>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label class="control-label" for="gnamee1">Given Name </label>
                                                <input type="text" placeholder="Given Name" id="gnamee1" name="gname1"
                                                    class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="control-label" for="snamee1">Surname </label>
                                                <input type="text" placeholder="Surname" id="snamee1" name="sname1"
                                                    class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="control-label" for="caddress1">Current Address </label>
                                                <input type="text" placeholder="Current Address" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="control-label" for="tcaddress1">Time at Current Address
                                                </label>
                                                <input type="date" placeholder="From Date" id="tcaddress1"
                                                    name="tcaddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="">
                                                    <label class="control-label" for="rad1">Address Status</label>
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Mortage" id="mortage1"
                                                        name="mortage1" value="mortage1"
                                                        style="min-height:auto!important;" autocomplete="off"> Mortage
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Own" id="own1" name="own1"
                                                        value="own1" style="min-height:auto!important;"
                                                        autocomplete="off"> Own
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Rent" id="rent1" name="rent1"
                                                        value="rent1" style="min-height:auto!important;"
                                                        autocomplete="off"> Rent
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Other" id="other1" name="other1"
                                                        value="other1" style="min-height:auto!important;"
                                                        autocomplete="off"> other
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="control-label" for="caddress1">Previous Address <span>(if
                                                        within last 3 years)</span> </label>
                                                <input type="text" placeholder="Previous Address" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>


                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Driver Licence No (Date
                                                    From)</label>
                                                <input type="date" placeholder="Date of Birth" id="udob" name="sdob"
                                                    class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Driver Licence No (To
                                                    Date)</label>
                                                <input type="date" placeholder="Date of Birth" id="udob" name="sdob"
                                                    class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">DOB </label>
                                                <input type="date" placeholder="Date of Birth" id="udob" name="sdob"
                                                    class="form-control" autocomplete="off">
                                            </div>


                                            <div class="col-lg-12">
                                                <label class="control-label" for="uname">Phone Number </label>
                                                <input type="text" placeholder="M" id="uphone" name="sphone"
                                                    class="form-control mb-bot" autocomplete="off">
                                                <input type="text" placeholder="H" id="uphone" name="sphone"
                                                    class="form-control mb-bot" autocomplete="off">
                                                <input type="text" placeholder="W" id="uphone" name="sphone"
                                                    class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="control-label" for="snamee1">Email Address </label>
                                                <input type="email" placeholder="Email" id="snamee1" name="sname1"
                                                    class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="">
                                                    <label class="control-label" for="rad1">Aust Citizen</label>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad1"
                                                        value="yes" style="min-height:auto!important;"
                                                        autocomplete="off"> Yes
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad1"
                                                        value="no" style="min-height:auto!important;"
                                                        autocomplete="off"> No
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="">
                                                    <label class="control-label" for="rad1">Status</label>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad1"
                                                        value="yes" style="min-height:auto!important;"
                                                        autocomplete="off"> PR
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad1"
                                                        value="no" style="min-height:auto!important;"
                                                        autocomplete="off"> Non-Resident
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Marital Status </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">Single</option>
                                                    <option value="married">Married</option>
                                                    <option value="de-facto">De Facto</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Age of Dependants</label>
                                                <input type="text" placeholder="Age of Dependants" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Number of
                                                    Dependants</label>
                                                <input type="text" placeholder="Number of Dependants" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="clearfix" style="height: 10px;clear: both;"></div>
                                            <div class="col-lg-12" style="margin-top:10px;">
                                                <legend>Current Employment (Borrower 2)</legend>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Type of Employment </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">PAYG</option>
                                                    <option value="married">Self-Employed</option>
                                                    <option value="de-facto">Not Employed</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Status </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">Full Time</option>
                                                    <option value="married">Part Time</option>
                                                    <option value="de-facto">Casual</option>
                                                    <option value="de-facto">Contract</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Employer Name</label>
                                                <input type="text" placeholder="Employer Name" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="clearfix" style="height: 10px;clear: both;"></div>
                                            <div class="col-lg-12" style="margin-top:10px;">
                                                <legend>A. Personal Detail (Applicant 2)</legend>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Title </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">Mr</option>
                                                    <option value="married">Mrs</option>
                                                    <option value="de-facto">Miss</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Surname</label>
                                                <input type="text" placeholder="Surname" id="caddress1" name="caddress1"
                                                    class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">First Name</label>
                                                <input type="text" placeholder="First Name" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Middle Name</label>
                                                <input type="text" placeholder="Middle Name" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Gender </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">Male</option>
                                                    <option value="married">Female</option>
                                                    <option value="de-facto">Other</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">DOB </label>
                                                <input type="date" placeholder="Date of Birth" id="udob" name="sdob"
                                                    class="form-control" autocomplete="off">
                                            </div>
                                            <div class="clearfix" style="height: 10px;clear: both;"></div>



                                            <div class="col-lg-12" style="margin-top:10px;">
                                                <legend>B. Contact Detail (Applicant 2)</legend>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Mobile Number</label>
                                                <input type="text" placeholder="Mobile Number" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Email Address</label>
                                                <input type="email" placeholder="Email Address" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Residential Status </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">PR</option>
                                                    <option value="married">Non Resident</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Start Date at Current Address
                                                </label>
                                                <input type="date" placeholder="Date of Birth" id="udob" name="sdob"
                                                    class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Current Address</label>
                                                <input type="text" placeholder="Current Address" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>


                                            <div class="col-lg-12" style="margin-top:20px;">
                                                <legend>C. Identification (Applicant 2)</legend>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Country Residency</label>
                                                <input type="text" placeholder="Country Residency" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Citizenship of</label>
                                                <input type="text" placeholder="Citizenship of" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Residential Status </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">PR</option>
                                                    <option value="married">Non Resident</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">Driver License
                                                    Number</label>
                                                <input type="text" placeholder="Driver License Number" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="caddress1">State of Issue</label>
                                                <input type="text" placeholder="State of Issue" id="caddress1"
                                                    name="caddress1" class="form-control" autocomplete="off">
                                            </div>



                                            <div class="col-lg-12" style="margin-top:20px;">
                                                <legend>D. Employment Detail (Applicant 2)</legend>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Employment Status </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">Employed</option>
                                                    <option value="married">Unemployed</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Employment Type </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">Govt</option>
                                                    <option value="married">Private</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="control-label" for="uname">Employment Basis </label>
                                                <select class="form-control" autocomplete="off" id="ustatus"
                                                    name="sstatus">
                                                    <option>---</option>
                                                    <option value="single">Full Time</option>
                                                    <option value="married">Part Time</option>
                                                    <option value="married">Casual</option>
                                                    <option value="married">Contract</option>
                                                </select>
                                            </div>



                                            <div class="col-lg-12" style="margin-top:20px;">
                                                <legend>E. Objective and Loan Features (Applicant 2)</legend>
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="control-label" for="caddress1">Please state primary reason
                                                    for seeking credit and how this loan may help you fulfil your long
                                                    term goals.</label>
                                                <textarea
                                                    placeholder="Please state primary reason for seeking credit and how this loan may help you fulfil your long term goals."
                                                    id="caddress1" name="caddress1" class="form-control"
                                                    autocomplete="off"></textarea>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="">
                                                    <label class="control-label" for="rad1">Select Loan Purpose</label>
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Mortage" id="mortage1"
                                                        name="mortage1" value="mortage1"
                                                        style="min-height:auto!important;" autocomplete="off"> Purchase
                                                    Home (Owner Occupied)
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Own" id="own1" name="own1"
                                                        value="own1" style="min-height:auto!important;"
                                                        autocomplete="off"> Refinance Home (Owner Occupied)
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Rent" id="rent1" name="rent1"
                                                        value="rent1" style="min-height:auto!important;"
                                                        autocomplete="off"> Debt Consolidator
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Other" id="other1" name="other1"
                                                        value="other1" style="min-height:auto!important;"
                                                        autocomplete="off"> Purchase Investment Poperty
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Other" id="other1" name="other1"
                                                        value="other1" style="min-height:auto!important;"
                                                        autocomplete="off"> Refinance Investment Loan
                                                </div>
                                                <div class="col-lg-3">
                                                    <input type="checkbox" placeholder="Other" id="other1" name="other1"
                                                        value="other1" style="min-height:auto!important;"
                                                        autocomplete="off"> Constructor
                                                </div>
                                            </div>


                                            <div class="col-lg-12" style="margin-top:20px;">
                                                <legend>F. Your Financial Security (Applicant 2)</legend>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="">
                                                    <label class="control-label" for="rad1">Have you ever had any
                                                        financial judgments or legal proceedings against you?</label>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad22"
                                                        value="yes" style="min-height:auto!important;"
                                                        autocomplete="off"> Yes
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad22"
                                                        value="no" style="min-height:auto!important;"
                                                        autocomplete="off"> No
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="">
                                                    <label class="control-label" for="rad1">Do you have any difficulty
                                                        meeting your financial commitments in the past 2 years? </label>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad33"
                                                        value="yes" style="min-height:auto!important;"
                                                        autocomplete="off"> Yes
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad33"
                                                        value="no" style="min-height:auto!important;"
                                                        autocomplete="off"> No
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="">
                                                    <label class="control-label" for="rad1">Are any of yours existing
                                                        debts currently in arrears? </label>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad43"
                                                        value="yes" style="min-height:auto!important;"
                                                        autocomplete="off"> Yes
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad43"
                                                        value="no" style="min-height:auto!important;"
                                                        autocomplete="off"> No
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="">
                                                    <label class="control-label" for="rad1">Are you concerned about
                                                        rising interest rates? How concerned are you? </label>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad53"
                                                        value="yes" style="min-height:auto!important;"
                                                        autocomplete="off"> Yes
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad53"
                                                        value="no" style="min-height:auto!important;"
                                                        autocomplete="off"> No
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="">
                                                    <label class="control-label" for="rad1">Do you expect significant
                                                        changes to your financial situation in the foreseeable future
                                                        that would adversely impact your ability to meet your
                                                        commitments? </label>
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad63"
                                                        value="yes" style="min-height:auto!important;"
                                                        autocomplete="off"> Yes
                                                </div>
                                                <div class="col-lg-2">
                                                    <input type="radio" placeholder="Yes" id="rad1" name="rad63"
                                                        value="no" style="min-height:auto!important;"
                                                        autocomplete="off"> No
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="control-label" for="caddress1">Please comment if you
                                                    answered 'Yes' to any of these</label>
                                                <textarea
                                                    placeholder="Please comment if you answered 'Yes' to any of these"
                                                    id="caddress1" name="caddress1" class="form-control"
                                                    autocomplete="off"></textarea>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="clearfix" style="height: 10px;clear: both;"></div>
                            </fieldset>
                        </div>
                    </form>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <button id="rembt2" class="btn btn-primary open3 pull-left mybtn">
                                - Remove 2nd Borrower
                            </button>
                            <button id="submit2" class="btn btn-primary open3 pull-right mybtn">
                                Submit
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Form End here -->



    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script type="text/javascript" src="jquery.validate.js"></script>
    <script type="text/javascript">
    jQuery().ready(function() {

        // validate form on keyup and submit
        var v = jQuery("#basicform").validate({
            rules: {
                uname: {
                    required: true,
                    minlength: 2,
                    maxlength: 16
                },
                uemail: {
                    required: true,
                    minlength: 2,
                    email: true,
                    maxlength: 100,
                },
                upass1: {
                    required: true,
                    minlength: 6,
                    maxlength: 15,
                },
                upass2: {
                    required: true,
                    minlength: 6,
                    equalTo: "#upass1",
                }

            },
            errorElement: "span",
            errorClass: "help-inline-error",
        });

    });
    $("#addbt1").click(function() {
        $("#basicform2").show();
        $("#rembt2").show();
        $("#submit2").show();
        $("#addbt1").hide();
        $("#submit1").hide();

    });
    $("#rembt2").click(function() {
        $("#basicform2").hide();
        $("#submit2").hide();
        $("#rembt2").hide();
        $("#addbt1").show();
        $("#submit1").show();
    });
    </script>




</body>

</html>