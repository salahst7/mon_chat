<html >
<head>
    <link rel="stylesheet" href="style3.css">
       <title>Discussion</title>
</head>
<body>
    <div class="container">
        <section class="discussion">
           <header>
            <a href="home.php"class="back_icon"><img src="img/arrow.svg" alt=""></a>
            <div class="detail">
                <span>Salah</span>
            </div>
           </header>
           <div class="chat_box">
<!-- <div class="text">
    <img src="img/avatar" alt="">
    <span>Pas de Messages.Veuillez Envoyer.</span>
</div> -->
<!--<div class="chat outgoing">
                    <div class="details">
                        <p>hi</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="img/avatar.png" alt="">
                    <div class="details">
                        <p>hi</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="img/avatar.png" alt="">
                    <div class="details">
                        <p><img src="img/avatar.png" alt=""></p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p><img src="img/avatar.png" alt=""></p>
                    </div>
                </div> -->
           </div>
           <form action="#"class="typing-area">
            <input type="text" name="incoming_id" class="incoming_id" hidden>
            <input type="text" name="message" class="input=field" placeholder="ecrire un message...">
            <button class="image"><img src="img/camera.svg" alt=""></button>
            <input type="text" name="send_image" accept="img/*" class="upload_img"hidden>
            <button class="send_btn"name="send_btn" ><img src="img/send.svg" alt=""></button>
           </form>
        </section>
    </div>
</body>
</html>