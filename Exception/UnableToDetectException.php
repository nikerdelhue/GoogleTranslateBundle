<?php
/*
 * This file is part of the nikerdelhue\GoogleTranslateBundle Symfony bundle.
 *
 * (c) Vincent Composieux <vincent.composieux@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace nikerdelhue\GoogleTranslateBundle\Exception;

/**
 * Class NotFoundHttpException.
 *
 * @author Vincent Composieux <vincent.composieux@gmail.com>
 */
class UnableToDetectException extends \Exception
{
    /**
     * Constructor.
     *
     * @param string     $message  The message
     * @param int        $code     The code
     * @param \Exception $previous The exception
     */
    public function __construct($message = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
