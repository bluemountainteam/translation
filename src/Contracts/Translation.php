<?php
/**
 * Created by PhpStorm.
 * User: alan
 * Date: 12/09/2017
 * Time: 16:43
 */

namespace BlueMountainTeam\Translation\Contracts;

use Illuminate\Contracts\Foundation\Application;
use InvalidArgumentException;
use BlueMountainTeam\Translation\Models\Locale;

interface Translation
{
    /**
     * Constructor.
     *
     * @param Application $app
     */
    public function __construct(Application $app);

    /**
     * Returns the translation for the current locale.
     *
     * @param string $text
     * @param array  $replacements
     * @param string $toLocale
     *
     * @throws InvalidArgumentException
     *
     * @return string
     */
    public function translate($text, $toLocale = NULL, $parameters = null);

    /**
     * Retrieves the current app's default locale.
     *
     * @depreciated
     *
     * @return string
     */
    public function getAppLocale();

    /**
     * Returns a route prefix to automatically set a locale depending on the segment.
     *
     * @return null|string
     */
    public function getRoutePrefix();

    /**
     * Retrieves the current locale from the session. If a locale isn't
     * set then the default app locale is set as the current locale.
     *
     * @return string
     */
    public function getLocale();

    /**
     * Sets the default locale property.
     *
     * @param string $code
     */
    public function setLocale($code = '');

    /**
     * Translates all existing words to another locale
     * @param Locale $sourceLocale
     * @param Locale $targetLocale
     * @return mixed
     */
    public function translatesAll($targetLocaleId, $sourceLocaleId = null);

}