<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHousekeepingRequest;
use App\Http\Requests\UpdateHousekeepingRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\HousekeepingRepository;
use Illuminate\Http\Request;
use Flash;

class HousekeepingController extends AppBaseController
{
    /** @var HousekeepingRepository $housekeepingRepository*/
    private $housekeepingRepository;

    public function __construct(HousekeepingRepository $housekeepingRepo)
    {
        $this->housekeepingRepository = $housekeepingRepo;
    }

    /**
     * Display a listing of the Housekeeping.
     */
    public function index(Request $request)
    {
        $housekeepings = $this->housekeepingRepository->paginate(10);

        return view('housekeepings.index')
            ->with('housekeepings', $housekeepings);
    }

    /**
     * Show the form for creating a new Housekeeping.
     */
    public function create()
    {
        return view('housekeepings.create');
    }

    /**
     * Store a newly created Housekeeping in storage.
     */
    public function store(CreateHousekeepingRequest $request)
    {
        $input = $request->all();

        $housekeeping = $this->housekeepingRepository->create($input);

        Flash::success('Housekeeping saved successfully.');

        return redirect(route('housekeepings.index'));
    }

    /**
     * Display the specified Housekeeping.
     */
    public function show($id)
    {
        $housekeeping = $this->housekeepingRepository->find($id);

        if (empty($housekeeping)) {
            Flash::error('Housekeeping not found');

            return redirect(route('housekeepings.index'));
        }

        return view('housekeepings.show')->with('housekeeping', $housekeeping);
    }

    /**
     * Show the form for editing the specified Housekeeping.
     */
    public function edit($id)
    {
        $housekeeping = $this->housekeepingRepository->find($id);

        if (empty($housekeeping)) {
            Flash::error('Housekeeping not found');

            return redirect(route('housekeepings.index'));
        }

        return view('housekeepings.edit')->with('housekeeping', $housekeeping);
    }

    /**
     * Update the specified Housekeeping in storage.
     */
    public function update($id, UpdateHousekeepingRequest $request)
    {
        $housekeeping = $this->housekeepingRepository->find($id);

        if (empty($housekeeping)) {
            Flash::error('Housekeeping not found');

            return redirect(route('housekeepings.index'));
        }

        $housekeeping = $this->housekeepingRepository->update($request->all(), $id);

        Flash::success('Housekeeping updated successfully.');

        return redirect(route('housekeepings.index'));
    }

    /**
     * Remove the specified Housekeeping from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $housekeeping = $this->housekeepingRepository->find($id);

        if (empty($housekeeping)) {
            Flash::error('Housekeeping not found');

            return redirect(route('housekeepings.index'));
        }

        $this->housekeepingRepository->delete($id);

        Flash::success('Housekeeping deleted successfully.');

        return redirect(route('housekeepings.index'));
    }
}
