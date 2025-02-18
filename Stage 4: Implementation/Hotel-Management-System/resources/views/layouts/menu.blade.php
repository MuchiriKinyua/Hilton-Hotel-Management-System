<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt text-green"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('bookings.index') }}" class="nav-link {{ Request::is('bookings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-calendar-check text-green"></i>
        <p>Bookings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('guests.index') }}" class="nav-link {{ Request::is('guests*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-friends text-green"></i>
        <p>Guests</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('staff.index') }}" class="nav-link {{ Request::is('staff*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-tie text-green"></i>
        <p>Staff</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('contacts.index') }}" class="nav-link {{ Request::is('contacts*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-address-book text-green"></i>
        <p>Contacts</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('features.index') }}" class="nav-link {{ Request::is('features*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-star text-green"></i>
        <p>Features</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('feedback.index') }}" class="nav-link {{ Request::is('feedback*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-comment-dots text-green"></i>
        <p>Feedback</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('galleries.index') }}" class="nav-link {{ Request::is('galleries*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-images text-green"></i>
        <p>Galleries</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('housekeepings.index') }}" class="nav-link {{ Request::is('housekeepings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-broom text-green"></i>
        <p>Housekeepings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('inventories.index') }}" class="nav-link {{ Request::is('inventories*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-boxes text-green"></i>
        <p>Inventories</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('rooms.index') }}" class="nav-link {{ Request::is('rooms*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-bed text-green"></i>
        <p>Rooms</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('orders.index') }}" class="nav-link {{ Request::is('orders*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-shopping-cart text-green"></i>
        <p>Orders</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('payments.index') }}" class="nav-link {{ Request::is('payments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-credit-card text-green"></i>
        <p>Payments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('transactions.index') }}" class="nav-link {{ Request::is('transactions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-exchange-alt text-green"></i>
        <p>Transactions</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('notifications.index') }}" class="nav-link {{ Request::is('notifications*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-bell text-green"></i>
        <p>Notifications</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('predictions.index') }}" class="nav-link {{ Request::is('predictions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-chart-line text-green"></i>
        <p>Predictions</p>
    </a>
</li>
