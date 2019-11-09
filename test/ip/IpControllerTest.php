<?php

namespace Jiad\Ip;

// namespace Anax\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the SampleController.
 */
class IpControllerTest extends TestCase
{
    /**
     * Test the route "/ (Get)".
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
        $controller = new IpController();
        $controller->setDI($di);
        $controller->initialize();

        $di->get("session")->set("ip", null);
        $di->get("session")->set("result", null);
        $di->get("session")->set("hostname", null);

        // Do the test and assert it
        $res = $controller->indexAction();
        $this->assertIsObject($res);
        $this->assertInstanceOf("Anax\Response\Response", $res);
        $this->assertInstanceOf("Anax\Response\ResponseUtility", $res);

        $body = $res->getBody();
        $this->assertContains("Validate an IP address", $body);
    }


    /**
     * Test the route "validate (Get)".
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
        $controller = new IpController();
        $controller->setDI($di);
        $controller->initialize();

        $di->get("request")->setPost("ip", "8.8.8.8");
        $di->get("request")->setPost("doValidate", "Validate");
        $di->get("session")->set("ip", null);
        $di->get("session")->set("result", null);
        $di->get("session")->set("hostname", null);

        // Do the test and assert it
        $res = $controller->indexActionPost();
        $this->assertIsObject($res);
        $this->assertInstanceOf("Anax\Response\Response", $res);
        $this->assertInstanceOf("Anax\Response\ResponseUtility", $res);

        $body = $res->getBody();
        $this->assertContains("Validate an IP address", $body);
    }
}
