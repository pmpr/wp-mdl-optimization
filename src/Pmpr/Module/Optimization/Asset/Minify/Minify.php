<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642bcfa634da4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Asset\Minify; use Pmpr\Module\Optimization\Asset\Setting; class Minify extends Common { protected array $enables = []; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\164\137\x62\x75\x66\x66\x65\x72\137\x70\162\157\x63\x65\163\163"), [$this, "\x77\x61\x6d\x69\151\151\x61\x67\x63\167\167\x69\147\x75\143\165"], 50); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { if (!$this->weysguygiseoukqw(Setting::ccoaqmuiqioqaooa, false)) { goto sguskaeaaqcagqgc; } if (!$this->weysguygiseoukqw(Setting::sikyekqowskqiqga)) { goto egmayaiikwsskgmy; } HTML::symcgieuakksimmu(); egmayaiikwsskgmy: if (!$this->weysguygiseoukqw(Setting::ykqawckyqkmqiamq)) { goto ucuoeymyqeokgsya; } CSS::symcgieuakksimmu(); ucuoeymyqeokgsya: if (!$this->weysguygiseoukqw(Setting::eumicecccemicqey)) { goto yuuyikiacmmueosu; } JS::symcgieuakksimmu(); yuuyikiacmmueosu: sguskaeaaqcagqgc: } public function wamiiiagcwwigucu(?string $nsmgceoqaqogqmuw) : ?string { $qsucisggsqskmcse = [Setting::eumicecccemicqey => JS::symcgieuakksimmu(), Setting::ykqawckyqkmqiamq => CSS::symcgieuakksimmu(), Setting::sikyekqowskqiqga => HTML::symcgieuakksimmu()]; foreach ($qsucisggsqskmcse as $amakmumgguksgmum => $aksgkeoomwimawms) { if (!($this->weysguygiseoukqw($amakmumgguksgmum, false) && $aksgkeoomwimawms instanceof AbstractMinify)) { goto oocuemosmeeekgas; } $nsmgceoqaqogqmuw = $aksgkeoomwimawms->okuguyacggsageqq($nsmgceoqaqogqmuw); oocuemosmeeekgas: syuaummumssgwwee: } agkmiayuawacakau: return $nsmgceoqaqogqmuw; } }
