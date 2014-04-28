<?php
/**
 * action exception
 */

/**
 * action exception
 */
class ActionException extends BaseException
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