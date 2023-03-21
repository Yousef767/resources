<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Main css  --}}
    <link rel="stylesheet" href="{{asset('css/chat.css')}}">
    {{-- Bootstrap files  --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">  
    {{-- Google fonts  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    {{-- Font Awesome  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Web site icon  --}}
    <link rel="icon" type="image/png" href="{{asset($settings->icon_url)}}"/>
    <title>Badal plus</title>
</head>
<body>
    <div class="row chat-content mt-5">

        <div class="col-md-6 chat-box">
            <div class="container-1">
                <div class="chat-title">

                    <div class="chat-name">
                        <a href="#">Diorbtc2022</a>
                        <h1>Seen 2 Hours ago</h1>
                    </div>

                    <div class="chat-status">
                        <div>
                            <i class="fa-solid fa-user"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <span class="like">
                                <i class="fa-solid fa-thumbs-up"></i>
                                <p>35</p>
                            </span>
                            <span class="dislike">
                                <i class="fa-solid fa-thumbs-down"></i>
                                <p>0</p>
                            </span>
                        </div>
                        <div>
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <a href="#">Partner details</a>
                        </div>
                    </div>

                </div>
                <div class="statue">
                    <h1>Moderator unavailable</h1>
                </div>
                <div class="chat">
                    <div class="message">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur soluta, hic laboriosam delectus alias unde earum corporis ex dicta nihil placeat rerum necessitatibus vitae praesentium eaque similique in distinctio beatae?</p>
                        <h3>March 4, 2023 at 1:03 AM</h3>
                    </div>
                    
                    <div class="message">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur soluta, hic laboriosam delectus alias unde earum corporis ex dicta nihil placeat rerum necessitatibus vitae praesentium eaque similique in distinctio beatae?</p>
                        <h3>March 4, 2023 at 1:03 AM</h3>
                    </div>
                    <div class="message">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur soluta, hic laboriosam delectus alias unde earum corporis ex dicta nihil placeat rerum necessitatibus vitae praesentium eaque similique in distinctio beatae?</p>
                        <h3>March 4, 2023 at 1:03 AM</h3>
                    </div>
                    <div class="message">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur soluta, hic laboriosam delectus alias unde earum corporis ex dicta nihil placeat rerum necessitatibus vitae praesentium eaque similique in distinctio beatae?</p>
                        <h3>March 4, 2023 at 1:03 AM</h3>
                    </div>
                    <div class="message">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur soluta, hic laboriosam delectus alias unde earum corporis ex dicta nihil placeat rerum necessitatibus vitae praesentium eaque similique in distinctio beatae?</p>
                        <h3>March 4, 2023 at 1:03 AM</h3>
                    </div>
                    <div class="message">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur soluta, hic laboriosam delectus alias unde earum corporis ex dicta nihil placeat rerum necessitatibus vitae praesentium eaque similique in distinctio beatae?</p>
                        <h3>March 4, 2023 at 1:03 AM</h3>
                    </div>
                    <div class="message">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur soluta, hic laboriosam delectus alias unde earum corporis ex dicta nihil placeat rerum necessitatibus vitae praesentium eaque similique in distinctio beatae?</p>
                        <h3>March 4, 2023 at 1:03 AM</h3>
                    </div>
                </div>
                <form class="send">
                    <label for="input_file">
                        <span><i class="fa-solid fa-paperclip"></i></span>
                        <input type="file" id="input_file">
                    </label>
                    <input type="text" placeholder="Message . . .">
                    <button type="submit"><i class="fa-solid fa-paper-plane"></i><h3>Send</h3></button>
                </form>
            </div>
        </div>

        <div class="col-md-6 confirm-content">
            <h1>Trade Started</h1>
            <div class="container-2">
                <div class="confirm-title">
                    <i class="fa-solid fa-lock-open"></i>
                    <span>
                        <h3>Please make a payment of 9 GBP using Bank Transfer.</h3>
                        <p>0.00047104 BTC will be added to your Bitcoin wallet</p>
                    </span>
                </div>
                <div class="confirm">
                    <div>
                        <img src="{{asset('images/balance.png')}}" alt="product">
                        <p>Keep trades within Paxful. Some users may ask you to trade outside the Paxful platform. This is against our Terms of Service and likely a scam attempt. You must insist on keeping all trade conversations within Paxful. If you choose to proceed outside Paxful, note that we cannot help or support you if you are scammed during such trades.</p>
                    </div>
                    <div class="confirm-buttons">

                        <button>
                            <span>
                                <h4>Cancel Trade</h4>
                                <h5>Time left 00:29:00</h5>
                            </span>
                            <i class="fa-solid fa-xmark"></i>
                        </button>

                        <button>
                            <span>
                                <h4>Paid</h4>
                                <h5>Time left 00:29:00</h5>
                            </span>
                            <i class="fa-solid fa-check"></i>
                        </button>

                    </div>
                </div>
                <div class="confirm-info">
                    <span>
                        <h2>You haven't paid yet</h2>
                        <i class="fa-solid fa-circle-exclamation"></i>
                    </span>
                    <h3>Instructions</h3>
                </div>
                <div class="info-2">
                    <span>
                        <h4>no receipt needed</h4>
                        <h4>no verification needed</h4>
                        <h4>guided trade</h4>
                    </span>
                    <h3>Please follow the trade instructions in the chat window to complete this transaction.</h3>
                    <h1>Trade Information</h1>
                    <p>0.00047575 BTC has been reserved for this trade. This includes Paxful’s fee of 0 BTC.</p>
                </div>
                <div class="info-3">

                    <div>
                        <h1>RATE</h1>
                        <span>
                            <h2>19,106.749</h2>
                            <h2>GBP / BTC</h2>
                        </span>
                    </div>

                    <div>
                        <span>
                            <h1>TRADE ID</h1>
                            <i class="fa-solid fa-circle-exclamation"></i>
                        </span>
                        <span>
                            <h2>rsa6A6auZeK</h2>
                            <i class="fa-solid fa-copy"></i>
                        </span>
                    </div>

                    <div>
                        <h1>STARTED</h1>
                        <h2>a few seconds ago</h2>
                    </div>

                </div>
                <div class="confirm-btn">
                    <a class="btn disabled" href="#" role="button">Report</a>
                    <a class="btn" href="#" role="button">View Offer</a>
                    <a class="btn" href="#" role="button">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <span>Take a Tour</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>