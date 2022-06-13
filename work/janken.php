<head>
  <meta chara-set="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>じゃんけんゲーム</title>
</head>
<div class="container">
      <div class="d-flex justify-content-center">
        <img src="img/janken.png" width="400" />
      </div>
      <form class="d-flex justify-content-center" method="post" action="game.php">
        <div class="mt-3 col-5">
          <label for="user_name" class="form-label">ユーザー名</label>
          <input type="text" class="form-control" id="user_name" name="user_name">
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mt-3 pl-3 pr-3">始める</button>
          </div>
        </div>
      </form>
</div>
