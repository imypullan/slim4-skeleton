<?php
namespace App\Controllers;
use App\Models\TasksModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
class EditTaskController
{
    protected $model;
    public function __construct($model)
    {
        $this->model = $model;
    }
    public function __invoke(Request $request, Response $response, $args)
    {
        $taskForEdit = $request->getParsedBody();
        $this->model->updateDB($taskForEdit);
        if($taskForEdit['completed'] == 1) {
            return $response->withHeader('Location', '/done');
        }
            return $response->withHeader('Location', '/');
    }
}