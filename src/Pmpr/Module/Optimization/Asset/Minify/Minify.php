<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             629e44ab568a6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Minify; use Pmpr\Module\Optimization\Asset\Setting; class Minify extends Common { protected array $enables = []; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\x74\137\x62\x75\x66\x66\145\x72\x5f\160\162\x6f\x63\x65\x73\163"), [$this, "\167\x61\x6d\x69\151\151\141\x67\x63\x77\x77\151\x67\165\x63\165"], 50); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { if (!$this->weysguygiseoukqw(Setting::ccoaqmuiqioqaooa, false)) { goto qcgyggiaowuqswuw; } if (!$this->weysguygiseoukqw(Setting::sikyekqowskqiqga)) { goto qsokkkyoackoycie; } HTML::symcgieuakksimmu(); qsokkkyoackoycie: if (!$this->weysguygiseoukqw(Setting::ykqawckyqkmqiamq)) { goto casgoamcqkekgeeo; } CSS::symcgieuakksimmu(); casgoamcqkekgeeo: if (!$this->weysguygiseoukqw(Setting::eumicecccemicqey)) { goto yseyyukqaowwouua; } JS::symcgieuakksimmu(); yseyyukqaowwouua: qcgyggiaowuqswuw: } public function wamiiiagcwwigucu(?string $nsmgceoqaqogqmuw) : ?string { $qsucisggsqskmcse = [Setting::eumicecccemicqey => JS::symcgieuakksimmu(), Setting::ykqawckyqkmqiamq => CSS::symcgieuakksimmu(), Setting::sikyekqowskqiqga => HTML::symcgieuakksimmu()]; foreach ($qsucisggsqskmcse as $amakmumgguksgmum => $aksgkeoomwimawms) { if (!($this->weysguygiseoukqw($amakmumgguksgmum, false) && $aksgkeoomwimawms instanceof AbstractMinify)) { goto kwsqgqmwyyeykgum; } $nsmgceoqaqogqmuw = $aksgkeoomwimawms->okuguyacggsageqq($nsmgceoqaqogqmuw); kwsqgqmwyyeykgum: ywqakqkmmcoceqka: } sooecucuakgkuyis: return $nsmgceoqaqogqmuw; } }
