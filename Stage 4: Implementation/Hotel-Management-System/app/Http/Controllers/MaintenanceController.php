<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMaintenanceRequest;
use App\Http\Requests\UpdateMaintenanceRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\MaintenanceRepository;
use Illuminate\Http\Request;
use Flash;

class MaintenanceController extends AppBaseController
{
    /** @var MaintenanceRepository $maintenanceRepository*/
    private $maintenanceRepository;

    public function __construct(MaintenanceRepository $maintenanceRepo)
    {
        $this->maintenanceRepository = $maintenanceRepo;
    }

    /**
     * Display a listing of the Maintenance.
     */
    public function index(Request $request)
    {
        $maintenances = $this->maintenanceRepository->paginate(10);

        return view('maintenances.index')
            ->with('maintenances', $maintenances);
    }

    /**
     * Show the form for creating a new Maintenance.
     */
    public function create()
    {
        return view('maintenances.create');
    }

    /**
     * Store a newly created Maintenance in storage.
     */
    public function store(CreateMaintenanceRequest $request)
    {
        $input = $request->all();

        $maintenance = $this->maintenanceRepository->create($input);

        Flash::success('Maintenance saved successfully.');

        return redirect(route('maintenances.index'));
    }

    /**
     * Display the specified Maintenance.
     */
    public function show($id)
    {
        $maintenance = $this->maintenanceRepository->find($id);

        if (empty($maintenance)) {
            Flash::error('Maintenance not found');

            return redirect(route('maintenances.index'));
        }

        return view('maintenances.show')->with('maintenance', $maintenance);
    }

    /**
     * Show the form for editing the specified Maintenance.
     */
    public function edit($id)
    {
        $maintenance = $this->maintenanceRepository->find($id);

        if (empty($maintenance)) {
            Flash::error('Maintenance not found');

            return redirect(route('maintenances.index'));
        }

        return view('maintenances.edit')->with('maintenance', $maintenance);
    }

    /**
     * Update the specified Maintenance in storage.
     */
    public function update($id, UpdateMaintenanceRequest $request)
    {
        $maintenance = $this->maintenanceRepository->find($id);

        if (empty($maintenance)) {
            Flash::error('Maintenance not found');

            return redirect(route('maintenances.index'));
        }

        $maintenance = $this->maintenanceRepository->update($request->all(), $id);

        Flash::success('Maintenance updated successfully.');

        return redirect(route('maintenances.index'));
    }

    /**
     * Remove the specified Maintenance from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $maintenance = $this->maintenanceRepository->find($id);

        if (empty($maintenance)) {
            Flash::error('Maintenance not found');

            return redirect(route('maintenances.index'));
        }

        $this->maintenanceRepository->delete($id);

        Flash::success('Maintenance deleted successfully.');

        return redirect(route('maintenances.index'));
    }
}
