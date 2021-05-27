<?php
namespace App\Factories;
use App\Controllers\HomePageController;
use Psr\Container\ContainerInterface;
/**
 * Class HomePageControllerFactory
 * @package App\Factories
 * @return HomePageController
 */
class HomePageControllerFactory {
    /**
     * @param ContainerInterface $container
     * @return HomePageController
     */
    public function __invoke(ContainerInterface $container): HomePageController
    {
        $model = $container->get('TasksModel');
        $view = $container->get('renderer');
        return new HomePageController($model, $view);
    }
}