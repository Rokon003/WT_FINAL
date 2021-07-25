<html>
    <head></head>
    <body>
        <form>
            <input id="uname" onkeyup="getVal(this)" type="text" placeholder="Username"><br>
            <span id ="op"></span></br>
            <input type="password" placeholder="Password"><br>
        </form>
        <button id="btn_g" onclick="ViewGoogle()">Login with Google</button>
        <span onmouse="viewInfo()" onmouseout="hideinfo()">aiub</span>
        <p id= "aiub_info" style= "display:none">
            American International University-Bangladesh, commonly known by its accronymAIUB, is an accredited private University     
        </p>
        <form id="g_form" style="display:none;">
            <input type="text" placeholder="gmail"><br>
            <input type="password" placeholder="gmail password"><br>
    
        </form>
        <script src="practicejs.js"></script>

    </body>
</html>