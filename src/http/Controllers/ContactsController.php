<?php

namespace Http\Controllers;

use Http\Requests\StoreContactRequest;
use Modules\Contact\StoreContactRequestCommand;
use Modules\Contact\StoreContactRequestCommandContext;

class ContactsController
{
    public function store(StoreContactRequest $request)
    {   
        $commandContext = new StoreContactRequestCommandContext();
        $command = $commandContext->create();
        $command->execute($request->to_array());
        echo 'Thank you';
    }
}