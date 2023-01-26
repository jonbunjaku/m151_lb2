<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Entity;

class GradeController extends BaseController
{
    private $entityManager;
    public function __constructor(EntityManager $entityManager) {
        $this->em = $entityManager;
    }
    /**
     * "/grade" Endpoint - Get list of grades
     */
    public function GET()
    {
    }
    /**
     * "/grade/{gradeId}" Endpoint - Deletes Grade by Id
     */
    public function DELETE()
    {
        $strErrorDesc = '';
            try {
                $gradeModel = new GradeModel();
                $response = json_encode($gradeModel->deleteGrade($this->getPathParam()));
            } catch (Error $e) {
                $strErrorDesc = $e->getMessage().'Something went wrong! Please contact support.';
                $strErrorHeader = 'HTTP/1.1 500 Internal Server Error';
            }

        // send output
        if (!$strErrorDesc) {
            $this->sendOutput(
                $response,
                array('Content-Type: application/json', 'HTTP/1.1 200 OK')
            );
        } else {
            $this->sendOutput(json_encode(array('error' => $strErrorDesc)),
                array('Content-Type: application/json', $strErrorHeader)
            );
        }
    }
    public function POST()
    {
        $strErrorDesc = '';
        try {
            $gradeModel = new GradeModel();
            $response = json_encode($gradeModel->deleteGrade($this->getPathParam()));
        } catch (Error $e) {
            $strErrorDesc = $e->getMessage().'Something went wrong! Please contact support.';
            $strErrorHeader = 'HTTP/1.1 500 Internal Server Error';
        }

        // send output
        if (!$strErrorDesc) {
            $this->sendOutput(
                $response,
                array('Content-Type: application/json', 'HTTP/1.1 200 OK')
            );
        } else {
            $this->sendOutput(json_encode(array('error' => $strErrorDesc)),
                array('Content-Type: application/json', $strErrorHeader)
            );
        }
    }
}