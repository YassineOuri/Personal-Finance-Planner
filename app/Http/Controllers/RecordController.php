<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecordRequest;
use App\Models\Record;

class RecordController extends Controller
{
    public function index()
    {
        return Record::all();
    }

    public function store(RecordRequest $request)
    {
        return Record::create($request->validated());
    }

    public function show(Record $record)
    {
        return $record;
    }

    public function update(RecordRequest $request, Record $record)
    {
        $record->update($request->validated());

        return $record;
    }

    public function destroy(Record $record)
    {
        $record->delete();

        return response()->json();
    }
}
