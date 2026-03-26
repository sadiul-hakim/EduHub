<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SubjectController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Subject::query();
        if ($request->search) {
            $query->where('name', 'like', "%{$request->search}%");
        }

        // sort by name (ascending)
        $query->orderBy('name', 'asc');

        return inertia('Subject', [
            'subjects' => $query->paginate(10)->withQueryString(),
            'filters' => $request->only(['search'])
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectRequest $request)
    {
        $subject = Subject::create($request->validated());
        Log::info('New subject has been created.', [
            'name' => $subject->name,
        ]);
        return back()->with('success', "Subject {$subject->name} is created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        $subject->update($request->validated());
        return back()->with('success', "Subject {$subject->name} is updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $this->authorize('delete', $subject);
        $name = $subject->name;
        $subject->delete();
        Log::info('Subject has been deleted.', [
            'name' => $subject->name,
        ]);
        return back()->with('success', "Successfully deleted subject {$name}");
    }
}
