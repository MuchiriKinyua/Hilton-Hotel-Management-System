<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\FeedbackRepository;
use Illuminate\Http\Request;
use Flash;

class FeedbackController extends AppBaseController
{
    /** @var FeedbackRepository $feedbackRepository*/
    private $feedbackRepository;

    public function __construct(FeedbackRepository $feedbackRepo)
    {
        $this->feedbackRepository = $feedbackRepo;
    }

    /**
     * Display a listing of the Feedback.
     */
    public function index(Request $request)
    {
        $feedback = $this->feedbackRepository->paginate(10);

        return view('feedback.index')
            ->with('feedback', $feedback);
    }

    /**
     * Show the form for creating a new Feedback.
     */
    public function create()
    {
        return view('feedback.create');
    }

    /**
     * Store a newly created Feedback in storage.
     */
    public function store(CreateFeedbackRequest $request)
    {
        $input = $request->all();

        $feedback = $this->feedbackRepository->create($input);

        Flash::success('Feedback saved successfully.');

        return redirect(route('feedback.index'));
    }

    /**
     * Display the specified Feedback.
     */
    public function show($id)
    {
        $feedback = $this->feedbackRepository->find($id);

        if (empty($feedback)) {
            Flash::error('Feedback not found');

            return redirect(route('feedback.index'));
        }

        return view('feedback.show')->with('feedback', $feedback);
    }

    /**
     * Show the form for editing the specified Feedback.
     */
    public function edit($id)
    {
        $feedback = $this->feedbackRepository->find($id);

        if (empty($feedback)) {
            Flash::error('Feedback not found');

            return redirect(route('feedback.index'));
        }

        return view('feedback.edit')->with('feedback', $feedback);
    }

    /**
     * Update the specified Feedback in storage.
     */
    public function update($id, UpdateFeedbackRequest $request)
    {
        $feedback = $this->feedbackRepository->find($id);

        if (empty($feedback)) {
            Flash::error('Feedback not found');

            return redirect(route('feedback.index'));
        }

        $feedback = $this->feedbackRepository->update($request->all(), $id);

        Flash::success('Feedback updated successfully.');

        return redirect(route('feedback.index'));
    }

    /**
     * Remove the specified Feedback from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $feedback = $this->feedbackRepository->find($id);

        if (empty($feedback)) {
            Flash::error('Feedback not found');

            return redirect(route('feedback.index'));
        }

        $this->feedbackRepository->delete($id);

        Flash::success('Feedback deleted successfully.');

        return redirect(route('feedback.index'));
    }
}
