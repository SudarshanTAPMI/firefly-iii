<li class="nav-item">
    <a class="nav-link" href="{{ route(Route::current()->getName(), Route::current()->parameters()) }}?force_default_layout=true">
        <i class="material-icons-outlined">account_balance</i>
    </a>
</li>
<li class="nav-item toggle-page-internals d-none">
    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#internalsModal">
        <em class="material-icons-outlined">tune</em>
    </a>
</li>
<li class="nav-item toggle-page-wizard d-none">
    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#wizardModal">
        <em class="material-icons-outlined">auto_fix_high</em>
    </a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link" data-bs-toggle="dropdown" href="#">
        <i class="material-icons-outlined">settings</i>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
        <a href="{{ route('settings.index') }}" class="dropdown-item">
            <em class="material-icons-outlined me-2">person</em>
            {{ __('firefly.system_settings') }}
        </a>
        <div class="dropdown-divider"></div>
        <a href="{{ route('currencies.index') }}" class="dropdown-item">
            <em class="material-icons-outlined me-2">euro</em>
            {{ __('firefly.currencies') }}
        </a>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link" data-bs-toggle="dropdown" href="#">
        <i class="material-icons-outlined">person</i>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
        <span class="dropdown-item dropdown-header">{{ auth()->user()->email }}</span>
        <div class="dropdown-divider"></div>
        <a href="{{ route('profile.index') }}" class="dropdown-item">
            <em class="material-icons-outlined me-2">person</em>
            {{ __('firefly.profile') }}
        </a>
        <div class="dropdown-divider"></div>
        <a href="{{ route('preferences.index') }}" class="dropdown-item">
            <em class="material-icons-outlined me-2">manage_accounts</em>
            {{ __('firefly.preferences') }}
        </a>
        <div class="dropdown-divider"></div>
        <a href="{{ route('administrations.index') }}" class="dropdown-item">
            <em class="material-icons-outlined me-2">currency_exchange</em>
            {{ __('firefly.administrations_index_menu') }}
        </a>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link" data-bs-toggle="dropdown" href="#">
        <i class="material-icons-outlined">add_circle</i>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
        <!-- withdrawal, deposit, transfer -->
        <a href="{{ route('transactions.create', ['withdrawal']) }}" class="dropdown-item">
            <em class="material-icons-outlined me-2">arrow_back</em>
            {{ __('firefly.create_new_withdrawal') }}
        </a>
        <a href="{{ route('transactions.create', ['deposit']) }}" class="dropdown-item">
            <em class="material-icons-outlined me-2">arrow_forward</em>
            {{ __('firefly.create_new_deposit') }}
        </a>
        <a href="{{ route('transactions.create', ['transfer']) }}" class="dropdown-item">
            <em class="material-icons-outlined me-2">sync</em>
            {{ __('firefly.create_new_transfer') }}
        </a>
        <div class="dropdown-divider"></div>

        <!-- asset, liability -->
        <a href="{{ route('accounts.create', ['asset']) }}" class="dropdown-item">
            <em class="material-icons-outlined me-2">payments</em>
            {{ __('firefly.create_new_asset') }}
        </a>
        <a href="{{ route('accounts.create', ['liabilities']) }}" class="dropdown-item">
            <em class="material-icons-outlined me-2">account_balance</em>
            {{ __('firefly.create_new_liabilities') }}
        </a>
        <div class="dropdown-divider"></div>

        <!-- budget, category, piggy -->
        <a href="{{ route('budgets.create') }}" class="dropdown-item">
            <em class="material-icons-outlined me-2">pie_chart</em>
            {{ __('firefly.create_new_budget') }}
        </a>
        <a href="{{ route('categories.create') }}" class="dropdown-item">
            <em class="material-icons-outlined me-2">bookmark</em>
            {{ __('firefly.create_new_category') }}
        </a>
        <a href="{{ route('piggy-banks.create') }}" class="dropdown-item">
            <em class="material-icons-outlined me-2">savings</em>
            {{ __('firefly.create_new_piggy_bank') }}
        </a>
        <div class="dropdown-divider"></div>

        <!-- contract, rule, recurring -->
        <a href="{{ route('subscriptions.create') }}" class="dropdown-item">
            <em class="material-icons-outlined me-2">calendar_month</em>
            {{ __('firefly.create_new_subscription') }}
        </a>
        <a href="{{ route('rules.create') }}" class="dropdown-item">
            <em class="material-icons-outlined me-2">shuffle</em>
            {{ __('firefly.create_new_rule') }}
        </a>
        <a href="{{ route('recurring.create') }}" class="dropdown-item">
            <em class="material-icons-outlined me-2">repeat</em>
            {{ __('firefly.create_new_recurrence') }}
        </a>
        <a href="{{ route('webhooks.create') }}" class="dropdown-item">
            <em class="material-icons-outlined me-2">bolt</em>
            {{ __('firefly.create_new_webhook') }}
        </a>
    </div>
</li>
