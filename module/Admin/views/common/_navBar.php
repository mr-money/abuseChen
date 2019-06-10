<div class="left-sidebar">
    <!-- 用户信息 -->
    <div class="tpl-sidebar-user-panel">
        <div class="tpl-user-panel-slide-toggleable">
            <div class="tpl-user-panel-profile-picture">
                <!--头像-->
                <img src="<?= $admin['avatar']; ?>" alt="" id="admin-avatar">
            </div>
            <span class="user-panel-logged-in-text" id="admin-nickname">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
              <?= $admin['nickname']; ?>
          </span>
            <a href="javascript:navRedirect('<?= $admin['nickname']; ?>账号设置','<?= \yii\helpers\Url::to(['admin/admin-user']); ?>');;" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 账号设置</a>
        </div>
    </div>

    <!-- 菜单 -->
    <ul class="sidebar-nav">
        <?php foreach ($adminMenu as $title => $menu){ ?>
            <li class="sidebar-nav-heading"><?= $title ?> <span class="sidebar-nav-heading-info"> <?= $menu['navInfo'] ?></span></li>

            <?php foreach ($menu['navLink'] as $navLink){ ?>
                <li class="sidebar-nav-link">
                    <a href="javascript:navRedirect('<?= $navLink['name'] ?>','<?= $navLink['url']?\yii\helpers\Url::to([$navLink['url']]):'';  ?>');" class="sidebar-nav-sub-title">
                        <i class="<?= $navLink['logo'] ?>"></i>
                        <?= $navLink['name'] ?>
    <!--                    <span class="am-badge am-badge-secondary sidebar-nav-link-logo-ico am-round am-fr am-margin-right-sm">数字气泡4</span>-->
                    <?php if(!empty($navLink['navChild'])){ ?>
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span><!--下拉控件-->
                    <?php } ?>
                    </a>

                    <!--判断是否有子菜单-->
                    <?php if(!empty($navLink['navChild'])){ ?>
                        <ul class="sidebar-nav sidebar-nav-sub">
                        <?php foreach ($navLink['navChild'] as $navChild){ ?>
                            <li class="sidebar-nav-link">
                                <a href="javascript:navRedirect('<?= $navChild['name'] ?>','<?= \yii\helpers\Url::to([$navChild['url']]); ?>');">
                                    <span class="<?= $navChild['logo'] ?>"></span>
                                    <?= $navChild['name'] ?>
                                </a>
                            </li>
                        <?php } ?>
                        </ul>
                    <?php } ?>

                </li>

            <?php } ?>

        <?php } ?>
    </ul>



    <!--<ul class="sidebar-nav">
        <li class="sidebar-nav-heading">Components <span class="sidebar-nav-heading-info"> 附加组件</span></li>
        <li class="sidebar-nav-link">
            <a href="index.html" class="active">
                <i class="am-icon-home sidebar-nav-link-logo"></i> 首页
            </a>
        </li>
        <li class="sidebar-nav-link">
            <a href="tables.html">
                <i class="am-icon-table sidebar-nav-link-logo"></i> 表格
            </a>
        </li>
        <li class="sidebar-nav-link">
            <a href="calendar.html">
                <i class="am-icon-calendar sidebar-nav-link-logo"></i> 日历
            </a>
        </li>
        <li class="sidebar-nav-link">
            <a href="form.html">
                <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 表单

            </a>
        </li>
        <li class="sidebar-nav-link">
            <a href="chart.html">
                <i class="am-icon-bar-chart sidebar-nav-link-logo"></i> 图表

            </a>
        </li>

        <li class="sidebar-nav-heading">Page<span class="sidebar-nav-heading-info"> 常用页面</span></li>
        <li class="sidebar-nav-link">
            <a href="javascript:;" class="sidebar-nav-sub-title">
                <i class="am-icon-table sidebar-nav-link-logo"></i> 数据列表
                <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
            </a>
            <ul class="sidebar-nav sidebar-nav-sub">
                <li class="sidebar-nav-link">
                    <a href="table-list.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 文字列表
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="table-list-img.html">
                        <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 图文列表
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar-nav-link">
            <a href="sign-up.html">
                <i class="am-icon-clone sidebar-nav-link-logo"></i> 注册
                <span class="am-badge am-badge-secondary sidebar-nav-link-logo-ico am-round am-fr am-margin-right-sm">4</span>
            </a>
        </li>
        <li class="sidebar-nav-link">
            <a href="login.html">
                <i class="am-icon-key sidebar-nav-link-logo"></i> 登录
            </a>
        </li>
        <li class="sidebar-nav-link">
            <a href="404.html">
                <i class="am-icon-tv sidebar-nav-link-logo"></i> 404错误
            </a>
        </li>

    </ul>-->
</div>

<script>
    function navRedirect(title,url) {
        console.log(url);
        if(url !== ''){
            iframeRedirect(title,url);
        }
    }
</script>