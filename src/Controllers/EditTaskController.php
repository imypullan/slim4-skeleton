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
        $previousPage = $request->getHeader('HTTP_REFERER');
        $taskForEdit = $request->getParsedBody();
        $this->model->updateDB($taskForEdit);
        return $response->withHeader('Location', $previousPage);
    }
}