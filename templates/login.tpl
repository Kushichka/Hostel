{include file="head.tpl"}
            <div class="center">
                <div class="loginBox">
                    <form action="index.php">
                        <input type="hidden" name="action" value="processLogin">
                        <input type="email" placeholder="E-Mail" class="loginBox-item" id="email" name="email" required>
                        <input type="password" placeholder="Password" class="loginBox-item" id="password" name="password" required>
                        <button type="submit" class="btn-1">Sign In</button>
                    </form>
                </div>
                {if isset($error)}
                    <div class="error">
                        {$error}
                    </div>
                {/if}
            </div>
{include file="foot.tpl"}