<?php

namespace App\Http\Controllers;

use App\Applications;
use App\User;
use Illuminate\Console\Application;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{

    public function createApplication(Request $request){

        $this->validateApplication();
        $applications = new Applications(request(['name', 'email', 'meat','description']));
        $applications->user_id = 1;


        if ($request->hasFile('beforePicture')) {
            $file = $request->file('beforePicture');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            $file->move('uploads/beforePictures/', $filename);
            $applications->beforePicture = $filename;
        } else {
            return $request;
            $applications->beforePicture = '';
        }

        if ($request->hasFile('afterPicture')) {
            $file = $request->file('afterPicture');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            $file->move('uploads/afterPictures/', $filename);
            $applications->afterPicture = $filename;
        } else {
            return $request;
            $applications->afterPicture = '';
        }

        $applications->save();

        return back();
    }

    protected function validateApplication(){
        return request()->validate([
            'name' => 'required',
            'email' => 'required',
            'meat' => 'required',
            'description' => ['required', 'max:150'],
            'beforePicture' => 'required',
            'afterPicture' => 'required',
        ]);
    }


}
