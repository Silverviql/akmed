<?php

/*
 * This file is part of the Behat Gherkin.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please views the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Gherkin\Loader;

/**
 * File Loader interface.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface FileLoaderInterface extends LoaderInterface
{
    /**
     * Sets base features path.
     *
     * @param string $path Base loader path
     */
    public function setBasePath($path);
}
