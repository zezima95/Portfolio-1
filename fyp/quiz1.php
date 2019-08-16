<?php include('functions.php');
    if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
    }
    ?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<head>
    <meta charset="utf-8" />
    <title>Name It Quiz</title>
</head>
<body>

    <style>
        #frame001 {
            background-color: white;
            border: 2px solid black;
            border-radius: 10px;
            width: 1265px;
            vertical-align: middle;
            height: auto;
            padding: 0px;
            margin: 50px auto;
        }
        #frame002{
            background-color: white;
            border: 2px solid white;
            border-radius: 10px;
            width: 905px;
            vertical-align: middle;
            height: auto;
            padding: 0px;
            margin: 50px auto;
        }

        #color001 {
            color: black;
            font-size: large;
            text-align: left;
        }

        #color002 {
            color: black;
            font-size: small;
            text-align: left;
        }

        #center001 {
            text-align: center;
        }

        .button001 {
            background-color: blue;
            color: white;
            border-radius: 10px;
            padding: 12px;
            cursor: pointer;
        }

        .button002 {
            width: 10px;
            height: 10px;
        }

        .box001 {
            float: left;
            width: 100px;
            height: 65px;
            margin: 12px 40px 0px 40px;
            padding: 10px 5px 0px 5px;
            border: 2px solid black;

        }

        .box002 {
            float: left;
            width: 80px;
            height: 15px;
            margin: 10px 60px 0px 40px;
            padding: 10px 5px 0px 5px;
            border: 1px solid white;
        }


.backgroundclr
{
    background-color: rgba(244, 194, 66,0.8);
    height: 100%
}
.navbar {
    overflow: hidden;
    background-color: rgba(0,0,0,0.8);
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
    </style>

<!-- NAVBAR PALING ATAS -->
<div class="navbar" >
  <a href="index.php">Home</a>
    <div class="dropdown">
    <button class="dropbtn">Lets Practice!
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="quiz1.php">Exercise 1</a>
    </div>

  </div> <!-- end of dropdown for Lets Practice!-->
  <div class="dropdown">
    <button class="dropbtn">Learning Content 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="userlearning.php">Lesson 1</a>
    </div>

  </div> <!-- End of dropdown for Learning Content-->
        <a href="upload1.html">Upload</a>
        <a href="download">Downloads</a>
        <div style="float: right;">
        <a href="index.php?logout='1'" style="color: white;">Logout <?php echo ucfirst($_SESSION['user']['username']); ?></a>
    </div> 
</div>
<!--END OF NAVBAR PALING ATAS-->
<!-- Add a background color and large text to the whole page -->
<div class="w3-container w3-yellow" >
  <div class="backgroundclr">
</div>

    <div id="frame001">
        <div id="frame002">        
            <div id="color001">
            <div id="center001" >
                        <h5 class="w3-center w3-padding"><span class="w3-tag w3-wide">ACTIVITY 1 /PINSINGUMBALAN KOISO</span> </h5>


            <p>Word Bank: <strong>Isai ngaran nu</strong>  -  <strong>Hombo (o) tadun nu</strong>  -  <strong>Hombo dika do tadon</strong>  -  <strong>Mantad oku id</strong>  -  <strong>Hilo id</strong>  -  <strong>Duwo nohopod</strong>  -  <strong>Tumur nu</strong></p></div>
               <p> <h5>These questions consist of answers shown above to fill in the blanks according to the right place.</h5></p><br></br>

             <p>Tan : Hai, iyoku nopo nga i Tan. <input type="text" class="check003" id="input001" size="19" /> ? <text class="button002" id="check001"></text>
            <p></p>

            Tim : Kopisanangan. Ngaran ku nopo nga i Tim. <input id="input002" size="19" /> ? <text class="button002" id="check002"></text>
           <p></p>

            Tan : Mantad oku id Johor. <input id="input003" size="19" /> ? <text class="button002" id="check003"></text><p></p>

            Tim : <input id="input004" size="19" /> Beaufort, Sabah. Hombo ko do poingiyon do hiti? <text class="button002" id="check004"> </text>
             <p></p>

            Tan : <input id="input005" size="19" /> Taman Kingfisher <text class="button002" id="check005"></text>.</p>

            Tim : Piro o <input id="input006" size="19" /> Tan ? <text class="button002" id="check006"></text></p>

            Tan : <input id="input007" size="19" /> o toun <text class="button002" id="check007"></text>.</p>

            <div id="disappear001"><div id="center001"><br></br><button class="button001" onclick="submit001()">Submit</button></div></div><br />
            <div id="center001"><p id="message001"></p><p id="reload001"></p></div>
                <br />
            <br />
            </div></div>

    </div>

    <!-- DRAG AND DROP QUIZ     -->
    <div id="frame001">
        <div id="color002">
            <div id="center001"> 
                <h5 class="w3-center w3-padding"><span class="w3-tag w3-wide">ACTIVITY 2 /PINSINGUMBALAN KODUWO</span> </h5>

                 <p> <h5>Drag and Drop these Kadazandusun phrase to boxes down below. Find the right match of these boxes to score marks.</h5></p><br></br>
    <p>Score: <text id="score001">0</text></p>

    <div class="box002" ondrop="drop001(event)">
        <text ondragstart="dragStart001(event)" draggable="true" id="target001">Tadau Koiso</text>
    </div>

    <div class="box002" ondrop="drop002(event)">
        <text ondragstart="dragStart002(event)" draggable="true" id="target002">Tadau Koduwo</text>
    </div>

    <div class="box002" ondrop="drop003(event)">
        <text ondragstart="dragStart003(event)" draggable="true" id="target003">Tadau Kotolu</text>
    </div>

    <div class="box002" ondrop="drop004(event)">
        <text ondragstart="dragStart004(event)" draggable="true" id="target004">Tadau Kaapat</text>
    </div>

    <div class="box002" ondrop="drop005(event)">
        <text ondragstart="dragStart005(event)" draggable="true" id="target005">Tadau Kolimo</text>
    </div>

    <div class="box002" ondrop="drop011(event)">
        <text ondragstart="dragStart006(event)" draggable="true" id="target006">Tadau Koonom</text>
    </div>

    <div class="box002" ondrop="drop012(event)">
        <text ondragstart="dragStart007(event)" draggable="true" id="target007">Tadau Kotoru</text>
    </div>
    <br /><br /><br /><br />

    <div class="box001" ondrop="drop006(event)" ondragover="allowDrop001(event)" id="place001">Monday</div>

    <div class="box001" ondrop="drop007(event)" ondragover="allowDrop002(event)" id="place002">Tuesday</div>

    <div class="box001" ondrop="drop008(event)" ondragover="allowDrop003(event)" id="place003">Wednesday</div>

    <div class="box001" ondrop="drop009(event)" ondragover="allowDrop004(event)" id="place004">Thursday</div>

    <div class="box001" ondrop="drop010(event)" ondragover="allowDrop005(event)" id="place005">Friday</div>

    <div class="box001" ondrop="drop013(event)" ondragover="allowDrop006(event)" id="place006">Saturday</div>

    <div class="box001" ondrop="drop014(event)" ondragover="allowDrop007(event)" id="place007">Sunday</div><br /><br /><br />
    <br></br>
    <div id="disappear002"><div id="center001"><button class = "button001" onclick="submit002()">Submit</button></div></div>
    <div id="center001"><p id="message002"></p><p id="reload002"></p></div>
    </div>
    </div>
     </div>

     
<!-- END DRAG AND DROP QUIZ-->
<!-- audio quiz-->
<div id="frame001">
    <div id="color001">
        <div id="center001">                
            <h5 class="w3-center w3-padding"><span class="w3-tag w3-wide">ACTIVITY 3 /PINSINGUMBALAN KOTOLU</span> </h5>
             <p> <h5>Listen to Kadazandusun phrase and write your answer based on what you heard from the audio</h5></p><br></br>

            <audio controls>
            <source src="/fyp/audio/hello.mp3" type="audio/mpeg"></audio><input type="text" id="input010" size="19"/><text class="button002" id="check010"></text> 
            <p></p> 
            
            <audio controls><source src="/fyp/audio/name.mp3" type="audio/mpeg"></audio><input id="input011" size="19" /><text class="button002" id="check011"></text><p></p> 
            
            <audio controls ><source src="/fyp/audio/mynameis.mp3" type="audio/mpeg"></audio><input id="input012" size="19" /><text class="button002" id="check012"></text><p></p>
           
           <audio controls ><source src="/fyp/audio/wherefrom3_.mp3" type="audio/mpeg"></audio><input id="input013" size="19" /><text class="button002" id="check013"></text>
             <p></p>
             
            <audio controls ><source src="/fyp/audio/imfrom.mp3" type="audio/mpeg"></audio><input id="input014" size="19" /><text class="button002" id="check014"></text>

            <div id="disappear003"><div id="center001"><br></br><button class="button001" onclick="submit003()">Submit</button></div></div><br />
            <div id="center001"><p id="message003"></p><p id="reload003"></p></div>
         </div>
    </div>
</div>-->

    <script>
        var g;
        var h;
        var i;
        var j;
        var k;
        var gg;
        var hh;
        function submit001() {
            x = input001.value;
            c = input002.value;
            d = input003.value;
            e = input004.value;
            f = input005.value;
            bb = input006.value;
            cc = input007.value;

            if (x == "Isai ngaran nu" || x == "isai ngaran nu") {
                g = 1;
                input001.value = x;
                check001.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input001.value = x;
                check001.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (c == "Hombo (o) tadun nu" || c == "hombo (o) tadun nu") {
                h = 1
                input002.value = c;
                check002.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input002.value = c;
                check002.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (d == "Hombo dika do tadon" || d == "hombo dika do tadon") {
                i = 1;
                input003.value = d;
                check003.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input003.value = d;
                check003.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (e == "Mantad oku id" || e == "mantad oku id") {
                j = 1;
                input004.value = e;
                check004.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input004.value = e;
                check004.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (f == "Hilo id" || f == "hilo id") {
                k = 1;
                input005.value = f;
                check005.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input005.value = f;
                check005.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (bb == "Tumur nu" || f == "tumur nu") {
                gg = 1;
                input006.value = bb;
                check006.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input006.value = bb;
                check006.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (cc == "Duwo nohopod" || cc == "duwo nohopod") {
                hh = 1;
                input007.value = cc;
                check007.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input007.value = cc;
                check007.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }


            if (g == 1 && h == 1 && i == 1 && j == 1 && k == 1 && gg == 1 && hh == 1) {
                message001.innerHTML = "Congratulation! You have successfully finished this quiz.";
                disappear001.innerHTML = "";
                reload001.innerHTML = "<div id=center001><button class=button001 onclick=repeat001()>Repeat</button></div>";
            }
            else {  
                message001.innerHTML = "Better luck next time!.";
                disappear001.innerHTML = "";
                reload001.innerHTML = "<div id=center001><button class=button001 onclick=repeat001()>Try again!</button></div>";

            }
        }
               function repeat001() {
                location.reload();
            }
    </script>
<!-- DRAG AND DROP SCRIPT -->
     <script>
    var b = 0;
    b++;
function dragStart001(event) {
    event.dataTransfer.setData("choice001", event.target.id);
}

function dragStart002(event) {
    event.dataTransfer.setData("choice002", event.target.id);
}

function dragStart003(event) {
    event.dataTransfer.setData("choice003", event.target.id);
}

function dragStart004(event) {
    event.dataTransfer.setData("choice004", event.target.id);
}

function dragStart005(event) {
    event.dataTransfer.setData("choice005", event.target.id);
}
function dragStart006(event) {
    event.dataTransfer.setData("choice006", event.target.id);
}
function dragStart007(event) {
    event.dataTransfer.setData("choice007", event.target.id);
}

function allowDrop001(event) {
    event.preventDefault();
}

function allowDrop002(event) {
    event.preventDefault();
}

function allowDrop003(event) {
    event.preventDefault();
}

function allowDrop004(event) {
    event.preventDefault();
}

function allowDrop005(event) {
    event.preventDefault();
}

function allowDrop006(event) {
    event.preventDefault();
}
function allowDrop007(event) { 
    event.preventDefault();
}

function drop006(event) {
    var data = event.dataTransfer.getData("choice001");
    event.target.appendChild(document.getElementById(data));
score001.innerHTML = b++;
        place001.innerHTML = "Tadau Koiso";
}

function drop007(event) {
    var data = event.dataTransfer.getData("choice002");
    event.target.appendChild(document.getElementById(data));
score001.innerHTML = b++;
        place002.innerHTML = "Tadau Koduwo";
}

function drop008(event) {
    var data = event.dataTransfer.getData("choice003");
    event.target.appendChild(document.getElementById(data));
score001.innerHTML = b++;
        place003.innerHTML = "Tadau Kotolu";
}

function drop009(event) {
    var data = event.dataTransfer.getData("choice004");
    event.target.appendChild(document.getElementById(data));
score001.innerHTML = b++;
        place004.innerHTML = "Tadau Kaapat";
}

function drop010(event) {
    var data = event.dataTransfer.getData("choice005");
    event.target.appendChild(document.getElementById(data));
score001.innerHTML = b++;
        place005.innerHTML = "Tadau Kolimo";
}
function drop013(event) {
    var data = event.dataTransfer.getData("choice006");
    event.target.appendChild(document.getElementById(data));
score001.innerHTML = b++;
        place006.innerHTML = "Tadau Koonom";
}
function drop014(event) {
    var data = event.dataTransfer.getData("choice007");
    event.target.appendChild(document.getElementById(data));
score001.innerHTML = b++;
        place007.innerHTML = "Tadau Kotoru";
}

function drop001(event) {
    event.preventDefault();
}

function drop002(event) {
    event.preventDefault();
}

function drop003(event) {
    event.preventDefault();

}

function drop004(event) {
    event.preventDefault();
}

function drop005(event) {
    event.preventDefault();
}

function drop011(event) {
    event.preventDefault();
}
function drop012(event) {
    event.preventDefault();
}

function submit002() {
if (b > 7) {
message002.innerHTML = "Congratulations.";
 disappear002.innerHTML = "";
reload002.innerHTML = "<div id=center001><button class=button001 onclick=repeat002()>Try again!</button></div>";
}

}

function repeat002() {
                location.reload();
            }
</script>
<!-- END DRAG AND DROP SCRIPT-->
<!-- AUDIO SCRIPT -->

<script>
        var q;
        var r;
        var s;
        var t;
        var u;
        function submit003() {
            l = input010.value;
            m = input011.value;
            n = input012.value;
            o = input013.value;
            p = input014.value;
            if (l == "Kopisanangan" || l == "kopisanangan") {
                q = 1;
                input010.value = l;
                check010.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input010.value = l;
                check010.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (m == "Isai ngaran nu" || m == "isai ngaran nu") {
                r = 1;
                input011.value = m;
                check011.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input011.value = m;
                check011.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (n == "ngaran ku nopo nga i" || n == "ngaran ku nopo nga i") {
                s = 1;
                input012.value = n;
                check012.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input012.value = n;
                check012.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (o == "Hombo tadon nu" || o == "hombo tadon nu") {
                t = 1;
                input013.value = o;
                check013.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input013.value = o;
                check013.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (p == "Mantad oku hilo id" || p == "mantad oku hilo id") {
                u = 1;
                input014.value = p;
                check014.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input014.value = p;
                check014.innerHTML = "<text class=button002>" + "✖" + "</text>";
            }

            if (q == 1 && r == 1 && s == 1 && t == 1 && u == 1) {
                message003.innerHTML = "Congratulation! You have successfully finished this quiz.";
                disappear003.innerHTML = "";
                reload003.innerHTML = "<div id=center001><button class=button001 onclick=repeat003()>Repeat</button></div>";
            }
            else {  
                message003.innerHTML = "Better luck next time!.";
                disappear003.innerHTML = "";
                reload003.innerHTML = "<div id=center001><button class=button001 onclick=repeat003()>Try again!</button></div>";

            }
        }
               function repeat003() {
                location.reload();
            }
    </script>

</body>
</html>