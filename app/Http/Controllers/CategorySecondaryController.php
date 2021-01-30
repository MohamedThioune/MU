<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategorySecondaryRequest;
use App\Http\Requests\UpdateCategorySecondaryRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\CategorySecondary;
use Illuminate\Http\Request;
use Flash;
use Response;

class CategorySecondaryController extends AppBaseController
{
    /**
     * Display a listing of the CategorySecondary.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var CategorySecondary $categorySecondaries */
        $categorySecondaries = CategorySecondary::all();

        return view('category_secondaries.index')
            ->with('categorySecondaries', $categorySecondaries);
    }

    /**
     * Show the form for creating a new CategorySecondary.
     *
     * @return Response
     */
    public function create()
    {
        return view('category_secondaries.create');
    }

    /**
     * Store a newly created CategorySecondary in storage.
     *
     * @param CreateCategorySecondaryRequest $request
     *
     * @return Response
     */
    public function store(CreateCategorySecondaryRequest $request)
    {
        $input = $request->all();

        /** @var CategorySecondary $categorySecondary */
        $categorySecondary = CategorySecondary::create($input);

        Flash::success('Category Secondary saved successfully.');

        return redirect(route('categorySecondaries.index'));
    }

    /**
     * Display the specified CategorySecondary.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var CategorySecondary $categorySecondary */
        $categorySecondary = CategorySecondary::find($id);

        if (empty($categorySecondary)) {
            Flash::error('Category Secondary not found');

            return redirect(route('categorySecondaries.index'));
        }

        return view('category_secondaries.show')->with('categorySecondary', $categorySecondary);
    }

    /**
     * Show the form for editing the specified CategorySecondary.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var CategorySecondary $categorySecondary */
        $categorySecondary = CategorySecondary::find($id);

        if (empty($categorySecondary)) {
            Flash::error('Category Secondary not found');

            return redirect(route('categorySecondaries.index'));
        }

        return view('category_secondaries.edit')->with('categorySecondary', $categorySecondary);
    }

    /**
     * Update the specified CategorySecondary in storage.
     *
     * @param int $id
     * @param UpdateCategorySecondaryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategorySecondaryRequest $request)
    {
        /** @var CategorySecondary $categorySecondary */
        $categorySecondary = CategorySecondary::find($id);

        if (empty($categorySecondary)) {
            Flash::error('Category Secondary not found');

            return redirect(route('categorySecondaries.index'));
        }

        $categorySecondary->fill($request->all());
        $categorySecondary->save();

        Flash::success('Category Secondary updated successfully.');

        return redirect(route('categorySecondaries.index'));
    }

    /**
     * Remove the specified CategorySecondary from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var CategorySecondary $categorySecondary */
        $categorySecondary = CategorySecondary::find($id);

        if (empty($categorySecondary)) {
            Flash::error('Category Secondary not found');

            return redirect(route('categorySecondaries.index'));
        }

        $categorySecondary->delete();

        Flash::success('Category Secondary deleted successfully.');

        return redirect(route('categorySecondaries.index'));
    }
}
