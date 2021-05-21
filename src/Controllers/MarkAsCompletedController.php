<?php
namespace App\Controllers;
use App\Models\TasksModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
/**
 * Class MarkAsCompletedController
 * @package App\Controllers
 * @return Response with header
 */
class MarkAsCompletedController {
    protected TasksModel $model;
    protected $view;
    /**
     * MarkAsCompletedController constructor.
     * @param TasksModel $model
     */
    public function __construct(TasksModel $model)
    {
        $this->model = $model;

    }
    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function __invoke(Request $request, Response $response, $args): Response
    {
        $data = $request->getQueryParams();
        $completedTask = $data['id'];
        $this->model->markTaskAsCompleted($completedTask);
        return $response->withHeader('Location', '/');
    }
}
