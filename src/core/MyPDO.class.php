<?php
class MyPDO
{
    protected $PDO;
    protected $dsn;
    protected $username;
    protected $passwd;
    protected $driverOption;

    public function __construct($dsn, $username = NULL, $passwd = NULL, $driverOption = NULL)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->passwd = $passwd;
        $this->driverOption = $driverOption;
    }
    public function connectDatabase()
    {
        try {
            $this->PDO =  new PDO(
                $this->dsn,
                $this->username,
                $this->passwd,
                $this->driverOption
            );
        } catch (PDOException $e) {
            //throw $th;
            print "ERROR!: " . $e . "<br/>";
        }
    }
    public function __destruct()
    {
        $this->PDO = null;
    }
}
