<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Resources\StudentResource;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studenti = Student::all();
        return StudentResource::collection($studenti); 

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $student = student::find($id);
        return new StudentResource($student);
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string',
            'prezime' => 'required|string',
            'email' => 'required|email',
            'telefon' => 'required|string',
		    'budzet' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $student = Student::find($id);

        if ($student) {
            $student->ime = $request->ime;
            $student->prezime = $request->prezime;
            $student->email = $request->email;
            $student->telefon= $request->telefon;
            $student->budzet = $request->budzet;


            $student->save();

            return response()->json(['Uspesno su sacuvane izmene studenta!',new StudentResource($student)]);
        } else {
            return response()->json('Ne moze se pronaci student sa zahtevanim id-em!');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        if ($student) {
            $student->delete();
            return response()->json(['Uspesno brisanje!', new StudentResource($student)]);
        } else {
            return response()->json('Neuspesno brisanje, ID nije pronadjen');
        }
    }

}
