<?php

namespace LoftDigital\SymfonyRestBundle\Model;

/**
 * HTTP Status
 *
 * @author Lukas Hajdu <lukas@loftdigital.com>
 * @copyright Loft Digital <http://weareloft.com>, 2015
 * @package LoftDigital\SymfonyRestBundle\Model
 */
class HttpStatus
{
    /**
     * Returns status code - response ID mapping
     *
     * @return array
     */
    public function getStatusCodeIdMapping()
    {
        return [
            400 => 'bad_request',
            403 => 'forbidden',
            404 => 'not_found',
            405 => 'not_allowed',
            409 => 'conflict',
            422 => 'invalid_params',
        ];
    }

    /**
     * Returns response ID for the given status code
     *
     * @param int $statusCode
     *
     * @return string|null
     */
    public function getIdForStatusCode($statusCode)
    {
        if (array_key_exists($statusCode, $this->getStatusCodeIdMapping())) {
            return $this->getStatusCodeIdMapping()[$statusCode];
        }

        return null;
    }
}
