<?php include 'header.php'; ?>

<section id="page-hero">
    <h2>Tickets</h2>
</section>

<section id="main-container">

    <div id="ticket-container">

        <div id="ticket-booking">

            <div class="ticket-body-row"> 
                <span class="ticket-col-label">Ticket type</span>
                <span class="ticket-col-label">Price per ticket</span>
                <span class="ticket-col-label">Quantity</span>
            </div>

            <div class="ticket-body-row"> 
                <h3 class="ticket-type">Weekend Camping</h3>
                <div class="ticket-price">£225</div>
                <div class="ticket-quantity">
                    <select data-name="Weekend Camping" data-id="1" data-price="225">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>

            <div class="ticket-body-row"> 
                <h3 class="ticket-type">Weekend Non-Camping</h3>
                <div class="ticket-price">£200</div>
                <div class="ticket-quantity">
                    <select data-name="Weekend Non-Camping" data-id="2" data-price="200">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>

            <div class="ticket-body-row"> 
                <h3 class="ticket-type">Weekend VIP Camping</h3>
                <div class="ticket-price">£450</div>
                <div class="ticket-quantity">
                    <select data-name="Weekend VIP Camping" data-id="3" data-price="450">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>

            <div class="ticket-body-row"> 
                <h3 class="ticket-type">Friday</h3>
                <div class="ticket-price">£80</div>
                <div class="ticket-quantity">
                    <select data-name="Friday" data-id="4" data-price="80">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>

            <div class="ticket-body-row"> 
                <h3 class="ticket-type">Saturday</h3>
                <div class="ticket-price">£80</div>
                <div class="ticket-quantity">
                    <select data-name="Saturday" data-id="5" data-price="80">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>

            <div class="ticket-body-row"> 
                <h3 class="ticket-type">Sunday</h3>
                <div class="ticket-price">£80</div>
                <div class="ticket-quantity">
                    <select data-name="Sunday" data-id="6" data-price="80">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>

            <div class="ticket-body-row"> 
                <h3 class="ticket-type">Car Parking</h3>
                <div class="ticket-price">£20</div>
                <div class="ticket-quantity">
                    <select data-name="Car Parking" data-id="7" data-price="20">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>

            <div class="ticket-body-row"> 
                <h3 class="ticket-type">Campervan</h3>
                <div class="ticket-price">£100</div>
                <div class="ticket-quantity">
                    <select data-name="Campervan" data-id="8" data-price="100">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>

            <div class="ticket-body-row"> 
                <h3 class="ticket-type">Guest Area</h3>
                <div class="ticket-price">£100</div>
                <div class="ticket-quantity">
                    <select data-name="Guest Area" data-id="9" data-price="100">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>

            <div class="ticket-body-row"> 
                <a class="ticket-clear button sml-btn">Clear selection</a>
                <a class="ticket-add button sml-btn">Add to basket</a>
            </div>

        </div>

        <div id="ticket-basket-checkout">

            <div id="ticket-basket">

                <h3>Basket</h3>
                <div id="basket-col-titles">
                    <span class="ticket-col-label">Ticket type</span>
                    <span class="ticket-col-label">Quantity</span>
                    <span class="ticket-col-label">Price</span>
                    <span class="ticket-col-label">Total</span>
                </div>

                <ul id="basket-list">
                    
                </ul>

                <div id="basket-overall-total">
                    <span>Total cost:</span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <a class="basket-empty button sml-btn">Empty basket</a>

            </div>

            <div id="ticket-checkout">
                <h3>Checkout</h3>

                <form id="ticket-checkout-form">
                    <input type="text" id="checkout-name" placeholder="Name">
                    <input type="email" id="checkout-email" placeholder="Email">
                    <input type="tel" id="checkout-phone" placeholder="Phone">
                    <input type="text" id="checkout-address1" placeholder="Address 1">
                    <input type="text" id="checkout-address2" placeholder="Address 2">
                    <input type="text" id="checkout-town" placeholder="Town">
                    <input type="text" id="checkout-county" placeholder="County">
                    <input type="text" id="checkout-postcode" placeholder="Postcode">
                    <div id="checkout-card-details">
                        <input type="text" id="checkout-card" maxlength="16" placeholder="Card Number">
                        <input type="text" id="checkout-date" maxlength="5" placeholder="Expiry Date (MM/YY)">
                        <input type="password" id="checkout-code" maxlength="3" placeholder="CCV">
                    </div>
                    <a class="checkout-submit button lrg-btn" disabled="disabled">Submit Order</a>
                </form>
            </div>

        </div>

    </div>

</section>

<?php include 'footer.php'; ?>