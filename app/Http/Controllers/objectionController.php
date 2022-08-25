<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaderDuty;
use App\Models\Objection;
use App\Traits\MediaTraits;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ObjectionController extends Controller
{
    use MediaTraits;

    public function listAllObjections()
    {
        if (Auth::user()->can('objection_audit')) {
            $objections = Objection::all();
            return view('objection.all_objections', compact('objections'));
        }
        else{ 
            return view('errors.unauthorized');
        }
    }

    public function listMyObjections()
    {
        $objections = Objection::where('objector_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        return view('objection.my_objections', compact('objections'));
    }


    public function create()
    {
        return view('objection.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Objection::create([
            'objector_id' => Auth::id(),
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return redirect()->route('objections.my_objections', ['messages' => 'objection added']);
    }

    public function edit($id)
    {
        $objection = Objection::find($id);
        if($objection){
            return view('objection.update_objection', compact('objection'));
        } 
        else{ 
            return view('errors.not_found');
        }
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'reviewer_note' => 'required_without_all:body',
            'body' => 'required_without_all:reviewer_note',
        ]);
        
        $objection = Objection::find($id);
        if (Auth::user()->can('objection_audit') && $request->has('reviewer_note')) {

            $objection->reviewer_id = Auth::id();
            $objection->status = 1;
            $objection->reviewer_note = $request->reviewer_note;
            $objection->save();

            return redirect()->route('objections.all_objections', ['messages' => 'objection updated']);
        }
        else{
            if (Auth::id() == $objection->objector_id && $objection->status == 0) {
                $objection->body = $request->body;
                $objection->save();
                return redirect()->route('objections.my_objections' , ['messages' => 'objection updated']);
            }
        }
    }

    public function delete($id)
    {

        $objection = Objection::find($id);
        if (Auth::id() == $objection->objector_id && $objection->status == 0) {
                $objection->delete();
                return redirect()->route('objections.my_objections' , ['messages' => 'objection deleted']);
            }
    }

}//class


