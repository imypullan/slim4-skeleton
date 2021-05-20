<?php
namespace App\Controllers;
use App\Models\TasksModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
class MarkAsCompletedController {
    protected $model;
    protected $view;
    public function __construct(TasksModel $model)
    {
        $this->model = $model;

    }
    public function __invoke(Request $request, Response $response, $args)
    {
        $data = $request->getQueryParams();
        $completedTask = $data['id'];
        $this->model->markTaskAsCompleted($completedTask);
        return $response->withHeader('Location', '/');
    }
}
