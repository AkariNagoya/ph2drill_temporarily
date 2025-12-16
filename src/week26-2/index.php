<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // TODO: ここにログアウト処理を書いてください
  // セッション変数を空の配列に設定して、すべてのセッションデータをクリア
  $_SESSION = array();

  // サーバ側のセッションを破棄
  session_destroy();

  // 画面遷移
  header('Location: ../week26-1/index.php');
  exit;
}
?>

<form action="." method="POST">
  <input type="submit" value="ログアウト">
</form>

<?php if (isset($_SESSION['id'])): ?>
  ログイン状態
<?php else: ?>
  ログアウト状態
<?php endif; ?>