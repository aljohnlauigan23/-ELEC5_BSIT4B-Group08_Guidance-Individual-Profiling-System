<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Schoolyear;
class SchoolyearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Schoolyear::all();
        return view('admin.schoolyear.index', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required', 'max:255'
        ]);

        $count = Schoolyear::all()->count();
        $exist = Schoolyear::where('name', $request->name)->first();

        if($count == 0){
            if ($exist == null) {
                $model = new Schoolyear;
                $model->name = $request->name;
                //$model->status = 1;
                $model->save();
    
                Session::flash('Inserted');
            }else{
                Session::flash('Duplicate');
            }
        }else{
            if ($exist == null) {

                //Schoolyear::where('status', 1)->update(['status'=> 0]);

                $model = new Schoolyear;
                $model->name = $request->name;
                //$model->status = 1;
                $model->save();
    
                Session::flash('Inserted');
            }else{
                Session::flash('Duplicate');
            }
        }

        
        return redirect('schoolyear');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Schoolyear::where('status', 1)->update(['status'=> 0]);

        $model = Schoolyear::findOrFail($id);
        $model->status = 1;
        $model->save();

        Session::flash('Activated');

        return redirect('schoolyear');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collection = Schoolyear::find($id);
        $model = Schoolyear::all();
        return view('admin.schoolyear.edit', compact('model' , 'collection'));
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
        $validator = $request->validate([
            'name' => 'required', 'max:255',
        ]);

        $model = Schoolyear::findOrFail($id);
        $model->name = $request->name;
        $model->save();

        Session::flash('Updated');
        
        return redirect('schoolyear');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

}
