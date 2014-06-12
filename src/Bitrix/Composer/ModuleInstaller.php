<?php
namespace Bitrix\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class ModuleInstaller extends LibraryInstaller {
	/**
	 * {@inheritDoc}
	 */
	/*public function getPackageBasePath(PackageInterface $package)
	{
		$prefix = substr($package->getPrettyName(), 0, 23);
		if ('phpdocumentor/template-' !== $prefix) {
			throw new \InvalidArgumentException(
				'Unable to install template, phpdocumentor templates '
				.'should always start their package name with '
				.'"phpdocumentor/template-"'
			);
		}

		return 'local/modules/'.substr($package->getPrettyName(), 23);
	}*/

	/**
	 * {@inheritDoc}
	 */
	/*public function supports($packageType)
	{
		return 'bitrix-module-installer' === $packageType;
	}*/
} 