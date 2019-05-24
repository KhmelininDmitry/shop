<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Редактирование валюты <?= $currency->title; ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= ADMIN; ?>/"><i class="fa fa-dashboard"></i> Главная</a>
        </li>
        <li><a href="<?= ADMIN; ?>/currency"><i class="fa fa-dollar"></i> Список валют</a></li>
        <li class="active">Редактирование</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?= ADMIN; ?>/currency/edit" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="title">Наименование валюты</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Наименование валюты"
                                   value="<?= h($currency->title); ?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="code">Код валюты</label>
                            <input type="text" name="code" class="form-control" id="code" placeholder="Код валюты"
                                   required data-error="Допускаются не более трех символов" pattern="^[a-zA-Z]{1,3}$"
                                   value="<?= h($currency->code); ?>" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="symbol_left">Символ слева</label>
                            <input type="text" name="symbol_left" class="form-control"  id="symbol_left" placeholder="Символ слева"
                                   value="<?= h($currency->symbol_left); ?>">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="symbol_right">Символ справа</label>
                            <input type="text" name="symbol_right" class="form-control"  id="symbol_right" placeholder="Символ справа"
                                   value="<?= h($currency->symbol_right); ?>">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="value">Значение</label>
                            <input type="text" name="value" class="form-control"  id="value" placeholder="Значение"
                                   required data-error="Допускаются цифры и десятичная точка" pattern="^[0-9.]{1,}$"
                                   value="<?= h($currency->value); ?>">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="value">
                                <input type="checkbox" name="base"<?php if ($currency->base) echo ' checked'?>>
                                Базовая валюта</label>
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="hidden" name="id" value="<?= $currency->id; ?>">
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<!-- /.content -->
