<div id="sidebar" class="active">
    <div class="toggleSidebar">
        <i class="fa-solid fa-arrow-left"></i>
    </div>
    <div class="logo-section">
        <span>
            <i class="fa-solid fa-table-columns"></i>
        </span>
        <h4>
            LOGO
        </h4>
    </div>
    <div class="content-section">
        <ul class = "list">
            <a href="{{ route('employee') }}" style="text-decoration: none;">
                <li class = "active list-item">
                    <div class="li-header">
                        <span class = "icon">
                            <i class="fa-brands fa-airbnb"></i>
                        </span>
                        <span class = "name">
                            {{ __('Employee') }}
                        </span>
                    </div>
                </li>
            </a>
            <a href="{{ route('json.format') }}" style="text-decoration: none;">
                <li class = "active list-item">
                    <div class="li-header">
                        <span class = "icon">
                            <i class="fa-brands fa-airbnb"></i>
                        </span>
                        <span class = "name">
                            {{ __('Json Format') }}
                        </span>
                    </div>
                </li>
            </a>
        </ul>
    </div>
</div>