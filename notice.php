<html>
    <head>
        <meta charset= "utf-8"/>
        <style type = "text/css">
            nstyle{
                color: #624b5b;
                font-family:나눔바른펜OTF;
                font-size:30px;

            }
        </style>
    </head>
    <body>
        <div id = "notice">
            <nstyle>
            <ul>
                <h2> 알림말 </h2>
                <li>안녕하세요, 집밥 레시피를 담은 사이트입니다.</li>
                <li>레시피 기준 1T는 1큰술이고, 1t는 1작은술을 의미합니다.</li>
                <li>매운 것을 못 드시는 분은 고춧가루 양을 줄이고, 청양고추를 빼는 것을 추천드립니다.</li>
                <li>모든 레시피는 4인분 기준으로 적혀있습니다. 양념을 비율대로 넣으시면 됩니다.</li>
                <li>요리하면서 레시피를 본인에 맞게 수정하시면 좋습니다.</li><p>
            <h3> 메뉴 바로가기 </h3>
            <form name = "test">
            <select name = "page" onChange = "loadPage()">
              <option value = "#">메뉴 선택</option>
              <option value = "1-1.php">등갈비김치찜</option>
              <option value = "1-2.html">삼계탕</option>
              <option value = "1-3.html">어묵탕</option>
              <option value = "1-4.html">오이냉국</option>
              <option value = "2-1.html">참치김치볶음밥</option>
              <option value = "2-2.html">스팸마요덮밥</option>
              <option value = "2-3.html">스테이크덮밥</option>
              <option value = "2-4.html">게살초밥</option>
              <option value = "3-1.html">제육볶음</option>
              <option value = "3-2.html">수육</option>
              <option value = "3-3.html">육전과 파절임</option>
              <option value = "3-4.html">닭볶음탕</option>
              <option value = "4-1.html">바지락칼국수</option>
              <option value = "4-2.html">골뱅이무침</option>
              <option value = "4-3.html">비빔국수</option>
              <option value = "4-4.html">비빔칼국수</option>
            </select>
          </form>
          <script type = "text/javascript">
            function loadPage()
            {
              var obj = document.test.page;
              location.href = obj.options[obj.selectedIndex].value;
            }
          </script>
          </ul>
            </nstyle>
        </div>
    </body>
</html>