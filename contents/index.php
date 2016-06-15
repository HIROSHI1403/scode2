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
                <?php mainBreadcrumb("Dashboard"); ?>
                <?php mainPageContentStart(); ?>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                <h2><span class="fa fa-desktop fw"></span> Dashboard</h2>
                            </div>
                        </div>

<?php

switch ($_SESSION['s_login']) {
    case 'ng':
        echo<<<EOT
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h2>氏名の登録</h2>
                                    <p>氏名が登録されていません。登録してください。</p>
                                    <form action="./form_actions.php" method="POST">
                                        <div class="form-group">
                                            <label>社員番号（テンポラリー番号）</label>
                                            <input type="text" name="" class="form-control disabled" value="{$_SESSION['s_code']}" placeholder="s000##" disabled required>
                                            <input type="hidden" name="F_id" value="{$_SESSION['s_code']}">
                                        </div>
                                        <div class="form-group">
                                            <label>氏名（例：竜巧社花子　※苗字名前は空白無しで全角日本語漢字入力でお願いします。）</label>
                                            <input type="text" name="F_name" class="form-control" placeholder="竜巧社花子" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="F_check" class="btn btn-success">登録確認</button>
                                        </div>
                                    </form>
                                    <hr>
                                    <form action="./form_actions.php" method="POST"">
                                        <div class="form-group">
                                            <button type="submit" name="F_exit" class="btn btn-danger">キャンセル</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
EOT;
        break;
    case 'check':
        echo<<<EOT
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h2>氏名の登録（確認）</h2>
                                    <p>下記で登録します。よろしいですか？</p>
                                    <form action="./form_actions.php" method="POST">
                                        <div class="form-group">
                                            <label>社員番号（テンポラリー番号）</label>
                                            <input type="text" name="" class="form-control disabled" value="{$_SESSION['s_code']}" placeholder="s000##" disabled required>
                                            <input type="hidden" name="F_id" value="{$_SESSION['s_code']}">
                                        </div>
                                        <div class="form-group">
                                            <label>氏名（例：竜巧社花子　※苗字名前は空白無しで全角日本語漢字入力でお願いします。）</label>
                                            <input type="text" name="" class="form-control disabled" value="{$_SESSION['s_name']}" placeholder="竜巧社花子" disabled required>
                                            <input type="hidden" name="F_name" value="{$_SESSION['s_name']}">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="F_check_login" class="btn btn-success">登録 & Log In</button>
                                        </div>
                                    </form>
                                    <hr>
                                    <form action="./form_actions.php" method="POST"">
                                        <div class="form-group">
                                            <button type="submit" name="F_exit" class="btn btn-danger">キャンセル</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
EOT;
        break;
    case 'ok':
        break;
    default:
        echo<<<EOT
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h2>ログイン</h2>
                                    <p>社員証記載の社員番号もしくはテンポラリーカード記載の番号でログインしてください。</p>
                                    <form action="./form_actions.php" method="POST">
                                        <div class="form-group">
                                            <label>社員番号（例：s00### or t000##）半角英数のみ</label>
                                            <input type="text" name="F_id" class="form-control focused" placeholder="s000##" pattern="^[0-9A-Za-z]+$" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="F_login" class="btn btn-success">Log In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
EOT;
        break;
}

?>

                        <div class="col-md-5">
                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock"></div>
                                <div class="widget-subtitle plugin-date"></div>
                                <div class="widget-controls">
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="javascript:void(0);" style="text-decoration: none;">
                                            <span class="fa fa-user fw"></span>&nbsp;<?php echo $_SESSION['s_name']; ?>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="javascript:void(0);" style="text-decoration: none;">
                                            <span class="fa fa fa-barcode fw"></span>&nbsp;<?php echo $_SESSION['s_code']; ?>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="javascript:void(0);" style="text-decoration: none;">
                                            <span class="fa fa-credit-card fw"></span>&nbsp;<?php echo $_SESSION['card_num']; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if ($_SESSION['s_login']=='ok'): ?>
                            <div class="col-md-6">
                                
                            </div>
                        <?php endif ?>
                    </div>


                    <?php if ($_SESSION['s_login']=='ok'): ?>
                        <div class="row">
                            <div class="col-md-6">

                                <!-- START PROJECTS BLOCK -->
                                <div class="panel panel-default">
                                    <div class="panel-heading ui-draggable-handle">
                                        <div class="panel-title-box">
                                            <h3>進行状況</h3>
                                            <span>各進行状況を確認できます。※タスクの詳細は<a href="./task.php">Task Control</a>より確認できます。</span>
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
                                                        <th width="50%">タイトル</th>
                                                        <th width="20%">ステータス</th>
                                                        <th width="30%">進行度</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Joli Admin</strong></td>
                                                        <td><span class="label label-danger">Developing</span></td>
                                                        <td>
                                                            <div class="progress progress-small progress-striped active">
                                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Gemini</strong></td>
                                                        <td><span class="label label-warning">Updating</span></td>
                                                        <td>
                                                            <div class="progress progress-small progress-striped active">
                                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">40%</div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Taurus</strong></td>
                                                        <td><span class="label label-warning">Updating</span></td>
                                                        <td>
                                                            <div class="progress progress-small progress-striped active">
                                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">72%</div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Leo</strong></td>
                                                        <td><span class="label label-success">Support</span></td>
                                                        <td>
                                                            <div class="progress progress-small progress-striped active">
                                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Virgo</strong></td>
                                                        <td><span class="label label-success">Support</span></td>
                                                        <td>
                                                            <div class="progress progress-small progress-striped active">
                                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <div class="panel-footer">
                                        <a href="./task.php" class="btn btn-default btn-block">more</a>
                                    </div>
                                </div>
                                <!-- END PROJECTS BLOCK -->

                            </div>
                        </div>
                    <?php endif ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page-title">
                                    <h2><span class="fa fa-external-link fw"></span> IIJ LINKS&nbsp;<small>Active Directory認証を利用します　［VPN環境のみ動作］</small></h2>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <a href="https://gportal.iij-group.jp/" target="_blank" class="tile tile-success">
                                    <span class="fa fa-columns fw"></span>
                                    <p>IIJ ポータル</p>
                                    <div class="informer informer-default dir-tr"><span class="fa fa-external-link fw"></span>&nbsp;LINK</div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="https://ohana.iij-group.jp/scheduler/" target="_blank" class="tile tile-success">
                                    <span class="fa fa-calendar-o fw"></span>
                                    <p>スケジュール</p>
                                    <div class="informer informer-default dir-tr"><span class="fa fa-external-link fw"></span>&nbsp;LINK</div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="https://ohana.iij-group.jp/reception/" target="_blank" class="tile tile-success">
                                    <span class="fa fa-users fw"></span>
                                    <p>来訪予約</p>
                                    <div class="informer informer-default dir-tr"><span class="fa fa-external-link fw"></span>&nbsp;LINK</div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="http://know-who.iij-group.jp/" target="_blank" class="tile tile-success">
                                    <span class="fa fa-sitemap fw"></span>
                                    <p>座席表</p>
                                    <div class="informer informer-default dir-tr"><span class="fa fa-external-link fw"></span>&nbsp;LINK</div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="https://cf.iij-group.jp/" target="_blank" class="tile tile-success">
                                    <span class="fa fa-rss-square fw"></span>
                                    <p>Confluence</p>
                                    <div class="informer informer-default dir-tr"><span class="fa fa-external-link fw"></span>&nbsp;LINK</div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="https://iijtube.iij-group.jp/" target="_blank" class="tile tile-success">
                                    <span class="fa fa-youtube-play fw"></span>
                                    <p>IIJ TUBE</p>
                                    <div class="informer informer-default dir-tr"><span class="fa fa-external-link fw"></span>&nbsp;LINK</div>
                                </a>
                            </div>
                        </div>

                <?php mainPageContentEnd(); ?>

            <?php mainContentEnd(); ?>

        <?php mainPageEnd(); ?>

        <?php mainMsg(); ?>
        <?php mainHtmlFooter(); ?>

    </body>
</html>






