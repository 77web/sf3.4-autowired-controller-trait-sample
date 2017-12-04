<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Task
 *
 * @ORM\Entity
 * @package App\Entity
 */
class Task
{
    /**
     * @var integer
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    public $title;
}
