<?php
namespace Bitrix\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class ModuleInstaller extends LibraryInstaller {
	const PACKAGE_TYPE = 'bitrix-module-installer';
	/**
	 * {@inheritDoc}
	 */
	public function getPackageBasePath(PackageInterface $package)
	{
		$extras = $this->composer->getPackage()->getExtra();
		$packageType = $package->getType();
		if ($packageType == self::PACKAGE_TYPE) {
			if ((array_key_exists('bitrix_module_name', $extras)) && (! empty($extras['bitrix_module_name']))) {
				$name = (string) $extras['bitrix_module_name'];

				return 'local/modules/' . $name;
			}
		}

		return '/vendor/' . $package->getPrettyName();
	}

	/**
	 * {@inheritDoc}
	 */
	public function supports($packageType)
	{
		return self::PACKAGE_TYPE === $packageType;
	}
} 