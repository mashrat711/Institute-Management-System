<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices=Notice::all();
        return view('Backend.admin.notices.index',compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.admin.notices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
//
        try
        {
            try{
                $productData = $request->all();
                if($request->has('photo')){
                    $productImage = $request->title.'-'.time().'_'.$request->photo->getClientOriginalName();
                    $request->photo->move('images/Notice', $productImage);
                    $productData['photo'] = $productImage;
                }else{
                    $productData['photo'] = null;
                }
                Notice::create($productData);
                return redirect()->route('Notices.index');
            }catch(QueryException $e){
                return redirect()->route('Notices.create')->withInput()->withErrors($e->getMessage());
            }


        }
        catch(QueryException $e){
            return redirect()->route('Notices.create')->with($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show($notice)
    {
       $notice=Notice::find($notice);
         //return ('hi');
       return view('Backend.admin.notices.show', compact('notice'));
        //dd($notice);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
       // dd($notice)
       return view('Backend.admin.notices.edit')->with('notice', $notice);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice $notice)
    {

        try{
            $updateData=$request->all();
            //dd($updateData);
            $notice->update($updateData);
            return redirect()->route('Notices.index')->with('message', 'Data has been updated successfully');
        }
        catch(QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice)
    {
//        $notice=Notice::with('')->where('id', $notice)->first();
        $notice->delete();
        return redirect()->route('Notices.index')->with('message', 'Data has been deleted successfully');
    }
}
