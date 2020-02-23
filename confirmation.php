<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>sample</title>
</head>

<body>

  <h2>問合せ内容</h2>

  <form action="mailto.php" method="post">
    <div class="element_wrap">
      <label>氏名</label>
      <p><?php echo $_POST['your_name']; ?></p>
    </div>
    <div class="element_wrap">
      <label>メールアドレス</label>
      <p><?php echo $_POST['email']; ?></p>
    </div>
    <div class="element_wrap">
      <label>お問い合わせ内容</label>
      <p><?php echo nl2br($_POST['contact']); ?></p>
    </div>
    <input type="submit" name="btn_back" value="戻る">
    <input type="submit" name="btn_submit" value="送信">
    <input type="hidden" name="your_name" value="<?php echo $_POST['your_name']; ?>">
    <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
    <input type="hidden" name="contact" value="<?php echo $_POST['contact']; ?>">
  </form>


</body>

</html>
