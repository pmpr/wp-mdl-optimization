<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62bb6169562a0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Purge\Plugin; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; class Woocommerce extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x6f\x6f\x63\157\155\155\x65\x72\x63\x65\x5f\165\x70\144\x61\x74\145\x64\137\160\x72\157\144\x75\x63\164\x5f\163\x74\157\143\153", [$this, "\141\143\x6b\143\x63\143\157\167\x6d\147\163\x63\x6f\x79\165\153"], PHP_INT_MAX)->qcsmikeggeemccuu("\167\x63\x5f\x61\146\164\145\x72\137\160\162\157\144\165\143\x74\x73\x5f\145\156\x64\x69\156\147\x5f\x73\x61\x6c\x65\163", [$this, "\155\x75\x69\147\151\x65\147\163\161\x61\x79\x6f\167\143\157\143"], PHP_INT_MAX)->qcsmikeggeemccuu("\x77\143\137\x61\146\x74\145\162\x5f\x70\162\x6f\x64\x75\143\164\163\x5f\x73\x74\x61\162\x74\x69\156\147\x5f\163\x61\x6c\x65\163", [$this, "\x6d\165\151\147\x69\145\147\x73\161\x61\171\x6f\167\143\x6f\143"], PHP_INT_MAX); } public function ackcccowmgscoyuk($product) { if (!function_exists("\167\143\137\x67\x65\x74\x5f\x6f\x72\144\145\162")) { goto qsyqcokomswykyso; } $auwuoyyagaiegwae = []; if (!($suaemuyiacqyugsm = DecoratorWoocommerce::imsiwqgqaeceoomu("\163\x68\157\160"))) { goto iwosouqsesoqcska; } $auwuoyyagaiegwae[] = $this->ycqquoiyyuesegsy($suaemuyiacqyugsm); iwosouqsesoqcska: $eyscsimwcyaqakqg = wc_get_product_cat_ids($product); foreach ($eyscsimwcyaqakqg as $guwumyyyakswawas) { $auwuoyyagaiegwae[] = $this->qmgcisuuikgmqcsu($guwumyyyakswawas); wqmwcuggcisqieao: } iacwyogogoccmwsg: $auwuoyyagaiegwae = array_merge($auwuoyyagaiegwae, $this->cekqoisoaceaqiam($product)); $auwuoyyagaiegwae = array_unique($auwuoyyagaiegwae); $this->kggeaycqkokcquqk($auwuoyyagaiegwae); $this->oaumimwssciwumys("\120\x75\x72\147\145\40\160\x72\x6f\144\x75\x63\164\x20\x70\141\147\145\163\40\141\156\x64\40\x63\141\164\x65\x67\x6f\x72\x69\145\163\40\146\157\162\40\127\157\x6f\103\x6f\x6d\155\x65\x72\x63\x65\x20\x6f\162\x64\x65\162"); qsyqcokomswykyso: } public function muigiegsqayowcoc($iskcmykisgqeqkcy) { $auwuoyyagaiegwae = []; if (!(is_array($iskcmykisgqeqkcy) && $iskcmykisgqeqkcy)) { goto mssaawaiaimogowg; } foreach ($iskcmykisgqeqkcy as $product) { $migiiksoiymissge = $this->ycqquoiyyuesegsy($product); if (!$migiiksoiymissge) { goto yueosioyegouuwqo; } $auwuoyyagaiegwae[] = $migiiksoiymissge; yueosioyegouuwqo: yeiicwscguyokwyu: } issgmmkcgesyeoas: if (!$auwuoyyagaiegwae) { goto giuoqsumkimmuaya; } $this->kggeaycqkokcquqk($auwuoyyagaiegwae); giuoqsumkimmuaya: mssaawaiaimogowg: } }
