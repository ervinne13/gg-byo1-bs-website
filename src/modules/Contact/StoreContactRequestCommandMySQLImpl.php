<?php

namespace Modules\Contact;

use Modules\Contact\StoreContactRequestCommand;
use PDO;

class StoreContactRequestCommandMySQLImpl implements StoreContactRequestCommand
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function execute($data)
    {
        $connection = $this->get_connection();
                
        $statementString = "INSERT INTO contact_requests (`email`, `name`, `purpose_code`, `message`) VALUES (:email,:name,:purpose,:message)";
        $statement = $connection->prepare($statementString);

        //  throws PDOException
        $statement->execute($data);
    }

    private function get_connection()
    {
        $host = $this->connection['host'];
        $name = $this->connection['name'];
        $dsn = "mysql:host={$host};dbname={$name};charset=UTF8";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        //  throws PDOException
        return new PDO($dsn, $this->connection['username'], $this->connection['password'], $options);
    }
}
