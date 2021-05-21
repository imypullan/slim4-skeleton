<?php
namespace App\Controllers;
use App\Models\TasksModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
/**
 * Class DeleteTaskController
 * @package App\Controllers
 * @return Response with header
 */
class DeleteTaskController {
    protected TasksModel $model;
    /**
     * DeleteTaskController constructor.
     * @param TasksModel $model
     */
    public function __construct(TasksModel $model) {
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
        $deletedTask = $data['id'];
        $previousPage = $request->getHeader('HTTP_REFERER');
        $this->model->deleteTask($deletedTask);
        return $response->withHeader('Location', $previousPage);
    }
}