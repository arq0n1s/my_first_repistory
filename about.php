<?php
        $title = "Про нас";
        require_once("header.php");
?>
<hr><br>

<h1>Про нASS, or maybee npo вASS ..?</h1>
<div class="container mt-2">
<!-- get - transmite datele prin url - pentru ceva dinamic
     post - transmite datele scratno - tot timpul se foloseste pentru forme -->
    <form action="check_post.php" method="post" class="d-flex flex-column gap-2 w-10">
        <input type="text" name="username" placeholder="Введите имя" class="form-control">
        <input type="email" name="useremail" placeholder="Введите email" class="form-control">
        <input type="password" name="userpassword" placeholder="Введите пароль" class="form-control">
        <textarea name="message" placeholder="Введите сообщение/коментарий" class="form-control"></textarea>
        <input type="submit" value="Отправить" class="btn btn-primary">  
    </form>

</div>

<br><hr>
<?php      
    echo"we are the most popular IT-corporation. If u want catch the semen in ur mom, you can call us tonight";
    include_once("footer.php");  
?>