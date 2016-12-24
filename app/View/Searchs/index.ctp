<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<div class="container">
    <!-- 処理をController側でやるバージョン -->
    <form class="form-horizontal">
        <div class="form-group">
            <label>地名を入力</label>
            <input type="text" name="adress" class="form-control">
        </div>
        <button class="center-block btn btn-primary" type="submit">検索する</button>
    </form>

    <?php if(isset($obj['response']['error'])) :?>
        <?php if($obj['response']['error'] == "Parameter 'keyword' is missing.") :?>
            <p>フォームに検索したい地名を入力して下さい</p>
        <?php else :?>
            <p>「<?= $adress; ?>」では何も見つかりませんでした</p>
        <?php endif; ?>
    <?php else :?>
        <div class="col-md-6">
            <h3>検索結果</h3>
            <table class="table">
                <tbody>
                  <tr>
                    <th scope="row">都道府県</th>
                    <td scope="row"><?= $obj['response']['location'][0]['prefecture']; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">市/区</th>
                    <td scope="row"><?= $obj['response']['location'][0]['city']; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">町/村</th>
                    <td scope="row"><?= $obj['response']['location'][0]['town']; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">地図</th>
                    <td scope="row">
                        <a target="_blank" href="http://maps.google.co.jp/maps?q=<?= $obj['response']['location'][0]['y']; ?>,<?= $obj['response']['location'][0]['x']; ?>">
                            別ウィンドウで開く
                        </a>
                    </td>
                  </tr>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>
