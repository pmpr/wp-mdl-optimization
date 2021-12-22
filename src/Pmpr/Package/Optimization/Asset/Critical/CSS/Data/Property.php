<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c342aab9e69             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\Critical\CSS\Data; class Property { protected ?string $name = ''; protected ?string $value = ''; public function __construct(?string $ymqmyyeuycgmigyo, ?string $eqgoocgaqwqcimie) { $this->name = $ymqmyyeuycgmigyo; $this->value = $eqgoocgaqwqcimie; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qooeaookuemoqecm() : ?string { return $this->value; } public function uqekcqygqwsyikky() { return stripos($this->qooeaookuemoqecm(), "\x21\x69\x6d\160\157\162\164\x61\x6e\x74") !== false; } public function __toString() { return sprintf("\45\x31\x24\x73\x3a\40\45\x32\44\x73\73", $this->aakmagwggmkoiiyu(), $this->qooeaookuemoqecm()); } }
