<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::orderBY('created_at', 'DESC')->get();
        return api_response(true, null, 200, 'success', 'successfully fetched all links', $links);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'title' => 'required',
                'link' => 'required',
                'description' => 'required',
                'open_in_new_tab' => 'required',
            ]);

            $link = new Link();
            $link->title = $request['title'];
            $link->link = $request['link'];
            $link->description = $request['description'];
            $link->open_in_new_tab = $request['open_in_new_tab'];


            if ($link->save()) {
                return api_response(true, null, 200, 'success', 'successfully saved Link', $link);
            } else {
                return api_response(false, null, 200, 'success', 'successfully saved Link', $link);
            }
        } catch (\Exception $exception) {
            return api_response(false, $exception->getMessage(), 200, 'error', 'error saving Link`', null);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        try {

            if (isset($request['title'])&& $request['title'] != "null")
                $link->title = $request['title'];

            if (isset($request['link']) && $request['link'] != "null")
                $link->link = $request['link'];
            
            if (isset($request['description']) && $request['description'] != "null")
                $link->description = $request['description'];
                // description

            if (isset($request['open_in_new_tab'])&& $request['open_in_new_tab'] != "null")
                $link->open_in_new_tab = $request['open_in_new_tab'];


            $link->save();

            return api_response(true, null, 200, 'success', 'successfully updated link', $link);
        } catch (\Exception $exception) {
            return api_response(false, $exception->getMessage(), 200, 'error', 'error updating link', null);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link)
    {
        try{
            $link->delete();

            return api_response(true,null, 200, 'success','successfully deleted link', $link);
        }catch (\Exception $exception){
            return api_response(false,$exception->getMessage(), 200, 'error','error deleting link', null);
        }
    }
}
