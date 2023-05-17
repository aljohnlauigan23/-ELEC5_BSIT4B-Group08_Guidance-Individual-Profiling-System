<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Student;
use App\Schoolyear;
use App\Course;
use App\User;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sy = Schoolyear::where('status', 1)->first();
        if(!$sy){
            $model = [];
        }else{
            $model = Student::where('schoolyear_id', $sy->id)->get();
        }
        return view('admin.students.index', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sy = Schoolyear::where('status', 1)->first();

        $students = json_decode($request->students);

        if(isset($students)){
            foreach ($students as $key => $stud) {
                $student = Student::where('id_no', $stud->stud_id)->where('schoolyear_id', $sy->id)->first();
                $coursection = Course::where('code', $stud->course)->first();

                if($student){
                    $student->schoolyear_id = $sy->id;
                    $student->id_no = $stud->stud_id;
                    $student->lastname = $stud->last_name;
                    $student->firstname = $stud->first_name;
                    $student->middlename = $stud->middle_name;
                    $student->sex = $stud->sex;
                    $student->address = $stud->address;
                    $student->dateofbirth = $stud->birthdate;
                    $student->course_id = $coursection->id;
                    $student->yearlevel = $stud->year_level;
                    $student->units = $stud->units;
                    $student->section = $stud->section;

                    $student->update();
                }else{
                    $student = new Student;
                    $student->schoolyear_id = $sy->id;
                    $student->id_no = $stud->stud_id;
                    $student->lastname = $stud->last_name;
                    $student->firstname = $stud->first_name;
                    $student->middlename = $stud->middle_name;
                    $student->sex = $stud->sex;
                    $student->address = $stud->address;
                    $student->dateofbirth = $stud->birthdate;
                    $student->course_id = $coursection->id;
                    $student->yearlevel = $stud->year_level;
                    $student->units = $stud->units;
                    $student->section = $stud->section;
                    $student->access_key = 'bisubalilihangips2023';

                    $student->save();

                    $user = User::where('email', $stud->stud_id)->first();
                    if(!$user){
                        $user = new User;
                        $user->name = $stud->last_name . ', ' . $stud->first_name . ' ' . $stud->middle_name ;
                        $user->email = $stud->stud_id;
                        $user->password = Hash::make('bisubalilihangips2023');
                        $user->role_id = 1;
                        $user->save();
                    }else{
                        $user->name = $stud->last_name . ', ' . $stud->first_name . ' ' . $stud->middle_name ;
                        $user->email = $stud->stud_id;
                        $user->password = Hash::make('bisubalilihangips2023');
                        $user->role_id = 1;
                        $user->save();
                    }
                    

                    
                }
            } 
        }

        Session::flash('Inserted');

        return redirect('students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function student_destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('students');
    }

    public function add_student()
    {
        return view('admin.students.add_student');
    }

    public function add_student_store(Request $request)
    {
        $sy = Schoolyear::where('status', 1)->first();

        $student = new Student;
        $student->schoolyear_id = $sy->id;
        $student->id_no = $request->email;
        $student->lastname = $request->last_name;
        $student->firstname = $request->first_name;
        $student->middlename = $request->middle_name;
        $student->sex = $request->sex;
        $student->address = $request->address;
        $student->dateofbirth = $request->birthdate;
        $student->course_id = $request->course_id;
        $student->yearlevel = $request->year_level;
        $student->units = $request->units;
        $student->section = $request->section;
        $student->access_key = $request->password;
        $student->save();

        $user = User::where('email', $request->email)->first();
        if(!$user){
            $user = new User;
            $user->name = $request->last_name . ', ' . $request->first_name . ' ' . $request->middle_name ;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role_id = 1;
            $user->save();
        }else{
            $user->name = $request->last_name . ', ' . $request->first_name . ' ' . $request->middle_name ;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
        }

        

        Session::flash('Inserted');

        return redirect('students');
    }

    public function checkidno(Request $request){
        $user = User::where('email', $request->email)->count();
        return response()->json(['Success'=>true,'user'=>$user]);
    }

    public function student_upd($id){
        $model = Student::findOrFail($id);
        
        return view('admin.students.student_edit', compact('model'));
    }

    public function student_upd_store(Request $request)
    {
        $sy = Schoolyear::where('status', 1)->first();

        $student = Student::where('schoolyear_id', $sy->id)->where('id_no', $request->email)->first();
        $student->id_no = $request->email;
        $student->lastname = $request->last_name;
        $student->firstname = $request->first_name;
        $student->middlename = $request->middle_name;
        $student->sex = $request->sex;
        $student->address = $request->address;
        $student->dateofbirth = $request->birthdate;
        $student->course_id = $request->course_id;
        $student->yearlevel = $request->year_level;
        $student->units = $request->units;
        $student->section = $request->section;
        $student->access_key = $request->password;
        $student->save();

        $user = User::where('email', $student->id_no)->first();
        $user->name = $request->last_name . ', ' . $request->first_name . ' ' . $request->middle_name ;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        Session::flash('Updated');

        return redirect('students');
    }
}
