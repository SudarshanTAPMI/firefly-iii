<div class="row mb-2">
    <template x-if="loadingAccounts">
        <p class="text-center">
            <em class="material-icons-outlined spin">autorenew</em>
        </p>
    </template>
    <template x-for="account in accountList">
        <div class="col-12 mb-2" x-model="account">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <a :href="'{{ route('accounts.show', '') }}/' + account.id"
                           x-text="account.name"></a>

                        <span class="small">
                            <template x-for="balance in account.balances">
                                <template x-if="balance.type === 'current'">
                                    <span class="text-muted">(<span x-text="balance.amount_formatted"></span>)
                                        </span>
                                </template>
                            </template>
                        </span>
                    </h3>
                </div>
                <div class="card-body p-0">
                    <p class="text-center small" x-show="account.groups.length < 1">
                        {{ __('firefly.no_transactions_period') }}
                    </p>
                    <table class="table table-sm" x-show="account.groups.length > 0">
                        <tbody>
                        <template x-for="group in account.groups">
                            <tr>
                                <td>
                                    <template x-if="group.title">
                                        <span>
                                            <template x-if="group.transactions[0].type === 'withdrawal'">
                                                <span class="material-icons-outlined text-muted">arrow_back</span>
                                            </template>
                                            <template x-if="group.transactions[0].type === 'deposit'">
                                               <span class="material-icons-outlined text-muted">arrow_forward</span>
                                            </template>
                                            <template x-if="group.transactions[0].type === 'transfer'">
                                                <span class="material-icons-outlined text-muted">sync</span>
                                            </template>
                                        <a :href="'{{route('transactions.show', '') }}/' + group.id" x-text="group.title"></a><br/></span>
                                    </template>
                                    <ul class="list-unstyled list-no-margin">
                                    <template x-for="transaction in group.transactions">
                                        <li :class="{'list-indent': group.title}">
                                            <template x-if="group.title">
                                                <span x-text="transaction.description"></span>
                                            </template>
                                            <template x-if="!group.title">
                                                <span>
                                                  <template x-if="transaction.type == 'withdrawal'">
                                                      <span class="material-icons-outlined text-muted">arrow_back</span>
                                                  </template>
                                                  <template x-if="transaction.type == 'deposit'">
                                                      <span class="material-icons-outlined text-muted">arrow_forward</span>
                                                  </template>
                                                  <template x-if="transaction.type == 'transfer'">
                                                      <span class="material-icons-outlined text-muted">sync</span>
                                                  </template>
                                                  <a :href="'{{route('transactions.show', '') }}/' + group.id" x-text="transaction.description"></a>
                                                </span>
                                            </template>
                                            </li>
                                    </template>
                                    </ul>
                                </td>
                                <td style="width:30%;" class="text-end">
                                    <template x-if="group.title">
                                        <span><br/></span>
                                    </template>
                                    <ul class="list-unstyled list-no-margin">
                                    <template x-for="transaction in group.transactions">
                                        <li>
                                            @include('partials.elements.amount', ['convertToPrimary' => true,'type' => 'transaction.type','amount' => 'transaction.amount','primary' => 'transaction.amount'])
                                        </li>
                                    </template>
                                    </ul>
                                </td>
                            </tr>
                        </template>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </template>
</div>
