<?php error_reporting(E_ALL^E_NOTICE); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>LEARN WORDS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="./assets/css/learn.css">
</head>

<body class="landing">
            <div id="page-wrapper">

    <br>    <br>    <br>    <br><br>    <br>    <br>    <br>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="search d7">
            <div>
                <input id="queryinput" type="text" name="query" placeholder="Search from here ...">
                <button id="querybtn"></button>
            </div>
        </div>
        <div class="result" id="data">
        </div>
    </div>

    <div id="main">
        <span style="font-size:30px;cursor:pointer" class="fa fa-search" onclick="openNav()"></span>
    </div>

<!-- 左右箭號 -->
<div class="arrows">
    <span title="1" class="arrow" style="float: left"></span>
    <span title="0" class="arrow" style="float: right"></span>
</div>
<div class="main_div" style="margin:0 auto">

<!-- 單字卡 -->
   <ul class="ul_word">       
        <li class="li_word">           
            <div class="card">                
                <div class="card-inner">
                    <h1>WORD 1</h1>
                    <div class="buttonbar">
                        <button class="play" value="0"></button>
                    </div> 
                </div>
            </div>
        </li>
        <li class="li_word">
            <div class="card">
                <div class="card-inner">
                    <h1>WORD 2</h1>
                    <div class="buttonbar">
                        <button class="play" value="1"></button>
                    </div> 
                </div>
            </div>
        </li>
        <li class="li_word">
            <div class="card">
                <div class="card-inner">
                    <h1>WORD 3</h1>
                    <div class="buttonbar">
                        <button class="play" value="2"></button>
                    </div>
                </div> 
            </div>
        </li>
        <li class="li_word">
            <div class="card">
                <div class="card-inner">
                    <h1>WORD 4</h1>
                    <div class="buttonbar">
                        <button class="play" value="3"></button>
                    </div>
                </div>
            </div>
        </li>
        <li class="li_word">
            <div class="card">
                <div class="card-inner">
                    <h1>WORD 5</h1>
                    <div class="buttonbar">
                        <button class="play" value="4"></button>
                    </div>
                </div>
            </div>
        </li>
        <li class="li_word">
            <div class="card">
                <div class="card-inner">
                    <h1>WORD 6</h1>
                    <div class="buttonbar">
                        <button class="play" value="5"></button>
                    </div>
                </div>
            </div>
        </li>
        <li class="li_word">
            <div class="card">
                <div class="card-inner">
                    <h1>WORD 7</h1>
                    <div class="buttonbar">
                        <button class="play" value="6"></button>
                    </div>
                </div>
            </div>
        </li>
        <li class="li_word">
            <div class="card">
                <div class="card-inner">
                    <h1>WORD 8</h1>
                    <div class="buttonbar">
                        <button class="play" value="7"></button>
                    </div>
                </div>
            </div>
        </li>
        <li class="li_word">
            <div class="card">
                <div class="card-inner">
                    <h1>WORD 9</h1>
                    <div class="buttonbar">
                        <button class="play" value="8"></button>
                    </div>
                </div>
            </div>
        </li>
        <li class="li_word">
            <div class="card">
                <div class="card-inner">
                    <h1>WORD 10</h1>
                    <div class="buttonbar">
                        <button class="play" value="9"></button>
                    </div>
                </div>
            </div>
        </li>
   </ul>


    <!-- 下方按鈕 -->
    <div style="margin: 0 auto">
        <div class="div_btn">1</div>
        <div class="div_btn">2</div>
        <div class="div_btn">3</div>
        <div class="div_btn">4</div>
        <div class="div_btn">5</div>
        <div class="div_btn">6</div>
        <div class="div_btn">7</div>
        <div class="div_btn">8</div>
        <div class="div_btn">9</div>
        <div class="div_btn">10</div>
    </div>

</div>

</body>

<script>
    //跑动的次数
    var count = 0;
    //动画的执行方向
    var isgo = false;
    //定义计时器对象
    var timer;

    window.onload = function () {
        /*获取ul元素*/
        var ul_word = document.getElementsByClassName("ul_word")[0];
        //获取所有的li图片元素
        var li_word = document.getElementsByClassName("li_word");
        //获取控制方向的箭头元素
        var arrow = document.getElementsByClassName("arrow");
        //获取所有按钮元素
        var div_btn = document.getElementsByClassName("div_btn");
        div_btn[0].style.backgroundColor = "#2F4C4C";


        /*定义计时器，控制图片移动*/
        showtime();
        function showtime() {
            timer = setInterval(function () {
                if (isgo == false) {
                    count++;
                    ul_word.style.transform = "translate(" + -550 * count + "px)";
                    if (count >= 10 - 1) {
                        count = 10 - 1;
                        isgo = true;
                    }
                }
                else {
                    count--;
                    ul_word.style.transform = "translate(" + -550 * count + "px)";
                    if (count <= 0) {
                        count = 0;
                        isgo = false;
                    }
                }

                for (var i = 0; i < 10; i++) {
                    div_btn[i].style.backgroundColor = "#fb9f8b";
                }

                div_btn[count].style.backgroundColor = "#2F4C4C";

            }, 30000)
        }

        /*鼠标进入左右方向键操作*/
        for (var i = 0; i < arrow.length; i++) {
            //鼠标悬停时
            arrow[i].onmouseover = function () {
                //停止计时器
                clearInterval(timer);
            }
            //鼠标离开时
            arrow[i].onmouseout = function () {
                //添加计时器
                showtime();
            }
            arrow[i].onclick = function () {
                //区分左右
                if (this.title == 0) {
                    count++;
                    if (count > 9) {
                        count = 0;
                    }
                }
                else {
                    count--;
                    if (count < 0) {
                        count = 9;
                    }
                }

                ul_word.style.transform = "translate(" + -550 * count + "px)";

                for (var i = 0; i < 10; i++) {
                    div_btn[i].style.backgroundColor = "#fb9f8b";
                }
                div_btn[count].style.backgroundColor = "#2F4C4C";
            }
        }

        //鼠标悬停在底部按钮的操作
        for (var b = 0; b < 10; b++) {
            div_btn[b].index = b;
            div_btn[b].onmouseover = function () {

                clearInterval(timer);

                for (var a = 0; a < 10; a++) {
                    div_btn[a].style.backgroundColor = "#fb9f8b";
                }
                div_btn[this.index].style.backgroundColor = "#2F4C4C";
                //让count值对应
                //为了控制方向
                if (this.index == 3) {
                    isgo = true;
                }
                if (this.index == 0) {
                    isgo = false;
                }
                count = this.index;
                ul_word.style.transform = "translate(" + -550 * this.index + "px)";
            }
            div_btn[b].onmouseout = function () {
                //添加计时器
                showtime();
            }
        }
    }

function openNav() {
    document.getElementById("mySidenav").style.width = "350px";
    document.getElementById("main").style.marginLeft = "350px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}

var text = document.getElementById("data");
var data = document.createElement("h3"); 
var data1 = document.createTextNode("Here is your data that was returned from your source");
data.appendChild(data1);
text.appendChild(data);

</script>
<script src="./assets/js/bridge.js"></script>

</html>


