<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class studentController extends Controller
{
    public function list()
    {
        $students = array();
        for($i=0;$i<10;$i++)
        {
            $student = array(
                "id" => $i+1,
                "name" => "Student".($i+1),
                "dept" => "CS");
                $student = (object) $student;
                $students[] = $student;
        }
        //return ('ok');
        //return var_dump($students);
        return view('student.list')->with('students',$students);
    }
    public function create()
    {
        return view('student.create');
    }
    public function get()
    {
        $name = "Fatema Tuj Johura";
        $id = "18-375371";
        $courses = ["PL1","PL2","DS","ALgo","OOP1","OOP2","Web Technology","ATP2","ATP3"];
        return view('student.get')
        ->with('name',$name)
        ->with('id',$id)
        ->with('courses',$courses);
    }

    public function details(Request $req){
        return view('student.get')
        ->with('name',$req->name)
        ->with('id',$req->id)
        ->with('courses',[]);
    }
    
}
