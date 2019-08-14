<!-- style -->
<?php $this->load->view('GioHang/style'); ?>
<!-- //style -->
<section class="about-info p-lg-5 p-3">
	<div class="content-w3ls-inn px-lg-5">
		<div class="container py-md-5 py-3">
			<div class="row title-cart">
				<h1>Giỏ hàng</h1> <!-- h3 -->
			</div>
			<div class="row">
				<?php if ($data) { ?>
                    <a href="<?= site_url('san-pham/che')?>" id="continous">Tiếp tục mua hàng >></a><br><br><br>
					<table class="table">
						<tbody>
						<?php
						$amount = 0;
						$price = 0;
						foreach ($data as $value) {
							$price += $value['price'] * $value['amount'];
							$amount += $value['amount'];
							$invoice_number = date('H:i:s-d/m/Y', time());
							?>
							<tr id="row-<?= $value['id'] ?>">
								<td class="btn-del" onclick="btn_del(<?= $value['id'] ?>)">x</td>
								<td><img src="<?= site_url() . $value['image'] ?>" style="width: 90px" alt="<?= $value['alt_img'] ?>" title="<?= $value['title_img'] ?>"></td>
								<td><h2><strong style="text-transform: capitalize;"><?= $value['name_prod'] ?></strong></h2>
								</td>
								<td><?= number_format($value['price']) ?>đ</td>
								<td class="quantity">
									<button id="btn-quantity" class="btn-plus-cart plus-cart-<?= $value['id'] ?>"
											onclick="btn_plus(<?= $value['id'] ?>)"><i class="fa fa-plus"></i>
									</button>
									<input type="number" name="amount" value="<?= $value['amount'] ?>"
										   id="amount<?= $value['id'] ?>">
									<button id="btn-quantity" class="btn-minus-cart minus-cart-<?= $value['id'] ?>"
											onclick="btn_minus(<?= $value['id'] ?>)"><i class="fa fa-minus"></i>
									</button>
								</td>
								<td class=" total total<?= $value['id'] ?>"><?= number_format($value['price'] * $value['amount']) ?>
									đ
								</td>
							</tr>

							<input type="hidden" name="idprod_<?= $value['id'] ?>"
								   id="idprod_<?= $value['id'] ?>" value="<?= $value['id'] ?>"
								   class="paypal-idprod">
							<input type="hidden" name="nameprod_<?= $value['id'] ?>"
								   id="nameprod_<?= $value['id'] ?>" value="<?= $value['name_prod'] ?>">
							<input type="hidden" name="quantity_<?= $value['id'] ?>"
								   id="quantity_<?= $value['id'] ?>" value="<?= $value['amount'] ?>">
							<input type="hidden" name="price_<?= $value['id'] ?>" id="price_<?= $value['id'] ?>"
								   value="<?= $value['price'] ?>">
						<?php } ?>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="total"><img src="<?= site_url('template/images/icon-glass-tea.png') ?>"
												   style="width: 30px"> <span
									style="color: black">&nbsp;x&nbsp;</span>
								<span id="total_amount"><?= $amount ?></span><span
									style="color: black">&nbsp; = &nbsp;</span><span
									id="total_price"><?= number_format($price) ?>đ</span>
							</td>
							<input type="hidden" id="total_price_number" value="<?= $price ?>">
						</tr>
						</tbody>
					</table>
					<div class="row" style="width: -webkit-fill-available;">
						<div class="col-md-12" style="text-align: center;">
							<a class="btn-pay" data-toggle="modal" data-target="#payModal" onclick="confrim_pay()">Thanh toán</a><br><br>
						</div>
					</div>
                </div>
				<?php } else { ?>
					<p>Giỏ hàng trống</p>
                </div>
                <br>
                <div class="row">
                    <a href="<?= site_url('san-pham/che')?>" id="continous">Tiếp tục mua hàng >></a>
                </div>
				<?php } ?>
		</div>
	</div>
</section>

<!-- Modal -->
<div id="payModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header title-cart">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 style="font-size: x-large; margin-bottom: 0px">Thông tin người nhận</h3>
			</div>
			<div class="modal-body" style="padding: 15px 40px;">
				<form method="post">
					<div class="form-group">
						<p for="text">Họ tên:</p>
						<input type="text" class="form-control" id="cus_name">
					</div>
					<div class="form-group">
						<p for="text">Địa chỉ nhận hàng:</p>
						<input type="text" class="form-control" id="cus_address">
					</div>
					<div class="form-group">
						<p for="number">Số điện thoại:</p>
						<input type="number" class="form-control" id="cus_phone">
					</div>
                    <div class="form-group">
                        <p for="text">Ghi chú:</p>
                        <input type="text" class="form-control" id="cus_note">
                    </div>
					<br><br>
					<hr>
					<div class="row"><p style="text-align: left;" class="col-md-12">Phương thức thanh toán</p></div><br>
					<div class="row">
						<div class="col-md-4">
							<button type='submit' class="btn-pay"
									style="background: #d3b673 !important; padding: 2px 40px; font-size: unset; color: white" id="modal_btn_order" data-dismiss="modal" onclick="confrim_pay()">Tiền mặt
							</button>
						</div>
						<div class="col-md-4">
							<!-- Set up a container element for the button -->
							<div id="paypal-button"></div>
						</div>
						<div class="col-md-4">
							<button data-dismiss="modal">OnePay</button>
						</div>
					</div>
                    <br>
			</div>
			</form>
		</div>
	</div>
</div>

<div id="payFailModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header title-cart">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 style="font-size: x-large; margin-bottom: 0px">Thanh toán đơn hàng</h3>
            </div>
            <div class="modal-body" style="padding: 15px 40px;">
                <p>Thanh toán thất bại</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="color: #333; border: 1px solid #ccc;">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="paySuccessModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header title-cart">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 style="font-size: x-large; margin-bottom: 0px">Thanh toán đơn hàng</h3>
            </div>
            <div class="modal-body" style="padding: 15px 40px;">
                <p>Thanh toán thành công</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="btn-success-modal" style="color: #333; border: 1px solid #ccc;" >OK</button>
            </div>
        </div>
    </div>
</div>
<!-- //Modal -->

<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
    //--Xác nhận thanh toán + add list item cho paypal
    var list_item = [];
    var id_items = "";
    var quantity_items = "";

    function confrim_pay() {
        $('.paypal-idprod').each(function () {
            var id = $(this).val();
            var name = document.getElementById("nameprod_" + id).value;
            var quantity = document.getElementById("quantity_" + id).value;
            var price = document.getElementById("price_" + id).value;

            var item = {
                'name': name,
                'quantity': quantity,
                'price': price,
                'currency': 'USD'
            };

            list_item.push(item);
            id_items = id_items.concat(" ", id);
            quantity_items = quantity_items.concat(" ", quantity);
        });
        // console.log(id_items);
        // console.log(quantity_items);
    }

    //--Xác nhận thanh toán + add list item cho paypal--//


    //--Button cộng trừ số lượng sản phẩm trong giỏ hàng
    function btn_plus(id) {
        var amount = document.getElementById("amount" + id).value;
        amount = parseInt(amount);
        if (amount != 10) {
            document.getElementById("amount" + id).value = amount + 1;
            var new_amount = document.getElementById("total_amount").innerHTML;
            var total_amount = parseInt(new_amount) + 1;
            var price = <?= isset($value['price']) ? $value['price'] : 0 ?>;
            var total = price * (amount + 1);
            var new_price = document.getElementById("total_price_number").value;
            var total_price = parseInt(new_price) + price;
            document.getElementById("total_price_number").value = total_price;
            total = number_format(total);
            total_price = number_format(total_price);
            $('.total' + id).html(total + 'đ');
            $('#total_amount').html(total_amount);
            $('#total_price').html(total_price + 'đ');
            document.getElementById("quantity_" + id).value = amount + 1;
        }
    }

    function btn_minus(id) {
        var amount = document.getElementById("amount" + id).value;
        amount = parseInt(amount);
        if (amount != 1) {
            document.getElementById("amount" + id).value = amount - 1;
            var new_amount = document.getElementById("total_amount").innerHTML;
            var total_amount = parseInt(new_amount) - 1;
            var price = <?= isset($value['price']) ? $value['price'] : 0 ?>;
            var total = price * (amount - 1);
            var new_price = document.getElementById("total_price_number").value;
            var total_price = parseInt(new_price) - price;
            document.getElementById("total_price_number").value = total_price;
            total = number_format(total);
            total_price = number_format(total_price);
            $('.total' + id).html(total + 'đ');
            $('#total_amount').html(total_amount);
            $('#total_price').html(total_price + 'đ');
            document.getElementById("quantity_" + id).value = amount - 1;
        }
    }

    //--Button cộng trừ số lượng sản phẩm trong giỏ hàng--//


    //--Button xóa sản phẩm trong giỏ hàng
    function btn_del(id) {
        $.ajax({
            url: "<?php echo site_url('GioHang/minusCart'); ?>",
            type: "POST",
            data: {id: id},
            success: function (data) {
                window.location.reload();
            },
            error: function () {
                alert("error");
            }
        });
    }

    //--Button xóa sản phẩm trong giỏ hàng--//


    //--Xử lý flow paypal
    paypal.Button.render({
        // Configure environment
        env: 'sandbox',
        client: {
            sandbox: 'AYPW2M49qNiMNmK8GqJGxMsVLL8dGHgt7bcTJ6802DQzdmLZesxZ6sR_nY1QKWZeq3N42ZWws9YExab3'
        },
        // Customize button (optional)
        locale: 'en_US',
        style: {
            size: 'responsive',
            color: 'silver',
            shape: 'pill',
        },

        // Enable Pay Now checkout flow (optional)
        commit: true,

        // Set up a payment
        payment: function (data, actions) {
            return actions.payment.create({
                transactions: [{
                    invoice_number: "<?= $invoice_number ?>",
                    description: "Tra sua Tocotoco",
                    amount: {
                        currency: "USD",
                        total: document.getElementById("total_price_number").value,
                        details: {
                            subtotal: document.getElementById("total_price_number").value,
                            shipping: '0',
                            tax: '0'
                        }
                    },
                    item_list: {
                        items: list_item
                    }
                }]
            });
        },
        // Execute the payment
        onAuthorize: function (data, actions) {
            return actions.payment.execute().then(function () {
                // Show a confirmation message to the buyer
                var cus_name = document.getElementById("cus_name").value;
                var cus_address = document.getElementById("cus_address").value;
                var cus_phone = document.getElementById("cus_phone").value;
                var cus_note = document.getElementById("cus_note").value;

                $.ajax({                
                    url: "<?= site_url('ThanhToan/paypal/success') ?>",
                    type: "POST",
                    data: {id_items: id_items, quantity_items:quantity_items, cus_name:cus_name, cus_note:cus_note, cus_phone:cus_phone, cus_address:cus_address},
                    success: function (data) {
                        $('#payModal').modal('hide');
                        $('#paySuccessModal').modal('show');
                    },
                    error: function () {
                        alert("error_paypal_success");
                    }
                });
            });
        },
        onCancel: function (data, actions) {
            // Show a cancel page or return to cart
            var cus_name = document.getElementById("cus_name").value;
            var cus_address = document.getElementById("cus_address").value;
            var cus_phone = document.getElementById("cus_phone").value;
            var cus_note = document.getElementById("cus_note").value;

            $.ajax({                
                url: "<?= site_url('ThanhToan/paypal/fail') ?>",
                type: "POST",
                data: {id_items: id_items, quantity_items:quantity_items, cus_name:cus_name, cus_note:cus_note, cus_phone:cus_phone, cus_address:cus_address},
                success: function (data) {
                    $('#payModal').modal('hide');
                    $('#payFailModal').modal('show');
                },
                error: function () {
                    alert("error_paypal_fail");
                }
            });
        }
    }, '#paypal-button');
    //--Xử lý flow paypal--//

    $("#btn-success-modal").on("click", function(){
        // $("#paySuccessModal").modal('hide');
        window.location.reload();
    });

</script>
