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
        $newTask = $request->getParsedBody();
        $this->model->addTask($newTask);
        return $response->withHeader('Location', '/');
    }
}

//// add todo controller
//public function __invoke(Request $request, Response $response, $args)
//{
//    // Get the data from form out of the $request
//    // Take the data and give it to the addTask method on the model
//    // Respond with a redirect (not a view) that sends the user back home
//    $addNew = $this->model->addTask();
//    return $this->view->render($response, 'index.php', ['add New' => $addNew]);
//}