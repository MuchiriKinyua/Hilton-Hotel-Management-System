<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLoggedRequest;
use App\Http\Requests\UpdateLoggedRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\LoggedRepository;
use Illuminate\Http\Request;
use Flash;

class LoggedController extends AppBaseController
{
    /** @var LoggedRepository $loggedRepository*/
    private $loggedRepository;

    public function __construct(LoggedRepository $loggedRepo)
    {
        $this->loggedRepository = $loggedRepo;
    }

    /**
     * Display a listing of the Logged.
     */
    public function index(Request $request)
    {
        $loggeds = $this->loggedRepository->paginate(10);

        return view('loggeds.index')
            ->with('loggeds', $loggeds);
    }

    /**
     * Show the form for creating a new Logged.
     */
    public function create()
    {
        return view('loggeds.create');
    }

    /**
     * Store a newly created Logged in storage.
     */
    public function store(CreateLoggedRequest $request)
    {
        $input = $request->all();

        $logged = $this->loggedRepository->create($input);

        Flash::success('Logged saved successfully.');

        return redirect(route('loggeds.index'));
    }

    /**
     * Display the specified Logged.
     */
    public function show($id)
    {
        $logged = $this->loggedRepository->find($id);

        if (empty($logged)) {
            Flash::error('Logged not found');

            return redirect(route('loggeds.index'));
        }

        return view('loggeds.show')->with('logged', $logged);
    }

    /**
     * Show the form for editing the specified Logged.
     */
    public function edit($id)
    {
        $logged = $this->loggedRepository->find($id);

        if (empty($logged)) {
            Flash::error('Logged not found');

            return redirect(route('loggeds.index'));
        }

        return view('loggeds.edit')->with('logged', $logged);
    }

    /**
     * Update the specified Logged in storage.
     */
    public function update($id, UpdateLoggedRequest $request)
    {
        $logged = $this->loggedRepository->find($id);

        if (empty($logged)) {
            Flash::error('Logged not found');

            return redirect(route('loggeds.index'));
        }

        $logged = $this->loggedRepository->update($request->all(), $id);

        Flash::success('Logged updated successfully.');

        return redirect(route('loggeds.index'));
    }

    /**
     * Remove the specified Logged from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $logged = $this->loggedRepository->find($id);

        if (empty($logged)) {
            Flash::error('Logged not found');

            return redirect(route('loggeds.index'));
        }

        $this->loggedRepository->delete($id);

        Flash::success('Logged deleted successfully.');

        return redirect(route('loggeds.index'));
    }
}
