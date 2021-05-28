{include file="head.tpl"}
            <div class="center">
                <div class="center-box">
                    <div class="loginBox">
                        <form action="index.php" method="post">
                            <input type="hidden" name="action" value="processRegistr">
                            <input type="text" placeholder="First Name" class="loginBox-item" id="firstName" name="firstName" required>
                            <input type="text" placeholder="Second Name" class="loginBox-item" id="secondName" name="secondName" required>
                            <input type="email" placeholder="E-Mail" class="loginBox-item" id="email" name="email" required>
                            <input type="password" placeholder="Password" class="loginBox-item" id="password" name="password" required>
                            <div class="center">
                            <button type="submit" class="btn-1">Sign Up</button>
                            </div>
                        </form>
                    </div>
                    <div class="error">
                        {if isset($error)}
                            <div class="error-msg">
                                {$error}
                            </div>
                        {/if}
                    </div>
                </div>
            </div>
{include file="foot.tpl"}