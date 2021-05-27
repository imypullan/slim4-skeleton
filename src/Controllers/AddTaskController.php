<?php
namespace App\Controllers;
use App\Models\TasksModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

/**
 * Class AddTaskController
 * @package App\Controllers
 * @return Response with header
 */
class AddTaskController {
    protected TasksModel $model;
    /**
     * AddTaskController constructor.
     * @param TasksModel $model
     */
    public function __construct (TasksModel $model)
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
        $data = $request->getParsedBody();
        if (isset($data['task_name'])) {
            $newTask = $data['task_name'];
            $newTask = filter_var($newTask, FILTER_SANITIZE_STRING);
            $this->model->addTask($newTask);
        }
        return $response->withHeader('Location', '/');
    }
}