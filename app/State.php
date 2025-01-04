<?php

namespace App;

enum State:string
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Pending = 'pending';
    case Deleted = 'deleted';
}
