{include file="head.tpl"}
    
            <h1>What is your next trip?</h1>
            <div class="reservation-box">
                <form class="reservation-box-form" action="index.php" name="rooms" method="post">
                    <input type="hidden" name="action" value="rooms">
                    <div class="box-wrapper">
                        <select class="reservation-box-item reservation-box-city" name="city" id="city">
                            <option class="reservation-box-city-item reservation-box-item-item" selected value="1">City</option>
                            <option class="reservation-box-city-item reservation-box-item-item" value="2">Gdansk</option>
                            <option class="reservation-box-city-item reservation-box-item-item" value="3">London</option>
                            <option class="reservation-box-city-item reservation-box-item-item" value="4">Paris</option>
                        </select>
                        <select class="reservation-box-item reservation-box-room" name="room" id="room">
                            <option class="reservation-box-room-item reservation-box-item-item" selected value="1">Choose room</option>
                            <option class="reservation-box-room-item reservation-box-item-item"  value="2">Personal room with 1 huge bed</option>
                            <option class="reservation-box-room-item reservation-box-item-item" value="3">Personal room with 2 beds</option>
                            <option class="reservation-box-room-item reservation-box-item-item" value="4">1 bed in public room with 6 beds</option>
                        </select>
                        <input class="reservation-box-item reservation-box-start" type="date">
                        <input class="reservation-box-item reservation-box-end" type="date">
                    </div>
                    <button class="reservation-box-item reservation-box-btn btn">Search</button>
                </form>
            </div>

{include file="foot.tpl"}