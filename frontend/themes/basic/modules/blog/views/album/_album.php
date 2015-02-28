<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\modules\blog\models\Album;

$albumUrl = Url::toRoute(['/blog/album/view', 'id' => $model['id']]);
$src = Album::getCoverPhoto($model['id'], $model['cover_id']);
$name = ($model['privilege_type'] != Album::TYPE_PUBLIC) ? '<i class="glyphicon glyphicon-lock"></i>'.Html::encode($model['name']) : Html::encode($model['name']) ;
?>
<div class="album-img">
	<a href="<?= $albumUrl ?>">
		<img src="<?= $src ?>" class="album-cover" alt="album-cover">
	</a>
</div>

<?= Html::a($name, $albumUrl) ?>