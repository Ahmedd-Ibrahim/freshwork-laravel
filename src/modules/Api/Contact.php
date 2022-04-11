<?php
namespace AhmeddIbrahim\Freshwork\modules\Api;

use AhmeddIbrahim\Freshwork\modules\Client;
use AhmeddIbrahim\Freshwork\modules\Traits\HasCrud;

class Contact extends Client
{
    use HasCrud;

    private $resource = 'contacts';
}
