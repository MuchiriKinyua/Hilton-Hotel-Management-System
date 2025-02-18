<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAuditRequest;
use App\Http\Requests\UpdateAuditRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AuditRepository;
use Illuminate\Http\Request;
use Flash;

class AuditController extends AppBaseController
{
    /** @var AuditRepository $auditRepository*/
    private $auditRepository;

    public function __construct(AuditRepository $auditRepo)
    {
        $this->auditRepository = $auditRepo;
    }

    /**
     * Display a listing of the Audit.
     */
    public function index(Request $request)
    {
        $audits = $this->auditRepository->paginate(10);

        return view('audits.index')
            ->with('audits', $audits);
    }

    /**
     * Show the form for creating a new Audit.
     */
    public function create()
    {
        return view('audits.create');
    }

    /**
     * Store a newly created Audit in storage.
     */
    public function store(CreateAuditRequest $request)
    {
        $input = $request->all();

        $audit = $this->auditRepository->create($input);

        Flash::success('Audit saved successfully.');

        return redirect(route('audits.index'));
    }

    /**
     * Display the specified Audit.
     */
    public function show($id)
    {
        $audit = $this->auditRepository->find($id);

        if (empty($audit)) {
            Flash::error('Audit not found');

            return redirect(route('audits.index'));
        }

        return view('audits.show')->with('audit', $audit);
    }

    /**
     * Show the form for editing the specified Audit.
     */
    public function edit($id)
    {
        $audit = $this->auditRepository->find($id);

        if (empty($audit)) {
            Flash::error('Audit not found');

            return redirect(route('audits.index'));
        }

        return view('audits.edit')->with('audit', $audit);
    }

    /**
     * Update the specified Audit in storage.
     */
    public function update($id, UpdateAuditRequest $request)
    {
        $audit = $this->auditRepository->find($id);

        if (empty($audit)) {
            Flash::error('Audit not found');

            return redirect(route('audits.index'));
        }

        $audit = $this->auditRepository->update($request->all(), $id);

        Flash::success('Audit updated successfully.');

        return redirect(route('audits.index'));
    }

    /**
     * Remove the specified Audit from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $audit = $this->auditRepository->find($id);

        if (empty($audit)) {
            Flash::error('Audit not found');

            return redirect(route('audits.index'));
        }

        $this->auditRepository->delete($id);

        Flash::success('Audit deleted successfully.');

        return redirect(route('audits.index'));
    }
}
