<?php


namespace CSD\Marketo;

/**
 * Description of RawResponseParser
 *
 * @author zpearl
 */
class RawResponseParser implements \Guzzle\Service\Command\DefaultResponseParser
{
    protected function handleParsing(CommandInterface $command, Response $response, $contentType)
    {
        $result = $response;
        return $result->getBody();
    }
}