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
    @foreach($model as $mod)

    <?php 
        $a1a = json_decode($mod->a1a);
        $a1b = json_decode($mod->a1b);
        $a1c = json_decode($mod->a1c);
        $a1d = json_decode($mod->a1d);
        $a1e = json_decode($mod->a1e);
        $a1f = json_decode($mod->a1f);
        $a1g = json_decode($mod->a1g);
        $a1h = json_decode($mod->a1h);
        $a1i = json_decode($mod->a1i);
        $a1j = json_decode($mod->a1j);
        $a1k = json_decode($mod->a1k);
        $a1l = json_decode($mod->a1l);
        $a1m = json_decode($mod->a1m);
        $a2a = json_decode($mod->a2a);
        $a2b = json_decode($mod->a2b);
        $a2c = json_decode($mod->a2c);
        $a2d = json_decode($mod->a2d);
        $a2e = json_decode($mod->a2e);
        $a2f = json_decode($mod->a2f);
        $a2g = json_decode($mod->a2g);
        $a3a = json_decode($mod->a3a);
        $a3b = json_decode($mod->a3b);
        $a3c = json_decode($mod->a3c);
        $a3d = json_decode($mod->a3d);
        $a3e = json_decode($mod->a3e);
        $a3f = json_decode($mod->a3f);
        $a3g = json_decode($mod->a3g);
        $a4b = json_decode($mod->a4b);

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
            <p class="cambria" style="text-align: center;font-weight: bold;padding-top: 20px;">PROFILE OF STUDENTS</p>
        </div>

        <div class="container-fluid">
            <p class="cambria margin-0rem" style="text-align: left;">This questionnaire requests lists of students who belong to several categories. This is done to help the Guidance Center create programs responsive to the needs of the students. Please take this seriously. Please also use caution when filling this out. Please make sure that the list you will submit is accurate. Rest assured that confidentiality shall be upheld. </p>
            <p class="cambria" style="text-align: left;">Thank you!</p>
            <p class="cambria margin-0rem" style="text-align: left;">Course/Year/Section: <b style="border-bottom: 1px solid;">{{$mod->course->course}} - {{$mod->yearlevel}} - {{$mod->section}}</b></p><br>
            <p class="cambria margin-0rem" style="text-align: left;">I. STUDENTS WHO ARE DIFFERENTLY-ABLED</p>
            <div class="container">
                <p class="cambria margin-0rem" style="text-align: left;">A. Students who are Nearsighted (Unable to see things clearly unless they are relatively close to the eyes.)</p>
                <div class="row">
                    @isset($a1a)
                        @foreach($a1a as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">B. Students who are Farsighted (Unable to see things clearly, especially if they are relatively close to the eyes.)</p>
                <div class="row">
                    @isset($a1b)
                        @foreach($a1b as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">C. Students with Crossed Eyes (Having one or both eyes turned inward toward the nose.)</p>
                <div class="row">
                    @isset($a1c)
                        @foreach($a1c as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">D. Students with Color Blindness (Difficulty distinguishing certain colors, such as blue and yellow or red and green.)</p>
                <div class="row">
                    @isset($a1d)
                        @foreach($a1d as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">E. Students with Blindness (Unable to see because of injury, disease, or a congenital condition.)</p>
                <div class="row">
                    @isset($a1e)
                        @foreach($a1e as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">F. Students who are Deaf (Lacking the power of hearing or having impaired hearing.)</p>
                <div class="row">
                    @isset($a1f)
                        @foreach($a1f as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">G. Students with Cleft/Lip Palate (Separation that occurs in the lip or the palate (roof of the mouth), or both.)</p>
                <div class="row">
                    @isset($a1g)
                        @foreach($a1g as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">H. Students with Stuttering or Stammering Condition (Flow of speech is disrupted by involuntary repetitions and prolongations of sounds, syllables, words or phrases as well as involuntary silent pauses or blocks.)</p>
                <div class="row">
                    @isset($a1h)
                        @foreach($a1h as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">I. Students with Dyslexia (Difficulty in learning to read or interpret words, letters, and other symbols.)</p>
                <div class="row">
                    @isset($a1i)
                        @foreach($a1i as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">J. Students with Dyscalculia (May have poor comprehension of math symbols, may struggle with memorizing and organizing numbers, have difficulty telling time or have trouble with counting.)</p>
                <div class="row">
                    @isset($a1j)
                        @foreach($a1j as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">K. Students with Dysgraphia (May have illegible handwriting, inconsistent spacing, poor spatial planning on paper, poor spelling and difficulty composing writing as well as thinking and writing at the same time.)</p>
                <div class="row">
                    @isset($a1k)
                        @foreach($a1k as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">L. Students with Muteness (Lacking the ability to speak.)</p>
                <div class="row">
                    @isset($a1l)
                        @foreach($a1l as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">M. Students with Paraplegia (Impairment in motor or sensory function of the lower extremities.)</p>
                <div class="row">
                    @isset($a1m)
                        @foreach($a1m as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                            <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
            </div>
            <br>
            <p class="cambria margin-0rem" style="text-align: left;">II. STUDENTS WHO ARE AT RISK</p>
            <div class="container">
                <p class="cambria margin-0rem" style="text-align: left;">A. Students who are/were Pregnant</p>
                <div class="row">
                    @isset($a2a)
                        @foreach($a2a as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">B. Students who are Married </p>
                <div class="row">
                    @isset($a2b)
                        @foreach($a2b as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">C. Students who are Married with kids 5 years and below</p>
                <div class="row">
                    @isset($a2c)
                        @foreach($a2c as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">D. Students who have Behavioral and Emotional Difficulties (Having suicidal tendencies and nervous breakdown; having a difficulty relating with others.)</p>
                <div class="row">
                    @isset($a2d)
                        @foreach($a2d as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">E. Students who Abuse Substances (e.g. alcohol, tobacco/cigarette, drugs)</p>
                <div class="row">
                    @isset($a2e)
                        @foreach($a2e as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">F. Students who are Frequently Late and/or Absent</p>
                <div class="row">
                    @isset($a2f)
                        @foreach($a2f as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">G. Students with Academic Deficiencies (Consistently having low grades.)</p>
                <div class="row">
                    @isset($a2g)
                        @foreach($a2g as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
            </div>
            <br>
            <p class="cambria margin-0rem" style="text-align: left;">III. STUDENTS WITH SPECIAL NEEDS</p>
            <div class="container">
                <p class="cambria margin-0rem" style="text-align: left;">A. Students who are Left-Handed</p>
                <div class="row">
                    @isset($a3a)
                        @foreach($a3a as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">B. Students whose Parent/s is/are Overseas Filipino Workers</p>
                <div class="row">
                    @isset($a3b)
                        @foreach($a3b as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">C. Students whose Parent/s is/are No Longer Alive</p>
                <div class="row">
                    @isset($a3c)
                        @foreach($a3c as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">D. Students whose Parents are Separated</p>
                <div class="row">
                    @isset($a3d)
                        @foreach($a3d as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">E. Students who are Raised by a Single Parent</p>
                <div class="row">
                    @isset($a3e)
                        @foreach($a3e as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">F. Students who Belong to the LGBT Community</p>
                <div class="row">
                    @isset($a3f)
                        @foreach($a3f as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
                <br>
                <p class="cambria margin-0rem" style="text-align: left;">G. Students who are Overachievers (Performing better or achieving more success than expected.)</p>
                <div class="row">
                    @isset($a3g)
                        @foreach($a3g as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
            </div>
            <br>
            <p class="cambria margin-0rem" style="text-align: left;">IV. OTHERS</p>
            <div class="container">
                <p class="cambria margin-0rem" style="text-align: left;">Please specify needs: <b style="border-bottom: 1px solid;">{{$mod->a4a}}</b></p>
                <div class="row">
                    @isset($a4b)
                        @foreach($a4b as $aa1a)
                            <?php $stud = App\Student::where('id', $aa1a)->first() ?>
                            <div class="col-md-6">
                                <p class="cambria margin-0rem" style="text-align: center;border-bottom: 1px solid;">{{$stud->lastname}}, {{$stud->firstname}} {{$stud->middlename}}</p>
                            </div>
                        @endforeach
                    @endisset
                    
                </div>
            </div>
            <br><br>
            <p class="cambria margin-0rem" style="text-align: left;">Prepared by: ___________________________________________________________________ (Name and Signature of Class Mayor)</p>
            <p class="cambria margin-0rem" style="text-align: left;padding-left: 91px;">___________________________________________________________________ (Date)</p>
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
    </script>
</html>