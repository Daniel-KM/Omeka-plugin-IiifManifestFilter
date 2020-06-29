IIIF Manifest Filter (plugin for Omeka)
=======================================

[IIIF manifest filter] is a plugin for [Omeka] that provides the default code to
manage the hook (event) `uv_manifest` of the plugin [UniversalViewer] in order
to modify the IIIF manifest before the use inside Universal Viewer, or anywhere
else since manifests can be displayed with any online iiif viewers.


Installation
------------

Uncompress files and rename plugin folder "IiifManifestFilter".

Then install it like any other Omeka plugin and follow the config instructions.


Usage
-----

By default, the module only adds the key `filtered` to the manifest, that does
nothing.

So feel free to fill what you want in the file `views/common/iiif_manifest.php`,
that can be copied in the theme.

Check [IIIF specifications (2.1)] and [IIIF validator].


Warning
-------

Use it at your own risk.

It’s always recommended to backup your files and your databases and to check
your archives regularly so you can roll back if needed.


Troubleshooting
---------------

See online issues on the [plugin issues] page on GitHub.


License
-------

This plugin is published under the [CeCILL v2.1] licence, compatible with
[GNU/GPL] and approved by [FSF] and [OSI].

In consideration of access to the source code and the rights to copy, modify and
redistribute granted by the license, users are provided only with a limited
warranty and the software's author, the holder of the economic rights, and the
successive licensors only have limited liability.

In this respect, the risks associated with loading, using, modifying and/or
developing or reproducing the software by the user are brought to the user's
attention, given its Free Software status, which may make it complicated to use,
with the result that its use is reserved for developers and experienced
professionals having in-depth computer knowledge. Users are therefore encouraged
to load and test the suitability of the software as regards their requirements
in conditions enabling the security of their systems and/or data to be ensured
and, more generally, to use and operate it in the same conditions of security.
This Agreement may be freely reproduced and published, provided it is not
altered, and that no provisions are either added or removed herefrom.


Copyright
---------

* Copyright Daniel Berthereau, 2020 (see [Daniel-KM])


[IIIF manifest filter]: https://github.com/Daniel-KM/Omeka-plugin-IiifManifestFilter
[Universal Viewer]: https://github.com/Daniel-KM/Omeka-plugin-UniversalViewer
[Omeka]: https://omeka.org
[IIIF]: http://iiif.io
[UniversalViewer]: https://github.com/UniversalViewer/universalviewer
[IIIF specifications (2.1)]: https://iiif.io/api/presentation/2.1/
[IIIF validator]: https://iiif.io/api/presentation/validator/service/
[plugin issues]: https://github.com/Daniel-KM/Omeka-plugin-UniversalViewer/issues
[CeCILL v2.1]: https://www.cecill.info/licences/Licence_CeCILL_V2.1-en.html
[GNU/GPL]: https://www.gnu.org/licenses/gpl-3.0.html
[FSF]: https://www.fsf.org
[OSI]: http://opensource.org
[MIT licence]: https://github.com/UniversalViewer/universalviewer/blob/master/LICENSE.txt
[Daniel-KM]: https://github.com/Daniel-KM "Daniel Berthereau"
