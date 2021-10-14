 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Cwatl | Игровая</title>
 </head>
 <body style="background-color:#d5e2f5"> 
  <p><a href="http://code.avait.ru/Чат.html">Чат</a></a></p>
 </body>
</html>
<head>

</head>
<body>
				
  Голод  <div id="divCounter"></div>
    <script type="text/javascript">
    if (sessionStorage.getItem("counter")) {
      if (sessionStorage.getItem("counter") >= 10) {
        var value = 0;
      } else {
        var value = sessionStorage.getItem("counter");
      }
    } else {
      var value = 0;
    }
    document.getElementById('divCounter').innerHTML = value;

    var counter = function () {
      if (value >= 100) {
        sessionStorage.setItem("counter", 0);
        value = 0;
      } else {
        value = parseInt(value) + 1;
        sessionStorage.setItem("counter", value);
      }
      document.getElementById('divCounter').innerHTML = value;
    };

    var interval = setInterval(counter, 1000000);
  </script>
  Здоровье 
 <p>0</p>
</body>

  <p><a href="http://www.yandex.ru">Моя страница</a></a></a></p>
<tbody><tr><td><br><div class="sources"><form method="post" name="mew_form" id="mew_form" action="#"> <table>  <tr><td>Что вы хотите сказать другим котам:
	<script language="JavaScript" type="text/javascript" src="https://comet-server.com/js/lib/jquery.min.js" ></script>
	<script language="JavaScript" type='text/javascript' src="https://comet-server.com/CometServerApi.js" ></script>
</head>
    <body>
        <div id="WebChatFormForm" ></div> 
        <input type="text" id="WebChatNameID" placeholder="Укажите ваше имя..." > <br>
        <textarea id = "WebChatTextID" placeholder = "Поговорите с котами..." ></textarea><br>
        
        <input type="button" onclick="web_send_msg();" value="Мяу" >
        <div id="answer_div" ></div>
        
        <script>
             // Отправляет сообщение в чат
             function web_send_msg()
             {
                 // Получение значений из элементов ввода.
                 var text = $("#WebChatTextID").val(); // Получаем текст сообщения
                 var name = $("#WebChatNameID").val(); // Получаем имя пользователя
                  
                 // Очистка поля с текстом сообщения
                 $("#WebChatTextID").val("");  
                 
                 // Добавление отправленного сообщения к списку сообщений.
                 $("#WebChatFormForm").append("<p><b>"+name+": </b>"+text+"</p>");
                 
                 // Отправка сообщения в канал чата
                 CometServer().web_pipe_send("web_chat_pipe", {"text":text, "name":name});
             }
             
                
             // Функция выполнится после загрузки страницы
             $(document).ready(function()
             {
                 CometServer().start({dev_id:19648}) // Подключаемся к комет серверу
                 
                 // Подписываемся на канал в который и будут отправляться сообщения чата.
                 CometServer().subscription("web_chat_pipe", function(msg)
                 {
                    console.log(msg)
                     // Добавление полученного сообщения к списку сообщений.
                     $("#WebChatFormForm").append("<p><b>"+msg.data.name+": </b>"+msg.data.text+"</p>");
                 });
             
                 // Подписываемся на канал в который и будут отправляться уведомления о доставке отправленных сообщений.
                 CometServer().subscription("#web_chat_pipe", function(p)
                 {
                    console.log(p)
                     $("#answer_div").html("Сообщение доставлено "+p.data.number_messages+" получателям. "+p.data.error);
                 });
             });
        </script>
        
       
    </body>
</html>
<h2>Действия</h2> 
<img id="image" src="note.png" onClick="imgsrc();">
    
</body>
				<a href="http://code.avait.ru/Поляна.html">Сделать переход</a>  <a href="http://code.avait.ru/Охоталис.html">Охота</a> <a href="http://code.avait.ru/Сторожевая%20Скала.html">Сделать переход</a>
		  <div align="left" style="overflow:auto;overflow-x:hidden;height:50px;border-top:1px solid gray" id="fights">Игра немного сломана, просьтите. </div></td></tr></tbody></table> </td></tr> <tr><td id="matab" style="padding:0"> <div class="object">

<img src="https://i.ibb.co/MRTVf5J/upload-2021-08-23-18-27-31-300.png" alt="" /></a>
<style>
				
				.object {

  

  width: 1000px;

  height: 1000px;

  margin: 10em auto;

  background-image: ("https://i.pinimg.com/originals/95/a3/fd/95a3fdae1be37a58f023ff1abf5a9f55.jpg") 

    padding: 50px;

  background-image: url("https://i.pinimg.com/originals/95/a3/fd/95a3fdae1be37a58f023ff1abf5a9f55.jpg");

  

  overflow: hidden;
  position: relative;

} 


</style>


Помогите
 <a href="https://m.vk.com/oblako72">меня</a> держут в рабстве создатели CWATL
