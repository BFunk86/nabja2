<div class="modal fade" tabindex="-1" role="dialog" id="loginModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Faculty Login</h4>
            </div>
            <div class="modal-body">
                <form action="login" method="post">
                    <div class="form-group">
                        <label for="uName">User Name:</label>
                        <input type="text" class="form-control" id="uName" name="uName">
                    </div>
                    <div class="form-group">
                        <label for="passwd">Password:</label>
                        <input type="password" class="form-control" id="passwd" name="passwd">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn">Login</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->