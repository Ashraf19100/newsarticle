<?php

namespace App\Http\Controllers;

use App\Models\Newsarticle;
use App\Models\Category;
use Illuminate\Http\Request;
use Image;

class NewsarticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsarticle = Newsarticle::all();
        return view('admin.articles.index', compact('newsarticle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Newsarticle::create([
            'title'=>$request->title,
            'category_id'=>$request->category_id,
            'content'=>$request->content,
            'date'=>$request->date,
            'image'=>$this->uploadImage(request()->file('image'))
        ]);
        return redirect()->route('newsarticle.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Newsarticle $newsarticle)
    {
        return view('admin.articles.show',[
            'newsarticle'=>$newsarticle
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Newsarticle $newsarticle)
    {
        $categories = Category::all();
        return view('admin.articles.edit',[
            'newsarticle'=>$newsarticle
        ], compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Newsarticle $newsarticle)
    {
        
        $requestData=[
            'title'=>$request->title,
            'category_id'=>$request->category_id,
            'content'=>$request->content,
            'date'=>$request->date
        ];
        if($request->hasFile('image')){
            $requestData['image']=$this->uploadImage(request()->file('image'));
        }
        $newsarticle->update($requestData);
        return redirect()->route('newsarticle.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Newsarticle $newsarticle)
    {
        $newsarticle->delete();
        return redirect()->route('newsarticle.index');
    }
    public function browse($category_id){
        $newsarticle = Newsarticle::where('category_id',$category_id)->orderBy('id','desc')->first();
        $newsarticles = Newsarticle::where('category_id',$category_id)->orderBy('id','asc')->paginate(4);
        if(!empty($newsarticle)){
             return view('frontend.bycategory', compact('newsarticle','newsarticles'));
        }else{
            return view('frontend.index');
        } 
    }
    public function article($id){
        $newsarticle=Newsarticle::where('id',$id)->orderBy('id','desc')->first();
        return view('frontend.article.article', compact('newsarticle'));
    }
    public function uploadImage($flie){
        $filename = time().'.'.$flie->getClientOriginalExtension();
        Image::make($flie)->resize(300,300)->save(storage_path().'/app/public/article/'.$filename); 
        return $filename;
    }
}
