<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;


class StudentController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index(){
       $student = Student::orderBy('id', 'desc')->first();
    return view('Student.index', compact('student'));
    }
    public function create()
    {
        return view('Student.create');
    }
    public function store(Request $request){
        //print_r($request);die;
        // $allRequest =$request->all();
        // $name=$allRequest['name'];
        // $gender=$allRequest['gender'];
        // $faculty=$allRequest['faculty'];
        // $birthday_year=$allRequest['birthday_year'];
        // $dataInsertToDatabase= array(
        //     'name'= $name;
        //     'gender'=$gender;
        //     'faculty'=$faculty;
        //     'birthday_year'=$birthday_year;
        // );
        // $objStudent= new Student();
        // $objStudent->insert($dataInsertToDatabase);
        // return view('complete_register');
       
  
      // $name = $request->input('name');
      // $gender=$request->get('gender');
      // $faculty=$request->get('faculty');
      // $birthday_year=$request->input('birthday_year');
      // DB::insert('insert into student (name, gender, faculty, birthday_year) values(?,?,?,?)',[$name], [$gender],[$faculty],[$birthday_year]);
      // echo "Record inserted successfully.<br/>";
      // echo '<a href = "/insert">Click Here</a> to go back.';
        Student::create($request->all());
   
        return redirect()->action('StudentController@index');
                        
    }
    public function show(Student $student)
    {
        return view('Student.show',compact('student'));
    }

    
}