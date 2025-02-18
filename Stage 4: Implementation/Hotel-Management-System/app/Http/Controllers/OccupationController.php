<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOccupationRequest;
use App\Http\Requests\UpdateOccupationRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\OccupationRepository;
use Illuminate\Http\Request;
use Flash;

class OccupationController extends AppBaseController
{
    /** @var OccupationRepository $occupationRepository*/
    private $occupationRepository;

    public function __construct(OccupationRepository $occupationRepo)
    {
        $this->occupationRepository = $occupationRepo;
    }

    /**
     * Display a listing of the Occupation.
     */
    public function index(Request $request)
    {
        $occupations = $this->occupationRepository->paginate(10);

        return view('occupations.index')
            ->with('occupations', $occupations);
    }

    /**
     * Show the form for creating a new Occupation.
     */
    public function create()
    {
        return view('occupations.create');
    }

    /**
     * Store a newly created Occupation in storage.
     */
    public function store(CreateOccupationRequest $request)
    {
        $input = $request->all();

        $occupation = $this->occupationRepository->create($input);

        Flash::success('Occupation saved successfully.');

        return redirect(route('occupations.index'));
    }

    /**
     * Display the specified Occupation.
     */
    public function show($id)
    {
        $occupation = $this->occupationRepository->find($id);

        if (empty($occupation)) {
            Flash::error('Occupation not found');

            return redirect(route('occupations.index'));
        }

        return view('occupations.show')->with('occupation', $occupation);
    }

    /**
     * Show the form for editing the specified Occupation.
     */
    public function edit($id)
    {
        $occupation = $this->occupationRepository->find($id);

        if (empty($occupation)) {
            Flash::error('Occupation not found');

            return redirect(route('occupations.index'));
        }

        return view('occupations.edit')->with('occupation', $occupation);
    }

    /**
     * Update the specified Occupation in storage.
     */
    public function update($id, UpdateOccupationRequest $request)
    {
        $occupation = $this->occupationRepository->find($id);

        if (empty($occupation)) {
            Flash::error('Occupation not found');

            return redirect(route('occupations.index'));
        }

        $occupation = $this->occupationRepository->update($request->all(), $id);

        Flash::success('Occupation updated successfully.');

        return redirect(route('occupations.index'));
    }

    /**
     * Remove the specified Occupation from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $occupation = $this->occupationRepository->find($id);

        if (empty($occupation)) {
            Flash::error('Occupation not found');

            return redirect(route('occupations.index'));
        }

        $this->occupationRepository->delete($id);

        Flash::success('Occupation deleted successfully.');

        return redirect(route('occupations.index'));
    }
}
