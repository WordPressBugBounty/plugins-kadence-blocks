<?php
/**
 * @license GPL-2.0-only
 *
 * Modified using {@see https://github.com/BrianHenryIE/strauss}.
 */ declare(strict_types=1);

namespace KadenceWP\KadenceBlocks\StellarWP\ProphecyMonorepo\ImageDownloader\Sanitization;

use KadenceWP\KadenceBlocks\StellarWP\ProphecyMonorepo\ImageDownloader\Sanitization\Contracts\Sanitizer;

/**
 * Sanitizes a filename using a callable/Closure strategy.
 */
final class FileNameSanitizer
{
	/**
	 * @readonly
	 */
	private Sanitizer $sanitizer;
	/**
	 * @param Sanitizer $sanitizer The filename sanitizer Closure strategy.
	 */
	public function __construct(Sanitizer $sanitizer) {
		$this->sanitizer = $sanitizer;
	}

	/**
	 * Sanitize a filename.
	 */
	public function sanitize(string $filename): string {
		return ($this->sanitizer)($filename);
	}
}
