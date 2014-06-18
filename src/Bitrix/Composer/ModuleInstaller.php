<?php
namespace Bitrix\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class ModuleInstaller extends LibraryInstaller {
	/**
	 * {@inheritDoc}
	 */
	public function getPackageBasePath(PackageInterface $package)
	{
		$extras = $this->composer->getPackage()->getExtra();

		if ((array_key_exists('bitrix_module_name', $extras)) && (! empty($extras['bitrix_module_name']))) {
			$name = (string) $extras['bitrix_module_name'];
		} else {
			throw new \Exception(
				'Unable to install module, composer.json must contain module name declaration like this: ' .
				'"extra": { "bitrix_module_name": "somename" } '
			);
		}

		return 'local/modules/' . $name;
	}

	/**
	 * {@inheritDoc}
	 */
	public function supports($packageType)
	{
		return 'bitrix-module-installer' === $packageType;
	}
} 