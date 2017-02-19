<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class sectionController extends Controller
{
    /* basic controller */
    public function index()
    {
        $date = date('D-m-y');
        $time = date('H:i:s');
//        $sections = [
//            'comic'=>'comic.jpg' ,
//            'art'=>'art.jpg' ,
//            'cenima' =>'cenima.jpeg',
//            'music' => 'music.png',
//            'informatic' => 'informatic.jpg',
//            'Statistics' => 'Statistics.jpg',
//            'philosophy' => 'philosophy.jpg',
//            'physics' => 'physics.jpg'
//        ];
        $sections = DB::table('section')->get();
        return view('LibraryViewsContainer.library')->withDate($date)->withTime($time)->withSections($sections);
    }

    public function create()
    {
       // return "<h1> creation  </h1>";
        $date = date('D-m-y');
        $time = date('H:i:s');

         return view('LibraryViewsContainer.creation')->withDate($date)->withTime($time);
    }

    public function saveSection()
    {
//        $sectionName = Input::get('sectionName');
//        $sectionDetails = Input::get('sectionDetails');
     //   return view('LibraryViewsContainer.createTest');
        // verify the data and save it to the database

    }
   public function admin(){

       $date = date('D-m-y');
       $time = date('H:i:s');

       return view('LibraryViewsContainer.creation')->withDate($date)->withTime($time);
   }
    public function showSection($sectionName)
    {
        return "<center> <h2> the details about $sectionName </h2></center>";
    }

    public function edit($sectionName)
    {
        return "<center> <h2> edition the section  :  $sectionName </h2></center>";
    }

    public function saveEditedSection($sectionName)
    {
        // saving the section to the database

    }

    public function delete($sectionName)
    {

    }

  /*
    public function getIndex(){
        return "<center> <h2> the Library </h2></center>";
    }

    public function getNewSection(){
        return "<center> <h2> adding a new section to the library  </h2></center>";
    }
    public function postSaveSection(){
        $sectionName = Input::get('sectionName');
        $sectionDetails = Input::get('sectionDetails');
        // verify the data and save it to the database
    }
    public function getShowSection($sectionName){
        return "<center> <h2> the details about $sectionName </h2></center>";
    }

    public function getEdit($sectionName){
        return "<center> <h2> edition the section  :  $sectionName </h2></center>";
    }
    public function postSaveEditedSection($sectionName){

    }
    public function delete(){

    }
  */
}
