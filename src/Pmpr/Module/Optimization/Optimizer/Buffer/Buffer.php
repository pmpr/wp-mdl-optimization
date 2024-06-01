<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665ae7eec53d5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Buffer; abstract class Buffer { protected ?string $id; protected ?Test $test = null; public function __construct(?Test $sssgouqemgcgwgcc) { $this->test = $sssgouqemgcgwgcc; $this->qqcykaeioiwwaqos(); } public function mwikyscisascoeea() : ?string { return $this->id; } public function wmgoigiyyeauqwaq() : Test { return $this->test; } public function gwaoiqgsuaggegwc() { $iswcokucwmiosiaq = $this->wmgoigiyyeauqwaq()->wkcsqoiqoeuccaqy(); $this->log($iswcokucwmiosiaq["\x6d\x65\163\x73\141\x67\x65"], $iswcokucwmiosiaq["\143\157\x6e\164\145\170\164"]); } protected function log(string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->wmgoigiyyeauqwaq()->log($uamcoiueqaamsqma, $mgkceomocowocqyo); } protected function qmyusgwkaqieouwi(string $moooemyaqewumiay) { return preg_match("\x2f\x3c\134\x2f\150\x74\x6d\154\x3e\x2f\151", $moooemyaqewumiay); } public abstract function qqcykaeioiwwaqos(); public abstract function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string; }
