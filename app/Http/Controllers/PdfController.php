<?php

namespace App\Http\Controllers;

use App\Models\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pdfs = Pdf::orderBY('created_at', 'DESC')->get();
        return api_response(true, null, 200, 'success', 'successfully fetched all pdfs', $pdfs);
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
        // return $request->all();
        try {
            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
            ]);

            $resource = new Pdf();
            $resource->title = $request['title'];
            $resource->description = $request['description'];

            if ($request->hasFile('pdf')) {
                $file      = $request->file('pdf');
                $filename  = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $pdf   = date('His') . '-' . $filename;
                $file->move(public_path('PDF'), $pdf);
                $resource->storageLink  = $pdf;
            }

            $resource->status = 'available';

            if ($resource->save()) {
                return api_response(true, null, 200, 'success', 'successfully saved PDF', $resource);
            } else {
                return api_response(false, null, 200, 'success', 'successfully saved PDF', $resource);
            }
        } catch (\Exception $exception) {
            return api_response(false, $exception->getMessage(), 200, 'error', 'error saving PDF', null);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pdf  $pdf
     * @return \Illuminate\Http\Response
     */
    public function show(Pdf $pdf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pdf  $pdf
     * @return \Illuminate\Http\Response
     */
    public function edit(Pdf $pdf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pdf  $pdf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pdf $pdf)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pdf  $pdf
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pdf $pdf)
    {
        try{

            //delete existing image
            $imgWillDelete = public_path() . '/PDF/'.$pdf->storageLink;
            File::delete($imgWillDelete);


            $pdf->delete();

            return api_response(true,null, 200, 'success','successfully deleted resource', $pdf);
        }catch (\Exception $exception){
            return api_response(false,$exception->getMessage(), 200, 'error','error deleting resource', null);
        }
    }

    public function updatepdf($id, Request $request) {
        try {
            $pdf = Pdf::where('id', '=', $id)->first();

            if (isset($request['title'])&& $request['title'] != "null")
                $pdf->title = $request['title'];

            if (isset($request['description']) && $request['description'] != "null")
                $pdf->description = $request['description'];


            if (isset($request['status'])&& $request['status'] != "null")
                $pdf->status = $request['status'];


            if ($request->hasFile('pdf')) {
                //delete existing file
                $imgWillDelete = public_path() . '/PDF/' . $pdf->storageLink;
                File::delete($imgWillDelete);

                $file      = $request->file('pdf');
                $filename  = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $picture   = date('His') . '-' . $filename;
                $file->move(public_path('PDF'), $picture);
                $pdf->storageLink  = $picture;
            }


            $pdf->save();

            return api_response(true, null, 200, 'success', 'successfully updated PDF', $pdf);
        } catch (\Exception $exception) {
            return api_response(false, $exception->getMessage(), 200, 'error', 'error updating PDF', null);
        }
    }
}
