<?php include __DIR__."./../template/header.php"?>
<form action="/auth" method="POST">
    <input type="text" name="email" required placeholder="email">
    <input type="password" name="password" required placeholder="password">
    <button >Entrar</button>
</form>