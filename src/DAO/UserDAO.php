<?php

namespace App\DAO;

use config\Parameter;
use App\model\User;

class UserDAO extends DAO
{
    private function buildObject($row)
    {
        $user = new User();
        $user->setId($row['id']);
        $user->setPseudo($row['pseudo']);
        $user->setEmail($row['email']);
        $user->setCreatedAt($row['createdAt']);
        $user->setRole($row['name']);
        return $user;
    }
    public function getUsers()
    {
        $sql = 'SELECT user.id,user.email, user.pseudo, user.createdAt, role.name FROM user INNER JOIN role ON user.role_id = role.id ORDER BY user.id DESC';
        $result = $this->createQuery($sql);
        $users = [];
        foreach ($result as $row){
            $userId = $row['id'];
            $users[$userId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $users;
    }
    public function register(Parameter $post)
    {
        
        $this->checkUser($post);
        $this->checkEmail($post);
        $sql = 'INSERT INTO user (email, pseudo, password, createdAt, role_id) VALUES (?, ?, ?, NOW(), ?)';
        $this->createQuery($sql, [$post->get('email'), $post->get('pseudo'), password_hash($post->get('password'), PASSWORD_BCRYPT), 2]);
    }
    public function checkUser(Parameter $post)
    {
        $sql = 'SELECT COUNT(pseudo) FROM user WHERE pseudo = ?';
        $result = $this->createQuery($sql, [$post->get('pseudo')]);
        $isUnique = $result->fetchColumn();
        if($isUnique) {
            return 'Le pseudo existe déjàs !';
        }
    }
    public function checkEmail(Parameter $post)
    {
        $sql = 'SELECT COUNT(email) FROM user WHERE email = ?';
        $result = $this->createQuery($sql, [$post->get('email')]);
        $isUnique = $result->fetchColumn();
        if ($isUnique) {
            return 'L\'adresse e-mail existe déjà';
        }
    }
    public function login(Parameter $post)
    {
        $sql = 'SELECT user.id, user.email, user.pseudo, user.role_id, user.password, role.name FROM user INNER JOIN role ON role.id = user.role_id WHERE email = ?';
        $data = $this->createQuery($sql, [$post->get('email')]);
        $result = $data->fetch();
        return $result;
    }
    public function updatePassword(Parameter $post, $pseudo) 
    {
        $sql = 'UPDATE user SET password = ? WHERE pseudo = ?';
        $this->createQuery($sql, [password_hash($post->get('password'), PASSWORD_BCRYPT), $pseudo]);
    }
    public function deleteAccount($pseudo)
    {
        $sql = 'DELETE FROM user WHERE pseudo = ?';
        $this->createQuery($sql, [$pseudo]);
    }
    public function deleteUser($userId)
    {
        $sql = 'DELETE FROM user WHERE id = ?';
        $this->createQuery($sql, [$userId]);
    }
}
