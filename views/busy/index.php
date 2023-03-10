<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Countries</h1>
<ul>
<?php foreach ($pages as $page): ?>
    <li>
        <img src="<?=$page->cover;?>" alt="">
        <?= Html::encode("{$page->name} ({$page->title})"); ?>:
        
        <h2>Цена: <?=$page->price;?></h2>
        <h3>Цена2: <?=$page->sale;?></h3>
        <h4>Цена3: <?=$page->dsale;?></h4>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>