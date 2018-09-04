<?php

namespace Mindgeek\Model;

use Mindgeek\Entity\Student;
use Mindgeek\Error\StudentNotFoundError;

class StudentModel
{
    public function add()
    {
        //TODO
    }

    public function get(int $id) : Student
    {
        $student = null;

        switch ($id)
        {
            case 1:
                $student = new Student($id, 'Jocastra Silva', [7, 4.5, 8], new \Mindgeek\Model\SchoolBoardCsm());
                break;

            case 2:
                $student = new Student($id, 'Lutenilda Santos', [7, 4.5, 8], new \Mindgeek\Model\SchoolBoardCsmb());
                break;

            case 3:
                $student = new Student($id, 'Riomelda Lira', [7, 8], new \Mindgeek\Model\SchoolBoardCsmb());
                break;

            default:
                throw new StudentNotFoundError();
        }

        return $student;
    }
}