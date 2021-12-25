<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c6c811ce588             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Page\Basic; use Pmpr\Common\Foundation\Page\Admin\Tab as BaseClass; class Tab extends BaseClass { protected ?ListTable $listTable = null; public function __construct($aasascamegmwqmqk, $aokagokqyuysuksm = '', $meqocwsecsywiiqs = '', $ukwokcuqauuosmoo = '', $sqqewmoeaekuyyas = 1) { $this->listTable = $aasascamegmwqmqk; parent::__construct($aokagokqyuysuksm, $meqocwsecsywiiqs, $ukwokcuqauuosmoo, $sqqewmoeaekuyyas); } public function waeasakssissiuqg() : ?ListTable { return $this->listTable; } public function eiieguqemowyacgi() { $qsyooiqcmkcieyuk = $this->waeasakssissiuqg(); if (!$qsyooiqcmkcieyuk) { goto kkieqqwwascekcmo; } $qsyooiqcmkcieyuk->prepare_items(); kkieqqwwascekcmo: parent::eiieguqemowyacgi(); } public function gayqqwwuycceosii() : array { return ["\x6c\151\163\164\x5f\164\141\x62\x6c\145" => $this->waeasakssissiuqg(), self::uwceyikaaaqgkkee => "\164\x61\x62"]; } }
