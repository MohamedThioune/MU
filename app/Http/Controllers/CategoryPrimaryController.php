<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryPrimaryRequest;
use App\Http\Requests\UpdateCategoryPrimaryRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\CategoryPrimary;
use Illuminate\Http\Request;
use Flash;
use Response;

class CategoryPrimaryController extends AppBaseController
{
    /**
     * Display a listing of the CategoryPrimary.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var CategoryPrimary $categoryPrimaries */
        $categoryPrimaries = CategoryPrimary::all();

        return view('category_primaries.index')
            ->with('categoryPrimaries', $categoryPrimaries);
    }

    /**
     * Show the form for creating a new CategoryPrimary.
     *
     * @return Response
     */
    public function create()
    {
        return view('category_primaries.create');
    }

    /**
     * Store a newly created CategoryPrimary in storage.
     *
     * @param CreateCategoryPrimaryRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoryPrimaryRequest $request)
    {
        $input = $request->all();

        /** @var CategoryPrimary $categoryPrimary */
        $categoryPrimary = CategoryPrimary::create($input);

        Flash::success('Category Primary saved successfully.');

        return redirect(route('categoryPrimaries.index'));
    }

    /**
     * Display the specified CategoryPrimary.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var CategoryPrimary $categoryPrimary */
        $categoryPrimary = CategoryPrimary::find($id);

        if (empty($categoryPrimary)) {
            Flash::error('Category Primary not found');

            return redirect(route('categoryPrimaries.index'));
        }

        return view('category_primaries.show')->with('categoryPrimary', $categoryPrimary);
    }

    /**
     * Show the form for editing the specified CategoryPrimary.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var CategoryPrimary $categoryPrimary */
        $categoryPrimary = CategoryPrimary::find($id);

        if (empty($categoryPrimary)) {
            Flash::error('Category Primary not found');

            return redirect(route('categoryPrimaries.index'));
        }

        return view('category_primaries.edit')->with('categoryPrimary', $categoryPrimary);
    }

    /**
     * Update the specified CategoryPrimary in storage.
     *
     * @param int $id
     * @param UpdateCategoryPrimaryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoryPrimaryRequest $request)
    {
        /** @var CategoryPrimary $categoryPrimary */
        $categoryPrimary = CategoryPrimary::find($id);

        if (empty($categoryPrimary)) {
            Flash::error('Category Primary not found');

            return redirect(route('categoryPrimaries.index'));
        }

        $categoryPrimary->fill($request->all());
        $categoryPrimary->save();

        Flash::success('Category Primary updated successfully.');

        return redirect(route('categoryPrimaries.index'));
    }

    /**
     * Remove the specified CategoryPrimary from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var CategoryPrimary $categoryPrimary */
        $categoryPrimary = CategoryPrimary::find($id);

        if (empty($categoryPrimary)) {
            Flash::error('Category Primary not found');

            return redirect(route('categoryPrimaries.index'));
        }

        $categoryPrimary->delete();

        Flash::success('Category Primary deleted successfully.');

        return redirect(route('categoryPrimaries.index'));
    }
}
