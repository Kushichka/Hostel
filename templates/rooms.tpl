{include file="head.tpl"}
    <div class="rooms-wrapper">
        <div class="rooms-box">
            {foreach from=$rooms item=room}
                <div class="rooms-box-item" value="{$room.id}">
                    <img class="rooms-box-photo" src="./img/room{$room.imgID}.jpg" alt="room">
                    <div class="rooms-box-description">
                        <div class="rooms-box-description-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cupiditate recusandae beatae, fugiat nulla rerum nobis unde aliquam modi totam debitis accusamus magnam, repudiandae hic, architecto dolore reprehenderit deleniti maxime.
                        </div>
                        <div class="rooms-box-status">
                            <div class="rooms-box-status-city">City: {$room.city}</div>
                            {if ($room.type) == 1}
                                <div class="rooms-box-status-type">Room: Personal room with 1 huge bed</div>
                            {else if ($room.type) == 2}
                                <div class="rooms-box-status-type">Room: Personal room with 2 beds</div>
                            {else if ($room.type) == 3}
                                <div class="rooms-box-status-type">Room: 1 bed in public room with 6 beds</div>
                            {/if}
                            {if ($room.status) == 1}
                            <div class="rooms-box-status-name">Status: <span class="color-green">Free</span></div>
                            <div class="rooms-box-description-btn">
                                <div class="rooms-box-btn btn-1">Reserv</div>
                            </div>
                            {else}
                            <div class="rooms-box-status-name">Status: <span class="color-red">Reserved</span></div>
                            {/if}
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>

{include file="foot.tpl"}