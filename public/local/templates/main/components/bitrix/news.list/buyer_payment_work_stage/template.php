<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

if (empty($arResult['mapCards'])) {
    return;
}
?>
<section class="section mb-medium">
    <div class="container">
        <div class="work-stage-container">
            <?foreach ($arResult['mapCards'] as $aItem) :?>
                <div class="work-stage">
                    <div class="work-stage__header">
                        <?if (!empty($aItem['icon'])) :?>
                            <div class="work-stage__icon">
                                <img src="<?=$aItem['icon']?>"/>
                            </div>
                        <?endif;?>
                    </div>
                    <div class="work-stage__text">
                        <div class="work-stage__title"><?=$aItem['title'] ?? ''?></div>
                        <div class="work-stage__description"><?=$aItem['description'] ?? ''?></div>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </div>
</section>
