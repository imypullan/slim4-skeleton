<?php
namespace App\Factories;
use App\Controllers\EditPageController;
use Psr\Container\ContainerInterface;
/**
 * Class EditPageControllerFactory
 * @package App\Factories
 * @return EditPageController
 */
class EditPageControllerFactory {
    /**
     * @param ContainerInterface $container
     * @return EditPageController
     */
    public function __invoke(ContainerInterface $container): EditPageController
    {
        $model = $container->get('TasksModel');
        $view = $container->get('renderer');
        return new EditPageController($model, $view);
    }
}