<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
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
    public function create($id=null)
    {
      
        return view('Student.create');

    }
    public function store(RegisterRequest $request){
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
   
        return redirect()->action('StudentController@index')->with('status', 'Profile saved!');
                        
    }
    public function list(Student $student)
    {
        $student=Student::all();
        $student = Student::simplePaginate(10);
        return view('Student.list',compact('student'));
    }

    public function edit($id){
        $student = Student::find($id);
        //echo $student->name;
       return view('Student.edit',compact('student','id'));
    }
    
    public function update(RegisterRequest $request, $id)
    {
        $student = new Student();
        $data['id'] = $id;
        Student::where('id',$data)->update(array(
                         'name'=>$request->name, 'gender'=>$request->gender,'faculty'=>$request->faculty,'birthday_year'=>$request->birthday_year,
));

        return redirect('/students')->with('status', 'Profile updated!');
    }
    public function delete($id){
        
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect('/students');
      
    }
}