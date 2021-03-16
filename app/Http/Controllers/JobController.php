<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobApplicationsRequest;
use App\Models\CareerJob;
use App\Models\JobApplication;
use App\Models\User;
use Illuminate\Http\Request;
use Mail;
use Illuminate\View\View;

class JobController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(Request $request): View
    {
        return view('jobs.index', [
            'title' => 'Jobs at Blueciate',
            'posts' => CareerJob::search($request->input('q'))
                ->where('status', 1)
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
            'title' => $careerJob->title,
            'post' => $careerJob
        ]);
    }

    public function applyJob(JobApplicationsRequest $request)
    {
        $user = User::firstOrCreate(['email'=> $request->get('email')], ['name' => $request->get('first_name') . ' ' . $request->get('last_name')]);
        if ($user && $request->file('resume')) {
            $imagePath = $request->file('resume');
            $originalName = $imagePath->getClientOriginalName();
            $fileName = $request->get('job_id') . '_' . time() . rand(0, 9999) . '.' . $imagePath->extension();

            $path = $request->file('resume')->storeAs('resumes', $fileName, 'public');
            $jobApplication = JobApplication::create([
                'user_id' => $user->id,
                'job_id' => $request->get('job_id'),
                'message' => $request->get('message'),
                'phone' => $request->get('phone'),
                'resume' => $fileName
            ]);
            Mail::to('info@blueciate.com')->send(new \App\Mail\JobApplication($request->all(), $fileName));
        }

        return true;
    }
}
