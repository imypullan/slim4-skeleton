<?php
namespace App\Controllers;
use App\Models\TasksModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
/**
 * Class HomePageController
 * @package App\Controllers
 * @return Response with view
 */
class HomePageController {
    protected TasksModel $model;
    protected $view;
    /**
     * HomePageController constructor.
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
        $tasks = $this->model->getUncompletedTasks();
        return $this->view->render($response, 'index.php', ['tasks' => $tasks]);
    }
}