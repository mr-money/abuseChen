<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="renderer" content="webkit">
    <meta name="description" content="使用React、Redux、Immutable制作的俄罗斯方块"/>
    <meta name="keywords" content="俄罗斯方块,Tetris,React,Redux,Immuatble,JavaScript">
    <meta name="format-detection" content="telephone=no"/>
    <script>;(function () {
            var w = parseInt(window.screen.width), s = w / 640, u = navigator.userAgent.toLowerCase(),
                m = '<meta name="viewport" content="width=640,';
            if (/android (\d+\.\d+)/.test(u)) {
                if (parseFloat(RegExp.$1) > 2.3) m += 'minimum-scale=' + s + ',maximum-scale=' + s + ',';
            } else {
                m += 'user-scalable=no,';
            }
            m += 'target-densitydpi=device-dpi">';
            document.write(m);
        }());</script>
    <meta charset="UTF-8">
    <title>俄罗斯方块</title>
    <link href="<?= Yii::$app->request->baseUrl . '/tetris/docs/loader.css'; ?>" rel="stylesheet"/>
    <link href="<?= Yii::$app->request->baseUrl . '/tetris/docs/css-1.0.1.css'; ?>" rel="stylesheet"/>
</head>
<body>
<div id="root">
    <div class="load">
        <div class="loader">加载中...</div>
    </div>
</div>
<script type="text/javascript" src="<?= Yii::$app->request->baseUrl . '/tetris/docs/app-1.0.1.js'; ?>"></script>

</body>
</html>