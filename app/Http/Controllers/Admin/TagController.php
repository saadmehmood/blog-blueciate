<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TagsRequest;
use App\Models\MediaLibrary;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TagController extends Controller
{
    /**
     * Show the application tags index.
     */
    public function index(): View
    {
        return view('admin.tags.index', [
            'tags' => Tag::latest()->paginate(50)
        ]);
    }

    /**
     * Display the specified resource edit form.
     */
    public function edit(Tag $tag): View
    {
        return view('admin.tags.edit', [
            'tag' => $tag,
            'media' => MediaLibrary::first()->media()->get()->pluck('name', 'id')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        return view('admin.tags.create', [
            'media' => MediaLibrary::first()->media()->get()->pluck('name', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TagsRequest $request): RedirectResponse
    {
        $post = Tag::create($request->only(['name', 'thumbnail_id']));

        return redirect()->route('admin.tags.edit', $post)->withSuccess(__('tags.created'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagsRequest $request, Tag $tag): RedirectResponse
    {
        $tag->update($request->only(['name', 'thumbnail_id']));

        return redirect()->route('admin.tags.edit', $tag)->withSuccess(__('tags.updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag  $tag)
    {
        $tag->delete();

        return redirect()->route('admin.tags.index')->withSuccess(__('tags.deleted'));
    }
}
