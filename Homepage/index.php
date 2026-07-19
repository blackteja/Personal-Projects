<?php
  /*
   * CI Company Homepage Project
   * 회사 홈페이지를 만들면서 이것저것 기술들을 적용해 본다.
   * 작성일은 2026년 6월 22일 월요일 14시 36분으로 기본적인 HTML 구문만 넣어놓는다.
  */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <title>CI Company Homepage</title>
</head>
<body>
  <header>
    <h2> header 영역 </h2>
    <a href="index.php"><img src="imgs/Logo.png" style="width: 50px; height: 50px;"></a>
    <navigaion>
      <h2> Navigaion 영역은 향후 태그를 확인해서 개편 </h2>
      <table>
        <thead>
          <th>Main</th>
          <th>About</th>
          <th>Portfolio</th>
          <th>Contact</th>
        </thead>
        <tbody>
          <td>Main</td>
          <td>내용작성 예정</td>
          <td>내용작성 예정</td>
          <td>내용작성 예정</td>
        </tbody>
      </table>
      <sidebar>
        <h2>사이드바 메뉴 영역도 일단은 추가</h2>
        <table>
          <thead>
            <th>Main</th>
            <th>About</th>
            <th>Portfolio</th>
            <th>Contact</th>
          </thead>
          <tbody>
            <td>main</td>
            <td>about</td>
            <td>Portfolio</td>
            <td>Contact</td>
          </tbody>
        </table>
      </sidebar>

    </navigation>
  </header>
  <main class="container">
    <h1> 홈페이지 제작이 위대한 한걸음이 될 수 있도록 힘내자! </h1>  
    <h2>Main Page에 대한 부분은 뭘로 작성하면 좋을까?</h2>
  </main>
  <article class="container">
    <h2>article 태그를 붙였는데 사용할지는 확실하지는 않다.</h2>
    <h3>각 콘텐츠를 어떻게 분할할지는 고민이 된다.</h3>
  </article>
  <footer>
    <h2> Footer 영역 </h2>
    <h3>Help : <a href="mailto:charlie@cicompany.co.kr">charlie@cicompany.co.kr</a></h3>
    <h3> © 2026 CI Company. All rights Reserved. </h3>
  </footer>
  <script>
    /*
     * Script는 여기에 작성한 뒤 js 파일로 분할
    */
  </script>
</body>
</html>