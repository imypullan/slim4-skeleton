<?php
namespace App\Controllers;
use App\Models\TasksModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
/**
 * Class EditPageController
 * @package App\Controllers
 * @return Response with view
 */
class EditPageController {
    protected TasksModel $model;
    protected $view;
    /**
     * EditPageController constructor.
     * @param TasksModel $model
     * @param $view
     */
    public function __construct(TasksModel $model, $view)
    {
        $this->model = $model;
        $this->view = $view;
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
        $taskForEdit = $data['id'];
        $task = $this->model->getTaskForEdit($taskForEdit);
        return $this->view->render($response, 'edit.php', ['task' => $task]);
    }
}