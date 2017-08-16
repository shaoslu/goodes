<?php

namespace Goodses\Elasticsearch\Common\Exceptions\Curl;

use Goodses\Elasticsearch\Common\Exceptions\ElasticsearchException;
use Goodses\Elasticsearch\Common\Exceptions\TransportException;

/**
 * Class OperationTimeoutException
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Common\Exceptions\Curl
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
  */
class OperationTimeoutException extends TransportException implements ElasticsearchException
{
}
