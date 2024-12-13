<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Full2sms - Payout API usage</title>

    <link rel="stylesheet" href="../assets/css/main.css">

</head>



<body>

    <div class="login-root">

        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">

            <div class="loginbackground box-background--white padding-top--64">

                <div class="loginbackground-gridContainer">

                    <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">

                        <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">

                        </div>

                    </div>

                    <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">

                        <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>

                    </div>

                    <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">

                        <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>

                    </div>

                    <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">

                        <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>

                    </div>

                    <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">

                        <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>

                    </div>

                    <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">

                        <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>

                    </div>

                    <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">

                        <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>

                    </div>

                    <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">

                        <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>

                    </div>

                    <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">

                        <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>

                    </div>

                </div>

            </div>

            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">

                <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">

                    <h1><a href="http://blog.stackfindover.com/" rel="dofollow">Full2sms Payout API Usage</a></h1>

                </div>

                <div class="formbg-outer">

                    <div class="formbg">

                        <div class="formbg-inner padding-horizontal--48">

                            <span class="padding-bottom--15">Fill the required details</span>

                            <form id="stripe-login">

                                <div class="field padding-bottom--24">

                                    <label for="email">Select Type</label>

                                    <select name="type" id="type">

                                        <option value="wallet">Wallet</option>

                                        <option value="upi">UPI</option>

                                    </select>

                                </div>

                                <div class="field padding-bottom--24">

                                    <label for="amount">Amount</label>

                                    <input type="number" name="amount" id="amount">

                                </div>

                                <div class="field padding-bottom--24">

                                    <div class="grid--50-50">

                                        <label for="payment_address">Wallet number or Upi ID</label>

                                    </div>

                                    <input type="text" name="payment_address" id="payment_address">

                                </div>

                                <div class="field padding-bottom--24">

                                    <div class="grid--50-50">

                                        <label for="payment_info">Payment Info</label>

                                    </div>

                                    <input type="text" name="payment_info" id="payment_info">

                                </div>

                                <div class="field padding-bottom--24">

                                    <div class="grid--50-50">

                                        <label for="admin_key">Admin Key</label>

                                    </div>

                                    <input type="text" name="admin_key" id="admin_key">

                                </div>

                                <div class="field padding-bottom--24">

                                    <input type="button" style="background-color: rgb(84, 105, 212);

    box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, 

                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 

                rgba(0, 0, 0, 0.12) 0px 1px 1px 0px, 

                rgb(84, 105, 212) 0px 0px 0px 1px, 

                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 

                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 

                rgba(60, 66, 87, 0.08) 0px 2px 5px 0px;

    color: #fff;

    font-weight: 600;

    cursor: pointer;" name="submit" id="payBtn" value="Continue">

                                </div>

                                <div class="field">

                                    <a class="ssolink" href="../payment/">Click Here To Check Accept Payment Gateway Usage</a>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</body>

<script>

    document.getElementById("payBtn").addEventListener("click", function() {

        Swal.fire({

            title: 'Are you sure?',

            text: "You won't be able to revert this!",

            icon: 'warning',

            showCancelButton: true,

            confirmButtonColor: '#3085d6',

            cancelButtonColor: '#d33',

            confirmButtonText: 'Yes, continue!'

        }).then((result) => {

            if (result.isConfirmed) {

                let type = document.getElementById("type").value

                let amount = document.getElementById("amount").value

                let payment_address = document.getElementById("payment_address").value

                let payment_info = document.getElementById("payment_info").value

                let admin_key = document.getElementById("admin_key").value



                $.ajax({

                    type: "POST",

                    url: "../api/payout.php",

                    data: {

                        type: type,

                        amount: amount,

                        payment_address: payment_address,

                        payment_info: payment_info,

                        admin_key: admin_key

                    },

                    success: function(res) {

                        let data = JSON.parse(res)

                        if(data.status == 200){

                            Swal.fire({

                                title: data.message,

                                showConfirmButton: false,

                                icon: 'success',

                            })

                        }else{

                            Swal.fire({

                                title: data.message,

                                showConfirmButton: false,

                                icon: 'error',

                            })

                        }

                    }

                })

            }

        })

    })

</script>

</html>
