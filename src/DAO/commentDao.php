<?php
namespace App\DAO;
use config\Parameter;
use App\model\Comment;

class CommentDAO extends DAO
{

    private function buildObject($row)
    {
        $comment = new Comment();
        $comment->setId($row['id']);
        $comment->setPseudo($row['pseudo']);
        $comment->setContent($row['content']);
        $comment->setCreatedAt($row['createdAt']);
        $comment->setFlag($row['flag']);
        $comment->setStatus($row['status']);
        return $comment;
    }

    public function getCommentsFromArticle($articleId)
    {
        $sql = 'SELECT id, pseudo, content, createdAt, flag, status FROM comment WHERE article_id = ? ORDER BY createdAt DESC';
        $result = $this->createQuery($sql, [$articleId]);
        $allComments = [];
        foreach($result as $row){
            $commentId = $row['id'];
            $allComments[$commentId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $allComments;
    }
    public function addComment(Parameter $post, $articleId)
    {
        $sql = 'INSERT INTO comment (pseudo, content, createdAt, article_id, status) VALUES (?, ?, NOW(), ?, 2)';
        $this->createQuery($sql, [$post->get('pseudo'), $post->get('content'), $articleId]);
    }
    public function flagComment($commentId)
    {
        $sql = 'UPDATE comment SET flag = ? WHERE id = ?';
        $this->createQuery($sql, [1, $commentId]);
    }
    public function unflagComment($commentId)
    {
        $sql = 'UPDATE comment SET flag = ? WHERE id = ?';
        $this->createQuery($sql, [0, $commentId]);
    }
    public function deleteComment($commentId)
    {
        $sql = 'DELETE FROM comment WHERE id = ?';
        $this->createQuery($sql, [$commentId]);
    }
    public function getFlagComments()
    {
        $sql = 'SELECT id, pseudo, content, createdAt, flag, status FROM comment WHERE flag = ? ORDER BY createdAt DESC';
        $result = $this->createQuery($sql, [1]);
        $comments = [];
        foreach ($result as $row) {
            $commentId = $row['id'];
            $comments[$commentId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $comments;
    }
    public function getStatusComments()
    {
        $sql = 'SELECT id, pseudo, content, createdAt, flag, status FROM comment WHERE status = ? ORDER BY createdAt DESC';
        $result = $this->createQuery($sql, [2]);
        $statusComments = [];
        foreach ($result as $row) {
            $commentId = $row['id'];
            $statusComments[$commentId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $statusComments;
    }
}
