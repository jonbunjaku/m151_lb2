<?php

use Doctrine\ORM\EntityManager;

class UserControllerORM extends BaseController
{
    private $entityManager;
    public function __constructor($entityManager) {
        $this->entityManager = $entityManager;
    }
    /**
     * "/user" Endpoint - Get list of users
     */
    public function GET()
    {
        $strErrorDesc = '';
            try {
                $users = $this->entityManager->find("User", 1, null, null);
/*                $userModel = new UserModel();
                $arrUsers = $userModel->getUsers();
                $responseData = json_encode($arrUsers);*/
            } catch (Error $e) {
                $strErrorDesc = $e->getMessage().'Something went wrong! Please contact support.';
                $strErrorHeader = 'HTTP/1.1 500 Internal Server Error';
            }
 
        // send output
        if (!$strErrorDesc) {
            $this->sendOutput(
                $users,
                array('Content-Type: application/json', 'HTTP/1.1 200 OK')
            );
        } else {
            $this->sendOutput(json_encode(array('error' => $strErrorDesc)), 
                array('Content-Type: application/json', $strErrorHeader)
            );
        }
    }

    /**
     * "/user/{userId}" Endpoint - Delete User by id
     */
    public function DELETE()
    {
        $strErrorDesc = '';
        try {
            $userModel = new UserModel();
            $response = json_encode($userModel->deleteUser($this->getPathParam()));
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
            $response = json_encode($this->entityManager->persist($this->getBody()));
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