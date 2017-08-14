<div class="container">
    <div class="jumbotron">
        <h1>Welcome back!</h1>
        <p>It's good to see you again!</p>
    </div>
    <div class="form-group">
        <form action="/users/update" method="post" enctype="multipart/form-data">
            <label class="btn btn-info btn-file">Browse Files
                <input type="file" name="img" style="display:none;">
            </label>
            <input type="submit" value="Update Profile Picture" class="btn btn-primary">
            <span class="label label-<?=@$_REQUEST["class"]?$_REQUEST["class"]:'';?>"><?=@$_REQUEST["profpicmsg"]?$_REQUEST["profpicmsg"]:''; ?></span>
        </form>
    </div>
    <?php if (@$_SESSION["bio"]) {
    ?>
        <div class="jumbotron">
            <h2>About Me</h2>
            <p>
                <?echo $_SESSION["bio"]?>
            </p>
        </div>
    <?php
}?>
</div>
