<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class HomeController extends Controller
{

    private $firstName;
    private $lastName;
    private $fullName;

    private $student;

    public function home()
    {
        return view('home');
    }

    public function fullName()
    {
        return view('full-name');
    }

    public function registration()
    {
        return view('registration');
    }

    public  function fullNameMaker(Request $request)
    {

        $this->firstName = $request->first_name;
        $this->lastName = $request->last_name;
        $this->fullName = $this->firstName . ' ' .$this->lastName;

        return redirect('/full-name-maker-page')->with('message', $this->fullName);

    }

    public function registrationForm(Request $request)
    {
        $this->student = new Student();
        $this->student->name = $request->name;
        $this->student->email = $request->email;
        $this->student->mobile = $request->mobile;
        $this->student->save();

        return '<h1>Registration Successful</h1>';
    }
}
