<html>
<body>
  <?php
    if (isset($_REQUEST['email']))
    //如果已经输入邮件
      {
        $email = $_REQUEST['email'] ; 
        $subject = $_REQUEST['subject'] ;
        $message = $_REQUEST['message'] ;
        $verify = mail( $email, "$subject", $message, "From: 1786524543@qq.com" );
        // echo $verify;
        echo "邮件发送成功。";
      }
    else
    // 如果没有输入邮件
      {
        echo "<form method='post' action='email.php'>
        收件人: <input name='email' type='text' readonly='readonly' value='linzhifen5@163.com'/><br/>
        标题: <input name='subject' type='text' readonly='readonly' value='php测试邮件'/><br/>
        内容:<br/>
        <textarea name='message' rows='15' cols='40'>
        </textarea><br/>
        <input type='submit'/>
        </form>";
      }
      // 添加了xxxx
  ?>
</body>
</html>