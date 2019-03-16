<?php

namespace Modules\Contact;

interface StoreContactRequestCommand
{
    function execute($data);
}