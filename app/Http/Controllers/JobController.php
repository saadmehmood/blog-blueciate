<?php

namespace App\Http\Controllers;

use App\Models\CareerJob;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JobController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(Request $request): View
    {
        return view('jobs.index', [
            'posts' => CareerJob::search($request->input('q'))
                             ->with('postedBy')
                             ->latest()
                             ->paginate(20)
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $slug): View
    {
        $careerJob = CareerJob::where('slug', $slug)->where('status', 1)->first();

        return view('jobs.show', [
            'post' => $careerJob
        ]);
    }
}
