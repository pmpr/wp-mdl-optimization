<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616ab9829e21a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Critical\CSS\Data; class Property { protected ?string $name = ''; protected ?string $value = ''; public function __construct(?string $ymqmyyeuycgmigyo, ?string $eqgoocgaqwqcimie) { $this->name = $ymqmyyeuycgmigyo; $this->value = $eqgoocgaqwqcimie; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qooeaookuemoqecm() : ?string { return $this->value; } public function uqekcqygqwsyikky() { return stripos($this->qooeaookuemoqecm(), "\41\x69\155\160\x6f\x72\164\141\x6e\x74") !== false; } public function __toString() { return sprintf("\x25\61\x24\163\x3a\40\x25\62\x24\163\73", $this->aakmagwggmkoiiyu(), $this->qooeaookuemoqecm()); } }