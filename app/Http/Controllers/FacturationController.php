<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFacturationRequest;
use App\Http\Requests\UpdateFacturationRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Facturation;
use Illuminate\Http\Request;
use Flash;
use Response;

class FacturationController extends AppBaseController
{
    /**
     * Display a listing of the Facturation.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Facturation $facturations */
        $facturations = Facturation::all();

        return view('facturations.index')
            ->with('facturations', $facturations);
    }

    /**
     * Show the form for creating a new Facturation.
     *
     * @return Response
     */
    public function create()
    {
        return view('facturations.create');
    }

    /**
     * Store a newly created Facturation in storage.
     *
     * @param CreateFacturationRequest $request
     *
     * @return Response
     */
    public function store(CreateFacturationRequest $request)
    {
        $input = $request->all();

        /** @var Facturation $facturation */
        $facturation = Facturation::create($input);

        Flash::success('Facturation saved successfully.');

        return redirect(route('facturations.index'));
    }

    /**
     * Display the specified Facturation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Facturation $facturation */
        $facturation = Facturation::find($id);

        if (empty($facturation)) {
            Flash::error('Facturation not found');

            return redirect(route('facturations.index'));
        }

        return view('facturations.show')->with('facturation', $facturation);
    }

    /**
     * Show the form for editing the specified Facturation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Facturation $facturation */
        $facturation = Facturation::find($id);

        if (empty($facturation)) {
            Flash::error('Facturation not found');

            return redirect(route('facturations.index'));
        }

        return view('facturations.edit')->with('facturation', $facturation);
    }

    /**
     * Update the specified Facturation in storage.
     *
     * @param int $id
     * @param UpdateFacturationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFacturationRequest $request)
    {
        /** @var Facturation $facturation */
        $facturation = Facturation::find($id);

        if (empty($facturation)) {
            Flash::error('Facturation not found');

            return redirect(route('facturations.index'));
        }

        $facturation->fill($request->all());
        $facturation->save();

        Flash::success('Facturation updated successfully.');

        return redirect(route('facturations.index'));
    }

    /**
     * Remove the specified Facturation from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Facturation $facturation */
        $facturation = Facturation::find($id);

        if (empty($facturation)) {
            Flash::error('Facturation not found');

            return redirect(route('facturations.index'));
        }

        $facturation->delete();

        Flash::success('Facturation deleted successfully.');

        return redirect(route('facturations.index'));
    }
}
