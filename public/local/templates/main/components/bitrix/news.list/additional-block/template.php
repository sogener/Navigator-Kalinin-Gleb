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

if (empty($arResult['ITEMS'])) {
    return;
}
?>

<?foreach ($arResult['ITEMS'] as $aItem) :?>
    <?if (!empty($aItem['NAME'])) :?>
        <h3><?= $aItem['NAME'] ?></h3>
    <? endif;?>
    <div class="detail-content__image">
        <?if (!empty($aItem['PREVIEW_PICTURE']['SRC'])) :?>
            <img class="img" src="<?= $aItem['PREVIEW_PICTURE']['SRC'] ?>"/>
        <? endif;?>
    </div>
    <?if (!empty($aItem['PREVIEW_TEXT'])) :?>
        <p><?= $aItem['PREVIEW_TEXT'] ?></p>
    <?endif;?>
    <ul>
        <?foreach ($aItem['PROPERTIES']['TEXT_PLUSES']['VALUE'] as $aText) :?>
            <?if (!empty($aText)) :?>
                <li><?= $aText ?></li>
            <?endif;?>
        <?endforeach;?>
    </ul>
<?endforeach;?>
