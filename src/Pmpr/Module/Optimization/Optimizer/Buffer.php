<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c832ec5ea4f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer; use Exception; use Pmpr\Module\Optimization\Traits\HelperTrait as NativeHelperTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Module\Optimization\Optimizer\Buffer\Buffer as BaseClass; class Buffer extends BaseClass { use HookTrait, HelperTrait, WrapperTrait, NativeHelperTrait; const kgswyesggeyekgmg = 'pr_optimization_'; const scskcyisyowcuagq = self::kgswyesggeyekgmg . 'buffer_process'; protected ?string $id = 'optimization_process'; public function qqcykaeioiwwaqos() { if (!$this->wmgoigiyyeauqwaq()->gequwwueqseakeoq()) { $this->gwaoiqgsuaggegwc(); return; } ob_start([$this, 'oqcqkoqwcuoqusku']); } public function oqcqkoqwcuoqusku(string $moooemyaqewumiay) : string { $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . 'buffer_before_maybe_process', $moooemyaqewumiay); if ($this->qmyusgwkaqieouwi($moooemyaqewumiay)) { if ($this->wmgoigiyyeauqwaq()->ccmucyumocoyusaa($moooemyaqewumiay)) { $this->ewcsyqaaigkicgse('pr_opt_buffer_before_process', $moooemyaqewumiay); $this->log("optimization buffer process start."); try { if ($this->isgmmgcaqsguwias()->asgqmkcukouykiie()->iekaosoqsgqsysoo()) { $moooemyaqewumiay = (string) $this->ocksiywmkyaqseou(self::scskcyisyowcuagq, $moooemyaqewumiay); } else { $this->log('not allowed to start buffer_process'); } } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage(); $this->log("error on buffer optimization: {$uamcoiueqaamsqma}"); } } else { $moooemyaqewumiay = (string) $this->ocksiywmkyaqseou(self::kgswyesggeyekgmg . 'buffer_not_processed', $moooemyaqewumiay); } $this->ewcsyqaaigkicgse(self::kgswyesggeyekgmg . 'buffer_after_process', $moooemyaqewumiay); } return $moooemyaqewumiay; } }
