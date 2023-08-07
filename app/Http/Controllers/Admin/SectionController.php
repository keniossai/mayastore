<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index(){
        $sections = Section::get()->toArray();
        // dd($sections);
        return view('admin.sections.index', compact('sections'));
    }

    public function updateSectionStatus(Request $request)
    {
        if($request->ajax()){
            $data = $request->all();
            if($data['status']=="Active"){
                $status = 0;
            }else{
                $status = 1;
            }
            Section::where('id', $data['section_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'section_id'=>$data['section_id']]);
        }
    }

    public function deleteSection($id)
    {
        Section::where('id', $id)->delete();
        return back()->with('success','Section deleted successfully');
    }

    // Add Section
    public function addSection(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();

            $data = new Section;
            $data->name = $request->name;
            $data->status = 1;
            $data->save();
            return redirect()->back()->with('success','Section added successfully');
        }
    }
    public function updateSection(Request $request)
    {
        if($request->isMethod('patch')){

            $data = $request->all();
            //dd($data);

            $data = Section::find($request->id);
            $data->name = $request->name;
            $data->status = 1;
            $data->update();
            return redirect()->back()->with('success','Section updated successfully');
        }
        // $section = Section::find($request->$id);
        // $section->update($request->all());
        // return redirect()->back()->with('success','Section updated successfully');

    }



    // public function modifySection(Request $request, $id=null)
    // {
    //     if($id = ""){
    //         $title = "Add Section";
    //         $section = new Section;
    //     }else{
    //         $title = "Edit Section";
    //         $section = Section::find($id);
    //     }
    //     if($request->isMethod('post')){
    //         $data = $request->all();

    //         $section->name = $data['name'];
    //         $section->status = 1;
    //         $section->save();

    //         return redirect()->back()->with('success','Section added successfully');
    //     }
    // }
}


