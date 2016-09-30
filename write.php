<?php
  $conn = mysqli_connect("localhost", "root", 111111);        // 서버 접속
  mysqli_select_db($conn, "opentutorials");                   // DB 선택
  $result = mysqli_query($conn, "SELECT * FROM topic");       // 조회

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/style.css">
  </head>
  <body id="target">
    <header>
      <img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="생활코딩">
      <h1><a href="http://localhost:8080/index.php">JavaScript</a></h1>
    </header>
    <nav>
      <ol>
        <?php
          while($row = mysqli_fetch_assoc($result)){
            echo '<li><a href="http://localhost:8080/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
          }
        ?>
      </ol>
    </nav>
    <div id="control">
      <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
      <input type="button" value="black" onclick="document.getElementById('target').className='black'"/>
      <a href="http://localhost:8080/write.php">쓰기</a>
    </div>
    <article>
      <form action="process.php" method="POST">
        <p>
          제목: <input type="text" name="title">
        </p>
        <p>
          작성자: <input type="text" name="author">
        </p>
        <p>
          본문: <textarea name="description"></textarea>
        </p>
        <input type="submit" name="name">
      </form>

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/57eb2372bb785b3a47cd9af4/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
      </article>
  </body>
</html>
