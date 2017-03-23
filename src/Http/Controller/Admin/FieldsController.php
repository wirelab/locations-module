<?php namespace Wirelab\LocationsModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeCollection;
use Anomaly\Streams\Platform\Field\Form\FieldFormBuilder;
use Anomaly\Streams\Platform\Field\Table\FieldTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;
use Wirelab\LocationsModule\Location\LocationModel;

class FieldsController extends \Anomaly\Streams\Platform\Http\Controller\FieldsController
{

    /**
     * The stream namespace.
     *
     * @var string
     */
    protected $namespace = 'locations';

    // /**
    //  * Display an index of existing entries.
    //  */
    // public function index(FieldTableBuilder $table, LocationModel $locations)
    // {
    //     $table->setStream($locations->getStream());
    //     return $table->render();
    // }

    // /**
    //  * Display a modal with field types
    //  */
    // public function choose(FieldTypeCollection $fieldTypes)
    // {
    //     return view('module::ajax/choose_field_type', ['field_types' => $fieldTypes]);
    // }

    //  *
    //  * Display a form for creating a new field

    // public function create(FieldFormBuilder $form, StreamRepositoryInterface $streams, FieldTypeCollection $fieldTypes)
    // {
    //     $form
    //         ->setStream($streams->findBySlugAndNamespace('locations', 'locations'))
    //         ->setFieldType($fieldTypes->get($_GET['field_type']));
    //     return $form->render();
    // }

    //  /**
    //  * Display a form for editing a field
    //  */
    // public function edit(FieldFormBuilder $form, $id)
    // {
    //     return $form->render($id);
    // }
}
