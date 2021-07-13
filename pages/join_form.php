<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome || Join</title>
</head>
<body>
  <form action="/zay/php/insert_mem.php" method="post" name="mem_form" enctype="multipart/form-data">
    <p>아이디 : <input type="text" name="mem_id"></p>
    <!-- 아이디 중복체크 -->
    <p>비밀번호 : <input type="password" name="mem_pass"></p>
    <p>비밀번호 확인 : <input type="password" name="mem_pass_check"></p>
    <p>프로필 사진 : <input type="file" name="mem_pf"></p>
    <p>이름 : <input type="text" name="mem_name"></p>
    <p>이메일 : <input type="text" name="mem_email"></p>

    <button type="button" id="submit_btn">제출</button>
  </form>

  <script>

    const submitBtn = document.querySelector("#submit_btn");

    submitBtn.addEventListener('click', function(){
      if(!document.mem_form.mem_id.value){
        alert('아이디를 입력해 주세요');
        document.mem_form.mem_id.focus();
        return;
      }

      if(!document.mem_form.mem_pass.value){
        alert('비밀번호를 입력해 주세요');
        document.mem_form.mem_pass.focus();
        return;
      }

      if(!document.mem_form.mem_pass_check.value){
        alert('비밀번호 확인을 입력해 주세요');
        document.mem_form.mem_pass_check.focus();
        return;
      }

      if(document.mem_form.mem_pass.value != document.mem_form.mem_pass_check.value){
        alert('비밀번호와 비밀번호 확인이 다릅니다.');
        document.mem_form.mem_pass_check.focus();
        return;
      }

      const extensions = ['jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG'];
      const imgValue = document.mem_form.mem_pf.value;
      const imgExt = imgValue.split('.');
      //console.log(imgExt[1]);

      if(!extensions.includes(imgExt[1])){
        alert('jpg, png, jpeg 형식의 이미지를 올려주세요.');
        return;
      }

      if(!document.mem_form.mem_name.value){
        alert('이름을 입력해 주세요');
        document.mem_form.mem_name.focus();
        return;
      }

      if(!document.mem_form.mem_email.value){
        alert('이메일을 입력해 주세요');
        document.mem_form.mem_email.focus();
        return;
      }

      document.mem_form.submit();
    });

  </script>
</body>
</html>