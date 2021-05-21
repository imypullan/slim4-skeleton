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
    public function __construct (TasksModel $model)
    {
        $this->model = $model;
    }
    public function __invoke(Request $request, Response $response, $args): Response
    {
        $data = $request->getParsedBody();
        $newTask = $data['task_name'];
        $this->model->addTask($newTask);
        return $response->withHeader('Location', '/');
    }
}