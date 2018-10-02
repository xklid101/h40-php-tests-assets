<?php
/**
 * @md
 * class HttpRequestMock extends \Nette\Http\Request
 *     used for tests
 */

namespace Xklid101\H40\PhpTestsAssets\Helpers;

use Nette\Http;

class HttpRequestMock extends \Nette\Http\Request
{

    public function __construct(
        Http\UrlScript $url,
        $query = NULL,
        $post = [],
        $files = [],
        $cookies = [],
        $headers = [],
        $method = null,
        $remoteAddress = '127.0.0.1',
        $remoteHost = '127.0.0.1',
        $rawBodyCallback = NULL
    ) {
        parent::__construct(
            $url,
            $query,
            $post,
            $files,
            $cookies,
            $headers,
            $method,
            $remoteAddress,
            $remoteHost,
            $rawBodyCallback
        );
    }

}
