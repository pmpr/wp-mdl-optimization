<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ce42dbc0828             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Minify; use Pmpr\Module\Optimization\Asset\Setting; class Minify extends Common { protected array $enables = []; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\160\x74\137\x62\165\146\x66\x65\x72\137\160\162\157\143\145\163\x73"), [$this, "\x77\x61\x6d\x69\x69\x69\141\147\x63\167\167\151\x67\165\143\165"], 50); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { if (!$this->weysguygiseoukqw(Setting::ccoaqmuiqioqaooa, false)) { goto yuimwyoywaiiqacs; } if (!$this->weysguygiseoukqw(Setting::sikyekqowskqiqga)) { goto ikuuiauwouuqawuw; } HTML::symcgieuakksimmu(); ikuuiauwouuqawuw: if (!$this->weysguygiseoukqw(Setting::ykqawckyqkmqiamq)) { goto yoqakewookqoqacm; } CSS::symcgieuakksimmu(); yoqakewookqoqacm: if (!$this->weysguygiseoukqw(Setting::eumicecccemicqey)) { goto gswcoeiisamakwii; } JS::symcgieuakksimmu(); gswcoeiisamakwii: yuimwyoywaiiqacs: } public function wamiiiagcwwigucu(?string $nsmgceoqaqogqmuw) : ?string { $qsucisggsqskmcse = [Setting::eumicecccemicqey => JS::symcgieuakksimmu(), Setting::ykqawckyqkmqiamq => CSS::symcgieuakksimmu(), Setting::sikyekqowskqiqga => HTML::symcgieuakksimmu()]; foreach ($qsucisggsqskmcse as $amakmumgguksgmum => $aksgkeoomwimawms) { if (!($this->weysguygiseoukqw($amakmumgguksgmum, false) && $aksgkeoomwimawms instanceof AbstractMinify)) { goto iwsmmkqaoksmocok; } $nsmgceoqaqogqmuw = $aksgkeoomwimawms->okuguyacggsageqq($nsmgceoqaqogqmuw); iwsmmkqaoksmocok: emqswoaawgeyosmi: } ocywegekakimmwcq: return $nsmgceoqaqogqmuw; } }
