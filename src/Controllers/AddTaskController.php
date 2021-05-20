<?php
namespace App\Controllers;
use App\Models\TasksModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
class AddTaskController {
    protected $model;
    public function __construct (TasksModel $model)
    {
        $this->model = $model;
    }
    public function __invoke(Request $request, Response $response, $args)
    {
        $data = $request->getParsedBody();
        $newTask = $data['task_name'];
        $this->model->addTask($newTask);
        return $response->withHeader('Location', '/');
    }
}