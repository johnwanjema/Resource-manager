<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Pdf;
use App\Models\Snippet;
use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    public function getHomeData()
    {
        try {
            $data = [];
            $pdfs = Pdf::All();
            $snippets = Snippet::All();
            $links = Link::All();
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
