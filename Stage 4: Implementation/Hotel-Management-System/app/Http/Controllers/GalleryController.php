<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\GalleryRepository;
use Illuminate\Http\Request;
use Flash;

class GalleryController extends AppBaseController
{
    /** @var GalleryRepository $galleryRepository*/
    private $galleryRepository;

    public function __construct(GalleryRepository $galleryRepo)
    {
        $this->galleryRepository = $galleryRepo;
    }

    /**
     * Display a listing of the Gallery.
     */
    public function index(Request $request)
    {
        $galleries = $this->galleryRepository->paginate(10);

        return view('galleries.index')
            ->with('galleries', $galleries);
    }

    /**
     * Show the form for creating a new Gallery.
     */
    public function create()
    {
        return view('galleries.create');
    }

    /**
     * Store a newly created Gallery in storage.
     */
    public function store(CreateGalleryRequest $request)
    {
        $input = $request->all();

        $gallery = $this->galleryRepository->create($input);

        Flash::success('Gallery saved successfully.');

        return redirect(route('galleries.index'));
    }

    /**
     * Display the specified Gallery.
     */
    public function show($id)
    {
        $gallery = $this->galleryRepository->find($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('galleries.index'));
        }

        return view('galleries.show')->with('gallery', $gallery);
    }

    /**
     * Show the form for editing the specified Gallery.
     */
    public function edit($id)
    {
        $gallery = $this->galleryRepository->find($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('galleries.index'));
        }

        return view('galleries.edit')->with('gallery', $gallery);
    }

    /**
     * Update the specified Gallery in storage.
     */
    public function update($id, UpdateGalleryRequest $request)
    {
        $gallery = $this->galleryRepository->find($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('galleries.index'));
        }

        $gallery = $this->galleryRepository->update($request->all(), $id);

        Flash::success('Gallery updated successfully.');

        return redirect(route('galleries.index'));
    }

    /**
     * Remove the specified Gallery from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $gallery = $this->galleryRepository->find($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('galleries.index'));
        }

        $this->galleryRepository->delete($id);

        Flash::success('Gallery deleted successfully.');

        return redirect(route('galleries.index'));
    }
}
