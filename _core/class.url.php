<?php
/**
 * class Url
 */

/**
 * class Url
 */
class Url
{
    /**
     * segment - segments for url
     *
     * @return array
     */
    public static function segment()
    {
        preg_match_all('/\/(?<segment>\w+)/', $_SERVER['REQUEST_URI'], $matches);
        return $matches['segment'];
    }

    /**
     * host - host
     *
     * @return string
     */
    public static function host()
    {
        return $_SERVER['HTTP_HOST'];
    }

    /**
     * scheme - scheme
     *
     * @return string
     */
    public static function scheme()
    {
        return (80 === $_SERVER['SERVER_PORT'] ? 'http' : 'https');
    }

    /**
     * path - url path
     *
     * @return string
     */
    public static function path()
    {
        return implode('/', self::segment());
    }

    /**
     * querystring - query string
     *
     * @return string
     */
    public static function queryString()
    {
        return $_SERVER['QUERY_STRING'];
    }

    /**
     * uriWithoutQuery - get uri without query
     *
     * @return string
     */
    public static function uriWithoutQuery()
    {
        return sprintf('%s://%s/%s', self::scheme(), self::host(), self::path());
    }

    /**
     * bindAbsoulte - bind an absolute url
     *
     * @param string $val - val that is following to host name
     *
     * @return string
     */
    public static function bindAbsoulte($val)
    {
        return sprintf('%s://%s/%s', self::scheme(), self::host(), $val);
    }

    /**
     * parse - parse url
     *
     * @param string $url - url
     *
     * @return array
     */
    public static function parse($val)
    {
        return parse_url($val);
    }

}
?>