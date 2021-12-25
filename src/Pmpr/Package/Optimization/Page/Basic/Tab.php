<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c702ef003ac             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Page\Basic; use Pmpr\Common\Foundation\Page\Admin\Tab as BaseClass; class Tab extends BaseClass { protected ?ListTable $listTable = null; public function __construct($aasascamegmwqmqk, $aokagokqyuysuksm = '', $meqocwsecsywiiqs = '', $ukwokcuqauuosmoo = '', $sqqewmoeaekuyyas = 1) { $this->listTable = $aasascamegmwqmqk; parent::__construct($aokagokqyuysuksm, $meqocwsecsywiiqs, $ukwokcuqauuosmoo, $sqqewmoeaekuyyas); } public function waeasakssissiuqg() : ?ListTable { return $this->listTable; } public function eiieguqemowyacgi() { $qsyooiqcmkcieyuk = $this->waeasakssissiuqg(); if (!$qsyooiqcmkcieyuk) { goto mugeiwyysiemwaym; } $qsyooiqcmkcieyuk->prepare_items(); mugeiwyysiemwaym: parent::eiieguqemowyacgi(); } public function gayqqwwuycceosii() : array { return ["\x6c\151\x73\164\x5f\x74\141\142\154\145" => $this->waeasakssissiuqg(), self::uwceyikaaaqgkkee => "\164\141\142"]; } }
