<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CareerJobsRequest;
use App\Http\Requests\Admin\PostsRequest;
use App\Models\CareerJob;
use App\Models\MediaLibrary;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CareerJobController extends Controller
{
    /**
     * Show the application posts index.
     */
    public function index(): View
    {
        return view('admin.career_jobs.index', [
            'posts' => CareerJob::where('status', 1)->latest()->paginate(50)
        ]);
    }

    /**
     * Display the specified resource edit form.
     * @param CareerJob $careerJob
     * @return View
     */
    public function edit($jobSlug): View
    {
        $careerJob = CareerJob::where('slug', $jobSlug)->first();
        return view('admin.career_jobs.edit', [
            'post' => $careerJob,
            'users' => User::authors()->pluck('name', 'id')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        return view('admin.career_jobs.create', [
            'users' => User::authors()->pluck('name', 'id'),
            'media' => MediaLibrary::first()->media()->get()->pluck('name', 'id'),
            'tags' => Tag::get()->pluck('name', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CareerJobsRequest $request): RedirectResponse
    {
        $post = CareerJob::create($request->only(['title', 'description', 'posted_at', 'posted_by', 'location', 'slug']));

        return redirect()->route('admin.jobs.index', $post)->withSuccess(__('posts.created'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CareerJobsRequest $request, $jobSlug): RedirectResponse
    {
        $careerJob = CareerJob::where('slug', $jobSlug)->first();
        $careerJob->update($request->only(['title', 'description', 'posted_at', 'posted_by', 'location', 'slug']));

        return redirect()->route('admin.jobs.index', $careerJob)->withSuccess(__('jobs.updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($jobSlug)
    {
        $careerJob = CareerJob::where('slug', $jobSlug)->first();
        $careerJob->delete();

        return redirect()->route('admin.jobs.index')->withSuccess(__('jobs.deleted'));
    }
}
