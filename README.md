# Erzeuge aus einem Public-Key einen Digest (DNSSEC)

Der Digest welcher für die DNSSEC DS-Records verwendet wird, stellt den Hash-Wert aus der Kombination des Public-Keys, dem Domainnamen, dem Key-Typ, dem Algorithmus-Typ und dem Hash-Typ dar. 
Mehr dazu unter https://www.rfc-editor.org/rfc/rfc4034 und https://de.wikipedia.org/wiki/DS_Resource_Record

## PHP
Die folgende Funktion erzeugt den entsprechenden Digest mittels **\DNSSEC::getDigestFromPublicKey(...)**.

## Unix-Systeme
Der Digest kann mittels **dnssec-dsfromkey** erzeugt werden.
