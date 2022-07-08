<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62c868b328afe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Page\Admin\Tab as BaseClass; class Tab extends BaseClass { protected ?ListTable $listTable = null; public function __construct($aasascamegmwqmqk, $aokagokqyuysuksm = '', $meqocwsecsywiiqs = '', $ukwokcuqauuosmoo = '', $sqqewmoeaekuyyas = 1) { $this->listTable = $aasascamegmwqmqk; parent::__construct($aokagokqyuysuksm, $meqocwsecsywiiqs, $ukwokcuqauuosmoo, $sqqewmoeaekuyyas); } public function waeasakssissiuqg() : ?ListTable { return $this->listTable; } public function eiieguqemowyacgi() { $qsyooiqcmkcieyuk = $this->waeasakssissiuqg(); if (!$qsyooiqcmkcieyuk) { goto caaygouikgagsssc; } $qsyooiqcmkcieyuk->prepare_items(); caaygouikgagsssc: parent::eiieguqemowyacgi(); } public function gayqqwwuycceosii() : array { return ["\154\x69\x73\x74\x5f\164\141\142\154\145" => $this->waeasakssissiuqg(), self::uwceyikaaaqgkkee => "\x74\141\x62"]; } }
