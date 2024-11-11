<?php

class DNSSEC {
	/**
	 * @param string $publicKeyBase64 Schlüssel (Base64 encoded)
	 * @param string $domain (IDNA)
	 * @param int $hashType
	 * @param int $algorithmType
	 * @param int $keyType
	 * @return string
	 */
	public static function getDigestFromPublicKey(string $publicKeyBase64, string $domain, int $hashType = 3, int $algorithmType = 13, int $keyType = 257, string $digestAlgorithm = 'sha256'): string {
		$domainHeader = '';

		foreach (explode('.', $domain) as $part)
			$domainHeader .= pack('C', strlen($part)).$part;

		return openssl_digest($domainHeader.pack('C', 0).pack('n', $keyType).pack('C', $hashType).pack('C', $algorithmType).base64_decode($publicKeyBase64), $digestAlgorithm);
	}
}