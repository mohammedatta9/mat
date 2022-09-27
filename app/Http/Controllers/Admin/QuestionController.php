<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function list()
    {
        $questions = Question::paginate(10);
        return view('admin.questions.index')->with('questions', $questions);
    }

    
    public function question_save(Request $request)
    {
        $request->validate([
            'name' => 'required',
 
        ]);
        $question =new Question();
        
        $question->name =  $request->name;
        $question->result =  $request->result;

        $question->save();
 
          if($question) {
              return redirect()->back()->with('success', trans('added'));
           } else  {
               return redirect()->back()->with('error', 'There is an error in your data');
          }    

 
    }

    public function question_edit(Request $request , $id)
    {
        $request->validate([
            'name' => 'required',
 
        ]);
        $question =Question::find($id);

        $question->name =  $request->name;
        $question->result =  $request->result;

        $question->save();
 
          if($question) {
              return redirect()->back()->with('success', trans('updated'));
           } else  {
               return redirect()->back()->with('error', 'There is an error in your data');
          }    

 
    }
    public function question_delete($id)
    {  
        $question =Question::find($id);
        
        $question->delete();
                            
        if($question) {
            return redirect()->back()->with('success', trans('deleted'));
         } else  {
             return redirect()->back()->with('error', 'There is an error in your data');
        }    

    }
}
