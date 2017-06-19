<?php namespace Wirelab\LocationsModule\Http\Controller\Admin;

use Wirelab\LocationsModule\Address\Form\AddressFormBuilder;
use Wirelab\LocationsModule\Address\Table\AddressTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;

class AddressesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param AddressTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(AddressTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param AddressFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(AddressFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param AddressFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(AddressFormBuilder $form, $id)
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
        $stream = $streams->findBySlugAndNamespace('addresses', 'locations');
        return $this->redirect->to('admin/locations/fields/assignments/' . $stream->getId());
    }
}
