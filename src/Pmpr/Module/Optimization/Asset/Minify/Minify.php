<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf1b954785e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Minify; use Pmpr\Module\Optimization\Asset\Setting; class Minify extends Common { protected array $enables = []; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\x74\137\142\x75\x66\x66\x65\162\x5f\160\162\157\x63\x65\x73\163"), [$this, "\167\x61\x6d\x69\151\x69\x61\147\x63\167\167\x69\147\x75\143\x75"], 50); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { if (!$this->weysguygiseoukqw(Setting::ccoaqmuiqioqaooa, false)) { goto ooykyoowougqkaso; } if (!$this->weysguygiseoukqw(Setting::sikyekqowskqiqga)) { goto oeogyayooiwqcmia; } HTML::symcgieuakksimmu(); oeogyayooiwqcmia: if (!$this->weysguygiseoukqw(Setting::ykqawckyqkmqiamq)) { goto uowiiyqmiaaaaoas; } CSS::symcgieuakksimmu(); uowiiyqmiaaaaoas: if (!$this->weysguygiseoukqw(Setting::eumicecccemicqey)) { goto vokekoceocuskqsm; } JS::symcgieuakksimmu(); vokekoceocuskqsm: ooykyoowougqkaso: } public function wamiiiagcwwigucu(?string $nsmgceoqaqogqmuw) : ?string { $qsucisggsqskmcse = [Setting::eumicecccemicqey => JS::symcgieuakksimmu(), Setting::ykqawckyqkmqiamq => CSS::symcgieuakksimmu(), Setting::sikyekqowskqiqga => HTML::symcgieuakksimmu()]; foreach ($qsucisggsqskmcse as $amakmumgguksgmum => $aksgkeoomwimawms) { if (!($this->weysguygiseoukqw($amakmumgguksgmum, false) && $aksgkeoomwimawms instanceof AbstractMinify)) { goto sikckcmeiwmyakeu; } $nsmgceoqaqogqmuw = $aksgkeoomwimawms->okuguyacggsageqq($nsmgceoqaqogqmuw); sikckcmeiwmyakeu: kusuakkwcuqkcqaw: } sckyiekoceuisqyq: return $nsmgceoqaqogqmuw; } }
