<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Pdf;
use App\Models\Snippet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getDashboardStats()
    {
        try {
            $data = [];
            $pdfs = Pdf::All()->count();
            $snippets = Snippet::All()->count();
            $links = Link::All()->count();
            $data = [
                'pdfs' => $pdfs,
                'snippets' => $snippets,
                'links' => $links,
            ];
            return api_response(true, null, 0, 'success', 'successfully fetched data', $data);
        } catch (\Exception $exception) {
            return api_response(false, $exception->getMessage(), 200, 'error', 'error getting data', null);
        }
    }
}
