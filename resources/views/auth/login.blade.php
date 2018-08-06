<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="Content-Style-Type" content="text/css"/>
        <meta http-equiv="Content-Script-Type" content="text/javascript"/>
        <style media="all">
            *{
                padding:0;
                margin:0
            }
            body{
                font-family:'ヒラギノ角ゴ Pro W3','Hiragino Kaku Gothic Pro','メイリオ',Meiryo,'ＭＳ Ｐゴシック',sans-serif;
                color:#fff;
                line-height:20px;
                letter-spacing:.08em;
                background-color:#e6e3d9;
                font-size:12px;
            }
            #login{
                position:absolute;
                width:100%;
                height:280px;
                top:40%;
                left:auto;
                background-image:url(images/login_back.gif);
                background-repeat:repeat-x;
                background-position:center top;
                margin-top:-140px;
                margin-right:auto;
                margin-bottom:0;
                margin-left:auto;
                right:auto
            }
            #login .rogo{
                font-size:16px
            }
            h1{
                font-size:10px;
                padding-top:23px;
                font-weight:normal;
                height:70px;
                text-align:left;
                padding-left:10px
            }
            #content{
                height:280px;
                width:170px;
                margin-right:auto;
                margin-left:auto
            }
            #form_h{
                height:130px;
                font-size:10px;
                padding-left:10px
            }
            #form_h .tex1{
                width:100%
            }
            input{
                margin-bottom:8px
            }
        </style>
        <title>管理画面ログイン</title>
    </head>

    <body>
    	<div id="login">
    		<div id="content">
                <h1 align="center">管理ページ<br/><span class="rogo">モダンスタンダード </span></h1>
                <form method="post" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                	@csrf
                	<div class="login_pass">
                		<div id="form_h">
                    		ログインID　<br/>
                    		<input type="text" class="input_login" name="email" value="{{ old('email') }}" required autofocus /><br/>
                    		パスワード<br/>
                    		<input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required />
                		</div>
                		<p align="center">
                			<input type="image" src="/images/login-bot.gif" alt="ログイン"/>
            			</p>
                	</div>
                </form>
            </div>
        </div>
    </body>
</html>