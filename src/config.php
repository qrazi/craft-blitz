<?php
/**
 * @copyright Copyright (c) PutYourLightsOn
 */

/**
 * Blitz config.php
 *
 * This file exists only as a template for the Blitz settings.
 * It does nothing on its own.
 *
 * Don't edit this file, instead copy it to 'craft/config' as 'blitz.php'
 * and make your changes there to override default settings.
 *
 * Once copied to 'craft/config', this file will be multi-environment aware as
 * well, so you can have different settings groups for each environment, just as
 * you do for 'general.php'
 */

return [
    // Whether static file caching should be enabled.
    //'cachingEnabled' => false,

    // Whether the cache should automatically be warmed after clearing.
    //'warmCacheAutomatically' => true,

    // The URI patterns to include in static file caching. The second variable represents a site ID, or a blank string for all sites.
    //'includedUriPatterns' => [['pages/.*', '1'], ['articles/.*', '2']],

    // The URI patterns to exclude from static file caching (overrides any matching patterns to include). The second variable represents a site ID, or a blank string for all sites.
    //'excludedUriPatterns' => [['contact', '']],

    // The driver type to use.
    //'driverType' => FileDriver::class,

    // The driver settings.
    //'driverSettings' => ['folderPath' => 'cache/blitz'],

    // The driver type classes to add to the plugin’s default driver types.
    //'driverTypes' => [],

    // The purger type to use.
    //'purgerType' => DummyPurger::class,

    // The purger settings.
    //'purgerSettings' => [],

    // The purger type classes to add to the plugin’s default purger types.
    //'purgerTypes' => [],

    // Whether URLs with query strings should cached and how.
    // 0: Do not cache URLs with query strings
    // 1: Cache URLs with query strings as unique pages
    // 2: Cache URLs with query strings as the same page
    //'queryStringCaching' => 0,

    // The max number of multiple concurrent requests to use when warming the cache. The higher the number, the faster the cache will be warmed and the more server processing will be required. A number between 5 and 20 is recommended.
    //'concurrency' => 5,

    // An API key that can be used to clear, flush, warm, or refresh expired cache through a URL (min. 16 characters).
    //'apiKey' => '',

    // Whether elements should be cached in the database.
    //'cacheElements' => true,

    // Whether element queries should be cached in the database.
    //'cacheElementQueries' => true,

    // Element types that should not be cached.
    //'nonCacheableElementTypes' => [
    //    'craft\elements\GlobalSet',
    //    'craft\elements\MatrixBlock',
    //],

    // The value to send in the cache control header.
    //'cacheControlHeader' => 'public, s-maxage=604800',

    // Whether an `X-Powered-By: Craft CMS, Blitz` header should be sent.
    //'sendPoweredByHeader' => true,

    // Whether the cache should automatically be warmed after clearing globals.
    //'warmCacheAutomaticallyForGlobals' => true,
];
