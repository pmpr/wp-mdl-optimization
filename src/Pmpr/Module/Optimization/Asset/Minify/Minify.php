<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62d7c3928abb7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Minify; use Pmpr\Module\Optimization\Asset\Setting; class Minify extends Common { protected array $enables = []; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\164\137\x62\165\146\x66\145\x72\x5f\x70\x72\157\143\145\x73\x73"), [$this, "\x77\x61\155\x69\151\151\141\147\143\167\167\151\x67\x75\143\x75"], 50); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { if (!$this->weysguygiseoukqw(Setting::ccoaqmuiqioqaooa, false)) { goto wqmwcuggcisqieao; } if (!$this->weysguygiseoukqw(Setting::sikyekqowskqiqga)) { goto iaygaasesyymwgss; } HTML::symcgieuakksimmu(); iaygaasesyymwgss: if (!$this->weysguygiseoukqw(Setting::ykqawckyqkmqiamq)) { goto iwosouqsesoqcska; } CSS::symcgieuakksimmu(); iwosouqsesoqcska: if (!$this->weysguygiseoukqw(Setting::eumicecccemicqey)) { goto iacwyogogoccmwsg; } JS::symcgieuakksimmu(); iacwyogogoccmwsg: wqmwcuggcisqieao: } public function wamiiiagcwwigucu(?string $nsmgceoqaqogqmuw) : ?string { $qsucisggsqskmcse = [Setting::eumicecccemicqey => JS::symcgieuakksimmu(), Setting::ykqawckyqkmqiamq => CSS::symcgieuakksimmu(), Setting::sikyekqowskqiqga => HTML::symcgieuakksimmu()]; foreach ($qsucisggsqskmcse as $amakmumgguksgmum => $aksgkeoomwimawms) { if (!($this->weysguygiseoukqw($amakmumgguksgmum, false) && $aksgkeoomwimawms instanceof AbstractMinify)) { goto yeiicwscguyokwyu; } $nsmgceoqaqogqmuw = $aksgkeoomwimawms->okuguyacggsageqq($nsmgceoqaqogqmuw); yeiicwscguyokwyu: issgmmkcgesyeoas: } qsyqcokomswykyso: return $nsmgceoqaqogqmuw; } }