<div class="container">
    <?= $this->Form->create('hoge');?>
    <form class="form-horizontal">
        <div class="form-group">
              <?= $this->Form->input('hoge', [
                  'label' => false,
                  'class' => 'form-control',
                  'placeholder' => '住所や施設を入力',
                  'error' => false,
              ]); ?>
        </div>
        <?= $this->Form->submit('検索する', ['class' => 'center-block btn btn-info']); ?>
    </form>
</div>
