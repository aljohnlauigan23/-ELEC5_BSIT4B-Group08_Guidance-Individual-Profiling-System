<!DOCTYPE html>
<html>
<head>
  <title>Individual Inventory Form</title>
    <link rel="icon" type="text/css" href="{{URL::to('logo.png')}}"></head>

    <!-- Bootstrap CSS-->
    <link href="{{URL::to('admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <style>
        .century_gothic{
            font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;
        }
        .cambria{
            font-family: Cambria,Georgia,serif;
        }
        .calibri{
            font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; 
        }
        .margin-0rem{
            margin-bottom: 0rem;
        }
        .fsize_15{
            font-size: 15px;
        }
        .checkbox-wrapper-28 label{
            font-family: Cambria,Georgia,serif;
        }
    </style>

    <style>
    .checkbox-wrapper-28 {
        --size: 25px;
        position: relative;
    }

    .checkbox-wrapper-28 *,
    .checkbox-wrapper-28 *:before,
    .checkbox-wrapper-28 *:after {
        box-sizing: border-box;
    }

    .checkbox-wrapper-28 .promoted-input-checkbox {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }

    .checkbox-wrapper-28 input:checked ~ svg {
        height: calc(var(--size) * 0.6);
        -webkit-animation: draw-checkbox-28 ease-in-out 0.2s forwards;
                animation: draw-checkbox-28 ease-in-out 0.2s forwards;
    }
    .checkbox-wrapper-28 label:active::after {
        background-color: #e6e6e6;
    }
    .checkbox-wrapper-28 label {
        color: black;
        line-height: var(--size);
        cursor: pointer;
        position: relative;
    }
    .checkbox-wrapper-28 label:after {
        content: "";
        height: var(--size);
        width: var(--size);
        margin-right: 8px;
        float: left;
        border: 2px solid black;
        border-radius: 3px;
        transition: 0.15s all ease-out;
    }
    .checkbox-wrapper-28 svg {
        stroke: black;
        stroke-width: 3px;
        height: 0;
        width: calc(var(--size) * 0.6);
        position: absolute;
        left: calc(var(--size) * 0.21);
        top: calc(var(--size) * 0.2);
        stroke-dasharray: 33;
    }

    @-webkit-keyframes draw-checkbox-28 {
        0% {
        stroke-dashoffset: 33;
        }
        100% {
        stroke-dashoffset: 0;
        }
    }

    @keyframes draw-checkbox-28 {
        0% {
        stroke-dashoffset: 33;
        }
        100% {
        stroke-dashoffset: 0;
        }
    }
    </style>



<body>
    <?php $sy = App\Schoolyear::where('status', 1)->first();?>

    @foreach($model as $mod)
    <?php 
        $prop = App\IndividualInventory::findOrFail($mod->id);
        $student =  App\Student::where('id', $prop->student_id)->first(); 
        ?>
    <div style="height: 1500px;">
        <p class="calibri" style="text-align: left;font-style: italic;">Guidance Form 3</p>
        <div class="container-fluid row pull-center" style="text-align: right;padding-top: 10px;padding-bottom: 10px;">
            <div class="col-md-3" style="text-align: right;">
                <img src="{{URL::to('logo.png')}}" style="width: 100px;height:100px;" alt="">
            </div>
            <div class="col-md-6" style="text-align: center;">
                <p class="cambria margin-0rem fsize_15">Republic of the Philippines</p>
                <p class="cambria margin-0rem fsize_15" style="font-weight: bold;">BOHOL ISLAND STATE UNIVERSITY-BALILIHAN CAMPUS</p>
                <p class="cambria margin-0rem fsize_15">Magsija, Balilihan, Bohol</p>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="container-fluid">
            <p class="century_gothic" style="font-style: italic;margin-bottom: 0em;"><b>Vision:</b> A premier S & T university for the formation of world class and virtuous human resource for the sustainable development in Bohol and </p>
            <p class="century_gothic" style="text-align: center;font-style: italic;margin-bottom: 0em;">the country.</p>
            <p class="century_gothic" style="border-bottom: solid 1px;font-style: italic;"><b>Mission:</b> Committed to provide quality and innovative education in strategic sectors for the development of Bohol and the country.</p>
            <p class="cambria" style="text-align: center;font-weight: bold;padding-top: 20px;">INDIVIDUAL INVENTORY FORM</p>
        </div>

        <div class="container-fluid">
            <p class="cambria margin-0rem" style="text-align: left;">Dear Student,</p>
            <p class="cambria margin-0rem" style="text-align: left;padding-left: 50px;">The purpose of this form is to gather essential information that will enable your Guidance Counselor to help you in whatever way possible.</p>
            <p class="cambria margin-0rem" style="text-align: left;"> Be assured that <b>all information</b> shall be kept with <b>utmost confidentiality</b>. </p>
        </div>
    
        <div class="row container-fluid">
            <div class="col-md-9">
                <table class="table table-bordered" style="border: 1px solid;">
                    <tbody>
                        <tr>
                            <td class="cambria" style="text-align: left;" colspan="3">Date: <b><u>{{Carbon\Carbon::parse($prop->a1)->toDateString()}}</u></b> : <b><u>{{$sy->name}}</b></u> </td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left;" colspan="2">Student Number/I.D. Number: <b style="padding-left: 20px;">{{$student->id_no}}</b></td>
                            <td class="cambria" style="text-align: left;">Course: <b style="padding-left: 20px;">{{$student->course->course}}</b></td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left;" colspan="3"><b>{{$student->lastname}}</b><b style="padding-left: 100px;">{{$student->firstname}}</b><b style="padding-left: 50px;">{{$student->middlename}}</b><b style="padding-left: 150px;">{{$student->firstname}}</b></td>
                        </tr>
                        <tr>
                        <td class="cambria" style="text-align: left;" colspan="3"><span>(Family Name)</span><span style="padding-left: 50px;">(First Name)</span><span style="padding-left: 50px;">(Middle Name)</span><span style="padding-left: 50px;">(Nickname) </span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3" style="border: 1px solid;height: 200px !Important;">
                <p class="cambria" style="text-align: center;padding-top: 100px;">2x2 Photo</p>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered" style="border: 1px solid;">
                    <tbody>
                        
                        <tr>
                            <td class="cambria" style="text-align: left;">Age: <b style="padding-left: 20px;">{{Carbon\Carbon::parse($student->dateofbirth)->age}}</b></td>
                            <td class="cambria" style="text-align: left;">Gender: <b style="padding-left: 20px;">{{strtoupper($student->sex)}}</b></td>
                            <td class="cambria" style="text-align: left;">Civil Status: <b style="padding-left: 20px;">{{$prop->a2}}</b></td>
                        </tr>
                        <tr>
                        <td class="cambria" style="text-align: left;" colspan="2">Date of Birth: <b style="padding-left: 10px;">{{Carbon\Carbon::parse($student->dateofbirth)->toFormattedDateString()}}</b></td>
                        <td class="cambria" style="text-align: left;">Place of Birth: <b style="padding-left: 20px;">{{$prop->a3}}</b></td>
                        </tr>
                        <tr>
                        <td class="cambria" style="text-align: left;" colspan="2">Religion: <b style="padding-left: 20px;">{{$prop->a4}}</b></td>
                        <td class="cambria" style="text-align: left;">Nationality: <b style="padding-left: 20px;">{{$prop->a5}}</b></td>
                        </tr>
                        <tr>
                        <td class="cambria" style="text-align: left;" colspan="2">Mobile #.: <b style="padding-left: 20px;">{{$prop->a6}}</b></td>
                        <td class="cambria" style="text-align: left;">Tel #: <b style="padding-left: 20px;">{{$prop->a7}}</b></td>
                        </tr>
                        <tr>
                        <td class="cambria" style="text-align: left;" colspan="3">E-mail Address: <b style="padding-left: 20px;">{{$prop->a8}}</b></td>
                        </tr>
                        <tr>
                        <td class="cambria" style="text-align: left;" colspan="3">City Address: <b style="padding-left: 20px;">{{$prop->a9}}</b></td>
                        </tr>
                        <tr>
                        <td class="cambria" style="text-align: left;" colspan="3">Home Address: <b style="padding-left: 20px;">{{$student->address}}</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-12">
                <table class="table table-bordered" style="border: 1px solid;">
                    <thead>
                    <tr>
                        <th style="text-align: center; font-weight: bold;width: 30%;" class="cambria"></th>
                        <th style="text-align: center; font-weight: bold;width: 35%;" class="cambria">FATHER</th>
                        <th style="text-align: center; font-weight: bold;width: 35%;" class="cambria">MOTHER</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="cambria" style="text-align: left;" >Name</u> </td>
                            <td class="cambria" style="text-align: center;" >{{$prop->b1}}</td>
                            <td class="cambria" style="text-align: center;" >{{$prop->b2}}</td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left;" >Home Address</u> </td>
                            <td class="cambria" style="text-align: center;" >{{$prop->b3}}</td>
                            <td class="cambria" style="text-align: center;" >{{$prop->b4}}</td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left;" >Contact Number</u> </td>
                            <td class="cambria" style="text-align: center;" >{{$prop->b5}}</td>
                            <td class="cambria" style="text-align: center;" >{{$prop->b6}}</td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left;" >Date of Birth</u> </td>
                            <td class="cambria" style="text-align: center;" >{{$prop->b7}}</td>
                            <td class="cambria" style="text-align: center;" >{{$prop->b8}}</td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left;" >Nationality</u> </td>
                            <td class="cambria" style="text-align: center;" >{{$prop->b9}}</td>
                            <td class="cambria" style="text-align: center;" >{{$prop->b10}}</td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left;" >Educational Attainment</u> </td>
                            <td class="cambria" style="text-align: center;" >{{$prop->b11}}</td>
                            <td class="cambria" style="text-align: center;" >{{$prop->b12}}</td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left;" >Occupation</u> </td>
                            <td class="cambria" style="text-align: center;" >{{$prop->b13}}</td>
                            <td class="cambria" style="text-align: center;" >{{$prop->b14}}</td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left;" >Place of Employment</u> </td>
                            <td class="cambria" style="text-align: center;" >{{$prop->b15}}</td>
                            <td class="cambria" style="text-align: center;" >{{$prop->b16}}</td>
                        </tr>
                        <tr>
                            <td class="cambria" style="text-align: left;" >Monthly Income</u> </td>
                            <td class="cambria" style="text-align: center;" >{{$prop->b17}}</td>
                            <td class="cambria" style="text-align: center;" >{{$prop->b18}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div style="height: 1500px;">
        <p class="calibri" style="text-align: left;font-style: italic;">Guidance Form 3</p>

        <div class="container-fluid">
            <p class="cambria margin-0rem" style="text-align: left;"><b>Parents</b></p>
            <div class="row">
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-1" type="checkbox" class="promoted-input-checkbox" @if($prop->c1 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-1">
                        Living Together
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-2" type="checkbox" class="promoted-input-checkbox" @if($prop->c2 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-2">
                        Permanently Separated
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-3" type="checkbox" class="promoted-input-checkbox" @if($prop->c3 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-3">
                        Temporarily Separated
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-2" type="checkbox" class="promoted-input-checkbox" @if($prop->c4 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-2">
                        Father – OFW 
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-3" type="checkbox" class="promoted-input-checkbox" @if($prop->c5 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-3">
                        Mother – OFW 
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid" style="padding-top: 10px;">
            <table class="table table-bordered">
                <thead>
                    <th style="text-align: center; font-weight: bold;width: 50%;" class="cambria">Name of Brothers/Sisters</th>
                    <th style="text-align: center; font-weight: bold;width: 10%;" class="cambria">Age</th>
                    <th style="text-align: center; font-weight: bold;width: 40%;" class="cambria">School/Place of Work</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tabletwo->d1}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->d2}}</b></td>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tabletwo->d3}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tabletwo->d4}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->d5}}</b></td>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tabletwo->d6}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tabletwo->d7}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->d8}}</b></td>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tabletwo->d9}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tabletwo->d10}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->d11}}</b></td>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tabletwo->d12}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tabletwo->d13}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->d14}}</b></td>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tabletwo->d15}}</b></td>
                    </tr>
                </tbody>
            </table>
            <p class="cambria" style="text-align: left;font-size: 13px;"><i>Place + sign after name, if deceased.</i></p>

            <div class="row" style="padding-top: 10px;">
                <div class="col-md-4">
                    <p class="cambria">Guardian (if not living with Parents):  </p>
                </div>
                <div class="col-md-8">
                <p class="cambria" style="text-align: left;border-bottom: 1px solid;">{{$prop->tabletwo->e1}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p class="cambria">Relationship with Guardian:  </p>
                </div>
                <div class="col-md-3">
                <p class="cambria" style="text-align: left;border-bottom: 1px solid;">{{$prop->tabletwo->e2}}</p>
                </div>
                <div class="col-md-2">
                    <p class="cambria">Contact #: </p>
                </div>
                <div class="col-md-4">
                    <p class="cambria" style="text-align: left;border-bottom: 1px solid;">{{$prop->tabletwo->e3}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">Address:  </p>
                </div>
                <div class="col-md-10">
                <p class="cambria" style="text-align: left;border-bottom: 1px solid;">{{$prop->tabletwo->e4}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">Easiest Subjects:  </p>
                </div>
                <div class="col-md-10">
                <p class="cambria" style="text-align: left;border-bottom: 1px solid;">{{$prop->tabletwo->e5}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">Difficult Subjects:  </p>
                </div>
                <div class="col-md-10">
                <p class="cambria" style="text-align: left;border-bottom: 1px solid;">{{$prop->tabletwo->e6}}</p>
                </div>
            </div>

            <table class="table table-bordered" style="border: 1px solid;">
                <tbody>
                    <tr>
                        <td class="cambria" style="text-align: center;font-weight: bold;" colspan="5">Educational Background</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="cambria" style="text-align: center;">Name & Address of School</td>
                        <td class="cambria" style="text-align: center;">Program</td>
                        <td class="cambria" style="text-align: center;">Inclusive Years of Attendance</td>
                        <td class="cambria" style="text-align: center;">Honors/Awards Received</td>
                    </tr>
                        <td class="cambria" style="text-align: left;">Elementary</td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->f1}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->f2}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->f3}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->f4}}</b></td>
                    </tr>
                    </tr>
                        <td class="cambria" style="text-align: left;">Secondary</td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->f5}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->f6}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->f7}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->f8}}</b></td>
                    </tr>
                    </tr>
                        <td class="cambria" style="text-align: left;">Tertiary*</td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->f9}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->f10}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->f11}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->f12}}</b></td>
                    </tr>
                    </tr>
                        <td class="cambria" style="text-align: left;">Graduate Studies*</td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->f13}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->f14}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->f15}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tabletwo->f16}}</b></td>
                    </tr>
                </tbody>
            </table>

            <table class="table table-bordered">
                <thead>
                    <th style="text-align: center; font-weight: bold;width: 50%;" class="cambria">Name of Organization/s that You are a Member of</th>
                    <th style="text-align: center; font-weight: bold;width: 10%;" class="cambria">Position</th>
                    <th style="text-align: center; font-weight: bold;width: 40%;" class="cambria">School Year</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tablethree->g1}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tablethree->g2}}</b></td>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tablethree->g3}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tablethree->g4}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tablethree->g5}}</b></td>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tablethree->g6}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tablethree->g7}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tablethree->g8}}</b></td>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tablethree->g9}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tablethree->g10}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tablethree->g11}}</b></td>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tablethree->g12}}</b></td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tablethree->g13}}</b></td>
                        <td class="cambria" style="text-align: center;"><b>{{$prop->tablethree->g14}}</b></td>
                        <td class="cambria" style="text-align: left;"><b>{{$prop->tablethree->g15}}</b></td>
                    </tr>
                </tbody>
            </table>

            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">Interests:   </p>
                </div>
                <div class="col-md-10">
                <p class="cambria" style="text-align: left;border-bottom: 1px solid;">{{$prop->tablethree->h1}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">Skills/Talents:   </p>
                </div>
                <div class="col-md-10">
                <p class="cambria" style="text-align: left;border-bottom: 1px solid;">{{$prop->tablethree->h2}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">Hobbies:   </p>
                </div>
                <div class="col-md-10">
                <p class="cambria" style="text-align: left;border-bottom: 1px solid;">{{$prop->tablethree->h3}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">Ambitions:   </p>
                </div>
                <div class="col-md-10">
                <p class="cambria" style="text-align: left;border-bottom: 1px solid;">{{$prop->tablethree->h4}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">Present Concerns:   </p>
                </div>
                <div class="col-md-10">
                <p class="cambria" style="text-align: left;border-bottom: 1px solid;">{{$prop->tablethree->h5}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p class="cambria">Fears:   </p>
                </div>
                <div class="col-md-10">
                <p class="cambria" style="text-align: left;border-bottom: 1px solid;">{{$prop->tablethree->h6}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p class="cambria">Philosophy/Motto in Life:   </p>
                </div>
                <div class="col-md-9">
                <p class="cambria" style="text-align: left;border-bottom: 1px solid;">{{$prop->tablethree->h7}}</p>
                </div>
            </div>
        </div>

    </div>

    <div style="height: 1500px;">
        <p class="calibri" style="text-align: left;font-style: italic;">Guidance Form 3</p>
        
        <p class="cambria margin-0rem" style="text-align: left;"><b>Traits that You Possess: </b></p>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-1" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i1 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-1">
                        Friendly
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-2" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i2 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-2">
                        Easily Troubled  
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-3" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i3 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-3">
                        Happy-Go-Lucky     
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-1" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i4 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-1">
                        Stubborn
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-2" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i5 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-2">
                        Confident   
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-3" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i6 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-3">
                        Calm
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-1" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i7 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-1">
                        Relaxed 
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-2" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i8 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-2">
                        Imaginative        
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-3" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i9 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-3">
                        Practical
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-1" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i10 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-1">
                        Tense
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-2" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i11 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-2">
                        Suspicious           
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-3" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i12 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-3">
                        Trusting 
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-1" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i13 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-1">
                        Worrier
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-2" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i14 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-2">
                        Serious 
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-3" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i15 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-3">
                        Shy
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-1" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i16 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-1">
                        Reserved         
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-2" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i17 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-2">
                        Outgoing
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-3" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i18 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-3">
                        Dominant                 
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-1" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i19 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-1">
                        Self-assured    
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-2" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i20 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-2">
                        Perfectionist        
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-3" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i21 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-3">
                        Flexible                     
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-1" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i22 == 'on') checked @endif />
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-1">
                        Individualistic 
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-2" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i23 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-2">
                        Group-Oriented   
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox-wrapper-28">
                        <input id="tmp-3" type="checkbox" class="promoted-input-checkbox" @if($prop->tablefour->i24 == 'on') checked @endif/>
                        <svg><use xlink:href="#checkmark-28" /></svg>
                        <label for="tmp-3">
                        Traditional               
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <symbol id="checkmark-28" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                            </path>
                            </symbol>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p class="cambria">Others (Please specify.):   </p>
                </div>
                <div class="col-md-9">
                <p class="cambria" style="text-align: left;border-bottom: 1px solid;">{{$prop->tablefour->i25}}</p>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <p class="cambria">Disabilities/Impairments:    </p>
                </div>
                <div class="col-md-9">
                <p class="cambria" style="text-align: left;border-bottom: 1px solid;">{{$prop->tablefour->j1}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p class="cambria">Chronic Illnesses:     </p>
                </div>
                <div class="col-md-9">
                <p class="cambria" style="text-align: left;border-bottom: 1px solid;">{{$prop->tablefour->j2}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p class="cambria">Medicines Regularly Taken:   </p>
                </div>
                <div class="col-md-9">
                <p class="cambria" style="text-align: left;border-bottom: 1px solid;">{{$prop->tablefour->j3}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p class="cambria">Accidents Experienced/Effect:    </p>
                </div>
                <div class="col-md-9">
                <p class="cambria" style="text-align: left;border-bottom: 1px solid;">{{$prop->tablefour->j4}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p class="cambria">Operations Experienced/Effect:    </p>
                </div>
                <div class="col-md-9">
                <p class="cambria" style="text-align: left;border-bottom: 1px solid;">{{$prop->tablefour->j5}}</p>
                </div>
            </div>
            <p class="cambria" style="text-align: left;">To whom would you like to share your concerns and problems with? Why?</p>
            <p class="cambria" style="text-align: left;"><u>{{$prop->tablefour->k1}}</u></p>
            <br>
            <p class="cambria" style="text-align: left;">Would you like to see and talk to your guidance counselor?</p>
            <p class="cambria" style="text-align: left;"><u>{{$prop->tablefour->k2}}</u></p>
            
        </div>

        <div class="container-fluid row pull-right">
            <div class="col-md-6"></div>
            <div class="col-md-6" style="text-align: center;">
                <p class="cambria" style="text-align;padding-top: 60px;margin-bottom: 0rem;font-weight: bold;font-style: uppercase;">{{$student->lastname}}, {{$student->firstname}} {{$student->middlename}}</p>
                <hr style="margin-left: -40px;border-bottom: 1px solid;margin-top: 0px;margin-bottom: 0rem;">
                <p class="cambria" style="text-align;">Signature over Printed Name</p>
            </div>
        </div>
        

    </div>
    @endforeach

    
    
</body>
  <!-- Jquery JS-->
    <script src="{{URL::to('admin/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{URL::to('admin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>

    <script type="text/javascript">
        window.print();
        $('.promoted-input-checkbox').attr('disabled', 'disabled');
    </script>
</html>