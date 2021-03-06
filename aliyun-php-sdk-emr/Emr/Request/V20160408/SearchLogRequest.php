<?php

namespace Emr\Request\V20160408;

/**
 * Request of SearchLog
 *
 * @method string getResourceOwnerId()
 * @method string getLogstoreName()
 * @method string getFromTimestamp()
 * @method string getOffset()
 * @method string getLine()
 * @method string getClusterId()
 * @method string getReverse()
 * @method string getHostInnerIp()
 * @method string getHostName()
 * @method string getToTimestamp()
 * @method string getSlsQueryString()
 */
class SearchLogRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Emr',
            '2016-04-08',
            'SearchLog',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $logstoreName
     *
     * @return $this
     */
    public function setLogstoreName($logstoreName)
    {
        $this->requestParameters['LogstoreName'] = $logstoreName;
        $this->queryParameters['LogstoreName'] = $logstoreName;

        return $this;
    }

    /**
     * @param string $fromTimestamp
     *
     * @return $this
     */
    public function setFromTimestamp($fromTimestamp)
    {
        $this->requestParameters['FromTimestamp'] = $fromTimestamp;
        $this->queryParameters['FromTimestamp'] = $fromTimestamp;

        return $this;
    }

    /**
     * @param string $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->requestParameters['Offset'] = $offset;
        $this->queryParameters['Offset'] = $offset;

        return $this;
    }

    /**
     * @param string $line
     *
     * @return $this
     */
    public function setLine($line)
    {
        $this->requestParameters['Line'] = $line;
        $this->queryParameters['Line'] = $line;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $reverse
     *
     * @return $this
     */
    public function setReverse($reverse)
    {
        $this->requestParameters['Reverse'] = $reverse;
        $this->queryParameters['Reverse'] = $reverse;

        return $this;
    }

    /**
     * @param string $hostInnerIp
     *
     * @return $this
     */
    public function setHostInnerIp($hostInnerIp)
    {
        $this->requestParameters['HostInnerIp'] = $hostInnerIp;
        $this->queryParameters['HostInnerIp'] = $hostInnerIp;

        return $this;
    }

    /**
     * @param string $hostName
     *
     * @return $this
     */
    public function setHostName($hostName)
    {
        $this->requestParameters['HostName'] = $hostName;
        $this->queryParameters['HostName'] = $hostName;

        return $this;
    }

    /**
     * @param string $toTimestamp
     *
     * @return $this
     */
    public function setToTimestamp($toTimestamp)
    {
        $this->requestParameters['ToTimestamp'] = $toTimestamp;
        $this->queryParameters['ToTimestamp'] = $toTimestamp;

        return $this;
    }

    /**
     * @param string $slsQueryString
     *
     * @return $this
     */
    public function setSlsQueryString($slsQueryString)
    {
        $this->requestParameters['SlsQueryString'] = $slsQueryString;
        $this->queryParameters['SlsQueryString'] = $slsQueryString;

        return $this;
    }
}
