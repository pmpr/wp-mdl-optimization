<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e0dd9fa068f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Minify; use Pmpr\Module\Optimization\Asset\Setting; class Minify extends Common { protected array $enables = []; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\160\164\x5f\x62\165\x66\x66\145\x72\x5f\x70\x72\157\x63\145\163\x73"), [$this, "\167\141\x6d\151\151\x69\x61\x67\143\x77\x77\151\147\165\143\x75"], 50); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { if (!$this->weysguygiseoukqw(Setting::ccoaqmuiqioqaooa, false)) { goto issgmmkcgesyeoas; } if (!$this->weysguygiseoukqw(Setting::sikyekqowskqiqga)) { goto iacwyogogoccmwsg; } HTML::symcgieuakksimmu(); iacwyogogoccmwsg: if (!$this->weysguygiseoukqw(Setting::ykqawckyqkmqiamq)) { goto wqmwcuggcisqieao; } CSS::symcgieuakksimmu(); wqmwcuggcisqieao: if (!$this->weysguygiseoukqw(Setting::eumicecccemicqey)) { goto qsyqcokomswykyso; } JS::symcgieuakksimmu(); qsyqcokomswykyso: issgmmkcgesyeoas: } public function wamiiiagcwwigucu(?string $nsmgceoqaqogqmuw) : ?string { $qsucisggsqskmcse = [Setting::eumicecccemicqey => JS::symcgieuakksimmu(), Setting::ykqawckyqkmqiamq => CSS::symcgieuakksimmu(), Setting::sikyekqowskqiqga => HTML::symcgieuakksimmu()]; foreach ($qsucisggsqskmcse as $amakmumgguksgmum => $aksgkeoomwimawms) { if (!($this->weysguygiseoukqw($amakmumgguksgmum, false) && $aksgkeoomwimawms instanceof AbstractMinify)) { goto giuoqsumkimmuaya; } $nsmgceoqaqogqmuw = $aksgkeoomwimawms->okuguyacggsageqq($nsmgceoqaqogqmuw); giuoqsumkimmuaya: yueosioyegouuwqo: } yeiicwscguyokwyu: return $nsmgceoqaqogqmuw; } }
