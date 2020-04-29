<header>
    <title>카카오톡 이모티콘</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</header>
<html>
    <body>
        <div id = "wrapper">
            <div class="flex left">
                <h1>이모티콘 업로드</h1>
                <h3>1대 1 비율의 파일만 가능!</h3>
                <img src="image/index_upload.png">
                <div id="subtitle">원하는대로!</div>
                <button class="btn-left" onclick="popup()">업로드 해보기!</button>
            </div>
            <div class="flex right">
                <h1>이모티콘 목록</h1>
                <h3>200+ 개의 사용가능한 이모티콘!</h3>
                <img src="image/index_icon.gif">
                <div id="subtitle">찰싹!</div>
                <a class="btn-right" href="list.php">목록 보러가기</a>
            </div>
        </div>
    </body>
    <div id="grey" onclick="exit()" ></div>
    <div id="popup">
        <h1>이모티콘 업로드하기</h1>
        <h3>끌어서 업로드하시거나, 버튼을 눌러 선택해주세요</h3>
        <div id="article"></div>
        <button class="btn-right popup" onclick="upload()">업로드</button>
        <button class="btn-right popup" onclick="file()">파일 올리기</button>
    </div>
</html>

<script src="js/index.js"></script>