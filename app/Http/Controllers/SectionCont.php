<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Section;

class SectionCont extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = date('D-m-y');
        $time = date('H:i:s');
//        $sections = DB::table('section')->get();
          $sections = Section::all();
        return view('LibraryViewsContainer.library')->withDate($date)->withTime($time)->withSections($sections);
    }

    public function create()
    {
//        $date = date('D-m-y');
//        $time = date('H:i:s');
//
//        return view('LibraryViewsContainer.creation')->withDate($date)->withTime($time);
    }

        public function store(Request $request)
    {
        $section_name = $request->input("SectionNAme");
        $file = $request->file("image");
        $destinationPath = 'images';
        $filename = $file->getClientOriginalName();
        $file->move($destinationPath,$filename);

//        DB::table('section')->insert(['section_name'=>$section_name,'image_name'=
//            Section::insert(['section_name'=>$section_name,'image_name'=>$filename]);
            $new_section = new Section();
            $new_section->section_name = $section_name;
            $new_section->image_name = $filename;
            $new_section->save();

        return redirect('admin');

    }
        public function show($id)
        {

        }
        public function edit($id)
        {

        }
        public function update(Request $request, $id)
        {
             $section_name = $request->input('section_name');
//             DB::table('section')->where('id',$id)->update(['section_name'=>$section_name]);
            $section = Section::find($id);
            $section->section_name = $section_name;
            $section->save();

             return redirect('admin');
        }
        public function destroy($id)
        {

//            DB::table('section')->where('id',$id)->delete();
//              Section::where('id',$id)->delete();
//              $section = Section::find($id);
//              $section->delete();
             Section::destroy($id);
            return redirect('admin');
        }
      public function  admin(){
          $date = date('D-m-y');
          $time = date('H:i:s');
//          $sections = DB::table('section')->get();
          $sections = Section::all();
          return view('LibraryViewsContainer.creation')->withDate($date)->withTime($time)->withSections($sections);
      }

}
