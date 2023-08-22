<?php
namespace src\controllers;

use core\Controller;
use src\models\User;

class UsersController extends Controller
{
    public function create()
    {
        $this->render('create');
    }

    public function createUserAction()
    {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if ($name && $email) {
            $data = User::select()->where('email', $email)->execute();
            if (count($data) === 0) {
                User::insert([
                    'name'=>$name,
                    'email'=>$email
                ])->execute();
                $this->redirect('/');
            }
        }
        $this->redirect('/create');
    }

    public function editUser($id)
    {
        //$user = User::select()->where('id', $id['id'])->one();
        $user = User::select()->find($id['id']);

        $this->render('edit', [
            'user'=>$user
        ]);
    }

    public function editUserAction($args)
    {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if ($name && $email) {
            User::update()->set('name', $name)->set('email', $email)->where('id', $args['id'])->execute();
            $this->redirect('/');
        }
        $this->redirect('/user/'.$args['id'].'/edit');
    }

    public function deleteUser($id)
    {
        User::delete()->where('id', $id['id'])->execute();
        $this->redirect('/');
    }
}