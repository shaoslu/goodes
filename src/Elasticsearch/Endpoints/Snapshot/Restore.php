<?php

namespace Goodses\Elasticsearch\Endpoints\Snapshot;

use Goodses\Elasticsearch\Endpoints\AbstractEndpoint;
use Goodses\Elasticsearch\Common\Exceptions;

/**
 * Class Restore
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Snapshot
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Restore extends AbstractEndpoint
{
    // A repository name
    private $repository;

    // A snapshot name
    private $snapshot;

    /**
     * @param array $body
     *
     * @throws \Elasticsearch\Common\Exceptions\InvalidArgumentException
     * @return $this
     */
    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }

        $this->body = $body;

        return $this;
    }

    /**
     * @param $repository
     *
     * @return $this
     */
    public function setRepository($repository)
    {
        if (isset($repository) !== true) {
            return $this;
        }

        $this->repository = $repository;

        return $this;
    }

    /**
     * @param $snapshot
     *
     * @return $this
     */
    public function setSnapshot($snapshot)
    {
        if (isset($snapshot) !== true) {
            return $this;
        }

        $this->snapshot = $snapshot;

        return $this;
    }

    /**
     * @throws \Elasticsearch\Common\Exceptions\RuntimeException
     * @return string
     */
    public function getURI()
    {
        if (isset($this->repository) !== true) {
            throw new Exceptions\RuntimeException(
                'repository is required for Restore'
            );
        }
        if (isset($this->snapshot) !== true) {
            throw new Exceptions\RuntimeException(
                'snapshot is required for Restore'
            );
        }
        $repository = $this->repository;
        $snapshot = $this->snapshot;
        $uri   = "/_snapshot/$repository/$snapshot/_restore";

        if (isset($repository) === true && isset($snapshot) === true) {
            $uri = "/_snapshot/$repository/$snapshot/_restore";
        }

        return $uri;
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'master_timeout',
            'wait_for_completion',
        );
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'POST';
    }
}
