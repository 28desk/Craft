<?php

/**
 * DO NOT EDIT THIS FILE.
 *
 * This file is subject to be overwritten by a Craft update at any time.
 *
 * If you want to change any of these settings, copy it into craft/config/general.php, and make your change there.
 */

return array(

	/**
	 * The URI segment Craft should look for when determining if the current request should first be routed to a
	 * controller action.
	 */
	'actionTrigger' => 'actions',

	/**
	 * The URI Craft should use upon successfully activating a user. Note that this only affects front-end site
	 * requests.
	 *
	 * This can be set to a string or an array with locale IDs used as the keys, if you want to set it on a per-locale
	 * basis.
	 */
	'activateAccountSuccessPath' => '',

	/**
	 * Determines whether auto-generated URLs should have trailing slashes.
	 */
	'addTrailingSlashesToUrls' => false,

	/**
	 * Whether or not to allow auto-updating in Craft. Does not affect manual updates.
	 *
	 * Possible values are:
	 *
	 * - `true` (all updates are allowed)
	 * - `'minor-only'` (only minor and build updates are allowed)
	 * - `'build-only'` (only build updates are allowed)
	 * - `false` (no updates are allowed)
	 */
	'allowAutoUpdates' => true,

	/**
	 * A list of file extensions that Craft will allow when a user is uploading files.
	 */
	'allowedFileExtensions' => '7z,aiff,asf,avi,bmp,csv,doc,docx,fla,flv,gif,gz,gzip,htm,html,jpeg,jpg,js,mid,mov,mp3,mp4,m4a,m4v,mpc,mpeg,mpg,ods,odt,ogg,ogv,pdf,png,potx,pps,ppsm,ppsx,ppt,pptm,pptx,ppz,pxd,qt,ram,rar,rm,rmi,rmvb,rtf,sdc,sitd,svg,swf,sxc,sxw,tar,tgz,tif,tiff,txt,vob,vsd,wav,webm,wma,wmv,xls,xlsx,zip',

	/**
	 * If this is set to true, then a tag name of "Proteines" will also match a tag name of "Protéines". Otherwise,
	 * they are treated as the same tag. Note that this
	 */
	'allowSimilarTags' => false,

	/**
	 * Whether or not to allow uppercase letters in the slug. Defaults to false.
	 */
	'allowUppercaseInSlug' => false,

	/**
	 * If this is set, Craft will call Yii’s CApplication::setId() method (http://www.yiiframework.com/doc/api/1.1/CApplication#setId-detail) to explicitly
	 * set an application ID for Craft instead of using it’s own method of generating an ID based on a hash of
	 * CApplication::getBasePath(). Yii’s default method causes issues with deployment services like Capistrano
	 * where deploying will destroy any active user sessions.
	 *
	 * The value is itself is not important as long as it is very hard to guess and is NOT based on the the absolute path
	 * of the craft/app folder.
	 */
	'appId' => null,

	/**
	 * If set to true, will automatically log the user in after successful account activation.
	 */
	'autoLoginAfterAccountActivation' => false,

	/**
	 *  Whether Craft should backup the database when updating. This applies to
	 * both auto and manual updates.
	 */
	'backupDbOnUpdate' => true,

	/**
	 * Sets the base URL to the CP that Craft should use when generating CP-facing URLs. This will be determined
	 * automatically if left blank.
	 */
	'baseCpUrl' => null,

	/**
	 * The higher the cost value, the longer it takes to generate a password hash and to verify against it. Therefore,
	 * higher cost slows down a brute-force attack.
	 *
	 * For best protection against brute force attacks, set it to the highest value that is tolerable on production
	 * servers.
	 *
	 * The time taken to compute the hash doubles for every increment by one for this value.
	 *
	 * For example, if the hash takes 1 second to compute when the value is 14 then the compute time varies as
	 * 2^(value - 14) seconds.
	 */
	'blowfishHashCost' => 13,

	/**
	 * Whether Craft should cache element queries that fall inside {% cache %} tags.
	 */
	'cacheElementQueries' => true,

	/**
	 * The length of time Craft will keep things cached in craft/storage/runtime/.
	 *
	 * Set to '0' to cache things indefinitely.
	 *
	 * @see http://www.php.net/manual/en/dateinterval.construct.php
	 */
	'cacheDuration' => 'P1D',

	/**
	 * The caching method that Craft should use.  Valid values are 'apc', 'db', 'eaccelerator', 'file', 'memcache',
	 * 'redis', 'wincache', 'xcache', and 'zenddata',
	 *
	 * Defaults to 'file'.
	 */
	'cacheMethod' => 'file',

	/**
	 * If set to true, any uploaded file names will have multi-byte characters (Chinese, Japanese, etc.) stripped
	 * and any high-ASCII characters converted to their low ASCII counterparts (i.e. ñ → n).
	 */
	'convertFilenamesToAscii' => false,

	/**
	 * The amount of time a user must wait before re-attempting to log in after their account is locked due to too many
	 * failed login attempts.
	 *
	 * Set to '0' to keep the account locked indefinitely, requiring an admin to manually unlock the account.
	 *
	 * @see http://www.php.net/manual/en/dateinterval.construct.php
	 */
	'cooldownDuration' => 'PT5M',

	/**
	 * The URI segment Craft should look for when determining if the current request should route to the CP rather than
	 * the front-end website.
	 */
	'cpTrigger' => 'admin',

	/**
	 * The name of CSRF token used for CSRF validation if the 'enableCsrfProtection' is set to true.
	 */
	'csrfTokenName' => 'CRAFT_CSRF_TOKEN',

	/**
	 * Any custom ASCII character mappings.
	 *
	 * This array is merged into the default one in StringHelper::getAsciiCharMap().
	 */
	'customAsciiCharMappings' => array(),

	/**
	 * Used to set a custom domain on any cookies that Craft creates. Defaults to an empty string, which leaves it
	 * up to the browser to determine which domain to use (almost always the current). If you want the cookies to work
	 * for all subdomains, for example, you could set this to '.domain.com'.
	 */
	'defaultCookieDomain' => '',

	/**
	 * Defines the default language the control panel should get set to if the logged-in user doesn't have a
	 * preferred language set.
	 */
	'defaultCpLanguage' => '',

	/**
	 * The default permissions Craft will use when creating a file on the file system.
	 */
	'defaultFilePermissions' => 0664,

	/**
	 * The default permissions Craft will use when creating a folder on the file system.
	 */
	'defaultFolderPermissions' => 0775,

	/**
	 * The quality level Craft will use when saving JPG and PNG files. Ranges from 0 (worst quality, smallest file) to
	 * 100 (best quality, biggest file).
	 */
	'defaultImageQuality' => 82,

	/**
	 * The default options that should be applied to each search term.
	 *
	 * Options include:
	 *
	 * - `attribute` – The attribute that the term should apply to (e.g. 'title'), if any
	 * - `exact` – Whether the term must be an exact match (only applies if `attribute` is set)
	 * - `exclude` – Whether search results should *exclude* records with this term
	 * - `subLeft` – Whether to include keywords that contain the term, with additional characters before it
	 * - `subRight` – Whether to include keywords that contain the term, with additional characters after it
	 */
	'defaultSearchTermOptions' => array(
		'attribute' => null,
		'exact' => false,
		'exclude' => false,
		'subLeft' => false,
		'subRight' => false,
	),

	/**
	 * The template file extensions Craft will look for when matching a template path to a file on the front end.
	 */
	'defaultTemplateExtensions' => array('html', 'twig'),

	/**
	 * The default amount of time tokens can be used before expiring.
	 *
	 * @see http://www.php.net/manual/en/dateinterval.construct.php
	 */
	'defaultTokenDuration' => 'P1D',

	/**
	 * The default day that new users should have set as their “Week Start Day”.
	 *
	 * This should be set to an integer from `0` to `6` where:
	 *
	 * - `0` represents Sunday
	 * - `1` represents Monday
	 * - `2` represents Tuesday
	 * - `3` represents Wednesday
	 * - `4` represents Thursday
	 * - `5` represents Friday
	 * - `6` represents Saturday
	 */
	'defaultWeekStartDay' => 0,

	/**
	 * Determines whether the system is in Dev Mode or not.
	 */
	'devMode' => false,

	/**
	 * The amount of time a user’s elevated session will last, which is required for some sensitive actions (e.g. user group/permission assignment).
	 * Set to `false` to disable elevated session support.
	 *
	 * @see http://www.php.net/manual/en/dateinterval.construct.php
	 */
	'elevatedSessionDuration' => 'PT5M',

	/**
	 * Whether to enable CSRF protection via hidden form inputs for all forms submitted via Craft. Defaults to false,
	 * for now, for backwards compatibility, but will eventually default to true.
	 *
	 * Also, see the 'csrfTokenName' config setting.
	 */
	'enableCsrfProtection' => false,

	/**
	 * Whether to enable Craft's template `{% cache %}` tag on a global basis.
	 *
	 * @see http://craftcms.com/docs/templating/cache
	 */
	'enableTemplateCaching' => true,

	/**
	 * Any environment-specific variables that should be swapped out in URL and Path settings.
	 * See http://craftcms.com/docs/multi-environment-configs#environment-specific-variables for a full explanation
	 * of this setting.
	 */
	'environmentVariables' => array(),

	/**
	 * The prefix that should be prepended to HTTP error status codes when determining the path to look for an error’s
	 * template.
	 *
	 * If set to '_', then your site’s 404 template would live at craft/templates/_404.html, for example.
	 */
	'errorTemplatePrefix' => '',

	/**
	 * A comma separated list of file extensions that will be merged into the 'allowedFileExtensions' config setting.
	 */
	'extraAllowedFileExtensions' => '',

	/**
	 * The string to use to separate words when uploading Assets. If set to anything but a string, spaces will be left alone.
	 */
	'filenameWordSeparator' => '-',

	/**
	 * Should transforms be generated before loading the page.
	 */
	'generateTransformsBeforePageLoad' => false,

	/**
	 * By default Craft will auto-detect if Imagick is installed and fallback to GD if not. You can explicitly set
	 * either 'imagick' or 'gd' here to override that behavior.
	 */
	'imageDriver' => 'auto',

	/**
	 * The template filenames Craft will look for within a directory to represent the directory’s “index” template when
	 * matching a template path to a file on the front end.
	 */
	'indexTemplateFilenames' => array('index'),

	/**
	 * The amount of time to track invalid login attempts for a user, for determining if Craft should lock an account.
	  *
	 * @see http://www.php.net/manual/en/dateinterval.construct.php
	 */
	'invalidLoginWindowDuration' => 'PT1H',

	/**
	 * The URI Craft should redirect to when user token validation fails. A token is used on things like setting and
	 * resetting user account passwords.  Note that this only affects front-end site requests.
	 *
	 * This can be set to a string or an array with locale IDs used as the keys, if you want to set it on a per-locale
	 * basis.
	 */
	'invalidUserTokenPath' => '',

	/**
	 * Whether the site is currently online or not. If set to `true` or `false`, it will take precedence over the
	 * System Status setting in Settings → General.
	 */
	'isSystemOn' => null,

	/**
	 * If set to true, the auto-generated slugs for an entry will strip any multi-byte characters (Chinese, Japanese, etc.)
	 * and attempt to convert any high-ASCII to their low ASCII counterparts (i.e. ñ → n).
	 *
	 * Note that this only affects the JavaScript auto-generated slugs and they still can be manually entered in the slug.
	 */
	'limitAutoSlugsToAscii' => false,

	/**
	 * The method that is used to dump logging context information. Defaults to `var_export`. If you experience circular
	 * reference errors, you can change it to `print_r`. Any kind of callable method (static, user defined lambda, etc.)
	 * could also be used.
	 */
	'logDumpMethod' => 'var_export',

	/**
	 * The URI Craft should use for user login.  Note that this only affects front-end site requests.
	 *
	 * This can be set to a string or an array with locale IDs used as the keys, if you want to set it on a per-locale
	 * basis.
	 */
	'loginPath' => 'login',

	/**
	 * The URI Craft should use for user logout.  Note that this only affects front-end site requests.
	 *
	 * This can be set to a string or an array with locale IDs used as the keys, if you want to set it on a per-locale
	 * basis.
	 */
	'logoutPath' => 'logout',

	/**
	 * The maximum dimension size to use when caching images from external sources to use in transforms. Set to 0 to
	 * never cache them.
	 */
	'maxCachedCloudImageSize' => 2000,

	/**
	 * The number of invalid login attempts Craft will allow within the specified duration before the account gets
	 * locked.
	 */
	'maxInvalidLogins' => 5,

	/**
	 * The highest number Craft will tack onto a slug in order to make it unique before giving up and throwing an error.
	 */
	'maxSlugIncrement' => 100,

	/**
	 * The maximum upload file size allowed in bytes.
	 */
	'maxUploadFileSize' => 16777216,

	/**
	 * Whether generated URLs should omit 'index.php', e.g. http://domain.com/path as opposed to showing it,
	 * e.g. http://domain.com/index.php/path
	 *
	 * This can only be possible if your server is configured to redirect would-be 404's to index.php, for example, with
	 * the redirect found in the 'htaccess' file that came with Craft:
	 *
	 *     RewriteEngine On
	 *
	 *     RewriteCond %{REQUEST_FILENAME} !-f
	 *     RewriteCond %{REQUEST_FILENAME} !-d
	 *     RewriteRule (.+) /index.php?p=$1 [QSA,L]
	 *
	 * Possible values: true, false, 'auto'
	 */
	'omitScriptNameInUrls' => 'auto',

	/**
	 * Determines whether Craft should override PHP’s session storage location to your craft/storage/ folder.
	 *
	 * When set to true, Craft will override the location; false will tell Craft to leave the location alone and let PHP
	 * store the session where it was configured to.
	 *
	 * When set to 'auto', Craft will check the default session location to see if it contains “://”, indicating that it
	 * might be stored with memcache or the like. If it does, Craft will leave it alone; otherwise Craft will override
	 * it.
	 */
	'overridePhpSessionLocation' => false,

	/**
	 * The string preceding a number which Craft will look for when determining if the current request is for a
	 * particular page in a paginated list of pages.
	 */
	'pageTrigger' => 'p',

	/**
	 * The maximum amount of memory Craft will try to reserve during memory intensive operations such as zipping,
	 * unzipping and updating.
	 */
	'phpMaxMemoryLimit' => '256M',

	/**
	 * The name of the PHP session cookie.
	 *
	 * @see https://php.net/manual/en/function.session-name.php
	 */
	'phpSessionName' => 'CraftSessionId',

	/**
	 * The path that users should be redirected to after logging in from the Control Panel.
	 *
	 * This setting will also come into effect if the user visits the CP’s Login page (/admin/login)
	 * or the CP’s root URL (/admin) when they are already logged in.
	 */
	'postCpLoginRedirect' => 'dashboard',

	/**
	 * The path that users should be redirected to after logging in from the front-end site.
	 *
	 * This setting will also come into effect if the user visits the Login page (as specified by the loginPath config
	 * setting) when they are already logged in.
	 */
	'postLoginRedirect' => '',

	/**
	 * Whether the embedded Image Color Profile (ICC) should be preserved when manipulating images.
	 *
	 * Setting this to false will reduce the image size a little bit, but on some Imagick versions can cause images to be saved with
	 * an incorrect gamma value, which causes the images to become very dark. This will only have effect if Imagick is in use.
	 */
	'preserveImageColorProfiles' => true,

	/**
	 * When set to `false` and you go through the "forgot password" workflow on the control panel login page, for example,
	 * you get distinct messages saying if the username/email didn't exist or the email was successfully sent and to check
	 * your email for further instructions. This can allow for username/email enumeration based on the response. If set
	 * `true`, you will always get a successful response even if there was an error making it difficult to enumerate users.
	 */
	'preventUserEnumeration' => false,

	/**
	 * The template path segment prefix that should be used to identify "private" templates -- templates that aren't
	 * directly accessible via a matching URL.
	 */
	'privateTemplateTrigger' => '_',

	/**
	 * The amount of time to wait before Craft purges pending users from the system that have not activated. Set to
	 * false to disable this feature. Note that if you set this to a time interval, then any content assigned to
     * a pending user will be deleted as well when the given time interval passes.
	 *
	 * @see http://www.php.net/manual/en/dateinterval.construct.php
	 */
	'purgePendingUsersDuration' => false,

	/**
	 * The amount of time Craft will remember a username and pre-populate it on the CP login page.
	 *
	 * Set to '0' to disable this feature altogether.
	 *
	 * @see http://www.php.net/manual/en/dateinterval.construct.php
	 */
	'rememberUsernameDuration' => 'P1Y',

	/**
	 * The amount of time a user stays logged if “Remember Me” is checked on the login page.
	 *
	 * Set to '0' to disable the “Remember Me” feature altogether.
	 *
	 * @see http://www.php.net/manual/en/dateinterval.construct.php
	 */
	'rememberedUserSessionDuration' => 'P2W',

	/**
	 * Whether Craft should require a matching user agent string when restoring a user session from a cookie.
	 */
	'requireMatchingUserAgentForSession' => true,

	/**
	 * Whether Craft should require the existence of a user agent string and IP address when creating a new user
	 * session.
	 */
	'requireUserAgentAndIpForSession' => true,

	/**
	 * The URI segment Craft should use for resource URLs on the front end.
	 */
	'resourceTrigger' => 'cpresources',

	/**
	 * Whether Craft should attempt to restore the just-created DB backup in the event that there was an error making
	 * the database schema changes mandated by the update.
	 */
	'restoreDbOnUpdateFailure' => true,

	/**
	 * Whether Craft should rotate images according to their EXIF data on upload.
	 */
	'rotateImagesOnUploadByExifData' => true,

	/**
	 * Whether Craft should run pending background tasks automatically over HTTP requests, or leave it up to something
	 * like a Cron job to call index.php/actions/tasks/runPendingTasks at a regular interval.
	 *
	 * This setting should be disabled for servers running Win32, or with Apache’s mod_deflate/mod_gzip installed,
	 * where PHP’s [flush()](http://php.net/manual/en/function.flush.php) method won’t work.
	 *
	 * If disabled, an alternate task running trigger *must* be set up separately.
	 */
	'runTasksAutomatically' => true,

	/**
	 * Words that should be ignored when indexing search keywords and preparing search terms to be matched against the
	 * keyword index.
	 */
	'searchIgnoreWords' => array('the', 'and'),

	/**
	 * Whether the X-Powered-By header should be sent on each request, helping clients identify that the site is powered by Craft.
	 */
	'sendPoweredByHeader' => true,

	/**
	 * The URI Craft should use for user password resetting. Note that this only affects front-end site requests.
	 *
	 * This can be set to a string or an array with locale IDs used as the keys, if you want to set it on a per-locale
	 * basis.
	 */
	'setPasswordPath' => 'setpassword',

	/**
	 * The URI Craft should use upon successfully setting a users’s password. Note that this only affects front-end site
	 * requests.
	 *
	 * This can be set to a string or an array with locale IDs used as the keys, if you want to set it on a per-locale
	 * basis.
	 */
	'setPasswordSuccessPath' => '',

	/**
	 * Whether or not to show beta Craft updates from the updates page in the control panel. It is highly recommended
	 * that you do not use beta releases of Craft in a production environment.
	 */
	'showBetaUpdates' => false,

	/**
	 * The name of the site. If set, it will take precedence over the Site Name setting in Settings → General.
	 *
	 * This can be set to a string or an array with locale IDs used as the keys, if you want to set it on a per-locale
	 * basis.
	 */
	'siteName' => null,

	/**
	 * The base URL to the site. If set, it will take precedence over the Site URL setting in Settings → General.
	 *
	 * This can be set to a string or an array with locale IDs used as the keys, if you want to set it on a per-locale
	 * basis.
	 */
	'siteUrl' => null,

	/**
	 * The character(s) that should be used to separate words in slugs.
	 */
	'slugWordSeparator' => '-',

	/**
	 * Controls whether or not to show or hide any Twig template runtime errors that occur on the site in the browser.
	 * If it is set to `true`, the errors will still be logged to Craft’s log files.
	 */
	'suppressTemplateErrors' => false,

	/**
	 * Configures Craft to send all system emails to a single email address, or an array of email addresses for testing
	 * purposes.
	 */
	'testToEmailAddress' => '',

	/**
	 * The timezone of the site. If set, it will take precedence over the Timezone setting in Settings → General.
	 *
	 * This can be set to one of PHP’s supported timezones (http://php.net/manual/en/timezones.php).
	 */
	'timezone' => null,

	/**
	 * Tells Craft whether to surround all translatable strings with “@” symbols, to help find any strings that are not
	 * being run through Craft::t() or the |translate filter.
	 */
	'translationDebugOutput' => false,

	/**
	 * The name of the 'token' query string parameter.
	 */
	'tokenParam' => 'token',

	/**
	 * Tells Craft whether to use compressed Javascript files whenever possible, to cut down on page load times.
	 */
	'useCompressedJs' => true,

	/**
	 * If set to true, Craft will use a user's email address in place of their username and remove username UI from the
	 * control panel.
	 */
	'useEmailAsUsername' => false,

	/**
	 * Whether Craft should specify the path using PATH_INFO or as a query string parameter when generating URLs.
	 *
	 * Note that this setting only takes effect if omitScriptNameInUrls is set to false or 'auto' with a failed
	 * “index.php redirect” test.
	 *
	 * When usePathInfo is set to 'auto', Craft will try to determine if your server is configured to support PATH_INFO,
	 * and cache the test results for 24 hours.
	 */
	'usePathInfo' => 'auto',

	/**
	 * Determines whether Craft will set the "secure" flag when saving cookies when calling `craft()->userSession->saveCookie()`.
	 *
	 * Valid values are `true`, `false`, and `'auto'`. Defaults to `'auto'`, which will set the secure flag if the page
	 * you're currently accessing is over `https://`. `true` will always set the flag, regardless of protocol and `false`
	 * will never automatically set the flag.
	 */
	'useSecureCookies' => 'auto',

	/**
	 * Determines what protocol/schema Craft will use when generating tokenized URLs. If set to 'auto',
	 * Craft will check the siteUrl and the protocol of the current request and if either of them are https
	 * will use https in the tokenized URL. If not, will use http.
	 *
	 * If set to `false`, the Craft will always use http. If set to `true`, then, Craft will always use `https`.
	 */
	'useSslOnTokenizedUrls' => 'auto',

	/**
	 * The amount of time a user stays logged in.
	 *
	 * Set to false if you want users to stay logged in as long as their browser is open rather than a predetermined
	 * amount of time.
	 *
	 * @see http://www.php.net/manual/en/dateinterval.construct.php
	 */
	'userSessionDuration' => 'PT1H',

	/**
	 * Whether to grab an exclusive lock on a file when writing to it by using the LOCK_EX flag.
	 *
	 * Some file systems, such as NFS, do not support exclusive file locking.
	 *
	 * Possible values are 'auto', true and false.
	 *
	 * When set to 'auto', Craft will automatically try to detect if the underlying file system supports exclusive file
	 * locking and cache the results.
	 *
	 * @see http://php.net/manual/en/function.file-put-contents.php
	 */
	'useWriteFileLock' => 'auto',

	/**
	 * Whether Craft should use XSendFile to serve files when possible.
	 */
	'useXSendFile' => false,

	/**
	 * If set, should be a private, random, cryptographically secure key that is used to generate HMAC
	 * in the SecurityService and is used for such things as verifying that cookies haven't been tampered with.
	 * If not set, a random one is generated for you. Ultimately saved in craft/storage/runtime/state/state.bin.
	 *
	 * If you're in a load-balanced web server environment and you're not utilizing sticky sessions, this value
	 * should be set to the same key across all web servers.
	 */
	'validationKey' => null,

	/**
	 * The amount of time a user verification code can be used before expiring.
	 *
	 * @see http://www.php.net/manual/en/dateinterval.construct.php
	 */
	'verificationCodeDuration' => 'P1D',
);
