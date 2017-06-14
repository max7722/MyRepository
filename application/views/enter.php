<?
if(!$form):?>
<h1>Вход в личный кабинет</h1>
<?endif;?>
<?

if(!$form):
?>
<form action="/enter" method="POST">
  Логин: &nbsp;<input type="text" name="login" value="<?=$login?>" /><br />
  Пароль: <input type="text" name="pass" value="<?=$pass?>" /><br />
  <input type="submit" value="Вход" />
</form>
<?else:?>
<h1>Личный кабинет пользователя <?=$userName?></h1>
<a href="/enter?out=1">Выйти из кабинета!</a>
<?endif;?>
