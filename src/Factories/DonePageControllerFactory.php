<?php
namespace App\Factories;
use App\Controllers\DonePageController;
use Psr\Container\ContainerInterface;
/**
 * Class DonePageControllerFactory
 * @package App\Factories
 * @return DonePageController
 */
class DonePageControllerFactory {
    /**
     * @param ContainerInterface $container
     * @return DonePageController
     */
    public function __invoke(ContainerInterface $container): DonePageController
    {
        $model = $container->get('TasksModel');
        $view = $container->get('renderer');
        return new DonePageController($model, $view);
    }
}