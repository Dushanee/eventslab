<!DOCTYPE html>
<html>
    <head>
        <title>Add to Cart</title>
        <link rel="stylesheet" href="./css/addtocart.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
        <div style="height: 150px; background-color: pink;">For the top</div>
        <div class="cart-page">
            <table class="discr">
                <tr>
                    <th>Service</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <div class="image">
                                <img src="./images/weddingHall.jpg" />
                        </div>
                            <div class="orderDetails">
                                <h3>Hall Paradise - Araliya Guest House</h3>
                                <small>Price: $700.00</small><br />
                                <a href="#">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1" /></td>
                    <td>$50.00</td>
                </tr>
            </table>
            <div class="total-price">
                <table class="calc">
                    <tr>
                        <td>Subtotal</td>
                        <td>$200.00</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$35.00</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>$230.00</td>
                    </tr>
                </table>
            </div>
            <div class="buttons">
                <button type="button" onclick="header('./checkout.php')" style="width: 400px;">Continue to checkout</button>
            </div>
            <div class="orderInfo">
                <h3>Order Information</h3>
                <hr style="max-width: 47.5%; margin-left: 0;"/>
                <p class="cancelPolicy">Cancellation Policy</p><br />
                <a href="#" class="cancelPolicy" style="color: #4C4B84; text-decoration: none;">This is our example return policy which is everything
                    you need to know about our returns.
                </a>
                <hr style="max-width: 47.5%; margin-left: 0;"/>
                <a class="cancelPolicy" href="#" style="color: #4C4B84; text-decoration: none;">Other Options</a>
                <hr style="max-width: 47.5%; margin-left: 0;"/>
            </div>
        </div>
    </body>
</html>