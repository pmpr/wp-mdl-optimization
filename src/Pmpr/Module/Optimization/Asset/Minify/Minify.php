<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63921303a86c0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Minify; use Pmpr\Module\Optimization\Asset\Setting; class Minify extends Common { protected array $enables = []; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\x74\x5f\142\165\146\146\x65\x72\137\160\162\x6f\143\145\163\x73"), [$this, "\x77\141\x6d\x69\151\151\141\x67\143\x77\x77\151\x67\165\143\165"], 50); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { if (!$this->weysguygiseoukqw(Setting::ccoaqmuiqioqaooa, false)) { goto ggwcauaeuagekeyo; } if (!$this->weysguygiseoukqw(Setting::sikyekqowskqiqga)) { goto qesqgumuouyymcwa; } HTML::symcgieuakksimmu(); qesqgumuouyymcwa: if (!$this->weysguygiseoukqw(Setting::ykqawckyqkmqiamq)) { goto csyoimsqgwcmiwki; } CSS::symcgieuakksimmu(); csyoimsqgwcmiwki: if (!$this->weysguygiseoukqw(Setting::eumicecccemicqey)) { goto ggqwcqssoauckuic; } JS::symcgieuakksimmu(); ggqwcqssoauckuic: ggwcauaeuagekeyo: } public function wamiiiagcwwigucu(?string $nsmgceoqaqogqmuw) : ?string { $qsucisggsqskmcse = [Setting::eumicecccemicqey => JS::symcgieuakksimmu(), Setting::ykqawckyqkmqiamq => CSS::symcgieuakksimmu(), Setting::sikyekqowskqiqga => HTML::symcgieuakksimmu()]; foreach ($qsucisggsqskmcse as $amakmumgguksgmum => $aksgkeoomwimawms) { if (!($this->weysguygiseoukqw($amakmumgguksgmum, false) && $aksgkeoomwimawms instanceof AbstractMinify)) { goto yyamycyesguwueuw; } $nsmgceoqaqogqmuw = $aksgkeoomwimawms->okuguyacggsageqq($nsmgceoqaqogqmuw); yyamycyesguwueuw: waewaiuiogywqigu: } mmkoqmccusoeaoyi: return $nsmgceoqaqogqmuw; } }
