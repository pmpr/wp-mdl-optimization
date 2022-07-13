<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf2522bd2c4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Page\Admin\Tab as BaseClass; class Tab extends BaseClass { protected ?ListTable $listTable = null; public function __construct($aasascamegmwqmqk, $aokagokqyuysuksm = '', $meqocwsecsywiiqs = '', $ukwokcuqauuosmoo = '', $sqqewmoeaekuyyas = 1) { $this->listTable = $aasascamegmwqmqk; parent::__construct($aokagokqyuysuksm, $meqocwsecsywiiqs, $ukwokcuqauuosmoo, $sqqewmoeaekuyyas); } public function waeasakssissiuqg() : ?ListTable { return $this->listTable; } public function eiieguqemowyacgi() { $qsyooiqcmkcieyuk = $this->waeasakssissiuqg(); if (!$qsyooiqcmkcieyuk) { goto mcqwuawosciucemq; } $qsyooiqcmkcieyuk->prepare_items(); mcqwuawosciucemq: parent::eiieguqemowyacgi(); } public function gayqqwwuycceosii() : array { return ["\x6c\151\163\164\137\164\x61\x62\x6c\x65" => $this->waeasakssissiuqg(), self::uwceyikaaaqgkkee => "\x74\141\142"]; } }
