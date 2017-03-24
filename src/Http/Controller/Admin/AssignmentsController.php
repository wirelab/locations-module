<?php namespace Wirelab\LocationsModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\Streams\Platform\Assignment\Table\AssignmentTableBuilder;
use Anomaly\Streams\Platform\Field\Contract\FieldRepositoryInterface;
use Anomaly\Streams\Platform\Assignment\Form\AssignmentFormBuilder;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;

class AssignmentsController extends AdminController
{
    /**
     * Display an index of existing entries.
     */
    public function index(AssignmentTableBuilder $table, StreamRepositoryInterface $streams, $stream)
    {
        $stream = $streams->find($stream);
        $table->setStream($stream);
        return $table->render();
    }

    /**
     *  Displays a modal of fields
     */
    public function choose(FieldRepositoryInterface $fields, StreamRepositoryInterface $streams, $stream)
    {
        $stream = $streams->find($stream);
        $fields = $fields
            ->findAllByNamespace('locations')
            ->notAssignedTo($stream)
            ->unlocked();

        return $this->view->make('module::admin/assignments/choose', compact('fields', 'type'));
    }

    /**
     * Creat a new assignment
     */
    public function create(AssignmentFormBuilder $builder, FieldRepositoryInterface $fields, StreamRepositoryInterface $streams, $stream)
    {
        $stream = $streams->find($stream);
        $field = $fields->find($this->request->get('field'));

        $builder->setField($field);
        $builder->setStream($stream);
        return $builder->render();
    }

    /**
     * Edit an existing assignment.
     *
     * @param  AssignmentFormBuilder     $builder
     * @param  StreamRepositoryInterface $streams
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(AssignmentFormBuilder $builder, StreamRepositoryInterface $streams)
    {
        /* @var StreamInterface $stream */
        if (!$stream = $streams->find($this->route->parameter('stream'))) {
            $stream = $streams->findBySlugAndNamespace($this->route->parameter('stream'), $this->getNamespace());
        }

        return $builder
            ->setStream($stream)
            ->render($this->route->parameter('id'));
    }
}
