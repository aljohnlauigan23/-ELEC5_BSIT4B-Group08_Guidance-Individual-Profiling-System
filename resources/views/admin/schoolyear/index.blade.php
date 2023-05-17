@extends('layouts.admin')
@section('schoolyear')
active
@endsection
@section('content')
  <!-- WELCOME-->
  <section class="welcome p-t-30 p-b-10" >
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="title-4">School Year
                  </h1>
              </div>
          </div>
      </div>
  </section>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
            <form method="POST" id="schoolyearsubmitform" action="{{route('schoolyear.store')}}" enctype="multipart/form-data" style="font-size: 12px;">
              {{csrf_field()}}

              <div class="form-group">
                  <label class=" form-control-label">School Year <span style="color: red; font-weight: bold;">*</span></label>
                  <input type="text" id="company" placeholder="Enter School Year" class="form-control" name="name" aria-required="true" aria-invalid="false" value="" data-validation="required">
              </div>

              <div class="form-group">
                  <input type="submit" id="schoolyearsubmit" class="form-control btn btn-success" value="Submit">
              </div>
          </form>
      </div>
        <div class="col-md-6">
            <div class="table-responsive m-b-40">
              <table id="table" class="table table-borderless table-data3" style="width: 100%;">
                <thead style="background-color: #1a8cff;">
                    <tr>
                        <th width="40%" style="font-size: 12px; color: white;">SCHOOL YEAR</th>
                        <th width="40%" style="font-size: 12px; color: white;">STATUS</th>
                        <th width="10%" style="font-size: 12px; color: white;">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                  @isset($model)
                    @foreach($model as $element)
                      <tr class="tr-shadow" style="font-size: 12px; padding: 5px;">
                        <td>{{$element->name}}</td>
                        <td>@if($element->status == 1) <b style="color: green;">ACTIVE</b> @else <b style="color: red;">INACTIVE</b>  @endif</td>
                        <td style="padding: 0px;">
                          <div class="table-data-feature">
                            <a style=" margin-right: 40px; margin-top: 5px;" href="{{route('schoolyear.edit', $element->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                              <i class="zmdi zmdi-edit"></i>
                            </a>

                            @if($element->status == 0)
                            <a href="#" style=" margin-right: 40px; margin-top: 5px;" class="item btnAct" data-toggle="tooltip" data-placement="top" title="ACTIVATE">
                              <i class="fa fa-check" style="color: green;"></i>
                            </a>
                            <form action="{{route('schoolyear.destroy', $element->id)}}" method="DELETE" style="display:none" class="formDelete">
                              {{csrf_field()}}
                              <button class="btn btn-danger" type="submit" autofocus=""></button> 
                            </form>
                            @endif
                            
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  @endisset
                </tbody>
              </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
  </div>
@endsection
@section('scripts')
  <script type="text/javascript">
      $.validate();
  </script>
  <script>
      $(document).ready(function(){
          $('.btnAct').click(function (event) {
              event.preventDefault();
              swal({
                  title: 'CONFIRM ACTION',
                  text: 'Are you sure you want to change the active School Year?',
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#d33',
                  cancelButtonColor: '#3085d6',
                  confirmButtonText: 'CHANGE',
                  reverseButtons: true,
                  focusConfirm: false,
              }).then((result) => {
                  if(result.value){
                      $('.formDelete').submit();
                  }
              });
          });
          @if(  Session::has('Inserted') )
            swal(
              'Saved',
              'New School Year added successfully.',
              'success'
            )
          @elseif( Session::has('Activated') )
            swal(
              'Activated',
              'School Year has been activated successfully.',
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