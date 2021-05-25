<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShareRequest;
use App\Http\Requests\UpdateShareRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Share;
use Illuminate\Http\Request;
use Flash;
use Response;

class ShareController extends AppBaseController
{
    /**
     * Display a listing of the Share.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Share $shares */
        $shares = Share::all();

        return view('shares.index')
            ->with('shares', $shares);
    }

    /**
     * Show the form for creating a new Share.
     *
     * @return Response
     */
    public function create()
    {
        return view('shares.create');
    }

    /**
     * Store a newly created Share in storage.
     *
     * @param CreateShareRequest $request
     *
     * @return Response
     */
    public function store(CreateShareRequest $request)
    {
        $input = $request->all();

        /** @var Share $share */
        $share = Share::create($input);

        Flash::success('Share saved successfully.');

        return redirect(route('shares.index'));
    }

    /**
     * Display the specified Share.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Share $share */
        $share = Share::find($id);

        if (empty($share)) {
            Flash::error('Share not found');

            return redirect(route('shares.index'));
        }

        return view('shares.show')->with('share', $share);
    }

    /**
     * Show the form for editing the specified Share.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Share $share */
        $share = Share::find($id);

        if (empty($share)) {
            Flash::error('Share not found');

            return redirect(route('shares.index'));
        }

        return view('shares.edit')->with('share', $share);
    }

    /**
     * Update the specified Share in storage.
     *
     * @param int $id
     * @param UpdateShareRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateShareRequest $request)
    {
        /** @var Share $share */
        $share = Share::find($id);

        if (empty($share)) {
            Flash::error('Share not found');

            return redirect(route('shares.index'));
        }

        $share->fill($request->all());
        $share->save();

        Flash::success('Share updated successfully.');

        return redirect(route('shares.index'));
    }

    /**
     * Remove the specified Share from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Share $share */
        $share = Share::find($id);

        if (empty($share)) {
            Flash::error('Share not found');

            return redirect(route('shares.index'));
        }

        $share->delete();

        Flash::success('Share deleted successfully.');

        return redirect(route('shares.index'));
    }
}
