<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<div class="container">
    <!-- 処理をController側でやるバージョン -->
    <form class="form-horizontal">
        <div class="form-group">
            <label>住所や施設名を入力</label>
            <input type="text" name="adress" class="form-control">
        </div>
        <button class="center-block btn btn-primary" type="submit">検索する</button>
    </form>

    <?php if($obj) :?>
        <h3>検索結果</h3>
        <table class="table">
            <tbody>
              <tr>
                <th scope="row">都道府県</th>
              </tr>
              <tr>
                <th scope="row">市</th>
              </tr>
              <tr>
                <th scope="row">区</th>
              </tr>
              <tr>
                <th scope="row">町村</th>
              </tr>
            </tbody>
        </table>
    <?php else :?>
        <p>なにもありません</p>
    <?php endif; ?>
</div>
