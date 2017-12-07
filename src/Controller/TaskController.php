<?php


namespace App\Controller;

use App\Entity\Task;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class TaskController
{
    use ControllerTrait;

    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/task/{id}", name="task_show")
     * @param int $id
     * @return Response
     */
    public function showAction($id)
    {
        $task = $this->em->find(Task::class, $id);
        $url = $this->generateUrl('task_show', ['id' => $id]);

        return new Response('task: '.$task->title.'(url: '.$url.')');
    }
}
