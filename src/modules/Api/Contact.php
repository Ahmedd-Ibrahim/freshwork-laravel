<?php
namespace Freshwork\modules\Api;

use Freshwork\modules\Client;
use Freshwork\modules\Traits\HasCrud;

class Contact extends Client
{
    use HasCrud;

    private $resource = 'contacts';
}
