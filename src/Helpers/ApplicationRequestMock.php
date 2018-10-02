<?php
/**
 * @md
 * class ApplicationRequestMock extends \Nette\Application\Request
 *     used for tests
 */

namespace Xklid101\H40\PhpTestsAssets\Helpers;

class ApplicationRequestMock extends \Nette\Application\Request
{

    public function __construct($name = NULL, $method = NULL, array $params = [], array $post = [], array $files = [], array $flags = [])
    {
        $name = $name ?: 'Foo'; //It's going to be terminated anyway (see: \PresenterMock::afterRender)
        parent::__construct($name, $method, $params, $post, $files, $flags);
    }

}
