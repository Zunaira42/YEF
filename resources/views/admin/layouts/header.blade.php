
<header class="topbar">

            <div class="d-flex align-items-center gap-3">

                <button
                    class="mobile-menu"
                    id="mobileMenu">
                    <i class="bi bi-list"></i>
                </button>

                <div class="page-title">

                    <h4>
                                              Young Enterpreneur Fest

                    </h4>

                    <small>
                        Welcome back! Here's what's happening today.
                    </small>

                </div>

            </div>


            <div class="topbar-right">

                <div class="search-box">

                    <i class="bi bi-search"></i>

                    <input
                        type="text"
                        placeholder="Search...">

                </div>

                <div class="notification">

                    <i class="bi bi-bell"></i>

                    <span class="badge bg-danger">
                        3
                    </span>

                </div>

                <div class="profile">

                    <img
                        src="https://i.pravatar.cc/100?img=12"
                        alt="Profile">

                    <div class="profile-info">

                        <strong>
                            {{ auth()->user()->name }}
                        </strong>

                        <small>
                            {{ auth()->user()->email }}
                        </small>

                    </div>

                    <i class="bi bi-chevron-down small"></i>

                </div>

            </div>

        </header>
