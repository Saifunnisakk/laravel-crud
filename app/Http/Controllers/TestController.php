<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class TestController extends Controller
{   

    function index() {
        return student::all();

    }
    function store(Request $request) 
    { 
         $product = new student;
         $product->company = $request->company;
         $product->product = $request->browser;
         $product->save();
         return student::all();
    }

    function update(Request $request, $id)
    {
         $product = Student::find($id);
         $product->product = $request->product;
         $product->save();
         return student::all();
    }
        
    function delete($id)
    {
         $product = Student::find($id);
         $product->delete();
         return student::all();
    }
 }

