<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801062d56cfb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Cache\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; abstract class Common extends Container { public function gusmkkagsgyegacm($eeamcawaiqocomwy, $syowsmcowosssaos = null) : string { $wkcwykowmmmwioqs = $this->isgmmgcaqsguwias()->asgqmkcukouykiie()->aisuyoiqugewaocg($eeamcawaiqocomwy); if ($syowsmcowosssaos) { switch ($syowsmcowosssaos) { case Constants::skogicecygyyskkq: $wkcwykowmmmwioqs .= '-mobile'; break; } } return "{$wkcwykowmmmwioqs}.html"; } public function ysuiqkgycmagqqyu(?string $eeamcawaiqocomwy, $syowsmcowosssaos = null) : bool { if (!$syowsmcowosssaos) { $smagieqmacsmsoyo = [Constants::mcaucuyeeiwsmmuy]; if (Constants::eqewsqmqmsiocaeg === $this->weysguygiseoukqw(Setting::egcsacmywomuowsc)) { $smagieqmacsmsoyo[] = Constants::skogicecygyyskkq; } foreach ($smagieqmacsmsoyo as $qsuygaucsawsekqe) { if (!$this->ysuiqkgycmagqqyu($eeamcawaiqocomwy, $qsuygaucsawsekqe)) { return false; } } $skqeckgiuieeusoy = true; } else { $skqeckgiuieeusoy = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->exists($this->cckisoakyqqgywey($eeamcawaiqocomwy, $syowsmcowosssaos)); } return $skqeckgiuieeusoy; } public function cckisoakyqqgywey($eeamcawaiqocomwy, $syowsmcowosssaos = null) : string { return "{$this->gskqygiceygcguyo()}/{$this->gusmkkagsgyegacm($eeamcawaiqocomwy, $syowsmcowosssaos)}"; } public function gskqygiceygcguyo() : ?string { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(HTML::ucgeywccqcsggsyw, ''); } public function smemquqkamygequg() : ?string { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::gyiksueiaeykqaqq, ''); } }
