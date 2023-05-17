@extends('layouts.admin')
@section('clientcounselorfeedback')
active
@endsection
@section('content')
  <div class="container p-t-30">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('forms.needsassessment_formsubmit')}}" enctype="multipart/form-data" style="font-size: 12px;">
                {{csrf_field()}}
            <p class="cambria fsize_15" style="text-align: center;font-weight: bold;padding-top: 0px; font-size: 20px;"><b>NEEDS ASSESSMENT INVENTORY FORM</b></p>
            <br>
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-1">
                    <p class="cambria" style="font-size: 15px;">Name: </p>
                </div>
                <div class="col-md-4">
                    <p class="cambria" style="text-align: left;font-weight: bold; font-size: 14px;">{{$student->lastname}}, {{$student->firstname}} {{substr($student->middlename, 0, 1)}}.</p>
                    <hr style="margin-left: -40px;border-bottom: 1px solid;margin-top: -2px;">
                </div>
                <div class="col-md-2">
                    <p class="cambria" style="font-size: 15px;">Year & Course: </p>
                </div>
                <div class="col-md-5">
                    <p class="cambria" style="text-align: left;font-weight: bold; font-size: 14px;">{{$student->yearlevel}} - {{$student->course->course}}</p>
                    <hr style="margin-left: -40px;border-bottom: 1px solid;margin-top: -2px;">
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <p class="cambria margin-0rem" style="text-align: left; font-style: italic; font-size: 14px; line-height: 20px; text-indent: 30px;">The following are some of the needs experiences by the people of your age. Please help us identify which needs you experience and whether you believe the Guidance Program should help you with these needs.</p>
            <br>
            <p class="cambria margin-0rem" style="text-align: center; font-size: 16px;"><u>PART I–AREAS OF CONCERN</u></p>
            <p class="cambria margin-0rem" style="text-align: left; font-size: 16px; line-height: 20px;"><b>A.</b> In <b>Column A</b>, use the following code to indicate the extent to which it is important to you that the Guidance Center does something to respond to the specific need. Please write the appropriate letter under Column A.</p>
            <div class="row">
                <div class="col-md-2" style="text-align: right;padding-left: 100px;">
                    <p class="cambria margin-0rem"><b>NIA</b></p>
                    <p class="cambria margin-0rem"><b>SI</b></p>
                    <p class="cambria margin-0rem"><b>MI</b></p>
                    <p class="cambria margin-0rem"><b>VI</b></p>
                    <p class="cambria margin-0rem"><b>EI</b></p>
                </div>
                <div class="col-md-6" style="text-align: left;padding-left: 40px;">
                    <p class="cambria margin-0rem">Not Important at All</p>
                    <p class="cambria margin-0rem">Somewhat Important </p>
                    <p class="cambria margin-0rem">Moderately Important </p>
                    <p class="cambria margin-0rem">Very Important </p>
                    <p class="cambria margin-0rem">Extremely Important </p>
                </div>
            </div>
            <p class="cambria margin-0rem" style="text-align: left; font-size: 16px; "><b>B</b>. In <b>Column B</b>, please indicate with a check mark whether the Guidance Center is already attending to these needs.</p>
            <p class="cambria margin-0rem" style="text-align: left; font-size: 16px; line-height: 20px;"><b>C</b>. In <b>Column C</b>, use the following code to indicate your satisfaction with the way that your Guidance Center is responding to each of these needs. Please write the appropriate numbers under Column C.</p>
            <div class="row">
                <div class="col-md-2" style="text-align: right;padding-left: 100px;">
                    <p class="cambria margin-0rem"><b>1 -</p>
                    <p class="cambria margin-0rem">2 -</p>
                    <p class="cambria margin-0rem">3 -</p>
                    <p class="cambria margin-0rem">4 -</p>
                    <p class="cambria margin-0rem">5 - </b></p>
                </div>
                <div class="col-md-6" style="text-align: left;padding-left: 40px;">
                    <p class="cambria margin-0rem">Not Satisfied</p>
                    <p class="cambria margin-0rem">Minimally Satisfied</p>
                    <p class="cambria margin-0rem">Somewhat Satisfied</p>
                    <p class="cambria margin-0rem">Moderately Satisfied</p>
                    <p class="cambria margin-0rem">Very Much Satisfied</p>
                </div>
            </div>
        </div>
<br>
        <div class="container-fluid row pull-center">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td class="cambria" style="text-align: left;font-weight: bold; font-size: 16px;"><i>SELF- DEVELOPMENT</i></td>
                        <td style="text-align: center; font-weight: bold; font-size: 16px;" class="cambria">A</td>
                        <td style="text-align: center; font-weight: bold; font-size: 16px;" class="cambria">B</td>
                        <td style="text-align: center; font-weight: bold; font-size: 16px;" class="cambria">C</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">1. Know and understand myself better.</td>
                        <td style="text-align: center;">
                            <select name="a1a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a1b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a1c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">2. Get rid of my fears</td>
                        <td style="text-align: center;">
                            <select name="a2a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a2b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a2c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">3. Manage my time</td>
                        <td style="text-align: center;">
                            <select name="a3a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a3b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a3c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">4. Plan my life</td>
                        <td style="text-align: center;">
                            <select name="a4a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a4b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a4c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">5. Develop self-confidence </td>
                        <td style="text-align: center;">
                            <select name="a5a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a5b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a5c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">6. Discover my talents and develop them</td>
                        <td style="text-align: center;">
                            <select name="a6a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a6b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a6c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">7. Improve my appearance</td>
                        <td style="text-align: center;">
                            <select name="a7a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a7b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a7c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">8. Learn more about the world outside</td>
                        <td style="text-align: center;">
                            <select name="a8a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a8b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a8c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">9. Get rid of personal vices/uncontrollable habits (drugs, alcohol, <br> stealing, violence, smoking, sex, gambling, computer addiction)</td>
                        <td style="text-align: center;">
                            <select name="a9a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a9b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a9c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">10. Other (Pls. Specify) <input type="text" name="a10d" class="form-control"></td>
                        <td style="text-align: center;">
                            <select name="a10a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a10b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a10c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-weight: bold; font-size: 16px;"><i>FAMILY RELATIONSHIPS</i></td>
                        <td style="text-align: center; font-weight: bold; font-size: 16px;" class="cambria">A</td>
                        <td style="text-align: center; font-weight: bold; font-size: 16px;" class="cambria">B</td>
                        <td style="text-align: center; font-weight: bold; font-size: 16px;" class="cambria">C</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">1. Improve my relationship with my siblings </td>
                        <td style="text-align: center;">
                            <select name="a11a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a11b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a11c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">2. Manage siblings in a parentless home</td>
                        <td style="text-align: center;">
                            <select name="a12a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a12b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a12c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">3. Develop the ability to discuss problems with parents </td>
                        <td style="text-align: center;">
                            <select name="a13a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a13b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a13c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">4. Balance between warring/separated parents </td>
                        <td style="text-align: center;">
                            <select name="a14a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a14b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a14c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">5. Teach parents how to handle their children effectively </td>
                        <td style="text-align: center;">
                            <select name="a15a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a15b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a15c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">6. Help parents manage stress/marital problems (Pls. Underline)</td>
                        <td style="text-align: center;">
                            <select name="a16a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a16b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a16c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">7. Live with relatives</td>
                        <td style="text-align: center;">
                            <select name="a17a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a17b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a17c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">8. Cope with the expectations/demands of parents </td>
                        <td style="text-align: center;">
                            <select name="a18a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a18b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a18c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px; ">9. Relate with a stepparent/step siblings (Pls. Underline)</td>
                        <td style="text-align: center;">
                            <select name="a19a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a19b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a19c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">10. Other (Pls. Specify) <input type="text" name="a20d" class="form-control"></td>
                        <td style="text-align: center;">
                            <select name="a20a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a20b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a20c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-weight: bold; font-size: 16px;"><i>SOCIAL RELATIONSHIPS </i></td>
                        <td style="text-align: center; font-weight: bold; font-size: 16px;" class="cambria">A</td>
                        <td style="text-align: center; font-weight: bold; font-size: 16px;" class="cambria">B</td>
                        <td style="text-align: center; font-weight: bold; font-size: 16px;" class="cambria">C</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">1. Develop skills for starting /maintaining friendships</td>
                        <td style="text-align: center;">
                            <select name="a21a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a21b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a21c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px; ">2. Make myself  attractive to others </td>
                        <td style="text-align: center;">
                            <select name="a22a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a22b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a22c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">3. Develop the ability to avoid being taken advantage of</td>
                        <td style="text-align: center;">
                            <select name="a23a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a23b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a23c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">4. Know how to choose friends </td>
                        <td style="text-align: center;">
                            <select name="a24a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a24b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a24b" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">5. Get rid of fear of social situations</td>
                        <td style="text-align: center;">
                            <select name="a25a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a25b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a25c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">6. Settle quarrels with/among friends </td>
                        <td style="text-align: center;">
                            <select name="a26a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a26b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a26c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">7. Handle boy-girl relationship </td>
                        <td style="text-align: center;">
                            <select name="a27a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a27b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a27c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">8. Handle peer pressure </td>
                        <td style="text-align: center;">
                            <select name="a28a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a28b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a28c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px; ">9. Deal effectively with bullies </td>
                        <td style="text-align: center;">
                            <select name="a29a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a29b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a29c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px; ">10. Other (Pls. Specify) <input type="text" name="a30d" class="form-control"></td>
                        <td style="text-align: center;">
                            <select name="a30a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a30b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a30c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-weight: bold; font-size: 16px;"><i>STUDIES</i></td>
                        <td style="text-align: center; font-weight: bold; font-size: 16px;" class="cambria">A</td>
                        <td style="text-align: center; font-weight: bold; font-size: 16px;" class="cambria">B</td>
                        <td style="text-align: center; font-weight: bold; font-size: 16px;" class="cambria">C</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">1. Understand my lessons</td>
                        <td style="text-align: center;">
                            <select name="a31a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a31b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a31c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-size: 16px; ">2. Find time to finish assignments and socialize</td>
                        <td style="text-align: center;">
                            <select name="a32a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a32b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a32c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">3. Develop confidence in recitations  and discussions</td>
                        <td style="text-align: center;">
                            <select name="a33a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a33b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a33c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">4. Talk to teacher about difficulty in understanding lessons </td>
                        <td style="text-align: center;">
                            <select name="a34a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a34b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a34c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">5. Balance between work at home and studies</td>
                        <td style="text-align: center;">
                            <select name="a35a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a35b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a35c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">6. Work with classmates on projects </td>
                        <td style="text-align: center;">
                            <select name="a36a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a36b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a36c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px; ">7. Cope with financial demands of subjects</td>
                        <td style="text-align: center;">
                            <select name="a37a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a37b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a37c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">8. Develop professionalism among teachers </td>
                        <td style="text-align: center;">
                            <select name="a38a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a38b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a38c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">9. Improve teaching effectiveness of teachers </td>
                        <td style="text-align: center;">
                            <select name="a39a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a39b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a39c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">10. Other (Pls. Specify) <input type="text" name="a40d" class="form-control"></td>
                        <td style="text-align: center;">
                            <select name="a40a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a40b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a40c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-weight: bold; font-size: 16px;"><i>SPECIFIC SOCIAL ISSUES </i></td>
                        <td style="text-align: center; font-weight: bold; font-size: 16px;" class="cambria">A</td>
                        <td style="text-align: center; font-weight: bold; font-size: 16px;" class="cambria">B</td>
                        <td style="text-align: center; font-weight: bold; font-size: 16px;" class="cambria">C</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px; ">1. Learn more about physical abuse </td>
                        <td style="text-align: center;">
                            <select name="a41a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a41b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a41c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px; ">2. Learn more about sexual abuse/harassment </td>
                        <td style="text-align: center;">
                            <select name="a42a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a42b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a42c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px; ">3. Learn more about emotional and verbal abuse</td>
                        <td style="text-align: center;">
                            <select name="a43a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a43b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a43c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">4. Handle experiences of abuse (physical, sexual, emotional ,verbal)</td>
                        <td style="text-align: center;">
                            <select name="a44a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a44b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a44c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">5. Handle alcoholic/or drug-dependent family member </td>
                        <td style="text-align: center;">
                            <select name="a45a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a45b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a45c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px; ">6. Handle effects of disaster/crisis/calamities </td>
                        <td style="text-align: center;">
                            <select name="a46a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a46b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a46c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">7. Cope with losses (separation, abandonment, death, overseas work)</td>
                        <td style="text-align: center;">
                            <select name="a47a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a47b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a47c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">8. Deal with parents’ extramarital affairs</td>
                        <td style="text-align: center;">
                            <select name="a48a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a48b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a48c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">9. Handle adjustment caused by financial crises </td>
                        <td style="text-align: center;">
                            <select name="a49a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a49b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a49c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">10. Other (Pls. Specify) <input type="text" name="a50d" class="form-control"></td>
                        <td style="text-align: center;">
                            <select name="a50a" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <input type="checkbox" name="a50b" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a50c" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <div class="form-group" style="width: 100%;">
                <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;"><br>Please feel free to write down any additional needs or concerns that you wish the Guidance Program would address. </label>
                <textarea name="a50e" id="a50e" class="form-control cambria" rows="2"></textarea>
            </div>
        </div>
        
        <div class="container-fluid">
            <p class="cambria margin-0rem" style="text-align: center; font-size: 16px;"><u>PART II-GUIDANCE SERVICES</u></p>
            <p class="cambria margin-0rem" style="text-align: left;font-size: 16px;">Below are some of the services that the Guidance Center can offer or is already offering.</p>
            <p class="cambria margin-0rem" style="text-align: left;font-size: 16px;"><b>A</b>. In <b>Column A</b>, please indicate with a check mark whether the Guidance Office is already offering these services. </p>
            <p class="cambria margin-0rem" style="text-align: left;font-size: 16px; line-height: 20px;"><b>B</b>. In <b>Column B</b>, use the following to indicate your satisfaction with the way that your Guidance Office is offering these services. Please write the appropriate numbers under Column B.</p>
            <div class="row">
                <div class="col-md-2" style="text-align: right;padding-left: 100px;">
                    <p class="cambria margin-0rem"><b>1 -</p>
                    <p class="cambria margin-0rem">2 - </p>
                    <p class="cambria margin-0rem">3 -</p>
                    <p class="cambria margin-0rem">4 -</p>
                    <p class="cambria margin-0rem">5 -</b></p>
                </div>
                <div class="col-md-6" style="text-align: left;padding-left: 40px;">
                    <p class="cambria margin-0rem">Not Satisfied</p>
                    <p class="cambria margin-0rem">Minimally Satisfied</p>
                    <p class="cambria margin-0rem">Somewhat Satisfied</p>
                    <p class="cambria margin-0rem">Moderately Satisfied</p>
                    <p class="cambria margin-0rem">Very Much Satisfied</p>
                </div>
            </div>
            <p class="cambria margin-0rem" style="text-align: left;font-size: 16px; line-height: 20px;"><b>C</b>. In <b>Column C</b>, use the following code to indicate the extent to which it is important to you that the Guidance Office offers the specific services. Please write the appropriate letters under column C.</p>
            <div class="row">
                <div class="col-md-2" style="text-align: right;padding-left: 100px;">
                    <p class="cambria margin-0rem"><b>NIA</p>
                    <p class="cambria margin-0rem">SI</p>
                    <p class="cambria margin-0rem">MI</p>
                    <p class="cambria margin-0rem">VI</p>
                    <p class="cambria margin-0rem">EI</b></p>
                </div>
                <div class="col-md-6" style="text-align: left;padding-left: 40px;">
                    <p class="cambria margin-0rem">Not Important at All</p>
                    <p class="cambria margin-0rem">Somewhat Important </p>
                    <p class="cambria margin-0rem">Moderately Important </p>
                    <p class="cambria margin-0rem">Very Important </p>
                    <p class="cambria margin-0rem">Extremely Important </p>
                </div>
            </div>
        </div>
        <br>

        <div class="container-fluid row pull-center">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td class="cambria" style="text-align: center;font-weight: bold; font-size: 16px;"><i>SERVICES</i></td>
                        <td style="text-align: center; font-weight: bold; font-size: 16px;" class="cambria">A</td>
                        <td style="text-align: center; font-weight: bold; font-size: 16px;" class="cambria">B</td>
                        <td style="text-align: center; font-weight: bold; font-size: 16px;" class="cambria">C</td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left; font-size: 16px;">1. Collect and interpret information (test and non-test) about me to help my understand myself </td>
                        
                        <td style="text-align: center;">
                            <input type="checkbox" name="a51a" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a51b" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <select name="a51c" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-size: 16px;">2. Provide reading materials/films that will give information on how I can become a better person</td>
                        
                        <td style="text-align: center;">
                            <input type="checkbox" name="a52a" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a52b" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <select name="a52c" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-size: 16px;">3. Provide seminars and workshops that will enlighten me on my concerns –personal-interpersonal, vocational-occupational, academic-educational)</td>
                        
                        <td style="text-align: center;">
                            <input type="checkbox" name="a53a" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a53b" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <select name="a53c" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-size: 16px;">4. Arrange meetings with small groups to discuss similar concerns</td>
                        
                        <td style="text-align: center;">
                            <input type="checkbox" name="a54a" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a54b" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <select name="a54c" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-size: 16px;">5. Regularly meet my class/section/department to run relevant activities</td>
                        
                        <td style="text-align: center;">
                            <input type="checkbox" name="a55a" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a55b" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <select name="a55c" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-size: 16px;">6. Call me every now and then to check on how I am </td>
                        
                        <td style="text-align: center;">
                            <input type="checkbox" name="a56a" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a56b" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <select name="a56c" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-size: 16px;">7. All in groups of people to settle interpersonal difficulties</td>
                        
                        <td style="text-align: center;">
                            <input type="checkbox" name="a57a" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a57b" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <select name="a57c" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-size: 16px;">8. Allow me to come in at anytime  to discuss anything I feel like discussing </td>
                        
                        <td style="text-align: center;">
                            <input type="checkbox" name="a58a" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a58b" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <select name="a58c" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-size: 16px;">9. Provide training sessions for parents/guardian/spouses to help them function better.</td>
                        
                        <td style="text-align: center;">
                            <input type="checkbox" name="a59a" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a59b" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <select name="a59c" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-size: 16px;">10. Call in my parent/spouse to explain my concerns and problems </td>
                        
                        <td style="text-align: center;">
                            <input type="checkbox" name="a60a" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a60b" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <select name="a60c" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-size: 16px;">11. Help me find the right people I can go to for my concerns </td>
                        
                        <td style="text-align: center;">
                            <input type="checkbox" name="a61a" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a61b" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <select name="a61c" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-size: 16px;">12. Help me get into a place or activity that is suited for me</td>
                        
                        <td style="text-align: center;">
                            <input type="checkbox" name="a62a" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a62b" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <select name="a62c" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-size: 16px;">13. Conduct research to help me understand how I am in relation to people of my own age and sex  </td>
                        
                        <td style="text-align: center;">
                            <input type="checkbox" name="a63a" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a63b" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <select name="a63c" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="cambria" style="text-align: left;font-size: 16px;">14. Other (Pls. Specify) <input type="text" name="a64d" class="form-control"></td>
                        
                        <td style="text-align: center;">
                            <input type="checkbox" name="a64a" class="form-control" style="height:1.5em;"  >
                        </td>
                        <td style="text-align: center;">
                            <select name="a64b" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                        <td style="text-align: center;">
                            <select name="a64c" class="form-control">
                                <option value="NIA">NIA</option>
                                <option value="SI">SI</option>
                                <option value="MI"selected>MI</option>
                                <option value="VI">VI</option>
                                <option value="EI">EI</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
           
            <div class="form-group" style="width: 100%;font-size: 16px; ">
                <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;"><br>I wish the Guidance Center would offer the following seminars/workshops/services…</label>
                <textarea name="a65a" id="a65a" class="form-control cambria" rows="2"></textarea>
            </div>

            <div class="form-group" style="width: 100%;">
                <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;"><br>I wish the Guidance Program would… <br> STOP</label>
                <textarea name="a65b" id="a65b" class="form-control cambria" rows="2"></textarea>
            </div>
            <div class="form-group" style="width: 100%;">
                <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;">CONTINUE</label>
                <textarea name="a65c" id="a65c" class="form-control cambria" rows="2"></textarea>
            </div>
            <div class="form-group" style="width: 100%;">
                <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;">START</label>
                <textarea name="a65d" id="a65d" class="form-control cambria" rows="2"></textarea>
            </div>
        </div>
        
        <div>
            <br>
            <button id="Save" type="submit" class="btn btn-sm btn-info btn-block">
                <i class="fa fa-save fa-sm"></i>&nbsp;
                <span id="payment-button-amount">Save</span>
            </button>
        </div>

        </form>
            
        </div>

    </div>

    
  </div>
@endsection
@section('scripts')
  <script>
      $(document).ready(function(){
          $('a.btnDel').click(function (event) {
              event.preventDefault();
              swal({
                  title: 'CONFIRM ACTION!',
                  text: 'Are you sure you want to delete this record?',
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#d33',
                  cancelButtonColor: '#3085d6',
                  confirmButtonText: 'DELETE',
                  reverseButtons: true,
                  focusConfirm: false,
              }).then((result) => {
                  if(result.value){
                  $(this).parent().find('.formDelete').submit();
              }
          });
          });
          @if(  Session::has('SettingSaved') )
            swal(
              'Saved',
              'Settings saved successfully.',
              'success'
            )
          @elseif( Session::has('Deleted') )
            swal(
              'Deleted',
              'School Year deleted successfully.',
              'success'
            )
          @elseif( Session::has('Updated') )
            swal("SUCCESS!", "{!! session('Updated') !!}", "success"); swal(
              'Updated',
              'School Year updated successfully.',
              'success'
            )
          @elseif( Session::has('Error') )
            swal(
              'INFO',
              'Unable to delete, this record is used.',
              'info'
            )
          @elseif( Session::has('Duplicate') )
            swal('Duplicate Record.', 'This record already exist.', 'info');
          @endif
      });
  </script>
@endsection