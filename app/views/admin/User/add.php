<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Новый пользователь
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= ADMIN; ?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li><a href="<?= ADMIN; ?>/user">Список пользователей</a></li>
        <li class="active">Новый пользователь</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form method="post" action="/user/signup" role="form" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="login">Login</label>
                            <input type="text" name="login" class="form-control" id="login" placeholder="Login"
                                   value="<?= isset($_SESSION['form_data']['login']) ? $_SESSION['form_data']['login'] : ''; ?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="pasword">Password</label>
                            <input type="password" name="password" class="form-control" id="pasword" placeholder="Password"
                                   data-error="Пароль должен включать не менее 6ти символов" data-minlength="6"
                                   value="<?= isset($_SESSION['form_data']['password']) ? $_SESSION['form_data']['password'] : ''; ?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="name">Имя</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Имя"
                                   value="<?= isset($_SESSION['form_data']['name']) ? $_SESSION['form_data']['name'] : ''; ?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                                   value="<?= isset($_SESSION['form_data']['email']) ? $_SESSION['form_data']['email'] : ''; ?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control" id="address" placeholder="Address"
                                   value="<?= isset($_SESSION['form_data']['address']) ? $_SESSION['form_data']['address'] : ''; ?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="role" >
                                <option value="user">Пользователь</option>
                                <option value="admin">Администратор</option>
                            </select>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </div>
                </form>
                <?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
