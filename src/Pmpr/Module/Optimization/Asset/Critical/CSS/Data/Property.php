<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf1b954785e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Critical\CSS\Data; class Property { protected ?string $name = ''; protected ?string $value = ''; public function __construct(?string $ymqmyyeuycgmigyo, ?string $eqgoocgaqwqcimie) { $this->name = $ymqmyyeuycgmigyo; $this->value = $eqgoocgaqwqcimie; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qooeaookuemoqecm() : ?string { return $this->value; } public function uqekcqygqwsyikky() { return stripos($this->qooeaookuemoqecm(), "\x21\151\x6d\x70\x6f\x72\164\141\156\x74") !== false; } public function __toString() { return sprintf("\x25\61\44\x73\x3a\x20\x25\62\x24\163\x3b", $this->aakmagwggmkoiiyu(), $this->qooeaookuemoqecm()); } }
