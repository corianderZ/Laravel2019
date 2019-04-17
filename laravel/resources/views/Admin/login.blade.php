<html>
    <head>
        <title>登录</title>
    </head>
    <body>
        <div>
            <form action="/checkLogin" method="post">
            {{ csrf_field() }}
                手机号：<input type="text" name="phone" maxlength="11"/>
                验证码：<input type="text" name="code"/>
                <input type="submit" value="提交"/>
            </form>
        </div>
    </body>
</html>