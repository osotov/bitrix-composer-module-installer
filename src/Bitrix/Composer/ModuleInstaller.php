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
		foreach ($extras as $key => $extra) {
			$this->io->write($key .'=>' . $extra);
		}
		$this->io->write($package->getPrettyName());
		$this->io->write($package->getName());
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