# Erzeuge aus einem Public-Key einen Digest (DNSSEC)

Der Digest besteht aus einer Kombination aus dem Public-Key, dem Domainnamen, dem Key-Typ, dem Algorithmus-Typ und dem Hash-Typ.

## PHP
Die folgende Funktion erzeugt den entsprechenden Digest mittels **\DNSSEC::getDigestFromPublicKey(...)**.

## Unix-Systeme
Der Digest kann mittels **dnssec-dsfromkey** erzeugt werden.
