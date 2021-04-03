<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReadRequest;
use App\Http\Requests\UpdateReadRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Read;
use Illuminate\Http\Request;
use Flash;
use Response;

class ReadController extends AppBaseController
{
    /**
     * Display a listing of the Read.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Read $reads */
        $reads = Read::all();

        return view('reads.index')
            ->with('reads', $reads);
    }

    /**
     * Show the form for creating a new Read.
     *
     * @return Response
     */
    public function create()
    {
        return view('reads.create');
    }

    /**
     * Store a newly created Read in storage.
     *
     * @param CreateReadRequest $request
     *
     * @return Response
     */
    public function store(CreateReadRequest $request)
    {
        $input = $request->all();

        /** @var Read $read */
        $read = Read::create($input);

        Flash::success('Read saved successfully.');

        return redirect(route('reads.index'));
    }

    /**
     * Display the specified Read.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Read $read */
        $read = Read::find($id);

        if (empty($read)) {
            Flash::error('Read not found');

            return redirect(route('reads.index'));
        }

        return view('reads.show')->with('read', $read);
    }

    /**
     * Show the form for editing the specified Read.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Read $read */
        $read = Read::find($id);

        if (empty($read)) {
            Flash::error('Read not found');

            return redirect(route('reads.index'));
        }

        return view('reads.edit')->with('read', $read);
    }

    /**
     * Update the specified Read in storage.
     *
     * @param int $id
     * @param UpdateReadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReadRequest $request)
    {
        /** @var Read $read */
        $read = Read::find($id);

        if (empty($read)) {
            Flash::error('Read not found');

            return redirect(route('reads.index'));
        }

        $read->fill($request->all());
        $read->save();

        Flash::success('Read updated successfully.');

        return redirect(route('reads.index'));
    }

    /**
     * Remove the specified Read from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Read $read */
        $read = Read::find($id);

        if (empty($read)) {
            Flash::error('Read not found');

            return redirect(route('reads.index'));
        }

        $read->delete();

        Flash::success('Read deleted successfully.');

        return redirect(route('reads.index'));
    }
}
