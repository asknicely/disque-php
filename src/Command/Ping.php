<?php

namespace Disque\Command;

use Disque\Command\Response\StringResponse;

class Ping extends BaseCommand implements CommandInterface
{
    /**
     * Tells the argument types for this command
     *
     * @var int
     */
    protected $argumentsType = self::ARGUMENTS_TYPE_EMPTY;

    /**
     * Tells which class handles the response
     *
     * @var int
     */
    protected $responseHandler = StringResponse::class;

    /**
     * Get command
     *
     * @return string Command
     */
    public function getCommand()
    {
        return 'PING';
    }
}
