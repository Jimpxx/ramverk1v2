<?php

namespace Jiad\Json;

// namespace Anax\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the SampleController.
 */
class JsonControllerTest extends TestCase
{
    /**
     * Test the route "validate (Get)".
     */
    public function testIndexActionGet()
    {
        global $di;

        // Setup di
        $di = new DIFactoryConfig();
        $di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // Use a different cache dir for unit test
        $di->get("cache")->setPath(ANAX_INSTALL_PATH . "/test/cache");

        // Test the controller action

        // Setup the controller
        $controller = new JsonController();
        $controller->setDI($di);
        $controller->initialize();

        // Do the test and assert it
        $res = $controller->indexAction();
        $this->assertIsObject($res);
        $this->assertInstanceOf("Anax\Response\Response", $res);
        $this->assertInstanceOf("Anax\Response\ResponseUtility", $res);

        $body = $res->getBody();
        $this->assertContains("The API", $body);
    }


        /**
     * Test the route "/ (Post)".
     */
    public function testIndexActionPost()
    {
        global $di;

        // Setup di
        $di = new DIFactoryConfig();
        $di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // Use a different cache dir for unit test
        $di->get("cache")->setPath(ANAX_INSTALL_PATH . "/test/cache");

        // Test the controller action

        // Setup the controller
        $controller = new JsonController();
        $controller->setDI($di);
        $controller->initialize();

        $di->get("request")->setPost("ip", "4.4.4.4");

        // Do the test and assert it
        $res = $controller->indexActionPost();
        $this->assertIsArray($res);
    }
}
