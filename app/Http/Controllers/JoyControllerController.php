<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJoyControllerRequest;
use App\Http\Requests\UpdateJoyControllerRequest;
use App\Repositories\JoyControllerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class JoyControllerController extends AppBaseController
{
    /** @var  JoyControllerRepository */
    private $joyControllerRepository;

    public function __construct(JoyControllerRepository $joyControllerRepo)
    {
        $this->joyControllerRepository = $joyControllerRepo;
    }

    /**
     * Display a listing of the JoyController.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $joyControllers = $this->joyControllerRepository->all();

        return view('joy_controllers.index')
            ->with('joyControllers', $joyControllers);
    }

    /**
     * Show the form for creating a new JoyController.
     *
     * @return Response
     */
    public function create()
    {
        return view('joy_controllers.create');
    }

    /**
     * Store a newly created JoyController in storage.
     *
     * @param CreateJoyControllerRequest $request
     *
     * @return Response
     */
    public function store(CreateJoyControllerRequest $request)
    {
        $input = $request->all();

        $joyController = $this->joyControllerRepository->create($input);

        Flash::success('Joy Controller saved successfully.');

        return redirect(route('joyControllers.index'));
    }

    /**
     * Display the specified JoyController.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $joyController = $this->joyControllerRepository->find($id);

        if (empty($joyController)) {
            Flash::error('Joy Controller not found');

            return redirect(route('joyControllers.index'));
        }

        return view('joy_controllers.show')->with('joyController', $joyController);
    }

    /**
     * Show the form for editing the specified JoyController.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $joyController = $this->joyControllerRepository->find($id);

        if (empty($joyController)) {
            Flash::error('Joy Controller not found');

            return redirect(route('joyControllers.index'));
        }

        return view('joy_controllers.edit')->with('joyController', $joyController);
    }

    /**
     * Update the specified JoyController in storage.
     *
     * @param int $id
     * @param UpdateJoyControllerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJoyControllerRequest $request)
    {
        $joyController = $this->joyControllerRepository->find($id);

        if (empty($joyController)) {
            Flash::error('Joy Controller not found');

            return redirect(route('joyControllers.index'));
        }

        $joyController = $this->joyControllerRepository->update($request->all(), $id);

        Flash::success('Joy Controller updated successfully.');

        return redirect(route('joyControllers.index'));
    }

    /**
     * Remove the specified JoyController from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $joyController = $this->joyControllerRepository->find($id);

        if (empty($joyController)) {
            Flash::error('Joy Controller not found');

            return redirect(route('joyControllers.index'));
        }

        $this->joyControllerRepository->delete($id);

        Flash::success('Joy Controller deleted successfully.');

        return redirect(route('joyControllers.index'));
    }
}
