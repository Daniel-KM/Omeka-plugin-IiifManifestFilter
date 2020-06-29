<?php
/**
 * IIIF Manifest Filter
 *
 * @copyright 2020 Daniel Berthereau
 * @license https://www.cecill.info/licences/Licence_CeCILL_V2.1-en.html
 * @license https://github.com/UniversalViewer/universalviewer/blob/master/LICENSE.txt (viewer)
 */

/**
 * The IIIF Manifest Filter plugin.
 * @package Omeka\Plugins\IiifManifestFilter
 */
class IiifManifestFilterPlugin extends Omeka_Plugin_AbstractPlugin
{
    /**
     * @var array Filters for the plugin.
     */
    protected $_filters = array(
        'uv_manifest',
    );

    public function filterUvManifest($manifest, $args)
    {
        $record = $args['record'];
        $type = $args['type'];

        $filepath = PUBLIC_THEME_DIR . '/' . get_option('public_theme') . '/common/iiif_manifest.php';
        $file = file_exists($filepath) ? $filepath : (dirname(__FILE__) . '/views/shared/common/iiif_manifest.php');
        include_once $file;

        return $manifest;
    }
}
