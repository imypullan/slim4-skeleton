<?php
namespace App\Controllers;
use App\Models\TasksModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
/**
 * Class EditTaskController
 * @package App\Controllers
 * @return Response with header
 */
class EditTaskController
{
    protected TasksModel $model;
    public function __construct(TasksModel $model)
    {
        $this->model = $model;
    }
    public function __invoke(Request $request, Response $response, $args): Response
    {
        $taskForEdit = $request->getParsedBody();
        if ($taskForEdit != "") {
            $taskForEdit = FILTER_SANITIZE_STRING($taskForEdit);
            $this->model->updateDB($taskForEdit);
        }
        if($taskForEdit['completed'] == 1) {
            return $response->withHeader('Location', '/done');
        }
            return $response->withHeader('Location', '/');
    }
}