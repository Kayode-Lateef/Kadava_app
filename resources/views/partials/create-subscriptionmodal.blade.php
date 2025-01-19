<div id="createSubscriptionModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createSubscriptionModalLabel">Create Subscription</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.createSubscription') }}">
                    @csrf
                    <input type="hidden" name="user_id" id="createUserId">
                    <div class="modal-content">

                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="createSubscriptionPlan" class="form-label">Plan</label>
                                <select class="form-control" id="createSubscriptionPlan" name="plan" required>
                                    <option value="starter-monthly">Starter Monthly</option>
                                    <option value="starter-yearly">Starter Yearly</option>
                                    <option value="pro-monthly">Pro Monthly</option>
                                    <option value="pro-yearly">Pro Yearly</option>
                                    <option value="vip-monthly">VIP Monthly</option>
                                    <option value="vip-yearly">VIP Yearly</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Create</button>
                        </div>
                    </div>
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
