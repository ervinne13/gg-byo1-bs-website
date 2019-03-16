<?php

namespace Modules\Contact;

use Exception;
use Modules\Contact\StoreContactRequestCommand;
use Modules\Contact\StoreContactRequestCommandMySQLImpl;

class StoreContactRequestCommandContext
{
    public function create(): StoreContactRequestCommand
    {
        $dbImpl = getenv('DB_IMPL');
        switch ($dbImpl) {
            case 'MySQL':
                $connection = [
                    'host'      => getenv('DB_HOST'),
                    'name'      => getenv('DB_NAME'),
                    'username'  => getenv('DB_USERNAME'),
                    'password'  => getenv('DB_PASSWORD'),
                ];
                return new StoreContactRequestCommandMySQLImpl($connection);
            //  Other Implementations here
            default:
                throw new Exception("Unrecognized implementation {$dbImpl}");
        }
    }
}
