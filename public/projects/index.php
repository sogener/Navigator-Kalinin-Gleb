<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

$APPLICATION->IncludeComponent(
    'iqdev:projects.news',
    '.default',
    [
        "SEF_FOLDER" => "/projects/",
        "SEF_MODE" => "Y",
        "SEF_URL_TEMPLATES" => ["detail" => "#ELEMENT_ID#/"],
    ]
);
?>
    <section class="section mt-medium mb-medium">
        <div class="container">
            <div class="section-header">Коттеджные поселки на карте</div>
            <div class="map-villages js-map-villages">
                <div class="map-villages__ya" id="map-villages__ya"></div>
            </div>
        </div>
    </section>
<?php
$APPLICATION->IncludeComponent(
    'iqdev:projects.accordion',
    '.default',
    [
        'IBLOCK_ID' => IQDEV\Base\Helper::getIblockId('choose_cottage_village'),
        'IBLOCK_TYPE' => 'content',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
    ]
);

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');