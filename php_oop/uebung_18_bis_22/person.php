<?php
class Person
{
    protected string $vorname = "";
    protected string $nachname = "";
    protected int $geburtTimestamp = 0;

    public function getVorname(): string
    {
        return $this->vorname;
    }

    public function setVorname(string $vorname): Person
    {
        $this->vorname = $vorname;

        return $this;
    }


    public function getNachname(): string
    {
        return $this->nachname;
    }

    public function setNachname(string $nachname): Person
    {
        $this->nachname = $nachname;

        return $this;
    }

    public function getGeburtTimestamp(): int
    {
        return $this->geburtTimestamp;
    }

    public function setGeburtTimestamp(int $geburtTimestamp): Person
    {
        $this->geburtTimestamp = $geburtTimestamp;

        return $this;
    }

    // Virtuelles Attribut Name
    public function getName(): string
    {
        $name = "{$this->vorname} {$this->nachname}";

        return $name;
    }

    public function setName(string $name): Person
    {
        $nameArray = explode(" ", $name);

        $this->setVorname($nameArray[0]);
        $this->setNachname($nameArray[1]);

        return $this;
    }

    // Virtuelles Attribut Geburtstag
    public function getGeburtstag(): string
    {
        $geburtstag = date("d.m", $this->geburtTimestamp);

        return $geburtstag;
    }

    public function setGeburtstag(string $geburtstag): Person
    {
        $geburtTimestamp = strtotime($geburtstag);
        $this->setGeburtTimestamp($geburtTimestamp);

        return $this;
    }
}
