{include file="head.tpl"}

    <!-- <div class="reservations-box">
        <h1>Your Reservations</h1>
    </div> -->
    <div class="rooms-wrapper">
        <div class="rooms-box">
            {foreach from=$rooms item=room}
                <div class="rooms-box-item">
                    <img class="rooms-box-photo" src="./img/room{$room.imgID}.jpg" alt="room">
                    <div class="rooms-box-description">
                        <div class="rooms-box-description-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cupiditate recusandae beatae, fugiat nulla rerum nobis unde aliquam modi totam debitis accusamus magnam, repudiandae hic, architecto dolore reprehenderit deleniti maxime.
                        </div>
                        <div class="rooms-box-status">
                            <form action="index.php" name="deleteReserv" method="post">
                                <input type="hidden" name="action" value="reserv">
                                <input type="hidden" name="roomID" value={$room.id}>
                                <div class="rooms-box-status-city">City: {$room.city}</div>
                                {if ($room.type) == 1}
                                    <div class="rooms-box-status-type">Room: Personal room with 1 huge bed</div>
                                {else if ($room.type) == 2}
                                    <div class="rooms-box-status-type">Room: Personal room with 2 beds</div>
                                {else if ($room.type) == 3}
                                    <div class="rooms-box-status-type">Room: 1 bed in public room with 6 beds</div>
                                {/if}
                                <div class="rooms-box-status-name">id: {$room.id}</div>
                                <div class="rooms-box-description-btn">
                                    <button class="rooms-box-btn btn-1">Delete</button>
                                </div>
                        </form>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>

{include file="foot.tpl"}