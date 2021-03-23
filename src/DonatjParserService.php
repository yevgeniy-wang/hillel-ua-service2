<?php


namespace Hillel\UserAgentService2;


use donatj\UserAgent\UserAgentParser;
use Hillel\UserAgentInterface\UserAgentServiceInterface;

class DonatjParserService implements UserAgentServiceInterface
{
    protected $data;
    protected $parser;

    public function __construct()
    {
        $this->parser = new UserAgentParser();
    }

    public function parse($ua)
    {
        $this->data = $this->parser->parse($ua);
    }

    public function browser()
    {
        return $this->data->browser();
    }

    public function os()
    {
        return $this->data->platform();
    }
}
