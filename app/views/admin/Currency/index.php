<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Список валют
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= ADMIN; ?>"><i class="fa fa-dashboard"></i> Главная</a>
        </li>
        <li class="active"><i class="fa fa-dollar"></i> Список валют
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Наименование</th>
                                <th>Код</th>
                                <th>Значение</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($currencies as $currency): ?>
                                <tr class="<?= $calass; ?>">
                                    <td><?= $currency->id; ?></td>
                                    <td><?= $currency->title; ?></td>
                                    <td><?= $currency->code; ?></td>
                                    <td><?= $currency->value; ?></td>
                                    <td>
                                        <a href="<?= ADMIN; ?>/currency/edit?id=<?= $currency->id; ?>"><i
                                                class="fa fa-fw fa-pencil"></i></a>
                                        <a class="delete" href="<?= ADMIN; ?>/currency/delete?id=<?= $currency->id; ?>"><i
                                                class="text-danger fa fa-fw fa-close"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
