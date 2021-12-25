<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c707b39ae82             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Page\Basic; use Pmpr\Common\Foundation\Page\Admin\Tab as BaseClass; class Tab extends BaseClass { protected ?ListTable $listTable = null; public function __construct($aasascamegmwqmqk, $aokagokqyuysuksm = '', $meqocwsecsywiiqs = '', $ukwokcuqauuosmoo = '', $sqqewmoeaekuyyas = 1) { $this->listTable = $aasascamegmwqmqk; parent::__construct($aokagokqyuysuksm, $meqocwsecsywiiqs, $ukwokcuqauuosmoo, $sqqewmoeaekuyyas); } public function waeasakssissiuqg() : ?ListTable { return $this->listTable; } public function eiieguqemowyacgi() { $qsyooiqcmkcieyuk = $this->waeasakssissiuqg(); if (!$qsyooiqcmkcieyuk) { goto euymeegkukskiowq; } $qsyooiqcmkcieyuk->prepare_items(); euymeegkukskiowq: parent::eiieguqemowyacgi(); } public function gayqqwwuycceosii() : array { return ["\x6c\x69\163\x74\137\x74\141\142\154\x65" => $this->waeasakssissiuqg(), self::uwceyikaaaqgkkee => "\164\141\x62"]; } }
