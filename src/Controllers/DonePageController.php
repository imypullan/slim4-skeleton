<?php
namespace App\Controllers;
use App\Models\TasksModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
/**
 * Class DonePageController
 * @package App\Controllers
 * @return Response with a view
 */
class DonePageController {
    protected TasksModel $model;
    protected $view;
    /**
     * DonePageController constructor.
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
        $tasks = $this->model->getCompletedTasks();
        return $this->view->render($response, 'done.php', ['tasks' => $tasks]);
    }
}