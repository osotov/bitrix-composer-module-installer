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
		/*$prefix = substr($package->getPrettyName(), 0, 23);
		if ('phpdocumentor/template-' !== $prefix) {
			throw new \InvalidArgumentException(
				'Unable to install template, phpdocumentor templates '
				.'should always start their package name with '
				.'"phpdocumentor/template-"'
			);
		}*/
		$this->io->write('something');
		$extras = $package->getExtra();
		$name = $package->getPrettyName();
		if ((array_key_exists('bitrix_module_name', $extras)) && (! empty($extras['bitrix_module_name']))) {
			$name = (string) $extras['bitrix_module_name'];
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