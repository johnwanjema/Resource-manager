<?php

namespace App\Http\Controllers;

use App\Models\Snippet;
use Illuminate\Http\Request;

class SnippetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $snippets = Snippet::orderBY('created_at', 'DESC')->get();
        return api_response(true, null, 200, 'success', 'successfully fetched all snippets', $snippets);
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
                'description' => 'required',
                'snippet' => 'required',
            ]);

            $snippet = new Snippet();
            $snippet->title = $request['title'];
            $snippet->description = $request['description'];
            $snippet->snippet = $request['snippet'];


            if ($snippet->save()) {
                return api_response(true, null, 200, 'success', 'successfully saved Snippet', $snippet);
            } else {
                return api_response(false, null, 200, 'success', 'successfully saved Snippet', $snippet);
            }
        } catch (\Exception $exception) {
            return api_response(false, $exception->getMessage(), 200, 'error', 'error saving Snippet', null);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Snippet  $snippet
     * @return \Illuminate\Http\Response
     */
    public function show(Snippet $snippet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Snippet  $snippet
     * @return \Illuminate\Http\Response
     */
    public function edit(Snippet $snippet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Snippet  $snippet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Snippet $snippet)
    {
        try {

            if (isset($request['title'])&& $request['title'] != "null")
                $snippet->title = $request['title'];

            if (isset($request['description']) && $request['description'] != "null")
                $snippet->description = $request['description'];


            if (isset($request['snippet'])&& $request['snippet'] != "null")
                $snippet->snippet = $request['snippet'];


            $snippet->save();

            return api_response(true, null, 200, 'success', 'successfully updated snippet', $snippet);
        } catch (\Exception $exception) {
            return api_response(false, $exception->getMessage(), 200, 'error', 'error updating snippet', null);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Snippet  $snippet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Snippet $snippet)
    {
        try{
            $snippet->delete();

            return api_response(true,null, 200, 'success','successfully deleted snippet', $snippet);
        }catch (\Exception $exception){
            return api_response(false,$exception->getMessage(), 200, 'error','error deleting snippet', null);
        }
    }
}
