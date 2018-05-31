<?php

namespace App\Http\Controllers;

use App\Passport;
use Illuminate\Http\Request;

class ApisPasport extends Controller
{
    public function postPasport(Request $request){
        $passport=new Passport();
        //{name,date,email,number,office,filename}

        $passport->name=$request->input('name');
        $passport->date=$request->input('date');
        $passport->email=$request->input('email');
        $passport->number=$request->input('number');
        $passport->office=$request->input('office');
        $passport->filename=$request->input('filename');

        $passport->save();
        return response()->json(['$passport'=>$passport],201);

    }
    public function getPasports(){
        $passports = Passport::all();
        $response=[
            'passports'=> $passports->all()
        ];
        return response()->json($response, 200);

    }
    public function putPasport(Request $request, $id){

        $passport= Passport::find($id);
        if (!$passport){
            return response()->json(['message'=> 'Document not found'], 404);
        }


        $passport->name=$request->input('name');
        $passport->date=$request->input('date');
        /*  $passport->email=$request->input('email');*/
          $passport->number=$request->input('number');
          $passport->office=$request->input('office');
          $passport->filename=$request->input('filename');



        $passport->save();
        return response()->json(['passport'=>$passport],200);

    }
    public function deletePasport($id){
        $passport = passport::find($id);
        $passport->delete();
        return response()->json(['message'=>'Passport deleted'], 200);

    }
    //
}
