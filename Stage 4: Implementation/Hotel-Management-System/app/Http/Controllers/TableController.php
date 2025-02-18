<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTableRequest;
use App\Http\Requests\UpdateTableRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\TableRepository;
use Illuminate\Http\Request;
use Flash;

class TableController extends AppBaseController
{
    /** @var TableRepository $tableRepository*/
    private $tableRepository;

    public function __construct(TableRepository $tableRepo)
    {
        $this->tableRepository = $tableRepo;
    }

    /**
     * Display a listing of the Table.
     */
    public function index(Request $request)
    {
        $tables = $this->tableRepository->paginate(10);

        return view('tables.index')
            ->with('tables', $tables);
    }

    /**
     * Show the form for creating a new Table.
     */
    public function create()
    {
        return view('tables.create');
    }

    /**
     * Store a newly created Table in storage.
     */
    public function store(CreateTableRequest $request)
    {
        $input = $request->all();

        $table = $this->tableRepository->create($input);

        Flash::success('Table saved successfully.');

        return redirect(route('tables.index'));
    }

    /**
     * Display the specified Table.
     */
    public function show($id)
    {
        $table = $this->tableRepository->find($id);

        if (empty($table)) {
            Flash::error('Table not found');

            return redirect(route('tables.index'));
        }

        return view('tables.show')->with('table', $table);
    }

    /**
     * Show the form for editing the specified Table.
     */
    public function edit($id)
    {
        $table = $this->tableRepository->find($id);

        if (empty($table)) {
            Flash::error('Table not found');

            return redirect(route('tables.index'));
        }

        return view('tables.edit')->with('table', $table);
    }

    /**
     * Update the specified Table in storage.
     */
    public function update($id, UpdateTableRequest $request)
    {
        $table = $this->tableRepository->find($id);

        if (empty($table)) {
            Flash::error('Table not found');

            return redirect(route('tables.index'));
        }

        $table = $this->tableRepository->update($request->all(), $id);

        Flash::success('Table updated successfully.');

        return redirect(route('tables.index'));
    }

    /**
     * Remove the specified Table from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $table = $this->tableRepository->find($id);

        if (empty($table)) {
            Flash::error('Table not found');

            return redirect(route('tables.index'));
        }

        $this->tableRepository->delete($id);

        Flash::success('Table deleted successfully.');

        return redirect(route('tables.index'));
    }
}
