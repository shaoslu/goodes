<?php

namespace Goodses\Elasticsearch\Common\Exceptions\Curl;

use Goodses\Elasticsearch\Common\Exceptions\ElasticsearchException;
use Goodses\Elasticsearch\Common\Exceptions\TransportException;

/**
 * Class CouldNotResolveHostException
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Common\Exceptions\Curl
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
  */
class CouldNotResolveHostException extends TransportException implements ElasticsearchException
{
}
