<html>
<head>
    <title>Лаба №1</title>
    <script language="javascript" type="text/javascript" src="/js/jquery.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.canvaswrapper.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.colorhelpers.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.saturated.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.browser.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.drawSeries.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.errorbars.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.uiConstants.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.logaxis.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.symbol.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.flatdata.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.navigate.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.fillbetween.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.stack.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.touchNavigate.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.hover.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.touch.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.time.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.axislabels.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.selection.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.composeImages.js"></script>
    <script language="javascript" type="text/javascript" src="/js/jquery.flot.legend.js"></script>
    <script language="javascript" type="text/javascript" src="/js/script.js"></script>
    <style>
        form{
            float: right;
            box-shadow: 0 0 2px #777;
            padding: 9px;
            margin: 1em;
            border-radius: 1em;
            background: #eee;
            font-family: trebuchet ms;
            font-size: 13px;
            text-shadow: 1px 1px 2px #fed;
            color: #777
        }
        body{
            max-width: 999px;
            margin: 0 auto
        }
        input{
            border-radius: 5px;
            max-width: 4em
        }
        p{
            text-align: right
        }
        .graph{
            display: inline-block;
            width: 600px;
            height: 300px
        }
    </style>
</head>
<body>
    <div class="graph"></div>
    <form method="post">
        <p>Количество частиц: <input type="number" min="1" max="100" class="n" required> %</p>
        <p>Связность среды: <input type="number" min="1" max="100" class="v" required> %</p>
        <p>Шаг времени: <input type="number" min="1" max="100" class="t" required> %</p>
        <p>Длина элементов: <input type="number" min="1" max="100" class="h" required> %</p><br>
        <p>Начальное смещение: <input type="number" min="1" max="100" class="gap" required></p>
        <p>Номер итерации: <input type="number" min="1" max="100" class="k" required></p>
        <p><input type="submit" value="ОК" class="ok"></p>
    </form>
</body>
</html>