<?php namespace Wirelab\LocationsModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;
use Wirelab\LocationsModule\Location\Form\LocationFormBuilder;
use Wirelab\LocationsModule\Location\Table\LocationTableBuilder;

class LocationsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param LocationTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(LocationTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param LocationFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(LocationFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param LocationFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(LocationFormBuilder $form, $id)
    {
        return $form->render($id);
    }

    /**
     * Get all assignments
     *
     * @return RedirectResponse
     */
    public function assignments(StreamRepositoryInterface $streams)
    {
        $stream = $streams->findBySlugAndNamespace('locations', 'locations');
        return $this->redirect->to('admin/locations/fields/assignments/' . $stream->getId());
    }
}
