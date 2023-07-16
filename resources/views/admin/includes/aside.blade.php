<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('index') }}" class="nav-link">
                        <i class="nav-icon fas fa-arrow-left"></i>
                        <p>Вернуться на сайт</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Панель</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.category.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Категории</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.product.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-box"></i>
                        <p>Продукты</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.review.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>Отзывы</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.promotion.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Промокоды</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.promotion.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Страницы</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.scammer.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-thumbs-down"></i>
                        <p>Мошенники</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.zelenka.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-eye"></i>
                        <p>Парсер</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.setting.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Настройки</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
