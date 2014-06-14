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
		$extras = $package->getExtra();
		$name = $package->getPrettyName();
		if ((array_key_exists('bitrix_module_name', $extras)) && (! empty($extras['bitrix_module_name']))) {
			$name = (string) $extras['bitrix_module_name'];
		}
		$this->io->write($extras['bitrix_module_name']);
		$this->io->write($package->getPrettyName());
		$this->io->write($package->getName());
		$this->io->write($package->getExtra());
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