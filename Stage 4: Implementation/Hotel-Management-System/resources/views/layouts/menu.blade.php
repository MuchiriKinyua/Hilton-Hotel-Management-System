<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt text-purple"></i>
        <p>Admin Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-chart-line text-purple"></i>
        <p>Finance Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-users-cog text-purple"></i>
        <p>H.R Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-shopping-cart text-purple"></i>
        <p>Sales Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-calendar-check text-purple"></i>
        <p>Reservationist Dashboard</p>
    </a>
</li>


<li class="nav-item has-treeview {{ Request::is('bookings*') || Request::is('guests*') || Request::is('feedback*') || Request::is('occupations*') || Request::is('contacts*') || Request::is('rooms*') || Request::is('features*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tasks text-purple"></i>
        <p>
            Booking Management
            <i class="right fas fa-angle-left text-purple"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('bookings.index') }}" class="nav-link {{ Request::is('bookings*') ? 'active' : '' }}">
                <i class="fas fa-calendar-check nav-icon text-green"></i>
                <p>Bookings</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('features.index') }}" class="nav-link {{ Request::is('features*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-star text-green"></i>
                <p>Features</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('guests.index') }}" class="nav-link {{ Request::is('guests*') ? 'active' : '' }}">
                <i class="fas fa-user-friends nav-icon text-green"></i>
                <p>Guests</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('contacts.index') }}" class="nav-link {{ Request::is('contacts*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-address-book text-green"></i>
                <p>Contacts</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('feedback.index') }}" class="nav-link {{ Request::is('feedback*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-comment-dots text-green"></i>
                <p>Feedback</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('rooms.index') }}" class="nav-link {{ Request::is('rooms*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-bed text-green"></i>
                <p>Rooms</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('occupations.index') }}" class="nav-link {{ Request::is('occupations*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-tie text-green"></i>
                <p>Room Occupation Settings</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('payments*', 'methods*', 'transactions*', 'billings*', 'expenses*', 'invoices*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-wallet text-purple"></i>
        <p>
            Finance Management
            <i class="right fas fa-angle-left text-purple"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('payments.index') }}" class="nav-link {{ Request::is('payments*') ? 'active' : '' }}">
                <i class="fas fa-credit-card nav-icon text-green"></i>
                <p>Payments</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('methods.index') }}" class="nav-link {{ Request::is('methods*') ? 'active' : '' }}">
                <i class="fas fa-credit-card nav-icon text-green"></i>
                <p>Payment Methods</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('transactions.index') }}" class="nav-link {{ Request::is('transactions*') ? 'active' : '' }}">
                <i class="fas fa-exchange-alt nav-icon text-green"></i>
                <p>Transactions</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('billings.index') }}" class="nav-link {{ Request::is('billings*') ? 'active' : '' }}">
                <i class="fas fa-file-invoice-dollar nav-icon text-green"></i>
                <p>Billings</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('expenses.index') }}" class="nav-link {{ Request::is('expenses*') ? 'active' : '' }}">
                <i class="fas fa-money-bill-wave nav-icon text-green"></i>
                <p>Expenses</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('invoices.index') }}" class="nav-link {{ Request::is('invoices*') ? 'active' : '' }}">
                <i class="fas fa-file-invoice nav-icon text-green"></i>
                <p>Invoices</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('items*', 'orders*', 'tables*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-concierge-bell text-purple"></i>
        <p>
            Order Management
            <i class="right fas fa-angle-left text-purple"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('items.index') }}" class="nav-link {{ Request::is('items*') ? 'active' : '' }}">
                <i class="fas fa-box nav-icon text-green"></i>
                <p>Menu Items</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('orders.index') }}" class="nav-link {{ Request::is('orders*') ? 'active' : '' }}">
                <i class="fas fa-shopping-cart nav-icon text-green"></i>
                <p>Orders</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('tables.index') }}" class="nav-link {{ Request::is('tables*') ? 'active' : '' }}">
                <i class="fas fa-utensils nav-icon text-green"></i>
                <p>Tables</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('inventories*', 'maintenances*', 'suppliers*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-warehouse text-purple"></i>
        <p>
            Inventory Management
            <i class="right fas fa-angle-left text-purple"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('inventories.index') }}" class="nav-link {{ Request::is('inventories*') ? 'active' : '' }}">
                <i class="fas fa-boxes nav-icon text-green"></i>
                <p>Inventories</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('maintenances.index') }}" class="nav-link {{ Request::is('maintenances*') ? 'active' : '' }}">
                <i class="fas fa-tools nav-icon text-green"></i>
                <p>Maintenance</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('suppliers.index') }}" class="nav-link {{ Request::is('suppliers*') ? 'active' : '' }}">
                <i class="fas fa-truck nav-icon text-green"></i>
                <p>Suppliers</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('staff*') || Request::is('housekeepings*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('staff*') || Request::is('housekeepings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users-cog text-purple"></i>
        <p>
            Staff Management
            <i class="right fas fa-angle-left text-purple"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('staff.index') }}" class="nav-link {{ Request::is('staff*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-tie text-green"></i>
                <p>Staff</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('housekeepings.index') }}" class="nav-link {{ Request::is('housekeepings*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-broom text-green"></i>
                <p>Housekeepings</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('galleries*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('galleries*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-camera-retro text-purple"></i>
        <p>
            Gallery Management
            <i class="right fas fa-angle-left text-purple"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('galleries.index') }}" class="nav-link {{ Request::is('galleries*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-images text-green"></i>
                <p>Galleries</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('reports*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('reports*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-clipboard-list text-purple"></i>
        <p>
            Reports Management
            <i class="right fas fa-angle-left text-purple"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('reports.index') }}" class="nav-link {{ Request::is('reports*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-chart-line text-green"></i>
                <p>Reports</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('predictions*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('predictions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-brain text-purple"></i>
        <p>
            Predictions
            <i class="right fas fa-angle-left text-purple"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('predictions.index') }}" class="nav-link {{ Request::is('predictions*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-chart-line text-green"></i>
                <p>ML Predictions</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('stations*') || Request::is('notifications*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('stations*') || Request::is('notifications*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-cogs text-purple"></i>
        <p>
            Settings
            <i class="right fas fa-angle-left text-purple"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('stations.index') }}" class="nav-link {{ Request::is('stations*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-map-marker-alt text-green"></i>
                <p>Stations</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('notifications.index') }}" class="nav-link {{ Request::is('notifications*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-bell text-green"></i>
                <p>Notifications</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('audits*', 'loggeds*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-shield-alt text-purple"></i>
        <p>
            System Audits
            <i class="right fas fa-angle-left text-purple"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('audits.index') }}" class="nav-link {{ Request::is('audits*') ? 'active' : '' }}">
                <i class="fas fa-clipboard-check nav-icon text-green"></i>
                <p>Audits</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('loggeds.index') }}" class="nav-link {{ Request::is('loggeds*') ? 'active' : '' }}">
                <i class="fas fa-user-clock nav-icon text-green"></i>
                <p>Logged Users</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('roles*') || Request::is('permissions*') || Request::is('user*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('roles*') || Request::is('permissions*') || Request::is('user*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users-cog text-purple"></i>
        <p>
            Users and Controls
            <i class="fas fa-angle-left right text-purple"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users-cog text-green"></i>
                <p>Roles</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('permissions.index') }}" class="nav-link {{ Request::is('permissions*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-key text-green"></i>
                <p>Permissions</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('user*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users text-green"></i>
                <p>Users</p>
            </a>
        </li>
    </ul>
</li>