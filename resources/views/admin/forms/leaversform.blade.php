@extends('layouts.admin')
@section('leavers')
active
@endsection
@section('content')
  <div class="container p-t-30">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('forms.submit_form')}}" enctype="multipart/form-data" style="font-size: 12px;">
                {{csrf_field()}}
                <p class="cambria fsize_15" style="text-align: center;font-weight: bold;padding-top: 0px; font-size: 20px;"><b>UNIVERSITY LEAVER'S CHECKLIST</b></p>
                <p class="cambria" style="text-align: left;padding-top: 10px; font-size: 16px;">Reason for Referral:</p><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-1" type="checkbox" name="c1" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-1" style="font-size: 14.5px;">
                            Academic Failure/Problem   
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-2" type="checkbox" name="c2" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-2" style="font-size: 14.5px;">
                            Joining Gangs
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-3" type="checkbox" name="c3" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-3" style="font-size: 14.5px;">
                            Adjustment Problem 
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-4" type="checkbox" name="c4" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-4" style="font-size: 14.5px;">
                            Kicked –Out/ Expelled/Terminated
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-5" type="checkbox" name="c5" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-5" style="font-size: 14.5px;">
                            Boredom /Motivation Problem 
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-6" type="checkbox" name="c6" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-6" style="font-size: 14.5px;">
                            Mental Health Problem
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-7" type="checkbox" name="c7" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-7" style="font-size: 14.5px;">
                            Change of Course/Career  
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-8" type="checkbox" name="c8" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-8" style="font-size: 14.5px;">
                            Prejudice/Discrimination /Bullying
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-9" type="checkbox" name="c9" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-9" style="font-size: 14.5px;">
                            Drugs/Drug Abuse
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-10" type="checkbox" name="c10" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-10" style="font-size: 14.5px;">
                            School Is Not Important/No one Cares	
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-11" type="checkbox" name="c11" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-11" style="font-size: 14.5px;">
                            Early Pregnancy 
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-12" type="checkbox" name="c12" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-12" style="font-size: 14.5px;">
                            Single Parenting/Early 
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-13" type="checkbox" name="c13" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-13" style="font-size: 14.5px;">
                            Family Problem 
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-14" type="checkbox" name="c14" class="promoted-input-checkbox"/>
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-14" style="font-size: 14.5px;">
                            Teacher and School Problem
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-15" type="checkbox" name="c15" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-15" style="font-size: 14.5px;">
                            Financial Problem  
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-16" type="checkbox" name="c16" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-16" style="font-size: 14.5px;">
                            Transfer of Residence
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-17" type="checkbox" name="c17" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-17" style="font-size: 14.5px;">
                            Health Problem   
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-18" type="checkbox" name="c18" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-18" style="font-size: 14.5px;">
                            Transfer of School/University
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-19" type="checkbox" name="c19" class="promoted-input-checkbox"/>
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-19" style="font-size: 14.5px;">
                            Homesickness
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-20" type="checkbox" name="c20" class="promoted-input-checkbox" />
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-20" style="font-size: 14.5px;">
                            Working Student/Part-time 
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-3.5">
                        <div class="checkbox-wrapper-28">
                            <input id="tmp-21" type="checkbox" name="c21" class="promoted-input-checkbox"/>
                            <svg><use xlink:href="#checkmark-28" /></svg>
                            <label for="tmp-21" style="font-size: 14.5px; margin-left: 15px;">
                            Others: (Please specify.)  &nbsp; &nbsp;
                            </label>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
                                <symbol id="checkmark-28" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-miterlimit="10" fill="none"  d="M22.9 3.7l-15.2 16.6-6.6-7.1">
                                </path>
                                </symbol>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-6.5" style="width: 25%;">
                        <input type="text" name="others" class="form-control cambria">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1 cambria" style="font-size: 16px;">Details:</label>
                    <textarea name="details" id="details" class="form-control cambria" cols="30" rows="3"></textarea>
                </div>
                <div>
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