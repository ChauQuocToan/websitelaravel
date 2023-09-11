<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner=Banner::orderBy('id','DESC')->paginate(10);
        return view('backend.banker.index')->with('banners',$banner);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'string|required|max:50',
            'description'=>'string|nullable',
            'photo'=>'string|reuired',
            'status'=>'required|in:active,inactive',
        ]);
        $data=$request->all();
        $slug=str::slug($request->title);
        $count=Banner::where('slug',$slug)->count();
        if($count>0)
        {
            $slug=$lug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        $status=Banner::create($data);
        if($status){
            request()->session()->flash('success','Banner successfully  added');
            }
            else
            {
                request()->session()->flash('error','Error occurred  while adding banner');
            }
            return redirect()->route('banner.index');
        }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $banner=Banner::findOrFail($id);
        return view('backend.banner.edit')->with('banner',$banner);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $banner=Banner::findOrFail($id);
        $this->validate($request,[
            'title'=>'string|required|max:50',
            'description'=>'string|nullable',
            'photo'=>'string|required',
            'status'=>'required|in:active,inactive',
        ]);
        $data=$request->all();
        $status=$banner->fill($data)->save();
        if($status)
        {
            request()->session()->flash('succcess','Banner successfully updated');
        }
        else
        {
            request()->session()->flash('error','Error occured while updating banner');
        }
        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $banner=Banner::findOrFail($id);
        $status=$banner->delete();
        if($status){
            request()->session()->flash('succcess','Banner successfully deleted');
        }
        else
        {
            request()->session()->flash('error','Error occured while deleting banner');
        }
        return redirect()->route('banner.index');
    }
}
