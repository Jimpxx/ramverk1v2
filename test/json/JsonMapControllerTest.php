<?php

namespace Jiad\Json;

// namespace Anax\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test the SampleController.
 */
class JsonMapControllerTest extends TestCase
{
    // Create the di container.
    protected $di;



    /**
     * Prepare before each test.
     */
    protected function setUp()
    {
        global $di;

        // Setup di
        $di = new DIFactoryConfig();
        $di->loadServices(ANAX_INSTALL_PATH . "/config/di");

        // Use a different cache dir for unit test
        $di->get("cache")->setPath(ANAX_INSTALL_PATH . "/test/cache");

        $this->di = $di;
    }

        /**
     * Test the route "index".
     */
    public function testIndexAction()
    {
        // Setup the controller
        $controller = new JsonMapController();
        $controller->setDI($this->di);
        $controller->initialize();

        $this->di->get("request")->setServer("REMOTE_ADDR", "127.0.0.1");

        // Test the controller action
        $res = $controller->indexAction();
        $body = $res->getBody();
        $this->assertStringContainsString("GeoTag IP address", $body);
    }

        /**
     * Test the route "index" (POST).
     */
    public function testIndexActionPost()
    {
        // Setup the controller
        $controller = new JsonMapController();
        $controller->setDI($this->di);
        $controller->initialize();

        $this->di->get("request")->setPost("ip", "8.8.8.8");

        // Test the controller action
        $res = $controller->indexActionPost();
        // $body = $res->getBody();
        $this->assertIsArray($res);
    }
}
