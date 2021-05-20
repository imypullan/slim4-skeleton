<?php
namespace App\Controllers;
use App\Models\TasksModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
class DeleteTaskController {
    protected $model;
    public function __construct($model) {
        $this->model = $model;
    }
    public function __invoke(Request $request, Response $response, $args)
    {
        $data = $request->getQueryParams();
        $deletedTask = $data['id'];
        $this->model->markTaskAsCompleted($deletedTask);
        return $response->withHeader('Location', '/done');
    }
}