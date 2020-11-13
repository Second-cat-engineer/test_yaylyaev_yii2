<?php
//$this->title = 'showOne';
echo 'this is one article';

$this->registerCss('.container{background: #ccc;}');
?>

<?php $this->beginBlock('block1') ?>
    <h1>Заголовок страницы</h1>
<?php
if (isset($this->blocks['block1'])) {
    echo $this->blocks['block1'];
}
?>


<button class="btn btn-success" id="btn">click me..</button>

<?php
$js = <<< JS
    $('#btn').on('click', function (){
        $.ajax({
            url: '/test_yaylyaev_yii2/web/article/index',
            data: {test: 'saf'},
            type: 'POST',
            success: function (res){
                console.log(res);
            },
            error: function () {
                alert('Error!');
            }
        });
    });
JS;

$this->registerJs($js);
