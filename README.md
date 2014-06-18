# bitrix-composer-module-installer
================================

Composer plugin to help installing bitrix modules to /local/modules/{$name} destination path.

To use this plugin you must add to your composer.json next things:

* "type": "bitrix-module-installer"
* "require": {
        "osotov/bitrix-module-installer-plugin": "~1.0.0"
    }

Example:
``` json
{
    "name":"vendor/name",
    "type": "bitrix-module-installer",
    "description":"some description",
    "license": "MIT",
    "require":{
        "php":">=5.3.0",
        "osotov/bitrix-module-installer-plugin": "v1.0.0"
    }
}
```
