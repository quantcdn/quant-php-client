<?php
/**
 * BaseTestCase
 * PHP version 8.1
 *
 * @category Class
 * @package  QuantClient\Test
 */

namespace QuantClient\Test;

use QuantClient\Configuration;
use PHPUnit\Framework\TestCase;

/**
 * BaseTestCase Class
 *
 * Base class for all API tests that provides common configuration
 * for connecting to the mock API container.
 *
 * @category Class
 * @package  QuantClient\Test
 */
abstract class BaseTestCase extends TestCase
{
    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var string
     */
    protected $mockApiHost;

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        parent::setUp();
        
        // Get mock API host from environment or use default
        $this->mockApiHost = getenv('QUANT_MOCK_API_HOST') ?: 'http://localhost:4010';
        
        // Create configuration instance
        $this->config = new Configuration();
        $this->config->setHost($this->mockApiHost);
        
        // Set mock API token if provided
        $apiToken = getenv('QUANT_API_TOKEN') ?: 'test-token';
        $this->config->setAccessToken($apiToken);
    }

    /**
     * Get the configuration instance
     *
     * @return Configuration
     */
    protected function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Assert that a response is successful (2xx status code)
     *
     * @param mixed $response The API response
     * @return void
     */
    protected function assertSuccessResponse($response): void
    {
        $this->assertNotNull($response, 'Response should not be null');
    }
}

