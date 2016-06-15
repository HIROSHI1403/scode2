<?php
    include_once dirname(__FILE__)."/../include/functions.php";
    include_once dirname(__FILE__)."/../include/templates/meta.php";
    include_once dirname(__FILE__)."/../include/templates/mainTemp.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <?php mainHtmlHead(); ?>
    </head>
    <body>
        <?php mainPageStart(); ?>

            <?php mainSidebarStart(); ?>
                <?php mainSidebar(); ?>
            <?php mainSidebarEnd(); ?>

            <?php mainContentStart(); ?>

                <?php mainContentMenu(); ?>
                <?php mainBreadcrumb("Task Control"); ?>
                <?php mainPageContentStart(); ?>
                <?php loginChk(); ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                <h2><span class="fa fa-tasks fa-fw"></span>&nbsp;Task Control</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <h4>
                                タスク追加
                                <?php if ($_GET['task_edit'] == 'yes'): ?>
                                    <span class="label label-success">編集中</span>
                                <?php endif ?>
                            </h4>
                            <div class="block">
                                <form action="./form_actions.php" method="POST" class="form-horizontal">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">名前</label>
                                        <div class="col-sm-9">
                                            <p class="form-control-static"><?php echo $_SESSION['s_name'] ?></p>
                                            <input type="hidden" name="F_sname" value="<?php echo $_SESSION['s_name']; ?>">
                                            <input type="hidden" name="F_scode" value="<?php echo $_SESSION['s_code']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">タイトル</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="F_task_title" class="form-control" value="<?php echo $_GET['task_title']; ?>" id="" placeholder="タスクタイトル" required>
                                            <span class="help-block"><span class="label label-danger">必須</span></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">詳細</label>
                                        <div class="col-sm-9">
<?php
    if ($_GET['task_edit'] == 'yes') {
        $result = mysqlConSql("SELECT * FROM stasks WHERE id = {$_GET['task_id']}");
        while ($row = $result->fetch_assoc()) {
            $task_body = h($row['task_body'],ENT_QUOTES,'UTF-8');
            echo<<<EOT
                <textarea name="F_task_body" rows="10" class="form-control" placeholder="タスクの詳細">{$task_body}</textarea>
EOT;
        }
    }else{
        echo<<<EOT
            <textarea name="F_task_body" rows="10" class="form-control" placeholder="タスクの詳細"></textarea>
EOT;
    }
?>
                                            <span class="help-block">詳細がない場合は空欄</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">ステータス</label>
                                        <div class="col-sm-9">
                                            <select name="F_task_status" class="form-control select" placeholder="選択してください。">
<?php
                                            if ($_GET['task_edit'] == 'yes'){
                                                for ($i=0; $i < 4; $i++) {
                                                    if ($i == 0) {
                                                        if ($_GET['status'] == $i) {
                                                            echo<<<EOT
                                                                <option value="{$i}" selected>開始</option>
EOT;
                                                        }else{
                                                            echo<<<EOT
                                                                <option value="{$i}">開始</option>
EOT;
                                                        }
                                                    }elseif ($i == 1) {
                                                        if ($_GET['status'] == $i) {
                                                            echo<<<EOT
                                                                <option value="{$i}" selected>中止</option>
EOT;
                                                        }else{
                                                            echo<<<EOT
                                                                <option value="{$i}">中止</option>
EOT;
                                                        }
                                                    }elseif ($i == 2) {
                                                        if ($_GET['status'] == $i) {
                                                            echo<<<EOT
                                                                <option value="{$i}" selected>完了</option>
EOT;
                                                        }else{
                                                            echo<<<EOT
                                                                <option value="{$i}">完了</option>
EOT;
                                                        }
                                                    }elseif ($i == 3) {
                                                        if ($_GET['status'] == $i) {
                                                            echo<<<EOT
                                                                <option value="{$i}" selected>失敗</option>
EOT;
                                                        }else{
                                                            echo<<<EOT
                                                                <option value="{$i}">失敗</option>
EOT;
                                                        }
                                                    }
                                                }
                                            }else{
                                                echo <<<EOT
                                                    <option value="0" selected>開始</option>
                                                    <option value="1">中止</option>
                                                    <option value="2">完了</option>
                                                    <option value="3">失敗</option>
EOT;
                                            }
?>
                                            </select>
                                            <span class="help-block"><span class="label label-danger">必須</span>&nbsp;登録時のステータスで、初期値は「開始」です。</span>
                                        </div>
                                    </div>
<?php if ($_GET['task_edit'] == 'yes'): ?>
    <div class="form-group">
        <label for="" class="col-sm-3 control-label">進捗</label>
        <div class="col-sm-9">
            <input type="number" name="F_task_status_vol" value="<?php echo $_GET['status_vol']; ?>" min="0" max="100">
            <span class="help-block">０〜１００の間で設定してください。</span>
        </div>
    </div>
<?php endif ?>
                                    <div class="form-group">
<?php if ($_GET['task_edit'] == 'yes'): ?>
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" name="F_task_update" class=" btn btn-warning" value="<?php echo $_GET['task_id']; ?>" onclick="return confirm('この内容でよろしいですか？');">タスク編集</button>
                                        </div>
<?php else : ?>
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" name="F_task_submit" class=" btn btn-success" value="<?php echo $_SESSION['s_code']; ?>" onclick="return confirm('この内容でよろしいですか？');">タスク追加</button>
                                        </div>
<?php endif ?>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <h4>タスク一覧</h4>
                            <div class="panel panel-default">
                                <div class="panel-heading ui-draggable-handle">
                                    <div class="panel-title-box">
                                        <h3>進行状況</h3>
                                        <span>各進行状況を確認できます。</span>
                                    </div>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body panel-body-table">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="25%">タイトル</th>
                                                    <th width="45%">詳細</th>
                                                    <th width="10%">ステータス</th>
                                                    <th width="10%">進行度</th>
                                                    <th width="10%">操作</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
    $result = mysqlConSql("SELECT * FROM stasks WHERE s_code = '{$_SESSION['s_code']}' ORDER BY id ASC;");
    while ($row = $result->fetch_assoc()) {
        $title_body = nl2br($row['task_body']);
        switch ($row['status']) {
            case 0:
                $status = "START";
                break;
            case 1:
                $status = "STOP";
                break;
            case 2:
                $status = "GOAL";
                break;
            case 3:
                $status = "FAILED";
                break;
            default:
                $status = "START";
                break;
        }
        echo<<<EOT
                                                <tr>
                                                    <td><strong>{$row['task_title']}</strong></td>
                                                    <td><small>{$title_body}</small></td>
                                                    <td><span class="label label-info">{$status}</span></td>
                                                    <td>
                                                        <div class="progress progress-small progress-striped active">
                                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: {$row['status_vol']}%;">{$row['status_vol']}%</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                            <form action="./form_actions.php" method="POST">
                                                                <a href="{$rpsc}task.php?task_edit=yes&task_id={$row['id']}&status={$row['status']}&status_vol={$row['status_vol']}&task_title={$row['task_title']}&task_body={$row['task_body']}" class="btn btn-primary btn-xs"><span class="fa fa-edit fa-fw"></span></a>
                                                                <button type="submit" name="F_del" value="{$row['id']}" class="btn btn-danger btn-xs"><span class="fa fa-trash-o fa-fw"></span></button>
                                                            </form>
                                                    </td>
                                                </tr>
EOT;
    }
?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                <?php mainPageContentEnd(); ?>

            <?php mainContentEnd(); ?>

        <?php mainPageEnd(); ?>

        <?php mainMsg(); ?>
        <?php mainHtmlFooter(); ?>
    </body>
</html>






