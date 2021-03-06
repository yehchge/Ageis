<?php
/**
 * Application exception
 */

/**
 * Application exception
 */
class ApplicationException extends BaseException
{
    /**
     * constructor
     *
     * @param object $setting        - error setting
     * @param string $custom_message - custom message
     *
     * @return null
     */
    public function __construct($setting, $custom_message = '')
    {
        parent::__construct($setting, $custom_message);
    }
}

?>