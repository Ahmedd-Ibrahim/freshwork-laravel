<?php
namespace Freshwork\modules\Api;

use Freshwork\modules\Client;
use Freshwork\modules\Traits\HasCrud;

class Account extends Client
{
    use HasCrud;

    private $resource = 'sales_accounts';
}
