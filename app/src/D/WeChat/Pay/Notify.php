<?php
/**
 * User: dongww
 * Date: 14-5-22
 * Time: 上午9:47
 */

namespace D\WeChat\Pay;

use Symfony\Component\HttpFoundation\Request;

class Notify
{
    protected $query;
    protected $request;

    public function __construct($query, $request)
    {
        $this->query   = $query;
        $this->request = $request;
    }

    static public function createFromRequest(Request $request)
    {
        return new static(
            $request->query->all(),
            $GLOBALS["HTTP_RAW_POST_DATA"]
        );
    }

    /**
     * @return string
     */
    public function getRequest()
    {
        return $this->request;
    }

    public function getRequestXml()
    {
        return simplexml_load_string($this->request);
    }

    /**
     * @return Array
     */
    public function getQuery()
    {
        return $this->query;
    }
}
 