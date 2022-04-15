<!DOCTYPE html>
<br lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/BMI.css')}}">
</head>

<body>
    <main>
        <div class="container">
            <div class="box1">
                <h3>BMI計算器</h3>
                <p>身體質量指數(Body Mass Index，簡稱BMI
                    )是公認用來估計肥胖程度的方法</p>
                <p>BMI = 體重(公斤) / 身高的平方(公尺)</p>
            </div>
            <div class="box2">
                <span>我的身高：<input type="text" name="" id="num1"> 公分</span>
                <span>我的體重：<input type="text" name="" id="num2"> 公斤</span>
                <button id="calc">計算</button><button id="reset">重新填寫</button></br>
                <div><label id="result" class="unknow" for=""></label></div>

            </div>
            <div class="box3">
                <table>
                    <tr>
                        <th colspan="4">BMI</th>
                    </tr>
                    <tr>
                        <th colspan="2"></th>
                        <th>男性</th>
                        <th>女性</th>
                    </tr>
                    <tr>
                        <td colspan="2">體重過輕</td>
                        <td>
                            <20 </td>
                        <td>
                            <19 </td>
                    </tr>
                    <tr>
                        <td colspan="2">正常範圍 </td>

                        <td>20-25</td>
                        <td>19-25</td>
                    </tr>
                    <tr>
                        <td colspan="2">體重過重</td>

                        <td>25-30</td>
                        <td>25-30</td>
                    </tr>
                    <tr>
                        <td colspan="2">肥胖</td>

                        <td>30-40</td>
                        <td>30-40</td>
                    </tr>
                    <tr>
                        <td colspan="2">病態肥胖</td>

                        <td>>40</td>
                        <td>>40</td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
    <script>
        var btn = document.querySelector('#calc');
        var reset = document.querySelector('#reset');
        var num1, num2;
        var result;

        btn.addEventListener('click', function () {
            num1 = document.querySelector('#num1').value;
            num2 = document.querySelector('#num2').value;
            result = (num2 * 1) / ((num1 / 100) ** 2);
            document.querySelector('#result').innerHTML = "你的BMI是" + "　　 " + result.toFixed(1) + "　　 " + "哦！";
        })

        reset.addEventListener('click', function () {
            num1 = document.querySelector('#num1');
            num2 = document.querySelector('#num2');
            result = document.querySelector('#result');
            num1.value = '';
            num2.value = '';
            result.value = '';
            result.innerHTML = '';
        })

    </script>
</body>

</html>
