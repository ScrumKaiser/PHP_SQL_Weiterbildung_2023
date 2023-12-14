<?php
class Person
{
    ///
    /// Attribute
    ///
    protected string $name = "N/A";
    protected string $email = "N/A";
    protected Adresse $adresse;

    ///
    /// getter setter
    ///
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Person
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): Person
    {
        $this->email = $email;

        return $this;
    }

    public function getAdresse(): Adresse
    {
        return $this->adresse;
    }

    public function setAdresse(Adresse $adresse): Person
    {
        $this->adresse = $adresse;

        return $this;
    }

    ///
    /// Adresse getter
    ///
    public function getStrasse(): string
    {
        return $this->getAdresse()->getStrasse();
    }

    public function setStrasse(string $strasse): Person
    {
        $this->getAdresse()->setStrasse($strasse);

        return $this;
    }

    public function getHausnummer(): string
    {
        return $this->getAdresse()->getHausnummer();
    }

    public function setHausnummer(string $hausnummer): Person
    {
        $this->getAdresse()->setHausnummer($hausnummer);

        return $this;
    }

    public function getPlz(): string
    {
        return $this->getAdresse()->getPlz();
    }

    public function setPlz(string $plz): Person
    {
        $this->getAdresse()->setPlz($plz);

        return $this;
    }

    public function getOrt(): string
    {
        return $this->getAdresse()->getOrt();
    }

    public function setOrt(string $ort): Person
    {
        $this->getAdresse()->setOrt($ort);

        return $this;
    }

    /**
     * Konstruktor
     */
    public function __construct(string $name, string $email, Adresse $adresse = new Adresse())
    {
        $this->setName($name);
        $this->setEmail($email);
        $this->setAdresse($adresse);
    }
}
