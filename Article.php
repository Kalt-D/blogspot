<?php

// Ici votre class Article

class Article
{
    protected $_titre,
        $_contenu,
        $_auteur,
        $_date;

    // SETTERS //

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }


    // GETTERS //

    public function titre()
    {
        return $this->_titre;
    }
    public function contenu()
    {
        return $this->_contenu;
    }
    public function auteur()
    {
        return $this->_auteur;
    }
    public function date()
    {
        return $this->_date;
    }
    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }
    public function setContenu($contenu)
    {
        $this->_contenu = $contenu;
    }
    public function setAuteur($auteur)
    {
        $this->_auteur = $auteur;
    }
    public function setDate($date)
    {
        $this->_date = $date;
    }
}
