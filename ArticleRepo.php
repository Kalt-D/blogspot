<?php
class ArticleRepo extends Article
{
    protected $_db;

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function list($titre)
    {
        $articles = [];
        $q = $this->_db->prepare('SELECT titre, contenu FROM articles WHERE titre<>:titre ORDER BY titre');
        $q->execute([':titre' => $titre]);

        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $persos[] = new Article($donnees);
        }
        return $articles;
    }
}
