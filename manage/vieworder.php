<?php
    include_once("models/usermodel.php");
    $user = new usermodel();
    $resultUser[0] = $user->getUserByID('users', 1);
    $name;
    $address;
    $sdt;
    $email;
    foreach($resultUser[0] as $value){
        $name = $value['name'];
        $address = $value['address'];
        $sdt = $value['phone'];
        $email = $value['email'];
    }
?>

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4" style="font-weight: bold; text-transform: uppercase; letter-spacing: 1.5px; color: #4e73df;">Order Details</h1>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <form class="user" method="post" action="#">
                                        <div class="row mb-3">
                                            <div class="col-md-3 font-weight-bold">CUSTOMER:</div>
                                            <div class="col-md-9">
                                                <?=$name?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-3 font-weight-bold">ADDRESS:</div>
                                            <div class="col-md-9">
                                                <?=$address?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-3 font-weight-bold">PHONE NUMBER:</div>
                                            <div class="col-md-9">
                                                <?=$sdt?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-3 font-weight-bold">EMAIL:</div>
                                            <div class="col-md-9">
                                                <?=$email?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-3 font-weight-bold">STATUS:</div>
                                            <div class="col-md-9">
                                                <select name="status" id="" class="form-control">
                                                    <option>Processing</option>
                                                    <option>Confirmed</option>
                                                    <option>Shipping</option>
                                                    <option>Delivered</option>
                                                    <option>Cancelled</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary w-20" name="btnUpdate">UPDATE</button>
                                    </form>
                                </div>

                            <style>
                                .font-weight-bold {
                                    font-family: 'Roboto', sans-serif;
                                    font-weight: 500;
                                }

                                .user {
                                    font-family: 'Roboto', sans-serif;
                                    font-size: 16px;
                                    line-height: 1.5;
                                    color: #333;
                                }

                                .form-control {
                                    font-family: 'Roboto', sans-serif;
                                    font-size: 14px;
                                    padding: 5px;
                                    border: 1px solid #ccc;
                                    border-radius: 4px;
                                }

                                .btn-primary {
                                    background-color: #007bff;
                                    border: none;
                                    padding: 10px;
                                    font-size: 16px;
                                }

                                .btn-primary:hover {
                                    background-color: #0056b3;
                                }

                                .row {
                                    margin-bottom: 10px;
                                }
                            </style>
                   
                                <div class="col-md-6">
                                    
                                    <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th class="shoping__product">STT</th>
                                                        <th>Product</th>
                                                        <th>Price</th>
                                                        <th>Quatity</th>
                                                        <th>Total</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                        
                                    <?php
                                        $total = 0;
                                        function getImage($arrstr,$height, $width){
                                            $arr = explode(';', $arrstr);
                                            return "<img src='$arr[0]' height='$height' width='$width' />";
                                        }
                                        $stt = 0;
                                        foreach($data['order'] as $value){
                                            $stt++;
                                            $total = $total + $value['total'];
                                    ?>
                                                    <tr>
                                                        <td class="shoping__cart__item">
                                                            <?=$stt?>
                                                        </td>
                                                        <td class="shoping__cart__item">
                                                            <?=$value['name']?>
                                                        </td>
                                                        <td class="shoping__cart__price">
                                                            <?=$value['price']?>
                                                        </td>
                                                        <td class="shoping__cart__quantity">
                                                            <?=$value['qty']?>
                                                        </td>
                                                        <td class="shoping__cart__total">
                                                            <?=$value['total']?>
                                                        </td>
                                                        
                                                    
                                                    </tr>
                                    <?php
                                        }
                                    ?>    
                                                </tbody>
                                    </table>
                                    <div class="tongtien">
                                        <h5>
                                            TOTAL:
                                            <?=$total?>.VND
                                        </h5>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
