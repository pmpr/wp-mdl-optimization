<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62c003b2579d3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Minify; use Pmpr\Module\Optimization\Asset\Setting; class Minify extends Common { protected array $enables = []; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\137\142\x75\x66\x66\x65\162\137\x70\162\x6f\x63\x65\163\163"), [$this, "\167\x61\x6d\x69\151\x69\141\x67\143\167\x77\151\x67\x75\143\x75"], 50); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { if (!$this->weysguygiseoukqw(Setting::ccoaqmuiqioqaooa, false)) { goto skuuyysooocugyww; } if (!$this->weysguygiseoukqw(Setting::sikyekqowskqiqga)) { goto mosuacsuaasssciu; } HTML::symcgieuakksimmu(); mosuacsuaasssciu: if (!$this->weysguygiseoukqw(Setting::ykqawckyqkmqiamq)) { goto qksckewucmosemuo; } CSS::symcgieuakksimmu(); qksckewucmosemuo: if (!$this->weysguygiseoukqw(Setting::eumicecccemicqey)) { goto kmooekeyemqgucci; } JS::symcgieuakksimmu(); kmooekeyemqgucci: skuuyysooocugyww: } public function wamiiiagcwwigucu(?string $nsmgceoqaqogqmuw) : ?string { $qsucisggsqskmcse = [Setting::eumicecccemicqey => JS::symcgieuakksimmu(), Setting::ykqawckyqkmqiamq => CSS::symcgieuakksimmu(), Setting::sikyekqowskqiqga => HTML::symcgieuakksimmu()]; foreach ($qsucisggsqskmcse as $amakmumgguksgmum => $aksgkeoomwimawms) { if (!($this->weysguygiseoukqw($amakmumgguksgmum, false) && $aksgkeoomwimawms instanceof AbstractMinify)) { goto skwusmoyomgqkimm; } $nsmgceoqaqogqmuw = $aksgkeoomwimawms->okuguyacggsageqq($nsmgceoqaqogqmuw); skwusmoyomgqkimm: mkgmaguyswskyioa: } cmmusgkieoqyymgs: return $nsmgceoqaqogqmuw; } }
