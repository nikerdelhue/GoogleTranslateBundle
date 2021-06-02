<?php
/*
 * This file is part of the nikerdelhue\GoogleTranslateBundle Symfony bundle.
 *
 * (c) Vincent Composieux <vincent.composieux@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace nikerdelhue\GoogleTranslateBundle\Translate;

/**
 * Interface MethodInterface.
 *
 * @author Vincent Composieux <vincent.composieux@gmail.com>
 */
interface MethodInterface
{
    /**
     * Returns method name.
     *
     * @return string
     */
    public function getName();
}
