jQuery(document).ready(function($){

    var basket = [];

    var Item = function(name, id, price, quantity){
        this.name = name;
        this.id = id;
        this.price = price;
        this.quantity = quantity;
    };

    function addItemToBasket(name, id, price, quantity){
        for (var i in basket){
            if (basket[i].id == id){
                basket[i].quantity += quantity;
                saveBasket();
                return;
            }
        }
        var item = new Item(name, id, price, quantity);
        basket.push(item);
        saveBasket();
    }

    function removeItemFromBasket(id){
        for (var i in basket){
            if (basket[i].id == id){
                basket[i].quantity--;
                if (basket[i].quantity == 0){
                    basket.splice(i, 1);
                }
                break;
            }
        }
        saveBasket();
    }

    function removeItemsFromBasket(id){
        for (var i in basket){
            if (basket[i].id == id){
                basket.splice(i, 1);
                break;
            }
        }
        saveBasket();
    }

    function emptyBasket(){
        basket = [];
        saveBasket();
    }

    function countBasket(){
        var count = 0;
        for (var i in basket){
            count += basket[i].quantity;
        }
        return count;
    }

    function totalBasket(){
        var total = 0;
        for (var i in basket){
            total += (basket[i].price * basket[i].quantity);
        }
        return total;
    }

    function listBasket(){
        var basketCopy = [];
        for (var i in basket){
            var item = basket[i];
            var itemCopy = {};
            for (var p in item){
                itemCopy[p] = item[p];
            }
            basketCopy.push(itemCopy);
        }
        return basketCopy;
    }

    function saveBasket(){
        localStorage.setItem("ticketBasket", JSON.stringify(basket));
    }

    function loadBasket(){
        if (localStorage.getItem("ticketBasket")){
            basket = JSON.parse(localStorage.getItem("ticketBasket"));
        }   
    }

    function displayBasket(){
        var basketArray = listBasket();
        var output = '';
        for (var i in basket){
            var ticketMinus = '<div class="placeholder"></div>';
            var ticketPlus = '<div class="placeholder"></div>';
            if (basket[i].quantity > 0){
                ticketMinus = '<div class="ticket-minus" data-id="'+basketArray[i].id+'">-</div>';
            }
            if (basket[i].quantity < 4){
                ticketPlus = '<div class="ticket-plus" data-id="'+basketArray[i].id+'">+</div>';
            }
            output += '<li data-id="'+basketArray[i].id+'" data-name="'+basketArray[i].name+'" data-price="'+basketArray[i].price+'" data-quantity="'+basketArray[i].quantity+'"><div class="basket-name">'+basketArray[i].name+'</div><div class="basket-quantity">'+ticketMinus+'<span>'+basketArray[i].quantity+'</span>'+ticketPlus+'</div><div class="basket-price">£'+basketArray[i].price+'</div><div class="basket-total">£'+basketArray[i].price*basketArray[i].quantity+'</div></li>';
        }
        var total = 0;
        for (var j in basket){
            total += basketArray[j].price*basketArray[j].quantity;
        }
        $('#basket-list').html(output);
        $('#basket-overall-total > span:last-of-type').html('£'+total);
    }

    $('.ticket-clear').on('click', function(e){
        $('.ticket-quantity select').val('0');
    })

    $('.ticket-add').on('click', function(e){
        var selectedTickets = Array.from($('#ticket-booking').find('select'));
        for (var i in selectedTickets){
            var quantity = Number(selectedTickets[i].value);
            if (quantity > 0){
                var name = selectedTickets[i].getAttribute('data-name');
                var id = Number(selectedTickets[i].getAttribute('data-id'));
                var price = Number(selectedTickets[i].getAttribute('data-price'));
                addItemToBasket(name, id, price, quantity);
            }
        }
        for (var x in basket){
            if (basket[x].quantity > 4){
                basket[x].quantity = 4;
            }
        }
        $('.ticket-quantity select').val('0');
        displayBasket();
    });

    $('.basket-empty').on('click', function(e){
        emptyBasket();
        displayBasket();
    });

    $('#basket-list').on('click', '.ticket-minus', function(){
        var id = $(this).data('id');
        removeItemFromBasket(id);
        displayBasket();
    });

    $('#basket-list').on('click', '.ticket-plus', function(){
        var name = $(this).data('name');
        var id = $(this).data('id');
        var price = $(this).data('price');;
        var quantity = $(this).data('quantity');;
        addItemToBasket(name, id, price, 1);
        displayBasket();
    });

    $('#checkout-card').on('keyup', function(){
        var value = $(this).val();
        value = value.replace(/\s+/g, '');
        $(this).val(value);
    });

    $('#checkout-date').on('keyup', function(){
        var value = $(this).val();
        if (value.length > 2){
            var third = value.slice(2, 3);
            if (third != '/'){
                value = value.slice(0, 2) + '/' + value.slice(2, 4);
            }
        }
        $(this).val(value);
    });

    $('#ticket-checkout-form').on('keyup', function(){

        if (
            $('#checkout-name').val() != '' &&
            $('#checkout-email').val() != '' &&
            $('#checkout-phone').val() != '' &&
            $('#checkout-address1').val() != '' &&
            $('#checkout-town').val() != '' &&
            $('#checkout-county').val() != '' &&
            $('#checkout-postcode').val() != '' &&
            $('#checkout-card').val().length == 16 &&
            $('#checkout-date').val().length == 5 &&
            $('#checkout-code').val().length == 3
        ){
            $('.checkout-submit').attr('disabled', false);
        } else {
            $('.checkout-submit').attr('disabled', true);
        }

    });

    $('.checkout-submit').on('click', function(){

        $.ajax({
            url: stardustData.themeURL+'/checkout.php',
            data: {
                'name': $('#checkout-name').val(),
                'email': $('#checkout-email').val(),
                'phone': $('#checkout-phone').val(),
                'address1': $('#checkout-address1').val(),
                'address2': $('#checkout-address2').val(),
                'town': $('#checkout-town').val(),
                'county': $('#checkout-county').val(),
                'postcode': $('#checkout-postcode').val(),
                'basket': JSON.stringify(basket)
            },
            type: 'POST',
            success: (response) => {
                //response = JSON.parse(response);
                console.log(response);
            },
            error: (response) => {
                //response = JSON.parse(response);
                console.log(response);
            }
        })

    });

    loadBasket();
    displayBasket();

});