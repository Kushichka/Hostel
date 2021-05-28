{include file="head.tpl"}
            <div class="center">
                <div class="center-box">
                    <div class="loginBox">
                        <form action="index.php">
                            <input type="hidden" name="action" value="processLogin">
                            <input type="email" placeholder="E-Mail" class="loginBox-item" id="email" name="email" required>
                            <input type="password" placeholder="Password" class="loginBox-item" id="password" name="password" required>
                            <div class="center">
                            <button type="submit" class="btn-1">Sign In</button>
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