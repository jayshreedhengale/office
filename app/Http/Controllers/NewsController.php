<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class NewsController extends Controller
{
    public function newsForm(){
        $new =  DB::table('news')
                    ->select('id', 'user_id', 'title', 'description', 'image')
                    ->first();
        $pageData['new'] = $new;
        return view('pages.add_news', compact('new'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'user_id' =>'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $uploadedFile = $request->file('image'); 
        $file = $uploadedFile->getClientOriginalName(); //Get Image Name

        $extension = $uploadedFile->getClientOriginalExtension();  //Get Image Extension

        $fileName = $file.'.'.$extension;
        if ($uploadedFile->isValid()) {
            $uploadedFile->move(public_path('/users'), $fileName);
        }

        $user_id = $request->get('user_id');
        $title = $request->get('title');
        $description = $request->get('description');
        
        $new = DB::table('news')->insert([
            [
                'user_id' => $user_id,
                'title' => $title,
                'description' => $description,
                'image' =>$fileName,
            ]
        ]);
        
        if($new){
            return view('pages.thanks');
        }else{
            return back()->withInput();
        }
    }

    public function allNews(){
        $new =  DB::table('news')
                    ->select('id', 'user_id', 'title', 'description', 'image')
                    ->orderBy('id', 'desc')
                    ->get();
        return view('pages.news', compact('new'));
    }

    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $new =  DB::table('news')
                    ->select('id', 'user_id', 'title', 'description', 'image')
                    ->where('news.id', $id)
                    ->first();
        if ($new != null) {
            return view('pages.edit-news', compact('new'));
        } else {
            return back();
        }
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'user_id' => 'required', 
            'title' => 'required', 
            'description' => 'required', 
        ]);
        $new = DB::table('news')
                         ->where('id', $id)
                        ->update([
                            'user_id' => $request->get('user_id'),
                            'title' => $request->get('title'),
                            'description' => $request->get('description'),
                            'created_at' => date('Y-m-d H:i:s')
                        ]);
        if ($new != null) {
            return redirect('news')->with('success', 'News Updated Successfully.');
        } else {
            return back()->withInput()->with('error', 'There were some problems with your input');
        }
    }
    public function destroy($id){
            $new = DB::table('news')
                      ->where('id', $id)
                      ->delete();
        return view('pages.thanks');
    }
}
